<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">有道词典</h1>
            </div>
            <!-- /.col-lg-12 -->
            <div>
                <div class="form-group input-group search">
                    <input id="p" type="text" class="form-control"
                           onkeypress="if(event.keyCode==13) {search.click();return false;}"
                           value="<?=$q?>"
                    >
                    <span class="input-group-btn">
                        <button class="btn btn-default" type="button" id="search">
                            <i class="fa fa-search"></i>
                        </button>
                    </span>
                </div>
                <?php var_dump($data) ?>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
