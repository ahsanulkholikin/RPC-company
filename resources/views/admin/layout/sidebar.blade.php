
        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="{{route('dashboard')}}" class="brand-link">
                <img src="{{asset('assets')}}/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">RPC-Karya</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">



                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <!-- <li class="nav-item menu-open">
                            <a href="{{asset('assets')}}/#" class="nav-link active">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Dashboard
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{asset('assets')}}/./index.html" class="nav-link active">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Dashboard v1</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{asset('assets')}}/./index2.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Dashboard v2</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{asset('assets')}}/./index3.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Dashboard v3</p>
                                    </a>
                                </li>
                            </ul>
                        </li> -->
                        <li class="nav-item ">
                            <a href="/profile" class="nav-link {{Request::is('profile*')?'active':''}}">
                                <i class="nav-icon fas fa-chart-pie"></i>
                                <p>
                                    Web Profile
                                    <!-- <span class="right badge badge-danger">New</span> -->
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="/tentang" class="nav-link {{Request::is('tentang*')?'active':''}}">
                                <i class="nav-icon fas fa-columns"></i>
                                <p>
                                    Tentang
                                    <!-- <span class="right badge badge-danger">New</span> -->
                                </p>
                            </a>
                        </li>


                        <li class="nav-item">
                            <a href="/solusi" class="nav-link {{Request::is('solusi*')?'active':''}}">
                                <i class="nav-icon fas fa-columns"></i>
                                <p>
                                    Solusi
                                    <!-- <span class="right badge badge-danger">New</span> -->
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="/project" class="nav-link {{Request::is('project*')?'active':''}}">
                                <i class="nav-icon far fa-image"></i>
                                <p>
                                    Proyek
                                    <!-- <span class="right badge badge-danger">New</span> -->
                                </p>
                            </a>
                        </li>


                        <li class="nav-item">
                            <a href="/kontak" class="nav-link {{Request::is('kontak*')?'active':''}}">
                                <i class="nav-icon far fa-envelope"></i>
                                <p>
                                    Kontak
                                    <!-- <span class="right badge badge-danger">New</span> -->
                                </p>
                            </a>
                        </li>
                        <!-- <li class="nav-header">EXAMPLES</li> -->

                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>