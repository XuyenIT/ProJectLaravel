<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="font_end/Hoang/css/filmdetails.css" type="text/css" />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    />
    <!--Font-awsome-->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
      integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
  </head>
  <body>
    <div class="film_Details">
      <div class="container">
        <div class="title-pageFilms my-2">
          <div class="row">
            <h2>Movie Details</h2>
          </div>
        </div>
        <div class="trailer-details">
          <div class="row">
            <div class="col-md-4 col-sm-4 col-sm-12">
              <div class="card movie_card">
                <img
                  src="font_end/Hoang/images/card-movie1.jpg"
                  class="card-img-top"
                  alt="..."
                />
                <div class="card-body">
                  <i
                    class="fas fa-play play_button"
                    data-toggle="modal"
                    data-target="#modelId"
                    title="Play Trailer"
                  >
                  </i>

                  <!-- Modal -->
                  <div
                    class="modal fade"
                    id="modelId"
                    tabindex="-1"
                    role="dialog"
                    aria-labelledby="modelTitleId"
                    aria-hidden="true"
                  >
                    <div class="modal-dialog modal-lg" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button
                            type="button"
                            class="close"
                            data-dismiss="modal"
                            aria-label="Close"
                          >
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body d-flex align-items-center">
                          <video controls height="40%" width="100%" loop>
                            <source
                              src="font_end/Hoang/video/Venom.mkv"
                              type="video/mp4"
                            />
                          </video>
                        </div>
                      </div>
                    </div>
                  </div>
                  <h5 class="card-title">Vennom</h5>
                  <span class="movie_info">2019</span>
                  <span class="movie_info float-right"
                    ><i class="fas fa-star"></i> IMDb 7.3/10</span
                  >
                </div>
              </div>
            </div>
            <div class="col-md-8 col-sm-8 col-sm-12 my-2">
              <div class="details-title">
                <h2>VENMON</h2>
              </div>
              <div class="details-information my-2">
                <div class="information-row my-2">
                  <label for="">Director: </label>
                  <span>Adam Wingard</span>
                </div>

                <div class="information-row my-2">
                  <label for="">Genre:</label>
                  <span>Action, Horror</span>
                </div>

                <div class="information-row my-2">
                  <label for="">Actor : </label>
                  <span>Emily Blunt, Cillian Murphy, Noah Jupe</span>
                </div>

                <div class="information-row my-2">
                  <label for="">Running Time: </label>
                  <span>128 minutes</span>
                </div>

                <div class="information-row my-2">
                  <label for="">Release date: </label>
                  <span>Apr 9, 2021</span>
                </div>
              </div>
              <div class="add-button my-4">
                <div class="button-like">
                  <span class="icon"
                    ><i class="far fa-thumbs-up fa-1x"></i
                  ></span>
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
        <div class="content-details my-3">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <h3>MOVIE CONTENT</h3>
              <div class="content-movies">
                <p>
                  Legends collide in “Godzilla vs. Kong” as these mythic
                  adversaries meet in a spectacular battle for the ages, with
                  the fate of the world hanging in the balance. Kong and his
                  protectors undertake a perilous journey to find his true home,
                  and with them is Jia, a young orphaned girl with whom he has
                  formed a unique and powerful bond. But they unexpectedly find
                  themselves in the path of an enraged Godzilla, cutting a swath
                  of destruction across the globe. The epic clash between the
                  two titans—instigated by unseen forces—is only the beginning
                  of the mystery that lies deep within the core of the Earth.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script
      src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
      integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
      integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
      crossorigin="anonymous"
    ></script>
    <script src="font_end/Hoang/js/filmdetalis.js" type="text/javascript"></script>
  </body>
</html>
