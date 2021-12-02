<a title="정보 관리" href="javascript:;" onclick="banner_edit('정보 관리','{{route($route,[$id])}}','4','','510')"
   class="ml-5" style="text-decoration:none">
    <i class="layui-icon">&#xe60a;</i>
</a>

@push('scripts')
    <script>
        // 编辑
        function banner_edit(title, url, id, w, h) {
            x_admin_show(title, url, w, h);
        }
    </script>
@endpush
