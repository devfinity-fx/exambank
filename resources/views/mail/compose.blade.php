@extends('message.app')

@section('styles')
    <!-- fullCalendar 2.2.5-->
    {!! Html::style('plugins/fullcalendar/fullcalendar.min.css') !!}
    {!! Html::style('plugins/fullcalendar/fullcalendar.print.css') !!}
    <!-- bootstrap wysihtml5 - text editor -->
    {!! Html::style('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') !!}
@stop

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Compose
            <small>New message.</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="/"><i class="fa fa-dashboard"></i> Main</a></li>
            <li><a href="/messages">Messages</a></li>
            <li class="active">Compose</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-3">
                <div class="box box-solid">
                    <div class="box-header with-border">
                        <h3 class="box-title">Folders</h3>
                        <div class='box-tools'>
                            <button class='btn btn-box-tool' data-widget='collapse'><i class='fa fa-minus'></i></button>
                        </div>
                    </div>
                    <div class="box-body no-padding">
                        <ul class="nav nav-pills nav-stacked">
                            <li><a href="/messages"><i class="fa fa-inbox"></i> Inbox <span class="label label-primary pull-right">12</span></a></li>
                            <li><a href="/messages/sent"><i class="fa fa-envelope-o"></i> Sent</a></li>
                            <li><a href="/messages/drafts"><i class="fa fa-file-text-o"></i> Drafts</a></li>
                            <li><a href="/messages/junk"><i class="fa fa-filter"></i> Junk <span class="label label-waring pull-right">65</span></a></li>
                            <li><a href="/messages/trash"><i class="fa fa-trash-o"></i> Trash</a></li>
                        </ul>
                    </div><!-- /.box-body -->
                </div><!-- /. box -->
                <div class="box box-solid">
                    <div class="box-header with-border">
                        <h3 class="box-title">Labels</h3>
                        <div class='box-tools'>
                            <button class='btn btn-box-tool' data-widget='collapse'><i class='fa fa-minus'></i></button>
                        </div>
                    </div><!-- /.box-header -->
                    <div class="box-body no-padding">
                        <ul class="nav nav-pills nav-stacked">
                            <li><a href="#"><i class="fa fa-circle-o text-red"></i> Important</a></li>
                            <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> Promotions</a></li>
                            <li><a href="#"><i class="fa fa-circle-o text-light-blue"></i> Social</a></li>
                        </ul>
                    </div><!-- /.box-body -->
                </div><!-- /.box -->
            </div><!-- /.col -->
            <div class="col-md-9">
                <div class="box box-danger">
                    <div class="box-header with-border">
                        <h3 class="box-title">Compose New Message</h3>
                    </div><!-- /.box-header -->
                    <div class="box-body">
                        <div class="form-group">
                            <input class="form-control input-sm" placeholder="To:"/>
                        </div>
                        <div class="form-group">
                            <input class="form-control input-sm" placeholder="Cc:"/>
                        </div>
                        <div class="form-group">
                            <input class="form-control input-sm" placeholder="Subject:"/>
                        </div>
                        <div class="form-group">
                    <textarea id="compose-textarea" class="form-control" style="height: 300px">

                    </textarea>
                        </div>
                    </div><!-- /.box-body -->
                    <div class="box-footer">
                        <div class="pull-right">
                            <button class="btn btn-default btn-sm"><i class="fa fa-pencil"></i> Draft</button>
                            <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-envelope-o"></i> Send</button>
                        </div>
                        <button class="btn btn-default btn-sm"><i class="fa fa-times"></i> Discard</button>
                    </div><!-- /.box-footer -->
                </div><!-- /. box -->
            </div><!-- /.col -->
        </div><!-- /.row -->
    </section><!-- /.content -->
@stop

@section('scripts')
    <!-- iCheck -->
    {!! Html::script('plugins/iCheck/icheck.min.js') !!}
    <!-- Bootstrap WYSIHTML5 -->
    {!! Html::script('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') !!}

    <script>
        $(function () {
            //Add text editor
            $("#compose-textarea").wysihtml5();

            $('input').iCheck({
                checkboxClass: 'icheckbox_flat-red',
                radioClass: 'iradio_flat-red',
                increaseArea: '20%' // optional
            });

        });
    </script>
@stop