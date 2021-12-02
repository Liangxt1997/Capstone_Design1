<a title="조작" href="javascript:;" onclick="banner_edit('조작','{{route('actions.open',[$id])}}?route={{$route}}&model={{$model}}&key={{$key}}','4','','510')"
    class="layui-btn layui-btn-mini ml-5" style="text-decoration:none">
    {{$icon}}
</a>

@push('scripts')
    <script>
        // 수정
        function banner_edit(title, url, id, w, h) {
            x_admin_show(title, url, w, h);
        }
    </script>
@endpush
