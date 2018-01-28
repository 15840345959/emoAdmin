@extends('admin.layouts.app')

@section('content')

    <nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 组织架构管理-部门移动2 <span
                class="c-gray en">&gt;</span> 添加下级部门 <a class="btn btn-success radius r btn-refresh"
                                                        style="line-height:1.6em;margin-top:3px"
                                                        href="javascript:location.replace(location.href);" title="刷新"
                                                        onclick="location.replace('{{URL::asset('/admin/orgStructure/addJuniorDepartment')}}');"><i
                    class="Hui-iconfont">&#xe68f;</i></a></nav>
    <div class="page-container">
        <div class="cl pd-5 mt-20">
            <label class="form-label col-xs-4 col-sm-2"><span class="c-red"></span></label>
                <span class="l">
                    上级部门：
                </span>
            {{--<div class="cl pd-5 mt-20">--}}
                <span class="l">
                    <a href="javascript:;" onclick=""
                        class="btn btn-primary radius">
                         院务部
                    </a>
                </span>
            {{--</div>--}}
        </div>
        <div class="cl pd-5 mt-20">
            <label class="form-label col-xs-4 col-sm-2"><span class="c-red"></span></label>
            {{--<div class="cl pd-5 mt-20">--}}
            <span class="l">
                    <a href="javascript:;" onclick=""
                       class="btn btn-primary radius">
                         职能
                    </a>
                </span>
            {{--</div>--}}
        </div>
        <div class="cl pd-5 mt-20" style="margin-left: 12rem;">
            <label class="form-label col-xs-4" style="margin-right: -15rem;"><span class="c-red">*</span>部门名称</label>
            <div class="formControls col-xs-8 col-sm-5">
                <input id="" name="" type="text" class="input-text"
                       value="" placeholder="请输入新部门名称">
            </div>
        </div>
        <div class="row cl" style="margin-top: 13rem;">
            <div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-2">
                <input class="btn btn-primary radius" type="submit" value="确定">
                <button onClick="layer_close();" class="btn btn-default radius" type="button" style="margin-left: 10rem;">取消</button>
            </div>
        </div>

    </div>

@endsection

@section('script')
    <script type="text/javascript">
        /*管理员-删除*/
        function depart_del() {
            layer.confirm('部门中还有人员，确认要删除吗？'+'<br/>'+'删除该部门后人员将统一移到未分配人员类别，请谨慎操作！', function (index) {
            });
        }



    </script>
@endsection