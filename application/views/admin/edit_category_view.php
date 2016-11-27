<!-- Page Content -->
<div id="page-wrapper" xmlns="http://www.w3.org/1999/html">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">แก้ไขมหมวดหมู่ :<?php echo $category->name ?></h1>
        </div>
        <!-- /.col-lg-12 -->


        <div class="col-lg-12">
            <form action="<?php echo  base_url('admin/create_category')?>" method="post">
            <div class="form-group" >
            <input class="form-control"
                   value="<?php echo $category->name ?>"
                   name="name"
                   type="text"
                   placeholder="โปรดกรอกชื่อหมวดหมู่"
                   required  >

</div>
        <button type="submit" class="btn btn-primary">บันทึก</button>





</form>


    </div>
    <!-- /.row -->
</div>
<!-- /#page-wrapper -->