<!doctype html>
<html>
<head>
<meta charset="utf-8">

    <link rel="icon" href="layout/images/shoot.ico" type="image/x-icon">
    <link rel="stylesheet" href="../admin/layout/css/font-awesome.min.css">
    <link rel="stylesheet" href="../admin/layout/css/bootstrap.min.css">
    <link rel="stylesheet" href="../admin/layout/css/style.css">

</head>

<nav class="navigation navbar navbar-inverse">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-nav" aria-expanded="false">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>
    <div class="collapse navbar-collapse" id="app-nav">
      <ul class="nav navbar-nav">
        <?php

        if(Session::has('Admin'))

        { ?>
          <li><a href="<?php echo url('admin/dashboard') ?>">
              <i class="fa fa-dashboard"></i>Dashboard</a></li>
          <li><a href="<?php echo url('admin/logout') ?>">
              <i class="fa fa-sign-out"></i>Logout</a></li>
        <?php }
        else
        { ?>
            <li><a href="<?php echo url('admin/login') ?>"><i class="fa fa-sign-in"></i> Login</a></li>

        <?php }

          if(Session::has('Admin'))

                {
                    $username = Session::get('Admin');
                    echo "<p class='navbar-text'><i class='fa fa-flag'></i>Welcome"." ".$username. "</p>";
                }
            ?>
      </ul>

    </div>
  </div>
</nav>

<div class="slider">

</div>

<body>

   @yield('login')
   @yield('dashboard')
   @yield('news')
   @yield('news_add')
   @yield('news_edit')

<!-- Footer -->
<footer class="list container-fluid text-center">

  <ul class="first">
      <li><a href="<?php echo route('homepage') ?>">Homepage</a></li>
  </ul>

<p>Copyright <i class="fa fa-copyright"></i> 2020 All Right Reserved</p>

<ul class="second">
    <li><a title="Facebook" href="#"><i class="fa fa-facebook-square fa-lg"></i></a></li>
    <li><a title="Twitter" href="#"><i class="fa fa-twitter-square fa-lg"></i></a></li>
    <li><a title="LinkedIn" href="#"><i class="fa fa-linkedin-square fa-lg"></a></i></li>
    <li><a title="Google+" href="#"><i class="fa fa-google-plus-square fa-lg"></a></i></li>
</ul>

</footer>

	<script src="../admin/layout/js/jquery.min.js"></script>
	<script src="../admin/layout/js/bootstrap.min.js"></script>
    <script src="../admin/layout/js/jquery.nicescroll.min.js"></script>
    <script src="../admin/layout/js/script.js"></script>

 <script>

        $("html").niceScroll({

        cursorcolor: '#888',
        cursorwidth: '10px',
        cursorborder: '1px solid #1abc9c',
        cursorborderradius: 5,
        scrollspeed: 120
    });

</script>

</body>
</html>
