<?php
//include "connection.php";
include "function.php";
include_once "header_admin.php";
?>
          <!-- container section start -->
          <section id="container" class="" style="position: fixed">
              <!--include top content of dashboard page like username at the right of the top-->
              <?php require_once("header_sidebar.php") ?>
              <!--header end-->

              <!--sidebar start-->
              <?php require_once("sidebar.php") ?>
              <!--sidebar end-->

              <!--main content start-->
              <section id="main-content">
                  <section class="wrapper">
                      <!--Display head of content ex: Dashboard/Home/add about-->
                      <?php require_once ("dashboard_bar_display.php")?>

                      <!--Display all report from database like total of username, publication etc-->
<!--                      --><?php //require_once ("category_report_display.php")?>


                      <!-- display all user from database -->
                      <?php require_once ("display_all_user.php")?>

                  </section> <!-- End of section -->

                  <!-- include javascript code from file -->

                  
                  <?php require_once("javascript_footer.php") ?>



