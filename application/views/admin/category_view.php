<!-- Page Content -->
<div id="page-wrapper" xmlns="http://www.w3.org/1999/html">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">จัดการความหมวดหมู่</h1>
        </div>
        <!-- /.col-lg-12 -->


        <div class="col-lg-12">
            <div class="text-right">
                <a href="<?php echo base_url('admin/add_category') ?>" class="btn btn-xs btn-warning">
                    <i class="fa fa-edit"> </i> เพิ่มหมวดหมู่ </a></div>


            <table class="table">
                <tr>
                    <th> #</th>
                    <th> ชื่อหมวดหมู่</th>
                    <th> จักการ</th>

                    <?php if ($categories->num_rows > 0) {
                        foreach ($categories->result() as $category) {
                            ?>
                            <th>
                            <td>1</td>
                            <td><?php echo $category->name ?> </td>
                            <td>
                            <td>
                                <a href="#" class="btn btn-xs btn-warning">
                                    <i class="fa fa-edit"> </i> แก้ไข
                                </a>
                                <a href="#" class="btn btn-xs btn-danger">
                                    <i class="fa fa-times"> </i> ลบ
                                </a>


                            </td>
                            </td>
                            </th>

                        <?php }
                    } else { ?>
                </tr>
                <tr>
                    <td colspan="3">==ไม่มีข้อมูล==
                    </td>
                </tr>
                <?php } ?>

            </table>
        </div>


    </div>
    <!-- /.row -->
</div>
<!-- /#page-wrapper -->