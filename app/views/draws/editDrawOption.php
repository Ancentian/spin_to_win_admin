<div class="page-wrapper">
 <div class="content container-fluid">
          <div class="card invoices-add-card">
             <div class="card-body">
                <form action="<?php echo base_url('draw/updateDrawOption/'. $draw_option['id'])?>" method="POST">
                   <div class="invoices-main-form invoice-add-table">
                   <h4>Edit Draw Option</h4>
                   &nbsp;
                      <div class="row">
                         <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <div class="form-group">
                                <div class="row">
                                <div class="col-12 col-sm-6" hidden>
                                    <div class="form-group local-forms" required>
                                        <label>Draw ID<span class="login-danger">*</span></label>
                                        <input type="number" class="form-control" name="draw_id" value="<?php echo $draw_option['draw_id']?>" required>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group local-forms" required>
                                        <label>Title<span class="login-danger">*</span></label>
                                        <input type="text" class="form-control" name="title" value="<?php echo $draw_option['title']?>" required>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group local-forms" required>
                                        <label>Voucher Amount<span class="login-danger">*</span></label>
                                        <input type="number" class="form-control" name="voucher" value="<?php echo $draw_option['voucher']?>" required>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group local-forms" required>
                                        <label>Voucher Serial<span class="login-danger">*</span></label>
                                        <input type="text" class="form-control" name="voucher_serial" value="<?php echo $draw_option['voucher_serial']?>" required>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group local-forms" required>
                                        <label>Voucher Validity<span class="login-danger">*</span></label>
                                        <input type="date" class="form-control" value="<?php echo isset($_POST['voucher_validity']) ? $_POST['voucher_validity'] : $draw_option['voucher_validity']; ?>" name="voucher_validity" required>
                                    </div>
                                </div>

                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
</div>
</div>
</div>
</div>

</div>

<!-- <footer>
  <p>Copyright © 2023 AVSI.</p>
</footer> -->
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

<script src="<?php echo base_url() ?>res/assets/js/script.js"></script>

</body>
</html>


