<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body class="pic">
    <nav class="navbar navbar-expand-sm bg-light navbar-light">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">LOGIN</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="user.php">HOME</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="test.php">REGISTER</a>
          </li>
          
        </ul>
      </nav>
      <center><p class="text">LOGIN</p>
      </center>
    
    <div class="container">
        <div class="row">
            <div class="col">
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="images/pic2.jpeg" class="d-block w-100" alt="..." height="400px">
                      </div>
                      <div class="carousel-item">
                        <img src="images/pic3.jpeg" class="d-block w-100" alt="..." height="400px">
                      </div>
                      <div class="carousel-item">
                        <img src="images/pic4.jpg" class="d-block w-100" alt="..." height="400px">
                      </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>




            </div>


        </div>
        <div class="row">
            <div class="col col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4"></div>

            <div class="col col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                <table class="table table-borderless">
                    <tr>
                        <td>EMAIL ID</td>
                        <td><input type="text" id="id" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>PASSWORD</td>
                        <td><input type="password" id="pass" class="form-control"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><button onclick="index()" class="btn btn-danger">LOGIN</button></td>
                    </tr>
                </table>
            </div>
            <div class="col col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4"></div>

        </div>
    </div>
    <script>

      function index()
      {
        var email=document.getElementById("id").value
        var password=document.getElementById("pass").value

        console.log(email)
        console.log(password)


      }





    </script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    
</body>
</html>