<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">有道词典</h1>
            </div>
            <!-- /.col-lg-12 -->
            <div>
                <div class="form-group input-group search col-lg-12">
                    <input id="p" type="text" class="form-control"
                           onkeypress="if(event.keyCode==13) {search.click();return false;}"
                    >
                    <span class="input-group-btn">
                        <button class="btn btn-default" type="button" id="search">
                            <i class="fa fa-search"></i>
                        </button>
                    </span>
                </div>

                <div class="col-lg-12" style="padding-left:0px;">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            查询结果
                        </div>
                        <div class="panel-body">
                            <h1><?= $q ?></h1>
                            <h2>基本解释</h2>
                            <p>英[<?=$data['basic']['uk-phonetic']?>] 美[<?=$data['basic']['us-phonetic']?>]</p>
                            <?php foreach ($data['basic']['explains'] as $item): ?>
                                 <p><?php echo $item; ?></p>
                            <?php endforeach; ?>
                            <h2>网络释义</h2>
                            <?php
                                foreach ($data['web'] as $item){
                                    echo '<p>';
                                    echo '<b>',$item['key'],'</b>',':';
                                    foreach ($item['value'] as $v){
                                        echo $v;
                                    }
                                    echo '</p>';
                                }
                            ?>
                        </div>
                    </div>
                </div>

                <?php var_dump($data);?>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
