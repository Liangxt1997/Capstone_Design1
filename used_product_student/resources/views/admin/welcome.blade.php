<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>
            X-admin v1.0
        </title>
        <meta name="renderer" content="webkit">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="format-detection" content="telephone=no">
        <link rel="stylesheet" href="{{asset('css/x-admin.css')}}" media="all">
    </head>
    <body>
        <div class="x-body">
            <blockquote class="layui-elem-quote">
                欢迎使用点餐后台管理！<span class="f-14"></span>
            </blockquote>
{{--            <p>登录次数：18 </p>--}}
{{--            <p>上次登录IP：{{$_SERVER['REMOTE_ADDR']}}  上次登录时间： 2017-01-01 11:19:55</p>--}}
            <fieldset class="layui-elem-field layui-field-title site-title">
              <legend><a name="default">信息统计</a></legend>
            </fieldset>
            <table class="layui-table">
                <thead>
                    <tr>
                        <th colspan="2" scope="col">系统信息</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th width="30%">服务器计算机名</th>
                        <td><span id="lbServerName">http://127.0.0.1/</span></td>
                    </tr>
                    <tr>
                        <td>系统版本</td>
                        <td>v1.0</td>
                    </tr>
                    <tr>
                        <td>系统名字</td>
                        <td>点餐后台管理</td>
                    </tr>
                    <tr>
                        <td>指导教师</td>
                        <td>xxx老师</td>
                    </tr>
                    <tr>
                        <td>服务器操作系统 </td>
                        <td>Microsoft Windows</td>
                    </tr>
                    <tr>
                        <td>服务器的语言种类 </td>
                        <td>Chinese</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="layui-footer footer footer-demo">
            <div class="layui-main">
            </div>
        </div>
        <script src="{{asset('lib/layui/layui.js')}}" charset="utf-8"></script>
        <script src="{{asset('js/x-admin.js')}}"></script>
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
