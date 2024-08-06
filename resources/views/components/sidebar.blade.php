
    <!-- main left menu -->
    <div id="left-sidebar" class="sidebar">
        <button type="button" class="btn-toggle-offcanvas"><i class="fa fa-arrow-left"></i></button>
        <div class="sidebar-scroll">
            <div class="user-account">
                <img src="{{asset('assets/logo/avt.jpeg')}}" class="rounded-circle user-photo" alt="User Profile Picture">
                <div class="dropdown">
                    <span>Welcome,</span>
                    <a href="javascript:void(0);" class="dropdown-toggle user-name" data-toggle="dropdown"><strong></strong></a>
                    <ul class="dropdown-menu dropdown-menu-right account">
                        <li><a
                            onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();"><i class="icon-power"></i>Logout</a></li>
                        <form id="logout-form" method="POST" class="d-none">
                            @csrf
                        </form>
                    </ul>
                </div>
                <hr>
                <ul class="row list-unstyled">
                    <li class="col-6">
                        <small>In-Progress</small>
                        <h6>

                        </h6>
                    </li>
                    <li class="col-6">
                        <small>RFA-Aprroved</small>
                        <h6></h6>
                    </li>
                </ul>
            </div>
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" style="background-color: #2D3A89">
                <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#menu">Menu</a></li>

            </ul>

            <!-- Tab panes -->
            <div class="tab-content padding-0">
                <div class="tab-pane active" id="menu">
                    <nav id="left-sidebar-nav" class="sidebar-nav">
                        <ul id="main-menu" class="metismenu li_animation_delay">
                            <li>
                                <a href="#Tables" class="has-arrow"><i class="fa fa-dashboard"></i><span>Dashboard</span></a>
                                <ul>
                                    <li >
                                        <a >Statistics</a>
                                    </li>

                                    <li>
                                        <a>Demographic Vendors</a>
                                    </li>
                                </ul>
                            </li>


                            <li>
                                <a href="#Tables" class="has-arrow"><i class="fa fa-bookmark-o"></i><span>Customers</span></a>
                                <ul>

                                    <li>
                                        <a href="{{route('customers.index') }}">View</a>
                                    </li>
                                    <li>
                                        <a>Approved</a>
                                    </li>

                                </ul>
                            </li>


                        </ul>


                    </nav>
                </div>



            </div>
        </div>
    </div>
