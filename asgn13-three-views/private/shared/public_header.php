<!doctype html>

<html lang="en">
  <head>
    <title>WNC Birds <?php if(isset($page_title)) { echo '- ' . h($page_title); } ?></title>
    <meta charset="utf-8">
  </head>

  <body>

    <header>
      <h1>
        <a href="<?php echo url_for('/index.php'); ?>">
          WNC Birds
        </a>
      </h1>
    </header>

    <navigation>
      <ul>
        <!-- What shows up when logged in -->
        <?php if($session->is_logged_in()) { ?>

          <li>User: <?php echo $session->username; ?></li>
          <li><a href="<?php echo url_for('/index.php'); ?>">Menu</a></li>
          <li><a href="<?php echo url_for('/logout.php'); ?>">Logout</a></li>

        <?php } else {?>
          <!-- What shows up when logged out -->
          <li><a href="<?php echo url_for('/login.php'); ?>">Log in</a></li>
          <li><a href="<?php echo url_for('/signup.php'); ?>">Sign Up</a></li>
        <?php } ?>

      </ul>
    </navigation>

    <?php echo display_session_message(); ?>