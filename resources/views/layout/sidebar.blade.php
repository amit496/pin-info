<div class="left side-menu">
    <button type="button" class="button-menu-mobile button-menu-mobile-topbar open-left waves-effect">
        <i class="ion-close"></i>
    </button>

    <!-- LOGO -->
    <div class="topbar-left">
        <div class="text-center bg-logo">
            <a href="index.html" class="logo"><i class="mdi mdi-bowling text-success"></i> Zoogler</a>
            <!-- <a href="index.html" class="logo"><img src="assets/images/logo.png" height="24" alt="logo"></a> -->
        </div>
    </div>
    <div class="sidebar-user">
        <img src="assets/images/users/avatar-6.jpg" alt="user" class="rounded-circle img-thumbnail mb-1">
        <h6 class="">Admin</h6>
        <p class=" online-icon text-dark"><i class="mdi mdi-record text-success"></i>online</p>
        <ul class="list-unstyled list-inline mb-0 mt-2">
            <li class="list-inline-item">
                <a href="#" class="" data-toggle="tooltip" data-placement="top" title="Profile"><i class="dripicons-user text-purple"></i></a>
            </li>
            <li class="list-inline-item">
                <a href="#" class="" data-toggle="tooltip" data-placement="top" title="Settings"><i class="dripicons-gear text-dark"></i></a>
            </li>
            <li class="list-inline-item">
                <a href="#" class="" data-toggle="tooltip" data-placement="top" title="Log out"><i class="dripicons-power text-danger"></i></a>
            </li>
        </ul>
    </div>

    <div class="sidebar-inner slimscrollleft">

        <div id="sidebar-menu">
            <ul>
                <li class="menu-title">Main</li>

                <li>
                    <a href="{{route('dashboard')}}" class="waves-effect">
                        <i class="dripicons-device-desktop"></i>
                        <span> Dashboard <span class="badge badge-pill badge-primary float-right">7</span></span>
                    </a>
                </li>
                <li>
                    <a href="calendar.html" class="waves-effect"><i class="dripicons-to-do"></i><span> Customer List </span></a>
                </li>
            </ul>
        </div>
        <div class="clearfix"></div>
    </div> <!-- end sidebarinner -->
</div>
<!-- Left Sidebar End -->
