<a style="text-decoration:none"  onclick="member_password('修改密码','{{route($route, [$id])}}','10001','600','400')"
   href="javascript:;" title="修改密码">
    <i class="layui-icon">&#xe631;</i>
</a>

@push('scripts')
    <script>
        // 编辑
        function member_password(title, url, id, w, h) {
            x_admin_show(title, url, w, h);
        }
    </script>
@endpush
