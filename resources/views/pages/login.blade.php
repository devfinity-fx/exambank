<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Exam Bank | Lyceum of the Philippines University</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>


    @include('styles')

    {!! Html::style('plugins/iCheck/flat/red.css') !!}


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    {!! Html::script('https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js') !!}
    {!! Html::script('https://oss.maxcdn.com/respond/1.4.2/respond.min.js') !!}
    <![endif]-->
</head>
<body class="skin-red-light layout-boxed">
<div class="login-box">
    <div class="login-logo">
        <a href="#"><strong>Exam</strong><b>Bank</b></a>
    </div><!-- /.login-logo -->
    <div class="login-box-body">
        @if ($errors->any())
            <div class="alert alert-danger alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-info"></i> Error!</h4>
                @foreach ($errors->all() as $error)
                    <article>{{ $error }}</article>
                @endforeach
            </div>
        @else
            <div class="alert alert-info">
                <h4><i class="icon fa fa-info"></i> {{ $data['header'] }}</h4>
                {{ $data['message'] }}
            </div>
        @endif



        {!! Form::open(['url' => 'login']) !!}
        <div class="form-group has-feedback">
            {!! Form::text('Email', null, ['class'=>'form-control', 'placeholder'=>'Username']) !!}
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
            {!! Form::password('Password', ['class'=>'form-control', 'placeholder'=>'Password']) !!}
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        </div>
        <div class="row">
            <div class="col-xs-8">
                <div class="checkbox icheck">
                    <label>
                        {!! Form::checkbox('Remember', null) !!}
                        Remember Me
                    </label>
                </div>
            </div><!-- /.col -->
            <div class="col-xs-4">
                {!! Form::submit('Sign In', ['class'=>'btn btn-danger btn-block btn-flat']) !!}
            </div><!-- /.co     l -->
        </div>
        {!! Form::close() !!}
        <a href="#">I forgot my password</a><br>

    </div><!-- /.login-box-body -->
</div><!-- /.login-box -->

<!-- jQuery 2.1.4 -->
{!! Html::script('js/jquery.min.js') !!}
<!-- Bootstrap 3.3.2 JS -->
{!! Html::script('js/bootstrap.min.js') !!}
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
</body>
</html>