@extends('admin.layouts.admin_app')
@section('title')系统配置信息@stop
    @section('head')
    @stop
    @section('content')
        <div class="right_col" role="main">
            <div class="container">

                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h4>站点信息配置 <small>配置信息通过config('参数')在全局调用</small></h4>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <br />
                                <form id="demo-form2" onsubmit="return false;" data-parsley-validate class="form-horizontal form-label-left">
                                    {!! csrf_field() !!}

                                    <div class="form-group col-md-12">
                                        <label class="control-label col-md-2 col-sm-3 col-xs-12" for="tel">网站名称 <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-12 col-xs-12">
                                            <input type="text" id="host_url" name="host_url" required="required" value="" class="form-control col-md-7 col-xs-12">
                                        </div>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="email" class="control-label col-md-2 col-sm-3 col-xs-12">站点根网址</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input  class="form-control col-md-7 col-xs-12" id="keyword" type="text" value="" name="search_keyword">
                                        </div>
                                    </div>



                                    <div class="form-group col-md-12">
                                        <label for="remark" class="control-label col-md-2 col-sm-3 col-xs-12">首页网址</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input  class="form-control col-md-7 col-xs-12" type="text" id="lianxi" value="" name="lianxi">
                                        </div>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="remark" class="control-label col-md-2 col-sm-3 col-xs-12">主页链接名</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input id="remark" class="form-control col-md-7 col-xs-12" type="text" value=""   name="remark">
                                        </div>
                                    </div>

                                    <div class="form-group col-md-12">
                                        <label for="remark" class="control-label col-md-2 col-sm-3 col-xs-12">附件上传路径</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input id="remark" class="form-control col-md-7 col-xs-12" type="text" value=""   name="remark">
                                        </div>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="remark" class="control-label col-md-2 col-sm-3 col-xs-12">备案信息</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input id="remark" class="form-control col-md-7 col-xs-12" type="text" value=""   name="remark">
                                        </div>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="remark" class="control-label col-md-2 col-sm-3 col-xs-12">站点关键词</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input id="remark" class="form-control col-md-7 col-xs-12" type="text" value=""   name="remark">
                                        </div>
                                    </div>

                                    <div class="form-group col-md-12">
                                        <label for="remark" class="control-label col-md-2 col-sm-3 col-xs-12">版权信息</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <textarea class="resizable_textarea form-control" placeholder=""></textarea>
                                        </div>
                                    </div>

                                    <div class="form-group col-md-12">
                                        <label for="remark" class="control-label col-md-2 col-sm-3 col-xs-12">站点描述</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <textarea class="resizable_textarea form-control" placeholder=""></textarea>
                                        </div>
                                    </div>
                                    <div class="ln_solid"></div>
                                    <div class="form-group">
                                        <div class="col-md-5 col-sm-6 col-xs-12 col-md-offset-2">

                                            <button type="submit" name="submit"  id="tj_btn" class=" col-md-12 btn btn-primary submbtn">提交</button>
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @stop

    @section('libs')
            <!-- jQuery 2.2.3 -->
    <script src="/AdminLTE/plugins/jQuery/jquery-2.2.3.min.js"></script>
    <!-- Bootstrap 3.3.6 -->
    <script src="/AdminLTE/bootstrap/js/bootstrap.min.js"></script>
    <!-- Slimscroll -->
    <script src="/AdminLTE/plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="/AdminLTE/plugins/fastclick/fastclick.js"></script>
    <!-- AdminLTE App -->
    <script src="/AdminLTE/dist/js/app.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="/AdminLTE/dist/js/demo.js"></script>

@stop
