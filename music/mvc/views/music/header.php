<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?= $data['page_title'] . " | " . WEBSITE_TITLE ?></title>
    <link rel="stylesheet" href="<?=ASSETS?>/css/components.css">
    <link rel="stylesheet" href="<?=ASSETS?>music2/css/icons.css">
    <link rel="stylesheet" href="<?=ASSETS?>music2/css/responsee.css">
    <link rel="stylesheet" href="<?=ASSETS?>music2/owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="<?=ASSETS?>music2/owl-carousel/owl.theme.css">
    <link rel="stylesheet" href="<?=ASSETS?>music2/css/lightcase.css">
    <!-- CUSTOM STYLE -->
    <link rel="stylesheet" href="<?=ASSETS?>music2/css/template-style.css">

    <!-- Styles -->
		<!-- Bootstrap CSS -->
		<link href="<?=ASSETS?>music/css/bootstrap.min.css" rel="stylesheet">
		<!-- Animate CSS -->
		<link href="<?=ASSETS?>music/css/animate.min.css" rel="stylesheet">
		<!-- Basic stylesheet -->
		<link rel="<?=ASSETS?>music/stylesheet" href="<?=ASSETS?>music/css/owl.carousel.css">
		<!-- Font awesome CSS -->
		<link href="<?=ASSETS?>music/css/font-awesome.min.css" rel="stylesheet">
		<!-- Custom CSS -->
		<link href="<?=ASSETS?>music/css/style.css" rel="stylesheet">
		<link href="<?=ASSETS?>music/css/style-color.css" rel="stylesheet">

		<!-- Favicon -->
		<link rel="shortcut icon" href="<?=ASSETS?>music/img/logo/favicon.ico">

     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,400,600,900&subset=latin-ext" rel="stylesheet">
    <script type="text/javascript" src="<?=ASSETS?>music/js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="<?=ASSETS?>music/js/jquery-ui.min.js"></script>
  </head>

  <body class="size-1140">

      <!-- HEADER -->
      <header  role="banner" class="position-absolute  margin-m-top-0 margin-s-top-0">
        <!-- Top Navigation -->
        <nav class="background-transparent background-transparent-hightlight full-width sticky">

            <?php if(isset($_SESSION['user_name'])): ?>
             Hi <?=$_SESSION['user_name']?>
            <?php endif; ?>
             <nav class="navbar navbar-expand-lg navbar-light bg-black">
              <a style="font-size: 5rem; color: white;" class="navbar-brand" href="#">MusicLab</a>

          <div class="s-12 l-10">
            <div class="top-nav right">
              <p class="nav-text"></p>
              <ul class="right chevron">
                <li><a style="font-size: 1.5rem; color: white;" href="<?=ROOT?>home">Home</a></li>
                <li><a style="font-size: 1.5rem; color: white;" href="<?=ROOT?>about">About Us</a></li>
                <li><a style="font-size: 1.5rem; color: white;" href="<?=ROOT?>contact">Contact</a></li>

                <?php if(!isset($_SESSION['user_name'])): ?>
                <li><a style="font-size: 1.5rem; color: white;" href="<?=ROOT?>login">Login</a></li>
                <li><a style="font-size: 1.5rem; color: white;" href="<?=ROOT?>signup">Signup</a></li>
              <?php else: ?>

                <li><a style="font-size: 1.5rem; color: white;" href="<?=ROOT?>logout">Logout</a></li>

              <?php endif; ?>


              </ul>
            </div>
          </div>
        </nav>
        </nav>


      </header>
