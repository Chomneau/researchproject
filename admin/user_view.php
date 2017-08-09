<?php
    include 'connection.php';
    $query = "SELECT* FROM tbl_user";
    $result = mysqli_query($conn, $query);
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>EasyBook admin</title>

    <!-- Bootstrap CSS -->    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="css/elegant-icons-style.css" rel="stylesheet" />
    <link href="css/font-awesome.min.css" rel="stylesheet" />    
    <!-- full calendar css-->
    <link href="assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
	<link href="assets/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" />
    <!-- easy pie chart-->
    <link href="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen"/>
    <!-- owl carousel -->
    <link rel="stylesheet" href="css/owl.carousel.css" type="text/css">
	<link href="css/jquery-jvectormap-1.2.2.css" rel="stylesheet">
    <!-- Custom styles -->
	<link rel="stylesheet" href="css/fullcalendar.css">
	<link href="css/widgets.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />
	<link href="css/xcharts.min.css" rel=" stylesheet">	
	<link href="css/jquery-ui-1.10.4.min.css" rel="stylesheet">
    <!-- =======================================================
        Theme Name: EasyBook
        Theme URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
        Author: BootstrapMade
        Author URL: https://bootstrapmade.com
    ======================================================= -->
  </head>

  <body>
  <!-- container section start -->
  <section id="container" class="">

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
              <div class="row">
                  <div class="col-lg-12">
                      <ol class="breadcrumb">
                          <li><i class="fa fa-user" aria-hidden="true"></i> <strong>All Users</strong>  <i class="fa fa-angle-right" aria-hidden="true"></i></li>

                      </ol>
                  </div>
              </div>

              <!-- query all username from database -->
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
<!--                          <header class="panel-heading">-->
<!--                              ALL USERS-->
<!--                          </header>-->

                          <table class="table table-striped table-advance table-hover">
                              <tbody>
                              <tr>
                                  <th><i class="fa fa-sort-numeric-asc" aria-hidden="true"></i> user_id</th>
                                  <th><i class="icon_profile"></i> Username</th>
                                  <th><i class="icon_mail_alt"></i> Email</th>
                                  <th><i class="icon_mail_alt"></i> User_role</th>
                                  <th><i class="icon_calendar"></i> Created date</th>
                                  <th style="right: auto"><i class="icon_cogs"></i> Action</th>
                              </tr>
                              <tr>
                                  <?php
                                  include "connection.php";
                                  $query = "SELECT * FROM tbl_user";
                                  $result = mysqli_query($conn, $query);
                                  while ($row = mysqli_fetch_array($result)):?>
                              <tr>
                                  <td><?php echo $row['id']?></td>
                                  <td><?php echo $row['username']?></td>
                                  <td><?php echo $row['email']?></td>
                                  <td><?php echo $row['user_role']?></td>
                                  <td><?php echo $row['created_date']?></td>

                                  <td>
                                      <?php echo "<a href=user_edit_form.php?id=". $row['id']." ><i class=\"fa fa-pencil-square-o\" aria-hidden=\"true\"></i> Edit</a>" ?> |
                                      <?php echo "<a href=delete.php?id=". $row['id']." ><i class=\"fa fa-times\" aria-hidden=\"true\"></i> Delete</a>" ?>
                                  </td>
                              </tr>
                              <?php endwhile; ?>
                              </tr>
                              </tbody>
                          </table>

                      </section>
                  </div>
              </div>
              <div class="success">
                  <?php if(isset($_GET['error'])) :?>
                      <h4><i class="fa fa-check-square" aria-hidden="true"></i>
                          <?php echo $_GET['error']; ?></h4>
                  <?php endif; ?>
              </div>


              <!-- End query all users to display dashboard -->


          </section> <!-- End of section -->

          <!-- include javascript code from file -->
          <?php require_once("javascript_footer.php") ?>
  </body>
</html>
