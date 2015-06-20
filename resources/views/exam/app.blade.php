<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Exam Bank | Lyceum of the Philippines University</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>


    @include('styles')
    @yield('styles')



    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    {!! Html::script('https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js') !!}
    {!! Html::script('https://oss.maxcdn.com/respond/1.4.2/respond.min.js') !!}
    <![endif]-->

</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<body class="skin-red-light sidebar-mini">
<div class="wrapper">

    <!-- Main Header -->
    <header class="main-header">

        <!-- Logo -->
        <a href="/" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><strong>Ex</strong>B</span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><strong>Exam</strong>Bank</span>
        </a>
        @include('includes.navigation')
    </header>

    @include('includes.sidebar')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                {{ Str::title($params['View']) }}
                <small>{!! $params['Description'] !!}</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="./"><i class="fa fa-dashboard"></i> Main</a></li>
                <li><a href="/mail/">Mail</a></li>
                @if($params['View']!='Messages')
                    <li class="active">{{ Str::title($params['View']) }}</li>
                @endif
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                @include('mail.sidebar')
                @yield('content')
            </div> <!-- row -->
        </section>
    </div><!-- /.content-wrapper -->
    @include('includes.footer')
</div><!-- ./wrapper -->
@include('scripts')
@yield('scripts')
</body>
</html>