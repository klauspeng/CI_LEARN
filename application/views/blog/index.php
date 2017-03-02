<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Blank</h1>
            </div>
            <!-- /.col-lg-12 -->
            <div>
                <?php foreach ($todo_list as $item): ?>
                    <li><?php echo $item; ?></li>
                <?php endforeach; ?>
                <div class="form-group input-group">
                    <input type="text" class="form-control">
                    <span class="input-group-btn">
                        <button class="btn btn-default" type="button"><i
                                    class="fa fa-search"></i>
                        </button>
                    </span>
                </div>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
