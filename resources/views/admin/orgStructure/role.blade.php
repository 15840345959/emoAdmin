@extends('admin.layouts.app')

@section('content')
    <nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 组织架构管理-部门移动2  <span
                class="c-gray en">&gt;</span> 角色 <a class="btn btn-success radius r btn-refresh"
                                                      style="line-height:1.6em;margin-top:3px"
                                                      href="javascript:location.replace(location.href);" title="刷新"
                                                      onclick="location.replace('{{URL::asset('/admin/orgStructure/create')}}');"><i
                    class="Hui-iconfont">&#xe68f;</i></a></nav>
    <div class="page-container">
        <form class="form form-horizontal" id="form-admin-add">
            {{csrf_field()}}
            <div class="cl pd-5 mt-20" style="margin-left: 3rem;">
                {{--<label class="form-label col-xs-4 col-sm-2"><span class="c-red"></span></label>--}}
                <span class="l">
                    个人详情：
                </span>
            </div>
            <div class="row cl">
                <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>姓名:</label>
                <div class="formControls col-xs-8 col-sm-5">
                    <input id="" name="" type="text" class="input-text"
                           value="" placeholder="张">
                </div>
            </div>
            <div class="row cl">
                <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>手机：</label>
                <div class="formControls col-xs-8 col-sm-3">
                    <input id="" name="" type="text" class="input-text"
                           value="" placeholder="12312312"><span style="position: absolute;width: 6rem;margin-left: 2rem;">设为隐藏</span>
                </div>
            </div>
            <div class="row cl">
                <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>邮箱：</label>
                <div class="formControls col-xs-8 col-sm-5">
                    <input id="" name="" type="text" class="input-text"
                           value="" placeholder="暂无">
                </div>
            </div>
            <div class="row cl">
                <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>企业工号：</label>
                <div class="formControls col-xs-8 col-sm-5">
                    <input id="" name="" type="text" class="input-text"
                           value="" placeholder="企业工号">
                </div>
            </div>

            <canvas id="canvas" style="background-color: #969696;"></canvas>

            <div class="row cl">
                <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>主职部门：</label>
                <div class="formControls col-xs-8 col-sm-5">
                    <span>院务部</span>
                    <input class="btn btn-primary" type="submit" value="负责人" style="border-radius: 15px;">
                    {{--<input id="" name="" type="text" class="input-text"--}}
                           {{--value="" placeholder="企业工号">--}}
                </div>
            </div>
            <div class="row cl">
                <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>职位：</label>
                <div class="formControls col-xs-8 col-sm-5">
                    <input id="" name="" type="text" class="input-text"
                           value="" placeholder="部长">
                </div>
            </div>
            <div class="row cl">
                <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>角色：</label>
                <div class="formControls col-xs-8 col-sm-5">
                    <input id="" name="" type="text" class="input-text"
                           value="" placeholder="角色">
                </div>
            </div>
            <div class="row cl" style="margin-top: 3rem;">
                <div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-2">
                    <input class="btn btn-primary radius" type="submit" value="确定">
                    <button onClick="layer_close();" class="btn btn-default radius" type="button" style="margin-left: 10rem;">取消</button>
                </div>
            </div>
        </form>
    </div>

@endsection

@section('script')
    <script type="text/javascript">
        // 拿到画板
        var canvas = document.getElementById('canvas');
        canvas.width = 10000;
        canvas.height = 1;

        // 拿到上下文
        var context = canvas.getContext('2d');
        // 设置线条的颜色
        context.strokeStyle = 'red';
        // 设置线条的宽度
        context.lineWidth = 5;

        // 绘制直线
        context.beginPath();
        // 起点
        context.moveTo(200, 200);
        // 终点
        context.lineTo(500, 200);
        context.closePath();
        context.stroke();

    </script>
@endsection