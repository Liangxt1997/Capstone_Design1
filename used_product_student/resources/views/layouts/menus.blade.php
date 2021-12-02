<ul class="layui-nav layui-nav-tree site-demo-nav" lay-filter="side">
    <li class="layui-nav-item">
        <a class="javascript:;" href="javascript:;">
            <i class="layui-icon" style="top: 3px;">&#xe638;</i><cite>{{trans('admin.system')}}</cite>
        </a>
        <dl class="layui-nav-child">
            <dd class="">
                <a href="javascript:;" _href="{{route('users')}}">
                    <cite>{{trans('admin.m_g')}}</cite>
                </a>
            </dd>
            <dd class="">
                <a href="javascript:;" _href="{{route('news')}}">
                    <cite>{{trans('admin.new')}}</cite>
                </a>
            </dd>
        </dl>

    </li>
    <li class="layui-nav-item">
        <a class="javascript:;" href="javascript:;">
            <i class="layui-icon" style="top: 3px;">&#xe620;</i><cite>{{trans('admin.user')}}</cite>
        </a>
        <dl class="layui-nav-child">
            <dd class="">
                <a href="javascript:;" _href="{{route('members', ['user_status' => 2])}}">
                    <cite>{{trans('admin.userlist')}}</cite>
                </a>
            </dd>

        </dl>
        <dl class="layui-nav-child">
            <dd class="">
                <a href="javascript:;" _href="{{route('feedbacks')}}">
                    <cite>{{trans('admin.liuyan')}}</cite>
                </a>
            </dd>

        </dl>
        <dl class="layui-nav-child">
            <dd class="">
            <dd class="">
                <a href="javascript:;" _href="{{route('collections')}}">
                    <cite>{{trans('admin.want')}}</cite>
                </a>
            </dd>
            </dd>
        </dl>
        <dl class="layui-nav-child">
            <dd class="">
            <dd class="">
                <a href="javascript:;" _href="{{route('products.comments')}}">
                    <cite>{{trans('admin.comment')}}</cite>
                </a>
            </dd>
            </dd>
        </dl>
    </li>
    <li class="layui-nav-item">
        <a class="javascript:;" href="javascript:;">
            <i class="layui-icon" style="top: 3px;">&#xe62e;</i><cite>{{trans('admin.product')}}</cite>
        </a>
        <dl class="layui-nav-child">
            <dd class="">
            <dd class="">
                <a href="javascript:;" _href="{{route('products')}}">
                    <cite>{{trans('admin.product_list')}}</cite>
                </a>
            </dd>
            </dd>
            <dd class="">
            <dd class="">
                <a href="javascript:;" _href="{{route('categories')}}">
                    <cite>{{trans('admin.cate')}}</cite>
                </a>
            </dd>
            </dd>

            <dd class="">
            <dd class="">
                <a href="javascript:;" _href="{{route('tags')}}">
                    <cite>{{trans('admin.label')}}</cite>
                </a>
            </dd>
            </dd>

        </dl>
    </li>
</ul>
