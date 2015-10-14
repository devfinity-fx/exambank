@extends('system.app')

@section('styles')
    <!-- fullCalendar 2.2.5-->
    {!! Html::style('plugins/fullcalendar/fullcalendar.min.css') !!}
    {!! Html::style('plugins/fullcalendar/fullcalendar.print.css') !!}
    {!! Html::style('plugins/iCheck/flat/red.css') !!}
@stop

@section('content')
    system index
@stop

@section('scripts')
    <!-- fullCalendar 2.2.5-->
    {!! Html::script('plugins/fastclick/fastclick.min.js') !!}
    <!-- Slimscroll -->
    {!! Html::script('plugins/slimScroll/jquery.slimscroll.min.js') !!}
    <!-- iCheck -->
    {!! Html::script('plugins/iCheck/icheck.min.js') !!}
    <script>
        $(function () {
            $('input').iCheck({
                checkboxClass: 'icheckbox_flat-red',
                radioClass: 'iradio_flat-red',
                increaseArea: '20%' // optional
            });
        });
    </script>
@stop