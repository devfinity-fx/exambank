@extends('mail.app')

@section('styles')
    <!-- fullCalendar 2.2.5-->
    {!! Html::style('plugins/fullcalendar/fullcalendar.min.css') !!}
    {!! Html::style('plugins/fullcalendar/fullcalendar.print.css') !!}
    <!-- bootstrap wysihtml5 - text editor -->
    {!! Html::style('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') !!}
@stop

@section('content')
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