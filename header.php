<!DOCTYPE HTML>
<body>
<!-- THE HEADER LOGO AND NAVIGATION MENU -->
    <header class = "">
        <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
         <meta name="viewport" content="width=device-width, initial-scale=1">
      <nav class = "navbar navbar-expand-lg navbar-light bg-gray">
       <a class="logo-image" href="index.php">
        <img src="header-logo.png" alt="Company Logo" id="logo">
       </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <script>
            let x = document.getElementById("logo").height = 40;
        </script>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="index.php">Home<span class="sr-only">(current)</span></a> 
            </li>
            <li class="navbar-item dropdown">
                <a class="nav-link active dropdown-toggle" href="#" id="dropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Service</a>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <a class="dropdown-item" href="ai.php">Artificial Intelligence</a>
                    <a class="dropdown-item" href="ml.php">Machine Learning</a>
                    <a class="dropdown-item" href="android.php">Mobile Android</a>
                    <a class="dropdown-item" href="web.php">Web Development</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="goodies.php">Goodies Onboarding</a>
                    <!-- the above anchor tags page have not been created, take note -->
                </div>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="contact.php">Contact US</a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>&nbsp;&nbsp;
                <!-- the button tag above needs to be routed to normal google search -->
				<a class="btn btn-outline-success my-2 my-sm-0" href="signup.php">Sign Up</a> &nbsp;&nbsp;
                <a class="btn btn-outline-success my-2 my-sm-0" href="login.php">Log in</a>
                
        </form>
    </div>
      </nav>       
    </header>