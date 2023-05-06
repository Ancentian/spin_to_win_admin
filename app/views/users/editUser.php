<div class="page-wrapper">
    <div class="content container-fluid">

        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="page-title">Edit User</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo base_url('home')?>">Dashboard</a></li>
                        <li class="breadcrumb-item active">Edit User</li>
                    </ul>
                </div>
            </div>
        </div>
        <?php if ($this->session->flashdata('error')) { ?>
            <div class="alert alert-danger"><?php echo $this->session->flashdata('error'); ?></div>
        <?php } ?>
        <!-- Start Toastr Alert -->
        <?php $this->load->view('alert');  ?>
        <!-- End Toastr Alert -->
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <form action="<?php echo base_url('staff/updateUser/'.$user['id']); ?>" method="POST" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-12">
                                    <h5 class="form-title"><span>Basic Details</span></h5>
                                </div>        
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms" required>
                                        <label>Name <span class="login-danger">*</span></label>
                                        <input type="text" class="form-control" name="first_name" value="<?php echo $user['name']?>" required>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Email<span class="login-danger">*</span></label>
                                        <input type="email" class="form-control" name="email" value="<?php echo $user['email']?>">
                                    </div>
                                </div> 
                                    <div class="col-12 col-sm-6">
                                    <div class="form-group local-forms">
                                        <label>Role<span class="login-danger">*</span></label>
                                        <select class="form-control select" name="role" required >
                                            <option value="">--Choose--</option>
                                            <option value="admin" <?php if($user['role_id'] == 'admin') { echo  "selected"; }?>>Admin</option>
                                            <option value="trainer"<?php if($user['role_id'] == 'trainer') { echo  "selected"; }?>>Trainer/CBT</option>
                                            <option value="field_officer"<?php if($user['role_id'] == 'field_officer') { echo  "selected"; }?>>Field Officer</option>
                                            <option value="field_coordinator"<?php if($user['role_id'] == 'field_coordinator') { echo  "selected"; }?>>Field Coordinator</option>
                                            <option value="finance"<?php if($user['role_id'] == 'finance') { echo  "selected"; }?>>Finance</option>
                                        </select>
                                    </div>
                                </div>
                                 

                            </div>                                             
                            <div class="col-12 ">
                                <div class="student-submit">
                                    <button type="submit" class="btn btn-primary justify-content-center">Submit</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

</div>

<script src="<?php echo base_url() ?>res/assets/js/jquery-3.6.0.min.js"></script>
<script src="<?php echo base_url() ?>res/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo base_url() ?>res/assets/js/feather.min.js"></script>
<script src="<?php echo base_url() ?>res/assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
<script src="<?php echo base_url() ?>res/assets/plugins/apexchart/apexcharts.min.js"></script>
<script src="<?php echo base_url() ?>res/assets/plugins/apexchart/chart-data.js"></script>
<script src="<?php echo base_url() ?>res/assets/plugins/select2/js/select2.min.js"></script>

<script src="<?php echo base_url() ?>res/assets/plugins/moment/moment.min.js"></script>
<script src="<?php echo base_url() ?>res/assets/js/bootstrap-datetimepicker.min.js"></script>

<script src="<?php echo base_url() ?>res/assets/plugins/datatables/datatables.min.js"></script>

<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script> -->

<script src="<?php echo base_url() ?>res/assets/js/script.js"></script>

<script type="text/javascript">
    $(document).ready(function(){
       
        $('#cooperative_id').change(function(){ 
            var id=$(this).val();
                //console.log(id);
            $.ajax({
                url : "<?php echo site_url('members/get_cooperative_clusters');?>",
                method : "POST",
                data : {id: id},
                async : true,
                dataType : 'json',
                success: function(data){
                   
                    var html = '';
                    var i;
                    for(i=0; i<data.length; i++){
                        html += '<option value='+data[i].id+'>'+data[i].cluster_name+'</option>';
                    }
                    $('#cluster_id').html(html);
                    
                }
            });
            return false;
        }); 
        
    });
</script>

</body>

</html>





