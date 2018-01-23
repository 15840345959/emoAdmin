@extends('admin.layouts.app')

@section('content')

    <div class="page-container">
        <form class="form form-horizontal" id="form-admin-add">
            {{csrf_field()}}
            <div class="row cl">
                <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>重置密码：</label>
                <div class="formControls col-xs-8 col-sm-9">
                    <input id="" name="" type="text" class="input-text"
                           value="" placeholder="请输入重置密码">
                </div>
            </div>
            <div class="row cl">
                <div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-2">
                    <input class="btn btn-primary radius" type="submit" value="重置密码">
                    <button onClick="layer_close();" class="btn btn-default radius" type="button">取消</button>
                </div>
            </div>
        </form>
    </div>
@endsection

@section('script')
    <script type="text/javascript">

        $(function () {

        });


    </script>
    <style>
        .row{
            margin-left: -2rem;
        }
    </style>
@endsection