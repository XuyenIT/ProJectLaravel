<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no"
        name="viewport">
    <title>soengsouy.com</title>
    <!--favicon-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css"
        integrity="sha512-P5MgMn1jBN01asBgU0z60Qk4QxiXo86+wlFahKrsQf37c9cro517WzVSPPV1tDKzhku2iJ2FVgL67wG03SGnNA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    {{-- <link rel="stylesheet" href="{{ asset('font_end/Dasboard_Phuc/modules/bootstrap/css/bootstrap.min.css') }}"> --}}
    <link rel="stylesheet" href="{{ asset('font_end/Dasboard_Phuc/modules/ionicons/css/ionicons.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('font_end/Dasboard_Phuc/modules/fontawesome/web-fonts-with-css/css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('font_end/Dasboard_Phuc/modules/summernote/summernote-lite.css') }}">
    <link rel="stylesheet" href="{{ asset('font_end/Dasboard_Phuc/modules/flag-icon-css/css/flag-icon.min.css') }}">
    <link rel="stylesheet" href="{{ asset('font_end/Dasboard_Phuc/css/demo.css') }}">
    <link rel="stylesheet" href="{{ asset('font_end/Dasboard_Phuc/css/style.css') }}">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">

</head>

<body>
    <div id="app">
        <div class="main-wrapper">
            <!--Header nha--->
            <div class="navbar-bg"></div>
            <nav class="navbar navbar-expand-lg main-navbar">
                <!---Thanh search nha-->
                <form class="form-inline mr-auto">
                    <ul class="navbar-nav mr-3">
                        <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i
                                    class="ion ion-navicon-round"></i></a></li>
                        <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i
                                    class="ion ion-search"></i></a></li>
                    </ul>
                    <div class="search-element">
                        <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn" type="submit"><i class="ion ion-search"></i></button>
                    </div>
                </form>
                <!---Het Thanh search nha-->

                <!--Phan notification nha-->
                <ul class="navbar-nav navbar-right">
                    <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown"
                            class="nav-link notification-toggle nav-link-lg beep"><i
                                class="ion ion-ios-bell-outline"></i></a>
                        <div class="dropdown-menu dropdown-list dropdown-menu-right">
                            <div class="dropdown-header">Notifications
                                <div class="float-right"> <a href="#">View All</a> </div>
                            </div>
                            <div class="dropdown-list-content">
                                <a href="#" class="dropdown-item dropdown-item-unread"> <img alt="image"
                                        src="../dist/img/avatar/avatar-1.jpeg" class="rounded-circle dropdown-item-img">
                                    <div class="dropdown-item-desc"> <b>Kusnaedi</b> has moved task <b>Fix bug
                                            header</b> to <b>Done</b>
                                        <div class="time">10 Hours Ago</div>
                                    </div>
                                </a>
                                <a href="#" class="dropdown-item dropdown-item-unread"> <img alt="image"
                                        src="../dist/img/avatar/avatar-2.jpeg" class="rounded-circle dropdown-item-img">
                                    <div class="dropdown-item-desc"> <b>Soeng Souy</b> has moved task <b>Fix bug
                                            footer</b> to <b>Progress</b>
                                        <div class="time">12 Hours Ago</div>
                                    </div>
                                </a>
                                <a href="#" class="dropdown-item"> <img alt="image"
                                        src="../dist/img/avatar/avatar-3.jpeg" class="rounded-circle dropdown-item-img">
                                    <div class="dropdown-item-desc"> <b>Agung Ardiansyah</b> has moved task <b>Fix bug
                                            sidebar</b> to <b>Done</b>
                                        <div class="time">12 Hours Ago</div>
                                    </div>
                                </a>
                                <a href="#" class="dropdown-item"> <img alt="image"
                                        src="../dist/img/avatar/avatar-4.jpeg" class="rounded-circle dropdown-item-img">
                                    <div class="dropdown-item-desc"> <b>Ardian Rahardiansyah</b> has moved task <b>Fix
                                            bug navbar</b> to <b>Done</b>
                                        <div class="time">16 Hours Ago</div>
                                    </div>
                                </a>
                                <a href="#" class="dropdown-item"> <img alt="image"
                                        src="../dist/img/avatar/avatar-5.jpeg" class="rounded-circle dropdown-item-img">
                                    <div class="dropdown-item-desc"> <b>Alfa Zulkarnain</b> has moved task <b>Add
                                            logo</b> to <b>Done</b>
                                        <div class="time">Yesterday</div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </li>
                    <!--het phan notification nha-->

                    <!--Phan logout nha-->
                    <li class="dropdown">
                        <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg"> <i
                                class="ion ion-android-person d-lg-none"></i>
                            <div class="d-sm-none d-lg-inline-block">Hi, X-Start Admin</div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="profile.html" class="dropdown-item has-icon"> <i
                                    class="ion ion-android-person"></i> Profile </a>
                            <a href="#" class="dropdown-item has-icon"> <i class="ion ion-log-out"></i> Logout </a>
                        </div>
                    </li>
                    <!---Het phan logout nha-->
                </ul>
            </nav>
            <!--bat dau slidebar canh ben nha--->
            <div class="main-sidebar">
                <aside id="sidebar-wrapper">
                    <div class="sidebar-brand"> <a href="index.html"><img alt="image"
                                src="{{ asset('font_end/Dasboard_Phuc/img/main-logo.png') }}"
                                style="width:200px;height:150px;"></a> </div>
                    <div class="sidebar-user">
                        {{-- <div class="sidebar-user-picture"> <img alt="image" src="{{ asset('font_end/Dasboard_Phuc/img/main-logo.png') }}"> </div> --}}
                        {{-- <div class="sidebar-user-details">
							<div class="user-name">Soeng Souy</div>
							<div class="user-role"> Administrator </div>
						</div> --}}
                    </div>
                    <!--bat dau phan the cac canh ben nha-->
                    <ul class="sidebar-menu">
                        <li class="menu-header">Dashboard</li>
                        <li> <a href="index.html"><i class="ion ion-speedometer"></i><span>Dashboard</span></a> </li>
                        <li class="menu-header">Manager</li>
                        <li> <a href="#" class="has-dropdown"><i
                                    class="ion ion-ios-albums-outline"></i><span>Components</span></a>
                            <ul class="menu-dropdown">
                                <li><a href="general.html"><i class="ion ion-ios-circle-outline"></i> Basic</a></li>
                                <li><a href="components.html"><i class="ion ion-ios-circle-outline"></i> Main
                                        Components</a></li>
                                <li><a href="buttons.html"><i class="ion ion-ios-circle-outline"></i> Buttons</a></li>
                                <li><a href="toastr.html"><i class="ion ion-ios-circle-outline"></i> Toastr</a></li>
                            </ul>
                        </li>
                        <li> <a href="#" class="has-dropdown"><i class="ion ion-flag"></i><span>Icons</span></a>
                            <ul class="menu-dropdown">
                                <li><a href="ion-icons.html"><i class="ion ion-ios-circle-outline"></i> Ion Icons</a>
                                </li>
                                <li><a href="fontawesome.html"><i class="ion ion-ios-circle-outline"></i> Font
                                        Awesome</a></li>
                                <li><a href="flag.html"><i class="ion ion-ios-circle-outline"></i> Flag</a></li>
                            </ul>
                        </li>
                        <li class="active"> <a href="table.html"><i
                                    class="ion ion-clipboard"></i><span>Account</span></a>
                        </li>
                        <li> <a href="chartjs.html"><i class="ion ion-stats-bars"></i><span>Chart.js</span></a> </li>
                        <li> <a href="simple.html"><i class="ion ion-ios-location-outline"></i><span>Google
                                    Maps</span></a> </li>
                        <li> <a href="#" class="has-dropdown"><i
                                    class="ion ion-ios-copy-outline"></i><span>Examples</span></a>
                            <ul class="menu-dropdown">
                                <li><a href="login.html"><i class="ion ion-ios-circle-outline"></i> Login</a></li>
                                <li><a href="register.html"><i class="ion ion-ios-circle-outline"></i> Register</a></li>
                                <li><a href="forgot.html"><i class="ion ion-ios-circle-outline"></i> Forgot Password</a>
                                </li>
                                <li><a href="reset.html"><i class="ion ion-ios-circle-outline"></i> Reset Password</a>
                                </li>
                                <li><a href="404.html"><i class="ion ion-ios-circle-outline"></i> 404</a></li>
                            </ul>
                        </li>
                        <li class="menu-header">More</li>
                        <li> <a href="#" class="has-dropdown"><i class="ion ion-ios-nutrition"></i> Click Me</a>
                            <ul class="menu-dropdown">
                                <li><a href="#"><i class="ion ion-ios-circle-outline"></i> Menu 1</a></li>
                                <li><a href="#" class="has-dropdown"><i class="ion ion-ios-circle-outline"></i> Menu
                                        2</a>
                                    <ul class="menu-dropdown">
                                        <li><a href="#"><i class="ion ion-ios-circle-outline"></i> Child Menu 1</a></li>
                                        <li><a href="#"><i class="ion ion-ios-circle-outline"></i> Child Menu 2</a></li>
                                        <li><a href="#" class="has-dropdown"><i class="ion ion-ios-circle-outline"></i>
                                                Child Menu 3</a>
                                            <ul class="menu-dropdown">
                                                <li><a href="#"><i class="ion ion-ios-circle-outline"></i> Child Menu
                                                        1</a></li>
                                                <li><a href="#"><i class="ion ion-ios-circle-outline"></i> Child Menu
                                                        2</a></li>
                                                <li><a href="#"><i class="ion ion-ios-circle-outline"></i> Child Menu
                                                        3</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#"><i class="ion ion-ios-circle-outline"></i> Child Menu 4</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li> <a href="#"><i class="ion ion-heart"></i> Badges <div class="badge badge-primary">10</div>
                            </a> </li>
                        <li> <a href="credits.html"><i class="ion ion-ios-information-outline"></i> Credits</a> </li>
                    </ul>
                </aside>
            </div>
            <!---header end nha--->


            <!---Content cua DashBoar nha-->
            <div class="main-content">
                <section class="section">
                    <h1 class="section-header">
                        <div>Manager </div>
                    </h1>

                    <div class="section-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4>Account</h4>
                                        <a href="{{ url('admin/accountAdd') }}">
                                            <button type="button" class="btn btn-dark">
                                                <i class="fa fa-fw fa-plus-circle"></i> Create
                                                New
                                                Admintration</button>

                                        </a>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table id="table-account" class="table table-striped table-bordered"
                                                style="width:100%">
                                                <thead>
                                                    <th>ID</th>
                                                    <th>Name</th>
                                                    <th>Email</th>
                                                    <th>Phone</th>
                                                    <th>Gender</th>
                                                    <th>Birth_Date</th>
                                                    <th>Prefer Site</th>
                                                    <th>Role</th>
                                                    <th>Image</th>
                                                    <th>Action</th>
                                                </thead>
                                              <tbody>
                                                    @foreach ($account as $a)
                                                        <tr>
                                                            <td>{{ $a->Account_Id }}</td>
                                                            <td>{{ $a->fullname }}</td>
                                                            <td>{{ $a->email }}</td>
                                                            <td>{{ $a->phone }}</td>
                                                            <td>{{ $a->gender }}</td>
                                                            <td>{{ $a->birth }}</td>
                                                            <td>{{ $a->preferSite }}</td>
                                                            <td>{{ $a->role == 1 ? 'Admin' : 'User' }}</td>
                                                            <td><img src="{{ URL::to('/') }}/uploadPicture/{{ $a->image }}" class="img-thumbnail" width="75" /></td>
                                                            <td>
                                                                <a href="{{ url("admin/accountEdit/{$a->email}") }}"   class="btn btn-primary btn-action mr-1" data-toggle="tooltip" title="Edit"><i class="ion ion-edit"></i></a>
                                                                <a href="{{ url("admin/accountDelete/{$a->email}") }}" class="btn btn-danger btn-action delete-confirm" data-toggle="tooltip" title="Delete"><i class="ion ion-trash-b"></i></a>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>




                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </section>
            </div>
            <!--het content cua Dash Board nha-->

            <!--Bat dau footer nha-->
            <footer class="main-footer">
                <div class="footer-left"> Copyright &copy; X-Star Cineplex 2021
                    <div class="bullet"></div> Design By <a href="https://soengsouy.com/">X-Star</a>
                </div>
                <div class="footer-right"></div>
            </footer>
            <!--Het footer nha-->

        </div>
    </div>



    {{-- <script src="{{ asset('font_end/Dasboard_Phuc/modules/jquery.min.js') }}"></script> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js"
        integrity="sha512-n/4gHW3atM3QqRcbCn6ewmpxcLAHGaDjpEBu4xZd47N0W2oQ+6q7oc3PXstrJYXcbNU1OHdQ1T7pAP+gi5Yu8g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"
        integrity="sha512-XKa9Hemdy1Ui3KSGgJdgMyYlUg1gM+QhL6cnlyTe2qzMCYm4nAZ1PsVerQzTTXzonUR+dmswHqgJPuwCq1MaAg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{ asset('font_end/Dasboard_Phuc/modules/popper.js') }}"></script>
    <script src="{{ asset('font_end/Dasboard_Phuc/modules/tooltip.js') }}"></script>
    <script src="{{ asset('font_end/Dasboard_Phuc/modules/nicescroll/jquery.nicescroll.min.js') }}"></script>
    <script src="{{ asset('font_end/Dasboard_Phuc/modules/scroll-up-bar/dist/scroll-up-bar.min.js') }}"></script>
    <script src="{{ asset('font_end/Dasboard_Phuc/js/sa-functions.js') }}"></script>
    <script src="{{ asset('font_end/Dasboard_Phuc/modules/chart.min.js') }}"></script>
    <script src="{{ asset('font_end/Dasboard_Phuc/modules/summernote/summernote-lite.js') }}"></script>
    <script src="{{ asset('font_end/Dasboard_Phuc/js/scripts.js') }}"></script>
    <script src="{{ asset('font_end/Dasboard_Phuc/js/custom.js') }}"></script>
    <script src="{{ asset('font_end/Dasboard_Phuc/js/demo.js') }}"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!--Script data table-->
  {{--   <script>
            $(document).ready(function() {
             $('#table-account').DataTable({
                   processing: true,
                   serverSide: true,
                  ajax: {
                       url: '{{ route('account.index') }}'
               },
                     columns: [{
                            data: 'Account_Id',
                            name: 'Account_Id'
                        },
                       {
                           data: 'fullname',
                        name: 'fullname'
                        },
                    {
                            data: 'email',
                            name: 'email'
                        },
                        {
                           data: 'phone',
                          name: 'phone'
                      },
                         {
                             data: 'gender',
                            name: 'gender'
                       },
                        {
                            data: 'birth',
                             name: 'birth'
                        },
                        {
                         data: 'preferSite',
                            name: 'prefersite'
                        },

                       {
                            data: 'role',
                            name: 'role'
                       },
                         {
                             data: 'image',
                            name: 'image',
                    render: function (data, type, full, meta) {
                          return "<img src={{ URL::to('/') }}/uploadPicture/"+ data + "width='70' class='img-thumbnail'/>";
                            },
                            orderable:false
                         },
                         {
                            data: 'action',
                             name: 'action',
                             orderable: false,
                             searchable: false
                        }
                    ]
                 });
        });
    </script> --}}

    <script type="text/javascript">
        $(document).ready(function() {
            $('#table-account').DataTable();
            $('.delete-confirm').on('click', function(e){
                e.preventDefault();
                const url = $(this).attr('href');
                swal({
                    title: "Are you sure?",
                    text: "This record and it is detalis will be permananly deleted!",
                    icon: 'warning',
                    buttons: ["Cancel", "Yes!"],
                }).then(function(value){
                    if (value) {
                        window.location.href = url;
                    }
                });
            });
        });
    </script>
</body>

</html>
