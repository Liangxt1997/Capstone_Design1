@switch($type)
    @case('image')
    <div class="layui-form-item">
        <label for="link" class="layui-form-label">
            <span class="x-red">*</span>{{$description}}
        </label>
        <div class="layui-input-inline">
            <div class="site-demo-upbar">
                <input id="{{$name}}_file" type="file" name="file" class="layui-upload-file" >
            </div>
        </div>
    </div>
        <div class="layui-form-item">
            <label  class="layui-form-label">{{$description}} 썸네일
            </label>
            <input type="hidden" id="{{$name}}" name="{{$name}}" value="{{$value}}">
            <img id="{{$name}}_upload" width="400" src="{{$value}}">
        </div>
    @push('scripts')
        <script>
            layui.use([ 'upload'], function() {
                $ = layui.jquery;
                //图片上传接口
                layui.upload({
                    elem:"#{{$name}}_file",
                    url: '{{route('file.upload')}}' //上传接口
                    , success: function (res) { //上传成功后的回调
                        console.log('{{$name}}');
                        $('#{{$name}}_upload').attr('src', res.url);
                        $('#{{$name}}').val(res.url);
                    }
                });
            });
        </script>
    @endpush
    @break
    @case('number')
    <div class="layui-form-item">
        <label for="link" class="layui-form-label">
            <span class="x-red">*</span>{{$description}}
        </label>
        <div class="layui-input-inline">
            <input type="number" id="{{$name}}" name="{{$name}}" required="" value="{{$value}}" lay-verify="required"
                   autocomplete="off" class="layui-input">
        </div>
    </div>
    @break
    @case('select')
    <div class="layui-form-item">
        <label class="layui-form-label"><span class="x-red">*</span>{{$description}}</label>
        <div class="layui-input-inline" >
            <select required="" name="{{$name}}">
                @foreach($options as $option)
                    @if ($value == $option['id'])
                        <option selected="selected" value="{{$option['id']}}">{{$option['name']}}</option>
                    @else
                        <option value="{{$option['id']}}">{{$option['name']}}</option>
                    @endif
                @endforeach
            </select>
        </div>
    </div>
    @break
    @case('text')
    <div class="layui-form-item layui-form-text">
        <label class="layui-form-label">{{$description}}</label>
        <div class="layui-input-block">
                        <textarea id="{{$name}}" name="{{$name}}"
                                  placeholder="입력하세요." class="layui-textarea fly-editor" style="height: 260px;">{{$value}}</textarea>
        </div>
    </div>
    @push('scripts')
        <script>
            layui.use(['layedit', 'upload'], function(){
                layedit = layui.layedit;
                layedit.set({
                    uploadImage: {
                        url: "./upimg.json" //接口url
                        ,type: 'post' //默认post
                    }
                });
                //创建一个编辑器
                let index = layedit.build('{{$name}}');
                //layedit.getContent(index)

                setInterval(function (){
                    $('#{{$name}}').val(layedit.getContent(index));
                }, 1000)
            });
        </script>
    @endpush
    @break

    @case('categories')
    <div class="layui-form-item">
        <label class="layui-form-label"><span class="x-red">*</span>{{$description}}</label>
        <div class="layui-input-inline" >
            <select required="" name="{{$name}}">
                @foreach($categories as $category)
                    @if ($value == $category->id)
                        <option selected="selected" value="{{$category->id}}">{{$category->name}}</option>
                    @else
                        <option value="{{$category->id}}">{{$category->name}}</option>
                    @endif
                @endforeach
            </select>
        </div>
    </div>
    @break

    @case('tags')
    <div class="layui-form-item">
        <label class="layui-form-label"><span class="x-red">*</span>{{$description}}</label>
        <div class="layui-input-inline" >
            <select required="" name="{{$name}}">
                @foreach($tags as $tag)
                    @if ($value == $tag->id)
                        <option selected="selected" value="{{$tag->id}}">{{$tag->name}}</option>
                    @else
                        <option value="{{$tag->id}}">{{$tag->name}}</option>
                    @endif
                @endforeach
            </select>
        </div>
    </div>
    @break

    @case('suppliers')
    <div class="layui-form-item">
        <label class="layui-form-label"><span class="x-red">*</span>{{$description}}</label>
        <div class="layui-input-inline" >
            <select required="" name="{{$name}}">
                @foreach($suppliers as $supplier)
                    @if ($value == $supplier->id)
                        <option selected="selected" value="{{$supplier->id}}">{{$supplier->name}}</option>
                    @else
                        <option value="{{$supplier->id}}">{{$supplier->name}}</option>
                    @endif
                @endforeach
            </select>
        </div>
    </div>
    @break

    @case('password')
    <div class="layui-form-item">
        <label for="link" class="layui-form-label">
            <span class="x-red">*</span>{{$description}}
        </label>
        <div class="layui-input-inline">
            <input type="password" id="{{$name}}" name="{{$name}}" required="" value="{{$value}}" lay-verify="required"
                   autocomplete="off" class="layui-input">
        </div>
    </div>
    @break

    @default
    <div class="layui-form-item">
        <label for="link" class="layui-form-label">
            <span class="x-red">*</span>{{$description}}
        </label>
        <div class="layui-input-inline">
            <input type="text" id="{{$name}}" name="{{$name}}" required="" value="{{$value}}" lay-verify="required"
                   autocomplete="off" class="layui-input">
        </div>
    </div>
@endswitch
