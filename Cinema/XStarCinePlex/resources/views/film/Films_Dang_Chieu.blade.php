<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="font_end/Hoang/css/now_showing.css" type="text/css">
    <!--Fontanwsome CDN-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  </head>
  <body>
        <div class="now_showing">
            <div class="container">
                <div class="nowFilms">
                    <div class="page-titleFilms ">
                        <div class="row titleFilms">
                            <h1>NOW SHOWING</h1>
                            <div class="sub-caterory">
                                <a href="{{URL::to('Coming-Soon')}}">COMING SOON</a>
                            </div>
                        </div>
                    </div>
                    <div class="list-film">
                        <form action="{{ URL::to('cenimainfo') }}" method="POST">
                            @csrf
                            <div class="row product-films">
                                <div class="col-md-3 col-sm-6 col-xs-6 film_items">
                                    <div class="film-imgs">
                                        <a href="{{URL::to('Film-Detail')}}" class="film-img">
                                            <img src="font_end/Hoang/images/card-movie1.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="film-content">
                                        <h2 class="film-name">
                                            <input type="text" name ="movietitle" value="VENOM"  style="width:100%; border: none; font-size: 15px;font-weight: bold; outline: none" readonly>
                                            {{-- <a href="" name = "movieTitleH">VENOM </a> --}}
                                        </h2>
                                        <div class="film-infor">
                                            {{-- <input class="infor-bold" type="text" name ="Genre" value="Genre"> --}}
                                            <span class="infor-bold" name = "Genre">Genre: </span>
                                            <span class="infor-normal">Action, Horror</span>
                                        </div>
                                        <div class="film-infor">
                                            <span class="infor-bold">Running Time:  </span>
                                            <span class="infor-normal">128 minutes </span>
                                        </div>
                                        <div class="film-infor">
                                            <span class="infor-bold">Release date: </span>
                                            <span class="infor-normal">Apr 9, 2021</span>
                                        </div>
                                    </div>
                                    <div class="add-button">
                                        <div class="button-like">
                                            <span class="icon"><i class="far fa-thumbs-up fa-1x"></i></span>
                                            <span>Like</span>
                                            <span class="content-like">0</span>
                                        </div>
                                        {{-- <div class="button-booking"> --}}
                                            {{-- <span><a href="{{URL::to('cenimainfo')}}">BOOKING</a></span> --}}
                                            <button type="submit" class="button-booking">BOOKING</button>
                                        {{-- </div> --}}
                                    </div>
                                </div>
                        </form>

                            <div class="col-md-3 col-sm-6 col-xs-6 film_items">
                                <div class="film-imgs">
                                    <a href="#" class="film-img">
                                        <img src="font_end/Hoang/images/film2.jpg" alt="">
                                    </a>
                                </div>
                                <div class="film-content">
                                    <h2 class="film-name">
                                        <a href="#">EVIL EXPELLER </a>
                                    </h2>
                                    <div class="film-infor">
                                        <span class="infor-bold">Genre: </span>
                                        <span class="infor-normal">Action, Horror</span>
                                    </div>
                                    <div class="film-infor">
                                        <span class="infor-bold">Running Time:  </span>
                                        <span class="infor-normal">128 minutes </span>
                                    </div>
                                    <div class="film-infor">
                                        <span class="infor-bold">Release date: </span>
                                        <span class="infor-normal">Apr 9, 2021</span>
                                    </div>
                                </div>
                                <div class="add-button">
                                    <div class="button-like">
                                        <span class="icon"><i class="far fa-thumbs-up fa-1x"></i></span>
                                        <span>Like</span>
                                        <span class="content-like">0</span>
                                    </div>
                                    <div class="button-booking">
                                        <span><a href="#">BOOKING</a></span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3 col-sm-6 col-xs-6 film_items">
                                <div class="film-imgs">
                                    <a href="#" class="film-img">
                                        <img src="font_end/Hoang/images/film3.jpg" alt="">
                                    </a>
                                </div>
                                <div class="film-content">
                                    <h2 class="film-name">
                                        <a href="#">EVIL EXPELLER </a>
                                    </h2>
                                    <div class="film-infor">
                                        <span class="infor-bold">Genre: </span>
                                        <span class="infor-normal">Action, Horror</span>
                                    </div>
                                    <div class="film-infor">
                                        <span class="infor-bold">Running Time:  </span>
                                        <span class="infor-normal">128 minutes </span>
                                    </div>
                                    <div class="film-infor">
                                        <span class="infor-bold">Release date: </span>
                                        <span class="infor-normal">Apr 9, 2021</span>
                                    </div>
                                </div>
                                <div class="add-button">
                                    <div class="button-like">
                                        <span class="icon"><i class="far fa-thumbs-up fa-1x"></i></span>
                                        <span>Like</span>
                                        <span class="content-like">0</span>
                                    </div>
                                    <div class="button-booking">
                                        <span><a href="#">BOOKING</a></span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3 col-sm-6 col-xs-6 film_items">
                                <div class="film-imgs">
                                    <a href="#" class="film-img">
                                        <img src="font_end/Hoang/images/film4.jpg" alt="">
                                    </a>
                                </div>
                                <div class="film-content">
                                    <h2 class="film-name">
                                        <a href="#">EVIL EXPELLER </a>
                                    </h2>
                                    <div class="film-infor">
                                        <span class="infor-bold">Genre: </span>
                                        <span class="infor-normal">Action, Horror</span>
                                    </div>
                                    <div class="film-infor">
                                        <span class="infor-bold">Running Time:  </span>
                                        <span class="infor-normal">128 minutes </span>
                                    </div>
                                    <div class="film-infor">
                                        <span class="infor-bold">Release date: </span>
                                        <span class="infor-normal">Apr 9, 2021</span>
                                    </div>
                                </div>
                                <div class="add-button">
                                    <div class="button-like">
                                        <span class="icon"><i class="far fa-thumbs-up fa-1x"></i></span>
                                        <span>Like</span>
                                        <span class="content-like">0</span>
                                    </div>
                                    <div class="button-booking">
                                        <span><a href="#">BOOKING</a></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-6 film_items">
                                <div class="film-imgs">
                                    <a href="#" class="film-img">
                                        <img src="font_end/Hoang/images/film5.jpg" alt="">
                                    </a>
                                </div>
                                <div class="film-content">
                                    <h2 class="film-name">
                                        <a href="#">EVIL EXPELLER </a>
                                    </h2>
                                    <div class="film-infor">
                                        <span class="infor-bold">Genre: </span>
                                        <span class="infor-normal">Action, Horror</span>
                                    </div>
                                    <div class="film-infor">
                                        <span class="infor-bold">Running Time:  </span>
                                        <span class="infor-normal">128 minutes </span>
                                    </div>
                                    <div class="film-infor">
                                        <span class="infor-bold">Release date: </span>
                                        <span class="infor-normal">Apr 9, 2021</span>
                                    </div>
                                </div>
                                <div class="add-button">
                                    <div class="button-like">
                                        <span class="icon"><i class="far fa-thumbs-up fa-1x"></i></span>
                                        <span>Like</span>
                                        <span class="content-like">0</span>
                                    </div>
                                    <div class="button-booking">
                                        <span><a href="#">BOOKING</a></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-6 film_items">
                                <div class="film-imgs">
                                    <a href="#" class="film-img">
                                        <img src="font_end/Hoang/images/film6.jpg" alt="">
                                    </a>
                                </div>
                                <div class="film-content">
                                    <h2 class="film-name">
                                        <a href="#">EVIL EXPELLER </a>
                                    </h2>
                                    <div class="film-infor">
                                        <span class="infor-bold">Genre: </span>
                                        <span class="infor-normal">Action, Horror</span>
                                    </div>
                                    <div class="film-infor">
                                        <span class="infor-bold">Running Time:  </span>
                                        <span class="infor-normal">128 minutes </span>
                                    </div>
                                    <div class="film-infor">
                                        <span class="infor-bold">Release date: </span>
                                        <span class="infor-normal">Apr 9, 2021</span>
                                    </div>
                                </div>
                                <div class="add-button">
                                    <div class="button-like">
                                        <span class="icon"><i class="far fa-thumbs-up fa-1x"></i></span>
                                        <span>Like</span>
                                        <span class="content-like">0</span>
                                    </div>
                                    <div class="button-booking">
                                        <span><a href="#">BOOKING</a></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-6 film_items">
                                <div class="film-imgs">
                                    <a href="#" class="film-img">
                                        <img src="font_end/Hoang/images/film7.jpg" alt="">
                                    </a>
                                </div>
                                <div class="film-content">
                                    <h2 class="film-name">
                                        <a href="#">EVIL EXPELLER </a>
                                    </h2>
                                    <div class="film-infor">
                                        <span class="infor-bold">Genre: </span>
                                        <span class="infor-normal">Action, Horror</span>
                                    </div>
                                    <div class="film-infor">
                                        <span class="infor-bold">Running Time:  </span>
                                        <span class="infor-normal">128 minutes </span>
                                    </div>
                                    <div class="film-infor">
                                        <span class="infor-bold">Release date: </span>
                                        <span class="infor-normal">Apr 9, 2021</span>
                                    </div>
                                </div>
                                <div class="add-button">
                                    <div class="button-like">
                                        <span class="icon"><i class="far fa-thumbs-up fa-1x"></i></span>
                                        <span>Like</span>
                                        <span class="content-like">0</span>
                                    </div>
                                    <div class="button-booking">
                                        <span><a href="#">BOOKING</a></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-6 film_items">
                                <div class="film-imgs">
                                    <a href="#" class="film-img">
                                        <img src="font_end/Hoang/images/film8.jpg" alt="">
                                    </a>
                                </div>
                                <div class="film-content">
                                    <h2 class="film-name">
                                        <a href="#">EVIL EXPELLER </a>
                                    </h2>
                                    <div class="film-infor">
                                        <span class="infor-bold">Genre: </span>
                                        <span class="infor-normal">Action, Horror</span>
                                    </div>
                                    <div class="film-infor">
                                        <span class="infor-bold">Running Time:  </span>
                                        <span class="infor-normal">128 minutes </span>
                                    </div>
                                    <div class="film-infor">
                                        <span class="infor-bold">Release date: </span>
                                        <span class="infor-normal">Apr 9, 2021</span>
                                    </div>
                                </div>
                                <div class="add-button">
                                    <div class="button-like">
                                        <span class="icon"><i class="far fa-thumbs-up fa-1x"></i></span>
                                        <span>Like</span>
                                        <span class="content-like">0</span>
                                    </div>
                                    <div class="button-booking">
                                        <span><a href="#">BOOKING</a></span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3 col-sm-6 col-xs-6 film_items">
                                <div class="film-imgs">
                                    <a href="#" class="film-img">
                                        <img src="font_end/Hoang/images/film9.jpg" alt="">
                                    </a>
                                </div>
                                <div class="film-content">
                                    <h2 class="film-name">
                                        <a href="#">EVIL EXPELLER </a>
                                    </h2>
                                    <div class="film-infor">
                                        <span class="infor-bold">Genre: </span>
                                        <span class="infor-normal">Action, Horror</span>
                                    </div>
                                    <div class="film-infor">
                                        <span class="infor-bold">Running Time:  </span>
                                        <span class="infor-normal">128 minutes </span>
                                    </div>
                                    <div class="film-infor">
                                        <span class="infor-bold">Release date: </span>
                                        <span class="infor-normal">Apr 9, 2021</span>
                                    </div>
                                </div>
                                <div class="add-button">
                                    <div class="button-like">
                                        <span class="icon"><i class="far fa-thumbs-up fa-1x"></i></span>
                                        <span>Like</span>
                                        <span class="content-like">0</span>
                                    </div>
                                    <div class="button-booking">
                                        <span><a href="#">BOOKING</a></span>
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
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="js/now_showing.js" type="text/javascript"></script>
  </body>
</html>