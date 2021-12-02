<button class="layui-btn" onclick="add('추가','{{route($route)}}','600','500')"><i
        class="layui-icon">&#xe608;</i>추가
</button>

@push('scripts')
    <script>
        /*추가*/
        function add(title, url, w, h) {
            x_admin_show(title, url, w, h);
        }
    </script>
@endpush
