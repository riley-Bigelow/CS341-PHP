<!DOCTYPE html>
<html>
    <head>
        <title>Riley Bigelow </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="stylesheet1.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script src='https://kit.fontawesome.com/a076d05399.js'></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </head>
    <body>
        <nav class="navbar navbar-expand-md bg-light navbar-light ">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link" href="#about"><i class="fa fa-user"></i>ABOUT</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#assign"><i class="fa fa-th"></i>ASSIGNMENTS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#skills"><i class='fas fa-cogs'></i></i>SKILLS</a>
                  </li>
                <li class="nav-item">
                  <a class="nav-link" href="#contact"><i class="fa fa-envelope"></i>CONTACT</a>
                </li>    
              </ul>
            </div>  
        </nav>
        <div class="container-fluid" id="header">
            <div class="display-middle">
                <h1>CSE 341</h1>
            </div>
        </div>
        <div class="container-fluid" id="about" style="margin-top:60px">
            <div class="row">
                <div class="col-sm-4">
                    <h2 class="label">About Me</h2>
                    <div class="photo">
                        <img src="rbigelow.jpg" id="profile" alt="Person" width="200" height="200">
                        <figcaption>
                            Riley Bigelow</br>
                            Brigham Young University–Idaho</br>
                            Bachelors, Software Engineering</br>
                            Graduates April 2021</br>
                            Senior</br>
                        </figcaption>
                    </div>
                </div>
                <div class="col-sm-8" id="assign">
                    <h2 class="label">Assignemnts</h2>
                    <div id="demo" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ul class="carousel-indicators">
                            <li data-target="#demo" data-slide-to="0" class="active"></li>
                            <li data-target="#demo" data-slide-to="1"></li>
                            <li data-target="#demo" data-slide-to="2"></li>
                        </ul>
                        <!-- The slideshow -->
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="cs3.jpg" alt="image" width="1000" height="400">
                            </div>
                            <div class="carousel-item">
                                <img src="cs1.png" alt="image" width="1000" height="400">
                            </div>
                            <div class="carousel-item">
                                <img src="cs2.png" alt="image" width="1000" height="400">
                            </div>
                        </div>
                        <!-- Left and right controls -->
                        <a class="carousel-control-prev" href="#demo" data-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                        </a>
                        <a class="carousel-control-next" href="#demo" data-slide="next">
                            <span class="carousel-control-next-icon"></span>
                        </a>
                      </div>
                      <div class="container" >
                        <a href="#" class="btn btn-danger" role="button" id="assignbtn">See More</a>
                      </div>

                </div>
            </div>
            <hr>
            <div class="container-fluid" id="skills">
                <div class="container">
                    <h2>My Skills</h2>
                    
                    <p>C#</p>
                    <div class="progress">
                        <div class="progress-bar bg-info progress-bar-striped progress-bar-animated" id="pg1" ></div>
                    </div>
                    <p>C++</p>
                    <div class="progress">
                        <div class="progress-bar bg-danger progress-bar-striped progress-bar-animated" id="pg2"></div>
                    </div>
                    <p>SQL</p>
                    <div class="progress">
                        <div class="progress-bar bg-warning progress-bar-striped progress-bar-animated"id="pg3"></div>
                    </div>
                    <p>HTML</p>
                    <div class="progress">
                        <div class="progress-bar  bg-dark progress-bar-striped progress-bar-animated" id="pg4"></div>
                    </div>
                    <p>CSS</p>
                    <div class="progress">
                        <div class="progress-bar bg-secondary progress-bar-striped progress-bar-animated" id="pg5"></div>
                    </div>
                    <p>Javascript</p>
                    <div class="progress">
                        <div class="progress-bar bg-success progress-bar-striped progress-bar-animated" id="pg6"></div>
                    </div>
                    <p>PHP</p>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" id="pg7"></div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="container-fluid" id="footer">
                <h2 class="label">Contact Me</h2>
                <div class="container" >
                    <div class="w3-large w3-margin-bottom">
                        <i class="fa fa-map-marker fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> BYU-I, USA<br>
                        <i class="fa fa-envelope fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> Email: big17013@byui.edu<br>
                    </div>
                </div>
                <?php
                    $today = date("F j, Y, g:i a");  
                    echo $today;
                ?>
            </div>  
        </div>
    </body>
</html>
