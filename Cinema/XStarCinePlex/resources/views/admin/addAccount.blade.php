<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no"
        name="viewport">
    <meta name="csrf-token" content="{{ csrf_token() }}">
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
                                        <a href="{{ url('admin/account') }}">
                                            <button type="button" class="btn btn-dark"><i class="fa fa-arrow-left"></i>
                                                Back</button>
                                        </a>
                                    </div>
                                    <div class="card-body">

                                        <form id="form-addAdmin" enctype="multipart/form-data" method="POST"
                                            action="{{ url('admin/accountAdmin') }}">
                                            @csrf
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="">Name</label>
                                                    <input type="text" class="form-control" name="textName"
                                                        id="textName">
                                                    <span class="text-danger">@error('textName')
                                                            {{ $message }}
                                                        @enderror</span>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for=""> Phone</label>
                                                    <input type="phone" class="form-control" name="textPhone"
                                                        id="textPhone">
                                                    <span class="text-danger">@error('textPhone')
                                                            {{ $message }}
                                                        @enderror</span>
                                                </div>
                                            </div>

                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="">Email</label>
                                                    <input type="email" class="form-control" name="textEmail"
                                                        id="textEmail">
                                                    <span class="text-danger">@error('textEmail')
                                                            {{ $message }}
                                                        @enderror</span>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for=""> Password</label>
                                                    <input type="password" class="form-control" name="textPassword"
                                                        id="textPassword">
                                                    <span class="text-danger">@error('textEmail')
                                                            {{ $message }}
                                                        @enderror</span>
                                                </div>
                                            </div>

                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="">Date Of Birth</label>
                                                    <input type="date" class="form-control" name="textDate"
                                                        id="textDate">
                                                    <span class="text-danger">@error('textDate')
                                                            {{ $message }}
                                                        @enderror</span>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="">Image</label>
                                                    <input type="file" class="form-control-file" name="textImage"
                                                        id="textImage">
                                                    <span class="text-danger">@error('textImage')
                                                            {{ $message }}
                                                        @enderror</span>
                                                </div>
                                            </div>

                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="">Prefer site</label>
                                                    <select class="form-control" name="textPrefer" id="P-select">
                                                        <option>X-star Ho Chi Minh</option>
                                                        <option>X-star Hai Phong</option>
                                                        <option>X-star Ha Noi</option>
                                                        <option>X-star Da Nang</option>
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="">Gender</label>
                                                    <input type="radio" class="ml-2" name="gender" value="Female"
                                                        {{ old('gender') == 'Female' ? 'checked' : '' }}>Female
                                                    <input type="radio" class="ml-2" name="gender" value="Male"
                                                        {{ old('gender') == 'Male' ? 'checked' : '' }}>Male
                                                    <span class="text-danger">@error('gender')
                                                            {{ $message }}
                                                        @enderror</span>

                                                </div>
                                            </div>



                                            <div class="form-group">
                                                <input type="hidden" name="action" id="action">
                                                <input type="hidden" name="hidden-Id" id="hidden_Id">
                                                <button type="submit" class="btn btn-dark float-right"
                                                    name="action_button" id="action_button" value="Add"> Add <i
                                                        class="fa fa-plus"></i>
                                                </button>
                                            </div>
                                    </div>
                                    </form>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/additional-methods.min.js"></script>
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
    <!---Script data table-->
    {{-- <script>
        if ($("#form-addAdmin").length > 0) {

            $("#form-addAdmin").validate({
                    submitHandler: function(form) {
                        $.ajaxSetup({
                            headers: {
                                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
                            },
                        });
                        $.ajax({
                            url: "{{ url('admin/accountAdmin') }}",
                            method: 'POST',
                            data: new FormData(this),
                            contentType: false,
                            cache: false,
                            processData: false,
                            dataType: "json",
                            success: function(data) {
                                var html = '';
                                if (data.errors) {
                                    html = '<div class="alert alert-danger">';
                                    for (var count = 0; count < p data.errors.length; count++) {
                                        html += 'p' + data.errors[count] + '</p>';
                                    }
                                    html += '</div>';
                                }
                                if (data.success) {
                                    html = '<div class="alert alert-success">' + data.success +
                                        '</div>';
                                    $('#form-addAdmin')[0].reset();
                                }
                            }
                        })
                    });
            }
    </script> --}}
</body>

</html>
