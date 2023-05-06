<div class="page-wrapper">
    <div class="content container-fluid">

        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="page-title">Draws</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo base_url('home/index')?>">Dashboard</a></li>
                        <li class="breadcrumb-item active">Draws</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Start Toastr Alert -->
        <?php $this->load->view('alert');  ?>
        <!-- End Toastr Alert -->
        <div class="row">
            <div class="col-sm-12">
                <div class="card card-table">
                    <div class="card-body">

                        <div class="page-header">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h3 class="page-title">Draws</h3>
                                </div>
                                <div class="col-auto text-end float-end ms-auto download-grp">
                                    <a href="<?php echo base_url('draw/addDraw')?>" class="btn btn-primary mt-1"><i class="fas fa-plus"></i></a>    
                                    <!-- <button type="button" class="btn btn-primary mt-1" data-bs-toggle="modal" data-bs-target="#standard-modal"><i class="fas fa-plus"></i></button> -->
                                </div>
                            </div>
                        </div>

                        <div class="table-responsive">
                            <table class="table border-0 star-student table-hover table-center mb-0  table-striped" id="members">
                                <thead class="student-thread">
                                    <tr>
                                        <th>*</th>
                                        <th>Title</th>
                                        <!-- <th>Created By</th> -->
                                        <th>Status</th>
                                        <th>Created At</th>
                                        <th>Draw Time</th>
                                        <th>Winners</th>
                                        <th>Participants</th>
                                        <th class="text-end">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i=1; foreach($draws as $key) { ?>
                                        <tr>
                                            <td><?php echo $i; ?></td>
                                            <td><?php echo $key['title']?></td>
                                            <?php if($key['status'] == 0) {?>
                                                <td><span class="badge rounded-pill bg-danger">disabled</span></td>
                                            <?php } elseif($key['status'] == 1) {?>
                                                <td><span class="badge rounded-pill bg-success">active</span></td>
                                            <?php }?>
                                            <td><?php echo $key['created_at']?></td>
                                            <td><?php echo date('d M, Y H:i',strtotime($key['draw_time']))?></td>
                                            <td>
                                                <a class="badge badge-success text-white" href="<?php echo base_url('draw/drawWinners/'.$key['id']) ?>/<?php $this->home_model->count_drawSpinWinners($key['id']);?>" title="View Winners" class="btn btn-sm bg-danger-light">
                                                    <i class="feather-eye"></i> <?php $this->home_model->count_drawSpinWinners($key['id']);?>
                                                </a>
                                            </td>
                                            <td>
                                            <a class="badge badge-primary text-white" href="<?php echo base_url('draw/drawParticipants/'.$key['id']) ?>/<?php $this->home_model->count_drawSpinID($key['id']);?>" title="View Participants" class="btn btn-sm bg-danger-light">
                                                    <i class="feather-eye"></i> <?php $this->home_model->count_drawSpinID($key['id']);?>
                                                </a>
                                            </td>
                                            <td class="text-end">
                                                <a href="<?php echo base_url('draw/drawOptions/'.$key['id']) ?>" title="View Draw Vouchers" class="btn btn-sm bg-danger-light">
                                                    <i class="feather-eye"></i>
                                                </a>
                                                <a href="<?php echo base_url('draw/editDraw/'.$key['id']) ?>" title="Edit Draw" class="btn btn-sm bg-danger-light">
                                                    <i class="feather-edit"></i>
                                                </a>
                                                <a href="<?php echo base_url('uploads/qrcodes/'.$key['qr_code']) ?>" 
                                                    title="Download Draw QR Code" 
                                                    class="btn btn-sm bg-danger-light"
                                                    download="<?php echo $key['qr_code'] ?>">
                                                    <i class="feather-download"></i>
                                                </a>
                                                <a href="<?php echo base_url('draw/deleteDraw/'.$key['id']) ?>" title="Delete Draw" class="btn btn-sm bg-danger-light">
                                                    <i class="feather-trash"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <?php $i++; } ?>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Edit Training Modal -->
    <div id="edit-training" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="standard-modalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="standard-modalLabel">Training Training</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                     <form>
                         <div class="row">
                            <div class="col-12 col-sm-12" hidden>
                                <div class="form-group local-forms">
                                    <label>ID<span class="login-danger">*</span></label>
                                    <input type="text" id="id_edit" name="id_edit" class="form-control">
                                </div>
                            </div>
                            <div class="col-12 col-sm-12">
                                <div class="form-group local-forms">
                                    <label>Training Name<span class="login-danger">*</span></label>
                                    <input type="text" id="training_name_edit" name="training_name_edit" class="form-control">
                                </div>
                            </div>
                            <div class="col-12 col-sm-12">
                                <div class="form-group local-forms calendar-icon">
                                    <label>Date <span class="login-danger">*</span></label>
                                    <input class="form-control datetimepicker" id="training_date_edit" name="training_date_edit" type="text"
                                    placeholder="YYYY-MM-DD">
                                </div>
                            </div>                            
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                        <button type="submit" id="btn_update" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

        <div id="standard-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="standard-modalLabel" aria-hidden="true">
         <div class="modal-dialog">
          <div class="modal-content">
           <div class="modal-header">
            <h4 class="modal-title" id="standard-modalLabel">Draw Details</h4>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="<?php echo base_url('draw/storeDraw')?>" method="POST">
            <div class="modal-body">                    
                <div class="col-12 col-sm-12">
                    <div class="form-group local-forms" required>
                        <label>Title <span class="login-danger">*</span></label>
                        <input type="text" class="form-control" name="title" placeholder="Enter Draw Title" required>
                    </div>
                </div>
                <div class="col-12 col-sm-12">
                    <div class="form-group local-forms">
                        <label>Status <span class="login-danger">*</span></label>
                        <select class="form-control " name="status" required>
                            <option value="">--Choose--</option>
                            <option value="1">Active</option>
                            <option value="0">In Active</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>
    </div>
</div>
</div>



