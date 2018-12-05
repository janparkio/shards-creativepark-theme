<!doctype html>
<html class="no-js" lang="en">	
	<?php include('section/head.php'); ?>
    <!-- Custom Style Responsible for the image background -->
    <style>
        .shards-landing-page--1 .welcome {
          position: relative;
          height: 50vh;
          min-height: 350px;
          background-size: cover;
      }
    </style>
    <!-- / Custom Style Responsible for the image background -->
    <body class="shards-landing-page--1">
      <!-- Welcome Section -->
      <div id="welcome" class="welcome d-flex justify-content-center flex-column">
        <div class="container">
        <?php include('section/nav.php'); ?>
        </div> <!-- .container -->

        <!-- Inner Wrapper -->
        <div class="inner-wrapper mt-auto mb-auto container">
          <div class="row">
            <div class="col-md-7">
                <h1 class="welcome-heading display-4 text-white"><?php echo $heading ?></h1>
                <p class="text-white"><?php echo $sub_heading ?></p>
            </div>
          </div>
        </div>
        <!-- / Inner Wrapper -->
      </div>
      <!-- / Welcome Section -->