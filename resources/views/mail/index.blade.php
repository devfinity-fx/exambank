@extends('mail.app')

@section('styles')
    <!-- fullCalendar 2.2.5-->
    {!! Html::style('plugins/fullcalendar/fullcalendar.min.css') !!}
    {!! Html::style('plugins/fullcalendar/fullcalendar.print.css') !!}
    {!! Html::style('plugins/iCheck/flat/red.css') !!}
@stop

@section('content')
 <div class="col-md-9">
     <div class="row">
         <div class="col-lg-4 col-xs-6">
             <!-- small box -->
             <div class="small-box bg-green">
                 <div class="inner">
                     <h3>150</h3>
                     <p>Unread Messages</p>
                 </div>
                 <div class="icon">
                     <i class="ion ion-android-mail"></i>
                 </div>
                 <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
             </div>
         </div><!-- ./col -->
         <div class="col-lg-4 col-xs-6">
             <!-- small box -->
             <div class="small-box bg-primary">
                 <div class="inner">
                     <h3>0</h3>
                     <p>Pending Submissions</p>
                 </div>
                 <div class="icon">
                     <i class="ion ion-document"></i>
                 </div>
                 <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
             </div>
         </div><!-- ./col -->
         <div class="col-lg-4 col-xs-6">
             <!-- small box -->
             <div class="small-box bg-maroon">
                 <div class="inner">
                     <h3>2</h3>
                     <p>Copy Requests</p>
                 </div>
                 <div class="icon">
                     <i class="ion ion-ios-copy-outline"></i>
                 </div>
                 <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
             </div>
         </div><!-- ./col -->
     </div><!-- /.row -->
     <!-- quick email widget -->
     <div class="box box-info">

         <div class="box-header">
             <i class="fa fa-envelope"></i>
             <h3 class="box-title">Quick Email</h3>
             <!-- tools box -->
             <div class="pull-right box-tools">
                 <button class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
             </div><!-- /. tools -->
         </div>
         <div class="box-body">
             <form action="#" method="post">
                 <div class="form-group">
                     <input type="email" class="form-control" name="emailto" placeholder="Email to:"/>
                 </div>
                 <div class="form-group">
                     <input type="text" class="form-control" name="subject" placeholder="Subject"/>
                 </div>
                 <div>
                     <textarea class="textarea" placeholder="Message" style="width: 100%; height: 125px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                 </div>
             </form>
         </div>
         <div class="box-footer clearfix">
             <button class="pull-right btn btn-default" id="sendEmail">Send <i class="fa fa-arrow-circle-right"></i></button>
         </div>
     </div>
 </div><!-- /.col -->
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
        $(".checkbox-toggle").click(function () {
            var clicks = $(this).data('clicks');
            if (clicks) {
                //Uncheck all checkboxes
                $(".mailbox-messages input[type='checkbox']").iCheck("uncheck");
                $(".fa", this).removeClass("fa-check-square-o").addClass('fa-square-o');
            } else {
                //Check all checkboxes
                $(".mailbox-messages input[type='checkbox']").iCheck("check");
                $(".fa", this).removeClass("fa-square-o").addClass('fa-check-square-o');
            }
            $(this).data("clicks", !clicks);
        });

        //Handle starring for glyphicon and font awesome
        $(".mailbox-star").click(function (e) {
            e.preventDefault();
            //detect type
            var $this = $(this).find("a > i");
            var glyph = $this.hasClass("glyphicon");
            var fa = $this.hasClass("fa");

            //Switch states
            if (glyph) {
                $this.toggleClass("glyphicon-star");
                $this.toggleClass("glyphicon-star-empty");
            }

            if (fa) {
                $this.toggleClass("fa-star");
                $this.toggleClass("fa-star-o");
            }
        });
    </script>
@stop