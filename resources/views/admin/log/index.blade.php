@extends('admin.layouts.app')

@section('content')

    <nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 日志管理 <span
                class="c-gray en">&gt;</span> 下载错误日志 <a class="btn btn-success radius r btn-refresh"
                                                       style="line-height:1.6em;margin-top:3px"
                                                       href="javascript:location.replace(location.href);" title="刷新"
                                                       onclick="location.replace('{{URL::asset('/admin/log/index')}}');"><i
                    class="Hui-iconfont">&#xe68f;</i></a></nav>
    <div class="page-container" style="margin-top: 3rem;">
        <div class="row cl col-xs-offset-1 col-sm-offset-1" >
            <label class="form-label col-sm-2" style="width: 10.333333%;">日志日期：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input id="" class="Wdate" onfocus="WdatePicker({readOnly:true,maxDate:'%y-%M-%d'})" />
            </div>
        </div>
        <div class="row cl col-xs-offset-1 col-sm-offset-1" style="margin-top: 10rem;">
            <div class="col-xs-8 col-sm-9">
                <input class="btn btn-primary radius" type="submit" value="下载错误日志">
            </div>
        </div>
    </div>

@endsection

@section('script')
    <script type="text/javascript">

        $(function () {

        });


    </script>
@endsection