@extends('admin.layouts.app')

@section('content')

    <nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 公司模板管理 <span
                class="c-gray en">&gt;</span> 组织架构管理 <a class="btn btn-success radius r btn-refresh"
                                                        style="line-height:1.6em;margin-top:3px"
                                                        href="javascript:location.replace(location.href);" title="刷新"
                                                        onclick="location.replace('{{URL::asset('/admin/template/orgStructure')}}');"><i
                    class="Hui-iconfont">&#xe68f;</i></a></nav>
    <div class="page-container">
        <table class="table table-border table-bordered table-bg" style="margin-top: 3rem;">
            <thead>
            <tr class="text-c">
                <th width="90">管理中心</th>
                <th width="90">组织架构</th>
                <th width="90">是否批量调整</th>
                <th width="90">选择部门/人员</th>
                <th width="90">移动部门</th>
            </tr>
            </thead>
            <tbody>
            <tr class="text-c">
                <td>1</td>
                <td>方行</td>
                <td>方行</td>
                <td>方行</td>
                <td>方行</td>
            </tr>
            </tbody>
        </table>
    </div>
    <div class="page-container">
        <table class="table table-border table-bordered table-bg" style="margin-top: 3rem;">
            <thead>
            <tr class="text-c">
                <th width="90">管理中心</th>
                <th width="90">组织架构</th>
                <th width="90">选择部门/人员</th>
                <th width="90">是否删除</th>
            </tr>
            </thead>
            <tbody>
            <tr class="text-c">
                <td>1</td>
                <td>2018</td>
                <td>方行</td>
                <td>删除</td>
            </tr>
            </tbody>
        </table>
    </div>

@endsection

@section('script')
    <script type="text/javascript">

        $(function () {

        });

        /*
         参数解释：
         title	标题
         url		请求的url
         id		需要操作的数据id
         w		弹出层宽度（缺省调默认值）
         h		弹出层高度（缺省调默认值）
         */

        /*删除公司模板-删除*/
        function admin_del(obj, id) {
            layer.confirm('确认要删除吗？', function (index) {
                //进行后台删除
                var param = {
                    id: id,
                    _token: "{{ csrf_token() }}"
                }
                delAdmin('{{URL::asset('')}}', param, function (ret) {
                    if (ret.result == true) {
                        $(obj).parents("tr").remove();
                        layer.msg('已删除', {icon: 1, time: 1000});
                    } else {
                        layer.msg(ret.message, {icon: 2, time: 1000})
                    }
                })
            });
        }

    </script>
@endsection