<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{ asset('img/avatar04.png') }}" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
                <p>{{ Auth::user()->FirstName }} {{ substr(Auth::user()->MiddleName, 0, 1) }}. {{ Auth::user()->LastName }}</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
			<span class="input-group-btn">
				<button type='submit' name='seach' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
			</span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li class="treeview">
                <a href="/">
                    <i class="fa fa-home"></i><span>Home</span>
                </a>
            </li>
            <li class="treeview">
                <a href="/exams">
                    <i class="fa fa-newspaper-o"></i><span>Exams</span>
                </a>
            </li>
            <li class="calendar">
                <a href="/events">
                    <i class="fa fa-calendar"></i><span>Events Calendar</span>
                </a>
            </li>
            <li class="treeview">
                <a href="/mail">
                    <i class="fa fa-envelope-o"></i><span>Mail</span>
                </a>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>