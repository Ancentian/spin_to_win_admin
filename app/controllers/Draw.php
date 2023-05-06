<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Draw extends BASE_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('draw_model', 'draws');
        $this->load->model('home_model');
    }

    public function index()
    {
        $this->data['draws'] = $this->draws->get_allDraws();
        $this->data['pg_title'] = "Draws";
        $this->data['page_content'] = 'draws/index';
        $this->load->view('layout/template', $this->data);
    }

    public function addDraw()
    {
        $this->data['pg_title'] = "Add Draws";
        $this->data['page_content'] = 'draws/addDraw';
        $this->load->view('layout/draw', $this->data);
    }

    public function qrcodeGenerator()
    {
        $this->load->library('ciqrcode');
        $params['data'] = 'https://win.speevo.net/home/userPhone/1';
        $params['level'] = 'L';
        $params['size'] = 10;
        $params['savename'] = FCPATH.'uploads/qrcodes/qrCode_'.time().".png";
        $params['quality'] = 100;
        $params['color'] = array(255, 0, 0);
        $params['bgcolor'] = array(255, 255, 255);
    
        $this->ciqrcode->generate($params);
    
        // Load view with QR code image
        $data['qr_code_image'] = base_url('uploads/qrcodes/qrCode_'.time().".png");
        $image = $data['qr_code_image'];
        //$this->load->view('home/qrcode', $data);
    }

    public function storeDraw()
    {
        $forminput = $this->input->post();

        $draw_title = $forminput['draw_title'];
        $status = $forminput['status'];
        $title = $forminput['title'];
        $time = $forminput['draw_time'];
        $voucher = $forminput['voucher'];
        $voucher_serial = $forminput['voucher_serial'];
        $voucher_validity = $forminput['voucher_validity'];

        // Store draw data
        $data = array('title' => $draw_title, 'status' => $status,'draw_time' => $time);
        $this->draws->store_draw($data);
        $draw_id = $this->db->insert_id();

        // Generate QR code
        $this->load->library('ciqrcode');
        $qr_data = 'https://win.speevo.net/home/userPhone/'.$draw_id;
        $params['data'] = $qr_data;
        $params['level'] = 'L';
        $params['size'] = 10;
        $params['savename'] = FCPATH.'uploads/qrcodes/qrCode_'.time().".png";
        $params['quality'] = 100;
        $params['color'] = array(255, 0, 0);
        $params['bgcolor'] = array(255, 255, 255);
        $this->ciqrcode->generate($params);
        $qr_image_name = pathinfo($params['savename'], PATHINFO_FILENAME) . ".png";

        // Store QR code image name and voucher data
        $draw_data = array('qr_code' => $qr_image_name);
        $this->draws->update_draw($draw_id, $draw_data);

        $i = 0;
        foreach($voucher as $key)
        {
            $voucherTitle = $title[$i];
            $voucherSerial = $voucher_serial[$i];
            $voucherValidity = $voucher_validity[$i];
            $this->db->insert('draw_options', ['draw_id' => $draw_id, 'title' => $voucherTitle, 'voucher' => $key, 'voucher_serial' => $voucherSerial, 'voucher_validity' => $voucherValidity]);
            $i++;
        }
        $inserted = $this->db->affected_rows();
        if ($inserted > 0) {
            $this->session->set_flashdata('success', 'Draw Added Successfully');
        }else{
            $this->session->set_flashdata('error', 'Err! Failed Try Again');
        }
        return redirect('draw/index'); 
    }

    public function editDraw($id)
    {
        $this->data['draw'] = $this->draws->get_drawByID($id);
        $this->data['pg_title'] = "Add Draws";
        $this->data['page_content'] = 'draws/editDraw';
        $this->load->view('layout/draw', $this->data);
    }

    public function updateDraw($id)
    {
        $forminput = $this->input->post();

        $inserted = $this->draws->update_draw($id, $forminput);
        if ($inserted > 0) {
            $this->session->set_flashdata('success', 'Draw Updated Successfully');
        } else {
            $this->session->set_flashdata('error', 'Failed, please try again');
        }
        return redirect('draw/index');
    }

    public function allDrawWinners()
    {
        $this->data['winners'] = $this->draws->get_allDrawWinners();
        $this->data['pg_title'] = "Draw Spins";
        $this->data['page_content'] = 'draws/allWinners';
        $this->load->view('layout/template', $this->data);
    }

    public function drawSpins()
    {
        $this->data['draw_spins'] = $this->draws->get_drawSpins();
        $this->data['pg_title'] = "Draw Spins";
        $this->data['page_content'] = 'draws/drawSpins';
        $this->load->view('layout/template', $this->data);
    }

    public function drawOptions($id)
    {
        $this->data['draw_options'] = $this->draws->get_drawOptions($id);
        $this->data['pg_title'] = "Draw Spins";
        $this->data['page_content'] = 'draws/drawOptions';
        $this->load->view('layout/template', $this->data);
    }

    public function editDrawOption($id)
    {
        $this->data['draw_option'] = $this->draws->get_drawOptionByID($id);
        $this->data['pg_title'] = "Draw Spins";
        $this->data['page_content'] = 'draws/editDrawOption';
        $this->load->view('layout/draw', $this->data);
    }

    public function drawWinners($draw_id)
    {
        $draw_id = $this->uri->segment(3);
        $this->data['winners'] = $this->draws->get_drawWinnersByID($draw_id);
        $this->data['pg_title'] = "Draw Winners";
        $this->data['page_content'] = 'draws/drawWinners';
        $this->load->view('layout/template', $this->data);
    }

    public function drawParticipants($draw_id)
    {
        $draw_id = $this->uri->segment(3);

        $this->data['participants'] = $this->draws->get_drawParticipantsByID($draw_id);
        $this->data['pg_title'] = "Draw Winners";
        $this->data['page_content'] = 'draws/drawParticipants';
        $this->load->view('layout/template', $this->data);
    }

    public function updateDrawOption($id)
    {
        $forminput = $this->input->post();

        $draw_id = $forminput['draw_id'];

        $inserted = $this->draws->update_drawOption($id, $forminput);
        if ($inserted > 0) {
            $this->session->set_flashdata('success', 'Draw Option Updated Successfully');
        } else {
            $this->session->set_flashdata('error', 'Failed, please try again');
        }
        return redirect('draw/drawOptions/'.$draw_id);
    }

    public function itemCollection($id)
    {
        $status = 1;
        $inserted = $this->draws->update_collectionStatus($id, $status);
        if ($inserted > 0) {
            $this->session->set_flashdata('success', 'Voucher Collected Successfully');
        } else {
            $this->session->set_flashdata('error', 'Failed, please try again');
        }
        return redirect('draw/drawSpins');
    }

    public function uncollectedVoucher($id)
    {
        $status = 0;
        $inserted = $this->draws->update_collectionStatus($id, $status);
        if ($inserted > 0) {
            $this->session->set_flashdata('success', 'Collection Status Changed Successfully');
        } else {
            $this->session->set_flashdata('error', 'Failed, please try again');
        }
        return redirect('draw/drawSpins');
    }

    public function deleteDraw($id)
    {
        $inserted = $this->draws->delete_draw($id);
        if ($inserted > 0) {
            $this->session->set_flashdata('success', 'Draw deleted successfully');
        } else {
            $this->session->set_flashdata('error', 'Failed, please try again');
        }
        return redirect('draw/index');
    }

    public function deleteDrawOption($id)
    {
        $draw_id = $this->uri->segment(4);

        $inserted = $this->draws->delete_drawOption($id);
        if ($inserted > 0) {
            $this->session->set_flashdata('success', 'Draw Option deleted successfully');
        } else {
            $this->session->set_flashdata('error', 'Failed, please try again');
        }
        return redirect('draw/drawOptions/'.$draw_id);
    }
}
