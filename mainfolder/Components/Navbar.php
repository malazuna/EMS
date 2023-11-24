<html>
  <head>
    <link rel="stylesheet" href="./css/style.css ?v=<?php echo time(); ?>" />
  </head>
  <body>
  <header id="nav-menu">
  <div id = "container">
    <div class="nav-start">
      <a class="logo" href="/">
        <img src="./img/logo.jpg" 
             alt="Inc Logo" style="width: 80px; height:80px;"
          />
      </a>
      <nav class="menu">
      <button id="hamburger" aria-expanded="false">
      <i class="bx bx-menu" aria-hidden="true"></i>
        </button>
      <div class="menu">
          <ul class="menu-bar">
              <li>
                  <button 
                    class="nav-link dropdown-btn" >
                    
                    <a class="nav-link" href="index.php">Home</a>
                    
                  </button>
                  
              </li>
             <li><a class="nav-link" href="#aboutus">About Us</a></li>
              <li><a class="nav-link" href="#footer">Contact</a></li>
              <li><a class="nav-link" href="#footer">Services</a></li>
              <!-- <li><a class="nav-link" href="applyForJob.php">Apply For Job</a></li> -->
          </ul>
      </div>
        </nav>
      </div>

      <div class="nav-end">
        
          <button class="btn btn-primary" style="margin-right: 20px;"><a href="../mainfolder/login.php">Login</a></button>
          <!-- <button  class="btn btn-primary" style="margin-right: 20px;">Sign Up</button> -->
        </div>
    </div>
  </div>
</header>
  </body>
</html>

