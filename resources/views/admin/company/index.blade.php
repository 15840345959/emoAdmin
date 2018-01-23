@extends('admin.layouts.app')

@section('content')

    <nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 公司管理 <span
                class="c-gray en">&gt;</span> 公司管理 <a class="btn btn-success radius r btn-refresh"
                                                       style="line-height:1.6em;margin-top:3px"
                                                       href="javascript:location.replace(location.href);" title="刷新"
                                                       onclick="location.replace('{{URL::asset('/admin/company/index')}}');"><i
                    class="Hui-iconfont">&#xe68f;</i></a></nav>
    <div class="page-container">

        <div class="cl pd-5 mt-20">
            <span class="l">
                 <a href="javascript:;" onclick=""
                    class="btn btn-primary radius">
                     查询公司
                 </a>
            </span>
        </div>

        <div class="text-c">
            {{--<form action="" method="post" class="form-horizontal">--}}
                {{--{{csrf_field()}}--}}
                <input id="search_word" name="search_word" type="text" class="input-text" style="width:450px"
                       placeholder="公司名称">
                <button type="submit" class="btn btn-success" id="" name="">
                    <i class="Hui-iconfont">&#xe665;</i> 搜索
                </button>
            {{--</form>--}}
        </div>

        <table class="table table-border table-bordered table-bg" style="margin-top: 3rem;">
            <thead>
            <tr class="text-c">
                <th width="40">公司ID</th>
                <th width="50">公司名称</th>
                <th width="150">创建人</th>
                <th width="90">创建时间</th>
                <th width="100">操作</th>
            </tr>
            </thead>
            <tbody>
                <tr class="text-c">
                    <td>1</td>
                    <td>111111</td>
                    <td>4444444</td>
                    <td>烦烦烦方法</td>
                    <td class="td-manage">
                        <a title="删除公司" href="javascript:;" onclick="admin_del(this,'1')"
                           class="ml-5"
                           style="text-decoration:none">
                            <i class="Hui-iconfont">&#xe6e2;</i>
                        </a>
                    </td>
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

        /*删除公司-删除*/
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