
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

                        <li class="nav-item ">
                            <a href="/admin/profile" class="nav-link {{Request::is('admin/profile*')?'active':''}}">
                                <i class="nav-icon fas fa-chart-pie"></i>
                                <p>
                                    Web Profile
                                    <!-- <span class="right badge badge-danger">New</span> -->
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="/admin/tentang" class="nav-link {{Request::is('admin/tentang*')?'active':''}}">
                                <i class="nav-icon fas fa-columns"></i>
                                <p>
                                    Tentang
                                    <!-- <span class="right badge badge-danger">New</span> -->
                                </p>
                            </a>
                        </li>


                        <li class="nav-item">
                            <a href="/admin/solusi" class="nav-link {{Request::is('admin/solusi*')?'active':''}}">
                                <i class="nav-icon fas fa-columns"></i>
                                <p>
                                    Solusi
                                    <!-- <span class="right badge badge-danger">New</span> -->
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="/admin/project" class="nav-link {{Request::is('admin/project*')?'active':''}}">
                                <i class="nav-icon far fa-image"></i>
                                <p>
                                    Proyek
                                    <!-- <span class="right badge badge-danger">New</span> -->
                                </p>
                            </a>
                        </li>


                        <li class="nav-item">
                            <a href="/admin/kontak" class="nav-link {{Request::is('admin/kontak*')?'active':''}}">
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