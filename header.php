<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Find My Relative</title>
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <!-- icon -->
    <link href="img\icon.jpeg" rel="icon"/>
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- Font Awesome JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"></script>

    <!-- Your custom JavaScript -->
    <script>
        // Your custom JavaScript code goes here
    </script>

    <!-- Custom CSS -->
    <style>
        
    </style>
</head>
<body>

<!-- Navigation Bar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
  <div class="container">
    <img src="img/icon.jpeg" alt="icon" style="height: 45px; width: 45px;">
    <a class="navbar-brand" href="#">&nbsp;&nbsp;Find My Relatives</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item <?php if(basename($_SERVER['PHP_SELF']) == 'index.php') echo 'active'; ?>">
          <a class="nav-link" href="/fmr/index.php" ><i class="fa fa-home"></i> Home</a>
        </li>
        <li class="nav-item <?php if(basename($_SERVER['PHP_SELF']) == 'search.php') echo 'active'; ?>">
          <a class="nav-link" href="#"><i class="fa fa-search"></i> Search</a>
        </li>
        <li class="nav-item <?php if(basename($_SERVER['PHP_SELF']) == 'contact.php') echo 'active'; ?>">
          <a class="nav-link" href="#"><i class="fa fa-envelope"></i> Contact</a>
        </li>
        <li class="nav-item <?php if(basename($_SERVER['PHP_SELF']) == 'about.php') echo 'active'; ?>">
          <a class="nav-link" href="/fmr/about.php"><i class="fa fa-info-circle"></i> About</a>
        </li>
        <li class="nav-item <?php if(basename($_SERVER['PHP_SELF']) == 'signup.php') echo 'active'; ?>">
          <a class="nav-link" href="/fmr/signup.php"><i class="fa fa-user"></i> Login/Signup</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

