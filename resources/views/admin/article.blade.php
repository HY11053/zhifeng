@extends('admin.layouts.admin_app')
@section('title')网站文档列表@stop
@section('head')
<style>.red{color: red;}</style>
@stop
@section('content')
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">文档列表管理</h3>
                        <div class="box-tools">
                            <div class="input-group input-group-sm" style="width: 335px;">
                                <input type="text" name="table_search" class="form-control pull-right" placeholder="Search" style="margin-top: 2px;">
                                <div class="input-group-btn">
                                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                                    <a href="{{action('Admin\ArticleController@Create')}}" style="color: #ffffff ; display: inline-block; padding-left: 3px;"><button  class="btn btn-default bg-blue"><i class="fa  fa-pencil-square"></i>添加文档</button></a>
                                    <a href="{{action('Admin\ArticleController@BrandCreate')}}" style="color: #ffffff; display: inline-block; padding-left: 3px;"><button  class="btn btn-default bg-purple"><i class="fa  fa-pencil-square-o"></i>添加品牌文档</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body table-responsive no-padding">
                        <table class="table table-hover">
                            <tr>
                                <th>ID</th>
                                <th>文章标题</th>
                                <th>栏目</th>
                                <th>发布时间</th>
                                <th>发布人</th>
                                <th>点击</th>
                                <th>状态</th>
                                <th>操作</th>
                            </tr>
                            @foreach($articles as $article)
                            <tr>
                                <td>{{$article->id}}</td>
                                <td>@if($article->ismake) {{$article->title}} @else <s class="red">{{$article->title}}</s> @endif @if($article->mid) <span class="fa fa-flag red"></span> @endif</td>
                                <td>{{$article->arctype->typename}}</td>
                                <td>{{$article->published_at}}</td>
                                <td>{{$article->write}}</td>
                                <td>{{$article->click}}</td>
                                <td>@if($article->ismake) 已审核 @else <s class="red">未审核</s> @endif</td>
                                <td class="astyle"><span class="label label-success"><a href="/{{$article->arctype->real_path}}/{{$article->id}}.shtml" target="_blank">预览</a></span><span class="label label-warning"><a href="/admin/article/edit/{{$article->id}}">编辑</a></span><span class="label label-danger"><a data-toggle="modal" data-target=".modal-sm{{$article->id}}" >删除</a></span>
                                    <div class="modal fade modal-sm{{$article->id}}" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel{{$article->id}}">
                                        <div class="modal-dialog modal-sm modal-s-m{{$article->id}}" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                                    <h5 class="modal-title" id="mySmallModalLabel{{$article->id}}">是否要删除当前文章</h5>
                                                </div>
                                                <div class="modal-body">
                                                    {{$article->title}}
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">返回</button>
                                                    <button type="button" class="btn btn-primary" id="btn-{{$article->id}}" onclick="AjDelete({{$article->id}},'modal-s-m{{$article->id}}')">删除</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                                @endforeach

                        </table>
                        {!! $articles->links() !!}

                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
        </div>

    <!-- /.content -->
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
    <script>
        $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            })
        });
        function startRequest() {
            window.location.reload()
        }
        function AjDelete (id,node) {
            var id = id;
            var node=node;
            $.ajax({
                //提交数据的类型 POST GET
                type:"POST",
                //提交的网址
                url:"/admin/article/delete/"+id,
                //提交的数据
                data:{"id":id,'node':node},
                //返回数据的格式
                datatype: "html",    //"xml", "html", "script", "json", "jsonp", "text".
                success:function (response, stutas, xhr) {
                    $(".modal-s-m"+id+" .modal-body").html(response);
                    $("#btn-"+id).attr("disabled","disabled");
                    setInterval("startRequest()", 600);

                }
            });
        }
    </script>
@stop


