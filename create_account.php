<?php
//it is used to manage info across different pages
session_start();
//     date_default_timezone_set("Asia/kolkata");
//     echo "<br>";
// echo "<h2>The time is </h2> ".date("h:i:sa");
// $_SESSION['username']="shreyansh";
// $_SESSION['favcat']="books";
// echo "we have saved your session";


?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="icon" href="awesome.webp" type="image/jpeg">

  <title>Congatulations</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Registration-page</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="/VIVA_AP/index.php" target="_blank">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Dropdown
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Contacts</a>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </nav>
  <?php
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password1'];
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> Your email ' . $email . ' and password ' . $password . ' has been submitted successfully!
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>';
    // Submit these to a database
  }


  ?>

  <div class="container mt-3">
    <h1>This is registration page. Plz enter information asked.</h1>
    <form action="\VIVA_AP\congrates_createaccount.php" name="form_create_account" method="post">
      <div class="form-group">
      Enter Username: <br><br>
        <input type="text" name="username"  id="username" value="bt20cse"><br><br>
      </div>
      <div class="form-group">
        <label for="email">Email address</label>
        <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" value="bt20@gmail.com">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
      </div>
      <div class="form-group">
        <label for="email">Confirm Email address</label>
        <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" value="bt20@gmail.com">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
      </div>
      <div class="form-group">
        <label for="pass">Password</label>
        <input type="password" class="form-control" id="pass" name="password1" value="#421@43">
      </div>
      <div class="form-group">
        <label for="pass"> Confirm Password</label>
        <input type="password" class="form-control" id="pass" name="password1" value="#421@43">
      </div>
      <h2>Educational Details</h2>
      <label for="abz">Enter Class</label>
      <input type="text" id="abz"> &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;

      <label for="abc">Choose Target Exam</label>
      <select name="education">
        <option value="JEE">JEE</option>
        <option value="10-board">Class-10 Board Exam</option>
        <option value="12-board">Class-12 Board Exam</option>
        <option value="SSC">SSC</option>
        <option value="UPSC">UPSC</option>
        <option value="jeem">JEE main</option>
        <option value="jeeadv">JEE Advanced</option>
        <option value="other">other</option>
      </select>
      <br />
      <br />
      <label for="abz">Enter Institution</label>
      <input type="text" id="abz"> &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;

      <label for="abz">Enter Percentage</label>
      <input type="number" id="abz" max="100"> &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;

      <h2>Feedback/Suggestions</h2>
      <b> How did you come to know about our website/courses?</b> <br /> <br />&emsp; &emsp;
      <input type="checkbox" name="newspaper" value="newspaper">Newspaper &emsp;
      <input type="checkbox" name="radio" value="newspaper">Radio &emsp;
      <input type="checkbox" name="TV" value="TV">Television &emsp;
      <input type="checkbox" name="other" value="other">other <br />
      <br />
      <b>Any Suggestions/ Queries</b> <br />
      <img src="suggestion.jpg" width="200px" height="100px">
      <textarea name="sugg" rows="10" cols="40"></textarea>
      <hr />
      <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p><br>

      <button type="submit" class="btn btn-primary">Submit</button><br><br>
      Reset now: <input type="reset" style="background-color: blue; color: white;">
    </form>
  </div>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>


<?php
//it is used to manage info across different pages
// date_default_timezone_set("Asia/kolkata");
// echo "<br>";
// echo "<h2>The time is </h2> " . date("h:i:sa");
// echo '<br>';
// echo '<br>';
// echo '<br>';


// # code...
// $_SESSION['enmal'] = $_POST['email'];
// $_SESSION['password'] = $_POST['password1'];

// if ($_SESSION['enmal'] && $_SESSION['password']) {
//   # code...
//   echo "welcome  " . $_SESSION['enmal'];
//   echo "<br>";
//   // echo "your favorite password is ".$_SESSION['password']."<br>";
//   echo "your favorite password is " . $_SESSION['password'] . "<br>";

//   echo "we have saved your session";
// } else {
//   # code...
//   echo "<h3>plz sign up again.</h3>";
// }


?>