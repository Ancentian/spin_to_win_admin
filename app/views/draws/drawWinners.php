<div class="page-wrapper">
    <div class="content container-fluid">

        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="page-title">Draw Winners</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo base_url('home/index')?>">Dashboard</a></li>
                        <li class="breadcrumb-item active">Draw Winners</li>
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
                                    <h3 class="page-title"><?php echo $winners[0]['title']?> Draw Winners</h3>
                                </div>
                            </div>
                        </div>

                        <div class="table-responsive">
                            <table class="table border-0 star-student table-hover table-center mb-0  table-striped" id="example">
                                <thead class="student-thread">
                                    <tr>
                                        <th>*</th>
                                        <th>User Contact</th>
                                        <th>Draw Title</th>
                                        <!-- <th>Result</th> -->
                                        <th>Voucher</th>
                                        <th>Voucher Amount</th>
                                        <th>Collection</th>
                                        <th>Played On</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i=1; foreach($winners as $key) { ?>
                                        <tr>
                                            <td><?php echo $i; ?></td>
                                            <td><?php echo $key['phone_no']?></td>
                                            <td><?php echo $key['title']?></td>
                                            <!-- <?php //if($key['option_id'] == 0) {?>
                                                <td><span class="badge rounded-pill bg-danger">Lost</span></td>
                                            <?php //}elseif($key['option_id'] > 0){?>
                                                <td><span class="badge rounded-pill bg-success">Won</span></td>
                                            <?php //} ?> -->
                                            <td><?php echo $key['optionTitle'] ? $key['optionTitle'] : "--"; ?></td>
                                            <td><?php echo $key['voucher'] ? $key['voucher'] : "--" ?></td>
                                            
                                            <?php if($key['collection_status'] == 1 && $key['option_id'] > 0) {?>
                                                <td><span class="badge rounded-pill bg-success">Collected</span></td>
                                            <?php }elseif($key['collection_status'] == 0 && $key['option_id'] > 0){?>
                                                <td><span class="badge rounded-pill bg-warning">Not Collected</span></td>
                                            <?php }else{ echo "<td>--</td>"; } ?>
                                            <td><?php echo $key['created_at']?></td>
                                            <td>
                                                
                                                <?php if($key['collection_status'] == 1 && $key['option_id'] > 0) {?>
                                                    <a href="<?php echo base_url('draw/uncollectedVoucher/'.$key['id']) ?>" title="Uncollected Voucher" class="btn btn-sm bg-danger-light">
                                                        <i class="feather-x-circle"></i>
                                                    </a>
                                                <?php }elseif($key['collection_status'] == 0 && $key['option_id'] > 0){?>
                                                    <a href="<?php echo base_url('draw/itemCollection/'.$key['id']) ?>" title="Collect Won Voucher" class="btn btn-sm bg-danger-light">
                                                        <i class="feather-check"></i>
                                                    </a>
                                                <?php }else{ echo "--"; } ?>
                                            

                                            
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



