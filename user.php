<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>USER REGISTRATION FORM</title>
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
    <table class="table table-borderless">
        <tr>
            <td>FIRSTNAME</td>
            <td><input type="text" id="fname" class="form-control"></td>
            <td>LASTNAME</td>
            <td><input type="text" id="lname" class="form-control"></td>
        </tr>
        <tr>
            <td>AGE</td>
            <td><input type="number" id="age" class="form-control"></td>
            <td>D.O.B</td>
            <td><input type="text" id="dob" class="form-control"></td>
        </tr>
        <tr>
            <td>MOBILE NUMBER</td>
            <td><input type="text" id="mnum" class="form-control"></td>
            <td>EMAIL ID</td>
            <td><input type="text" id="id" class="form-control"></td>
        </tr>
        <tr>
            <td>PLACE</td>
            <td><input type="text" id="place" class="form-control"></td>
            <td>USERNAME</td>
            <td><input type="text" id="uname" class="form-control"></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td><button onclick="user()" class="btn btn-primary">REGISTER</button></td>
        </tr>



    </table>

    <script>
      function user()
      {
        var fname=document.getElementById("fname").value
        var lname=document.getElementById("lname").value
        var agee=document.getElementById("age").value
        var dob=document.getElementById("dob").value
        var num=document.getElementById("mnum").value
        var email=document.getElementById("id").value
        var place=document.getElementById("place").value
        var uname=document.getElementById("uname").value

        console.log(fname)
        console.log(lname)
        console.log(agee)
        console.log(dob)
        console.log(num)
        console.log(email)
        console.log(place)
        console.log(uname)






      }




    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  
</body>
</html>