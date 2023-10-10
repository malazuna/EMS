<html>
  <head>
    <link rel="stylesheet" href="./css/style.css ?v=<?php echo time(); ?>" />
  </head>
  <body>
  <header id="nav-menu">
  <div id = "container" class="container">
    <div class="nav-start">
      <a class="logo" href="/">
        <img src="../img/logo.jpg" 
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
                    class="nav-link dropdown-btn" 
                    data-dropdown="dropdown1" 
                    aria-expanded="false">
                      Browse
                    <i class="bx bx-chevron-down" aria-hidden="true"></i>
                  </button>
                  <div id="dropdown1" class="dropdown"></div>
              </li>
              <li>
                  <button 
                    class="nav-link dropdown-btn" 
                    data-dropdown="dropdown2" 
                    aria-expanded="false">
                      Discover
                    <i class="bx bx-chevron-down" aria-hidden="true"></i>
                  </button>
                  <div id="dropdown2" class="dropdown"></div>
              </li>
              <li><a class="nav-link" href="/">Jobs</a></li>
              <li><a class="nav-link" href="/">Livestream</a></li>
              <li><a class="nav-link" href="/">About</a></li>
          </ul>
      </div>
        </nav>
      </div>

      <div class="nav-end">
        <!-- <div class="right-container">
          <form class="search" role="search">
            <input type="search" name="search" placeholder="Search" />
            <i class="bx bx-search" aria-hidden="true"></i>
          </form>

          <a href="#profile">
            <img src="https://github.com/Evavic44/responsive-navbar-with-dropdown/blob/main/assets/images/user.jpg?raw=true" 
                alt="user image" style="width:30px; height: 30px;"
              />
          </a> -->
          <button class="btn btn-primary" style="margin-right: 20px;"><a href="../mainfolder/login.php">Login</a></button>
          <button  class="btn btn-primary" style="margin-right: 20px;">Sign Up</button>
        </div>
    </div>
  </div>
</header>
  </body>
</html>

