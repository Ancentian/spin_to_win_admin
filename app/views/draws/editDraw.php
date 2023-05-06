<div class="page-wrapper">
 <div class="content container-fluid">
          <div class="card invoices-add-card">
             <div class="card-body">
                <form action="<?php echo base_url('draw/updateDraw/'. $draw['id'])?>" method="POST">
                   <div class="invoices-main-form invoice-add-table">
                   <h4>Draw Details</h4>
                   &nbsp;
                                <div class="row">
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms" required>
                                        <label>Title <span class="login-danger">*</span></label>
                                        <input type="text" class="form-control" name="title" value="<?php echo $draw['title']?>" required>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms" required>
                                        <label>Draw Time <span class="login-danger">*</span></label>
                                        <input type="datetime-local" class="form-control" value="<?php echo isset($_POST['draw_time']) ? $_POST['draw_time'] : $draw['draw_time']; ?>" name="draw_time" required>
                                    </div>
                                </div>

                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Status <span class="login-danger">*</span></label>
                                        <select class="form-control select" name="status" required>
                                            <option value="">--Choose--</option>
                                            <option value="1" <?php if($draw['status'] == '1') { echo  "selected"; }?>>Active</option>
                                            <option value="0" <?php if($draw['status'] == '0') { echo  "selected"; }?>>In Active</option>
                                        </select>
                                    </div>
                                </div>   
                        </div>
                        <button type="submit" class="btn btn-primary">Save</button>
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

<script type="text/javascript">
    var rowIdx = 1;
    $("#addBtn").on("click", function () {
        // Check if maximum number of rows is reached
        if (rowIdx < 10) {
            // Adding a row inside the tbody.
            $("#tableEstimate tbody").append(`
                <tr id="R${++rowIdx}">
                    <td class="row-index text-center"><p> ${rowIdx}</p></td>
                    <td><input class="form-control" type="text" id="voucher" name="voucher[]"></td>
                    <td><input class="form-control" type="text" id="voucher_serial" name="voucher_serial[]"></td>
                    <td><input class="form-control" type="date" id="voucher_validity" name="voucher_validity[]"></td>
                    <td><a href="javascript:void(0)" class="text-danger font-18 remove" title="Remove"><i class="feather-trash"></i></a></td>
                </tr>`);
        } else {
            alert("Maximum number of rows reached.");
        }
    });
    
    $("#tableEstimate tbody").on("click", ".remove", function () {
        // Getting all the rows next to the row containing the clicked button
        var child = $(this).closest("tr").nextAll();
        // Iterating across all the rows obtained to change the index
        child.each(function () {
            // Getting <tr> id.
            var id = $(this).attr("id");
            // Getting the <p> inside the .row-index class.
            var idx = $(this).children(".row-index").children("p");
            // Gets the row number from <tr> id.
            var dig = parseInt(id.substring(1));
            // Modifying row index.
            idx.html(`${dig - 1}`);
            // Modifying row id.
            $(this).attr("id", `R${dig - 1}`);
        });
        // Removing the current row.
        $(this).closest("tr").remove();
        // Decreasing total number of rows by 1.
        rowIdx--;
    });
</script>
</body>
</html>


