@extends('admin.layouts.app')

@section('content')
    <nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 创建公司 <span
                class="c-gray en">&gt;</span> 创建公司 <a class="btn btn-success radius r btn-refresh"
                                                      style="line-height:1.6em;margin-top:3px"
                                                      href="javascript:location.replace(location.href);" title="刷新"
                                                      onclick="location.replace('{{URL::asset('/admin/company/create')}}');"><i
                    class="Hui-iconfont">&#xe68f;</i></a></nav>
    <div class="page-container">
        <form class="form form-horizontal" id="form-admin-add">
            {{csrf_field()}}
            <div class="row cl">
                <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>行业：</label>
                <div class="formControls col-xs-8 col-sm-9">
                    <select id="" name="" class="select">
                        <option value="">条目一</option>
                        <option value="">条目二</option>
                    </select>
                </div>
            </div>
            <table class="table table-border table-bordered table-bg" style="margin-top: 3rem;margin-bottom: 3rem;">
                <thead>
                <tr class="text-c">
                    <th width="40">模板ID</th>
                    <th width="50">创建时间</th>
                    <th width="150">来源公司</th>
                    <th width="100">操作</th>
                </tr>
                </thead>
                <tbody>
                <tr class="text-c">
                    <td>1</td>
                    <td>111111</td>
                    <td>4444444</td>
                    <td class="td-manage">
                        <a style="text-decoration:none" onClick="admin_stop(this,'1')"
                           href="javascript:;"
                           title="显示">
                            <i class="Hui-iconfont">&#xe631;</i>
                        </a>
                    </td>
                </tr>
                </tbody>
            </table>
            <div class="row cl">
                <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>数据库：</label>
                <div class="formControls col-xs-8 col-sm-9">
                    <select id="" name="" class="select">
                        <option value="">条目一</option>
                        <option value="">条目二</option>
                    </select>
                </div>
            </div>
            <div class="row cl hidden">
                <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>公司名</label>
                <div class="formControls col-xs-8 col-sm-9">
                    <input id="" name="" type="text" class="input-text"
                           value="" placeholder="公司名">
                </div>
            </div>
            <div class="row cl">
                <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>管理员id：</label>
                <div class="formControls col-xs-8 col-sm-9">
                    <input id="" name="" type="text" class="input-text"
                           value="" placeholder="管理员id">
                </div>
            </div>
            <div class="row cl">
                <div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-2">
                    <input class="btn btn-primary radius" type="submit" value="创建公司">
                </div>
            </div>
        </form>
    </div>

@endsection

@section('script')
    <script type="text/javascript">
        /*创建公司-启用*/
        function admin_stop(obj, id) {
            console.log("admin_stop id:" + id);
            layer.confirm('确认要显示吗？', function (index) {
                //此处请求后台程序，下方是成功后的前台处理
                var param = {
                    id: id,
                    status: 0,
                    _token: "{{ csrf_token() }}"
                }
                //从后台设置管理员状态
                setAdminStatus('{{URL::asset('')}}', param, function (ret) {
                    if (ret.status == true) {

                    }
                })
                $(obj).parents("tr").find(".td-manage").prepend('<a onClick="admin_start(this,' + id + ')" href="javascript:;" title="隐藏" style="text-decoration:none"><i class="Hui-iconfont">&#xe615;</i></a>');
                $(obj).parents("tr").find(".td-status").html('<span class="label label-success radius">已显示</span>');
                $(obj).remove();
                layer.msg('已显示', {icon: 5, time: 1000});
            });
        }

        /*创建公司-停用*/
        function admin_start(obj, id) {
            layer.confirm('确认要隐藏吗？', function (index) {
                //此处请求后台程序，下方是成功后的前台处理
                var param = {
                    id: id,
                    status: 1,
                    _token: "{{ csrf_token() }}"
                }
                //从后台设置管理员状态
                setAdminStatus('{{URL::asset('')}}', param, function (ret) {
                    if (ret.status == true) {

                    }
                })
                $(obj).parents("tr").find(".td-manage").prepend('<a onClick="admin_stop(this,' + id + ')" href="javascript:;" title="显示" style="text-decoration:none"><i class="Hui-iconfont">&#xe631;</i></a>');
                $(obj).parents("tr").find(".td-status").html('<span class="label label-default radius">已隐藏</span>');
                $(obj).remove();
                layer.msg('已隐藏', {icon: 6, time: 1000});
            });
        }

    </script>
@endsection