<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('font_end/Phuc/css/account.css') }}" type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href=" https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <!--datePicker css-->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <!--Datatables-->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap4.min.css">

  </head>
  <body>
      <div class="g-account">
          <div class="container">
                <div class="row">
                    <!--tab-->
                    <div class="col-md-3 col-sm-12 col-xs-12">
                        <div class="tab-account">
                            <ul class="nav nav-tabs flex-column">
                                <li class="nav-link text-danger font-weight-bold">MY X-STAR</li>
                                <li><a href="#" class="nav-link bg-secondary text-white my-1 box-red" >DASHBOARD</a></li>
                                <li><a href="#" class="nav-link bg-secondary text-white  my-1" >ACCOUNT DETAILS</a></li>
                                <li><a href="#" class="nav-link bg-secondary text-white  my-1">CARD</a></li>
                                <li><a href="#" class="nav-link bg-secondary text-white my-1">POINT</a></li>
                                <li><a href="#" class="nav-link bg-secondary text-white my-1">MY DEAL</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-9 col-sm-12 col-xs-12">
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="account1" >
                                <!--DashBoard-->
                                <div class="page-title bg-dark text-xl-center text-white font-weight-bold nav-link">DASHBOARD</div>
                                <div class="format-profile">
                                        <div class="my-account">
                                            <div class="row">
                                                <div class="col-md-3 col-sm-12 col-xs-12">
                                                    <div class="my-picture d-flex flex-column align-items-center">
                                                        <img src="https://images.pexels.com/photos/1037995/pexels-photo-1037995.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" class="img" alt="">
                                                        <p class="text-dark font-weight-bold">Hi, X-Star Member</p>
                                                     </div>
                                                </div>

                                                <div class="col-md-9 col-sm-12 col-xs-12">
                                                    <div class="box-account d-flex flex-row align-items-center">
                                                        <div class="box-member d-flex flex-column align-items-center">
                                                            <label for="" class="text-muted font-weight-bold">Member Status</label>
                                                            <img src="{{ asset('font_end/Phuc/img/account1.PNG') }}" alt="">
                                                        </div>
                                                        <div class="box-point d-flex flex-column align-items-center">
                                                            <label for="" class="text-muted font-weight-bold d-flex flex-column align-items-center">Points
                                                                <span class="text-dark font-weight-bold">0</span>
                                                            </label>

                                                                <a href="#" class="nav-link btn btn-primary btn-sm">View</a>

                                                        </div>
                                                        <div class="box-card d-flex flex-column align-items-center">
                                                            <label for="" class="text-muted font-weight-bold d-flex flex-column align-items-center">Cards
                                                                <span class="text-dark font-weight-bold">0</span>
                                                            </label>
                                                            <a href="#" class="nav-link btn btn-primary btn-sm" >View</a>
                                                        </div>
                                                    </div>

                                                </div>


                                            </div>
                                        </div>

                                    <div class="account-infor">
                                        <div class="account-title">
                                            <h2>Account Information</h2>
                                        </div>
                                        <div class="account-content">
                                            <div class="account-head">
                                                <h3>CONTACT INFORMATION</h3>
                                                <a href="#" class="btn">Edit</a>
                                            </div>
                                            <div class="account-box">
                                                <span>Name: Phung Van Phuc</span>
                                                <span>Email: phungvphuc1@gamil.com</span>
                                                <span>Online Id: phungvphuc1</span>
                                                <span>Phone:0905304560</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="tab-pane fade show" id="account2" >
                                <div class="page-title bg-dark text-xl-center text-white font-weight-bold nav-link">ACCOUNT DETAILS</div>
                                <!--update-->
                               <div class="form-update">
                                    <form action="#" method="POST">
                                        <div class="d-flex align-items-start py-3 border-bottom">
                                            <img src="https://images.pexels.com/photos/1037995/pexels-photo-1037995.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" class="img" alt="">
                                            <div class="pl-sm-4 pl-2" id="img-section"> <b>Profile Photo</b>
                                                <p>Selected your picture</p> <button class="btn button border"><b>Upload</b></button>
                                            </div>
                                        </div>
                                        <div class="py-2">
                                            <div class="row py-2">
                                                <div class="col-md-6"> <label for="Name">Name</label> <input type="text" class="bg-light form-control" placeholder="Steve"> </div>
                                                <div class="col-md-6 pt-md-0 pt-3"> <label for="eamil">Email</label> <input type="email" class="bg-light form-control" placeholder="steve_@email.com"> </div>
                                            </div>
                                            <div class="row py-2">
                                                <div class="col-md-6"> <label for="phone">Phone</label> <input type="tel" class="bg-light form-control" placeholder="+1 213-548-6015"> </div>
                                                <div class="col-md-6 pt-md-0 pt-3"> <label for="address">Street Address</label> <input type="tel" class="bg-light form-control" placeholder="70F Lý Chiêu Hoàng,P10,Q6 Quận 6"> </div>
                                            </div>
                                            <div class="row py-2">
                                                <div class="col-md-6">
                                                    <label for="Gender">Gender</label>
                                                    <select name="gender" id="gender" class="bg-light">
                                                        <option value="Male" selected>Male</option>
                                                        <option value="Female">Female</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-6 pt-md-0 pt-3" id="lang"> <label for="language">Prefer site</label>
                                                    <div class="arrow">
                                                        <select name="prefer" id="prefer" class="bg-light">
                                                            <option value="english" selected>X-star Ho Chi Minh</option>
                                                            <option value="english_us">X-star Ha Noi</option>
                                                            <option value="enguk">X-star Da Nang</option>
                                                            <option value="arab">X-star Hai Phong</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row py-2" id="change-password">
                                                <div class="col-md-12 form-inline ml-2 my-1">
                                                    <input type="checkbox"class="form-check-input" id="password-select"> <label for="" class="form-check-label text-danger">I want to change password</label>
                                                </div>
                                                <div class="col-md-6 change"> <label for="old_Password">Old Password</label> <input type="password" class="bg-light form-control" placeholder="******"> </div>
                                                <div class="col-md-6 pt-md-0 pt-3 change"> <label for="new_Password">New Password</label> <input type="password" class="bg-light form-control" placeholder="*******"> </div>
                                                <div class="col-md-6 change"> <label for="comfirm_Password">Comfirm Password</label> <input type="password" class="bg-light form-control" placeholder="******"> </div>
                                            </div>

                                            <div class="py-3 pb-4">
                                                <button class="btn btn-primary mr-3" type="submit">Save Changes</button>
                                                <button class="btn border button" type="reset">Cancel</button>
                                            </div>

                                    </form>
                               </div>
                                 </div>
                            </div>
                            <div class="tab-pane fade show" id="account3" >
                                <div class="page-title bg-dark text-xl-center text-white font-weight-bold nav-link">MEMBERSHIP-CARD</div>
                                <div class="card-manager">
                                    <div class="status-member">
                                        <div class="row">
                                            <div class="member-box  d-flex flex-row align-items-center">
                                                <div class="col-md-4 col-sm-12 col-xs-12 d-flex flex-column align-items-center">
                                                    <p>Current Status</p>
                                                    <img src="{{ asset('font_end/Phuc/img/account1.PNG') }}" class="img-fluid" alt="">
                                                </div>
                                                <div class="col-md-8 col-sm-12 col-xs-12 member2">
                                                    <img src="{{ asset('font_end/Phuc/img/card1.jpg') }}" alt="" class="img-fluid">
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="card-table">
                                        <div class="row">
                                            <div class="col-12">
                                                <table class="table table-bordered text-center">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">Card No.</th>
                                                            <th scope="col">Card Name</th>

                                                            <th scope="col">Register Date</th>
                                                            <th scope="col">Status</th>
                                                            <th scope="col">Report</th>
                                                        </tr>

                                                    </thead>
                                                    <tbody>
                                                       <tr>
                                                        <td>937-456-123</td>
                                                          <td>Membership-Star</td>

                                                          <td>28/12/2016</td>
                                                          <td>Star</td>
                                                          <td>
                                                              <!-- Button trigger modal -->
                                                              <button type="button" class="btn btn-dark btn-sm" data-toggle="modal" data-target="#modelId">
                                                                Lost
                                                              </button>

                                                              <!-- Modal -->
                                                              <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                                                                  <div class="modal-dialog" role="document">
                                                                      <div class="modal-content">
                                                                          <div class="modal-body">
                                                                            <div class="container">
                                                                                <div class="card">
                                                                                    <div class="card-header">
                                                                                        Send a Message
                                                                                    </div>
                                                                                    <div class="card-block">
                                                                                        <form role="form">
                                                                                            <div class="form-group col-lg-12">
                                                                                                <label class="form-control-label" for="form-group-input">Your Email</label>
                                                                                                <input type="email" class="form-control" id="form-group-input" name="email">
                                                                                            </div>
                                                                                            <div class="form-group col-lg-12">
                                                                                                <label class="form-control-label" for="form-group-input">Card No.</label>
                                                                                                <input type="text" class="form-control text-center" id="form-group-input" name="card-n0" value="937-456-123" disabled>
                                                                                            </div>

                                                                                            <div class="form-group col-lg-12">
                                                                                                <label class="form-control-label" for="form-group-input">Notes</label>
                                                                                                <textarea class="form-control" id="form-group-input" name="notes" rows="6"></textarea>
                                                                                            </div>
                                                                                        </form>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                          </div>
                                                                          <div class="modal-footer">
                                                                                <button type="submit" class="btn btn-primary">Send</button>
                                                                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Exit</button>

                                                                          </div>
                                                                      </div>
                                                                  </div>
                                                              </div>
                                                          </td>
                                                       </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade show" id="account4">
                                <div class="page-title bg-dark text-xl-center text-white font-weight-bold nav-link">POINTS</div>
                                <div class="point-pages">
                                    <h3 class="text-dark border-bottom">SUMMARY</h3>
                                    <div class="row point-content">
                                        <div class="col-md-4 col-sm-8 col-xs-8">
                                            <p>Total Spending 2021: <span>0 Đ</span></p>
                                            <p>Expected Points: <span>0 P</span></p>
                                            <p>Current Points: <span>0 P</span></p>
                                        </div>
                                        <div class="col-md-8 col-sm-8 col-xs-8 d-flex align-middle">
                                            <img src="{{ asset('font_end/Phuc/img/account-point1.jpg') }}" alt="" class="img-fluid">
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade show" id="account5" >
                                <div class="page-title bg-dark text-xl-center text-white font-weight-bold nav-link">MY DEAL</div>
                                <div class="my-deal">
                                    <div class="date-picker">
                                        <div class="row">
                                            <div class="col-md-6 col-sm-12 col-xs-12">
                                                <label for="" class="form-group">Form Date</label>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                      <span class="input-group-text bg-info text-white" id="basic-addon1"><i class="fas fa-calendar-alt"></i></span>
                                                    </div>
                                                    <input type="text" class="form-control" placeholder="Start date" readonly id="Startdate">
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12 col-xs-12">
                                                <label for="" class="form-group">To Date</label>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                      <span class="input-group-text bg-info text-white" id="basic-addon1"><i class="fas fa-calendar-alt"></i></span>
                                                    </div>
                                                    <input type="text" class="form-control" placeholder="End date" readonly id="Enddate">
                                                  </div>
                                            </div>
                                        </div>
                                        <div class="button-date">
                                            <button id="Filter" class="btn btn-outline-info btn-sm">Filter</button>
                                            <button id="reset" class="btn btn-outline-warning btn-sm">Reset</button>
                                        </div>
                                    </div>
                                    <div class="table-deal mt-5">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="table-responsive">
                                                    <table class="table table-striped table-bordered text-center"  style="width:100%" id="records">
                                                        <thead>
                                                            <tr>
                                                                <th>Id</th>
                                                                <th>Ticket</th>
                                                                <th>Movie</th>
                                                                <th>Cinema</th>
                                                                <th>Value</th>
                                                                <th>Date</th>
                                                                <th>Earned Star</th>
                                                                <th>Redeemed Point</th>
                                                                <th>Card</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>1</td>
                                                                <td>X-star movie</td>
                                                                <td>Revelto</td>
                                                                <td>X-star Hai Phong</td>
                                                                <td>75.000 VNĐ</td>
                                                                <td>06/30/2016</td>
                                                                <td>7.5</td>
                                                                <td>7.5</td>
                                                                <td>937-456-123</td>
                                                            </tr>
                                                        </tbody>

                                                            <tfoot>
                                                                <tr>
                                                                    <th>Id</th>
                                                                    <th>Ticket</th>
                                                                    <th>Movie</th>
                                                                    <th>Cinema</th>
                                                                    <th>Value</th>
                                                                    <th>Date</th>
                                                                    <th>Earned Star</th>
                                                                    <th>Redeemed Point</th>
                                                                    <th>Card</th>
                                                                </tr>
                                                              </tfoot>

                                                    </table>
                                                  </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
          </div>
      </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!--Date picker-->


    <!--thay the phien ban jquery để chạy date pike -->
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <!--fontawsome--->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" integrity="sha512-RXf+QSDCUQs5uwRKaDoXt55jygZZm2V++WUZduaU/Ui/9EGp3f/2KZVahFZBKGH0s774sd3HmrhUy+SgOFQLVQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!--Date pikcer-->
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <!--Datatables-->
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap4.min.js"></script>
    <script type="text/javascript" src="{{ asset('font_end/Phuc/js/account.js') }}"></script>

  <!--   <script>
        $(function() {
          $( "#Startdate" ).datepicker();
          $( "#Enddate" ).datepicker();
        });
    </script>

    <script>
        $(document).ready(function() {
            $('#records').DataTable( {
            "data" : data,
            "columns": [
            { "data": "Id" },
            { "data": "Ticket" },
            { "data": "Movie" },
            { "data": "Cinema" },
            { "data": "Value" },
            { "data": "Date" },
            { "data": "Earned Star" },
            { "data": "Redeemed Point" },
            { "data": "Card" }
        ]
    } );
} );
    </script> -->
    <script>
        $(document).ready(function() {
            $('#records').DataTable();
        } );
    </script>
    <!--Date Picker-->
     <script>
        $(function() {
          $( "#Startdate" ).datepicker();
          $( "#Enddate" ).datepicker();
        });
    </script>
  </body>
</html>
