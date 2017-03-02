<script type="text/javascript">
    $(document).ready(function () {
        $('#p').focus();//光标默认位置
        //跳转
        $("#search").click(function () {
            location.href = "<?=base_url()?>youdao/index/" + $("#p").val();
        });
    });
</script>