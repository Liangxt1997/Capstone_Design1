<form class="layui-form x-center" action="" method="GET">
    <div class="layui-form-pane" style="margin-top: 15px;">
        <div class="layui-form-item">
            @foreach($search_fields as $field)
            @switch($field['type'])
                @case('date')
                <label class="layui-form-label">{{$field['description']}}</label>
                <div class="layui-input-inline">
                    <input class="layui-input" placeholder="시작일" value="{{$field["value"][0]}}" name="{{$field['name']}}_s" id="{{$field['name']}}_s">
                </div>
                <div class="layui-input-inline">
                    <input class="layui-input" placeholder="마감일" value="{{$field["value"][1]}}" name="{{$field['name']}}_e" id="{{$field['name']}}_e">
                </div>
                @push('scripts')
                    <script>
                        layui.use(['laydate'], function(){
                            $ = layui.jquery;//jquery
                            laydate = layui.laydate;//日期插件

                            var start = {
                                max: '2099-06-16 23:59:59'
                                ,istoday: false
                                ,choose: function(datas){
                                    end.min = datas; //开始日选好后，重置结束日的最小日期
                                    end.start = datas //将结束日的初始值设定为开始日
                                }
                            };

                            var end = {
                                 max: '2099-06-16 23:59:59'
                                ,istoday: false
                                ,choose: function(datas){
                                    start.max = datas; //结束日选好后，重置开始日的最大日期
                                }
                            };

                            document.getElementById('{{$field["name"]}}_s').onclick = function(){
                                start.elem = this;
                                laydate(start);
                            }
                            document.getElementById('{{$field["name"]}}_e').onclick = function(){
                                end.elem = this
                                laydate(end);
                            }
                        });
                    </script>
                @endpush
                @break
                @default
                <div class="layui-input-inline">
                    <input type="text" name="{{$field["name"]}}" value="{{$field["value"]}}" placeholder="{{$field['description']}}" autocomplete="off" class="layui-input">
                </div>
            @endswitch
            @endforeach
            <div class="layui-input-inline" style="width:80px">
                <button class="layui-btn" type="submit"><i class="layui-icon">&#xe615;</i></button>
            </div>
        </div>
    </div>
</form>
