@extends('admin.layouts.app')

@section('content')
    <nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span>公司模板管理 <span
                class="c-gray en">&gt;</span> 流程模板预置控件编辑 <a class="btn btn-success radius r btn-refresh"
                                                      style="line-height:1.6em;margin-top:3px"
                                                      href="javascript:location.replace(location.href);" title="刷新"
                                                      onclick="location.replace('{{URL::asset('/admin/template/temEdit')}}');"><i
                    class="Hui-iconfont">&#xe68f;</i></a></nav>
    <div class="page-container">
        <form class="form form-horizontal" id="form-admin-add">
            {{--{{csrf_field()}}--}}
            <div class="row cl">
                <label class="form-label col-xs-4 col-sm-2"><span class="c-red"></span>模板类型：</label>
                <div class="formControls col-xs-8 col-sm-9">
                    <select id="" name="" class="select" style="width: 55%;">
                        <option value="">条目一</option>
                        <option value="">条目二</option>
                    </select>
                </div>
            </div>
            <div class="row cl">
                <label class="form-label col-xs-4 col-sm-2">模板json数据：</label>
                <div class="formControls col-xs-8 col-sm-9">
                    <textarea name="" cols="" rows="" class="textarea radius" placeholder="" style="height: 200px;width: 55%;"></textarea>
                </div>
            </div>
            <div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-2" style="margin-left: 15.6667%;margin-top: 1rem;margin-bottom: 1rem;">版本：<span >xxxxx</span></div>
            <div class="row cl">
                <div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-2">
                    <input class="btn btn-primary radius" type="submit" value="保存">
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