<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>
        点餐平台
    </title>
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="format-detection" content="telephone=no">
    <link rel="stylesheet" href="<?php echo e(asset('css/x-admin.css')); ?>" media="all">
</head>
<body>
<?php echo $__env->yieldContent('nav'); ?>
<?php echo $__env->yieldContent('content'); ?>
<script src="<?php echo e(asset('lib/layui/layui.js')); ?>" charset="utf-8"></script>
<script src="<?php echo e(asset('js/x-layui.js')); ?>" charset="utf-8"></script>
<?php echo $__env->yieldPushContent('scripts'); ?>
<script>
    layui.use(['laydate','element','laypage','layer'], function(){
        $ = layui.jquery;//jquery
        laydate = layui.laydate;//日期插件
        lement = layui.element();//面包导航
        laypage = layui.laypage;//分页
        layer = layui.layer;//弹出层

        //以上模块根据需要引入

        layer.ready(function(){ //为了layer.ext.js加载完毕再执行
            layer.photos({
                photos: '#x-img'
                //,shift: 5 //0-6的选择，指定弹出图片动画类型，默认随机
            });
        });

    });

    //批量删除提交
    function delAll () {
        layer.confirm('确认要删除吗？',function(index){
            //捉到所有被选中的，发异步进行删除
            layer.msg('删除成功', {icon: 1});
        });
    }
    /*添加*/
    function banner_add(title,url,w,h){
        x_admin_show(title,url,w,h);
    }
    /*停用*/
    function banner_stop(obj,id){
        layer.confirm('确认不显示吗？',function(index){
            //发异步把用户状态进行更改
            $(obj).parents("tr").find(".td-manage").prepend('<a style="text-decoration:none" onClick="banner_start(this,id)" href="javascript:;" title="显示"><i class="layui-icon">&#xe62f;</i></a>');
            $(obj).parents("tr").find(".td-status").html('<span class="layui-btn layui-btn-disabled layui-btn-mini">不显示</span>');
            $(obj).remove();
            layer.msg('不显示!',{icon: 5,time:1000});
        });
    }

    /*启用*/
    function banner_start(obj,id){
        layer.confirm('确认要显示吗？',function(index){
            //发异步把用户状态进行更改
            $(obj).parents("tr").find(".td-manage").prepend('<a style="text-decoration:none" onClick="banner_stop(this,id)" href="javascript:;" title="不显示"><i class="layui-icon">&#xe601;</i></a>');
            $(obj).parents("tr").find(".td-status").html('<span class="layui-btn layui-btn-normal layui-btn-mini">已显示</span>');
            $(obj).remove();
            layer.msg('已显示!',{icon: 6,time:1000});
        });
    }
    // 编辑
    function banner_edit (title,url,id,w,h) {
        x_admin_show(title,url,w,h);
    }
    /*删除*/
    function banner_del(obj,id){
        layer.confirm('确认要删除吗？',function(index){
            //发异步删除数据
            $(obj).parents("tr").remove();
            layer.msg('已删除!',{icon:1,time:1000});
        });
    }
</script>
<script>
    var _hmt = _hmt || [];
    (function() {
        var hm = document.createElement("script");
        hm.src = "https://hm.baidu.com/hm.js?b393d153aeb26b46e9431fabaf0f6190";
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(hm, s);
    })();
</script>
</body>
</html>
<?php /**PATH D:\student_other_work\web\material_manage\material_manage\resources\views/layouts/page.blade.php ENDPATH**/ ?>