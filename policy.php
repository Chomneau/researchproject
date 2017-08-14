
<?php include "header.php" ?>
<?php include "include/formatHelper.php" ?>
<!-- slider or umbotron -->
<div class="container">
  <div class="row">
    <div class=" col-lg-12">

      <div class="bs-docs-section">

        <div class="page-header text-center">
          <h2 id="containers" class="title-page" style="color:#585f6b">POLICY AND ADVOCACY</h2>
        </div>

      </div>
    </div>


  </div><!-- end row -->


  <!-- left sidebar -->

  <div class="page-header" id="banner">
    <div class="row">

    </div>
    <div class="row">
      <div class="col-lg-3">
        <div class="bs-component">
          <div class="list-group" style="font-size:18px">
            <a href="policy.php" class="list-group-item active">
              Policy & advocacy
            </a>
            <?php
            include_once "include/connection.php";
            $select = "SELECT * FROM tbl_policy ORDER BY id ASC LIMIT 10 ";
            $result = mysqli_query($conn, $select);
            if(!$result){
              die("Can not fetch data from database".mysqli_error($conn));
            }
            ?>
            <?php while($row = mysqli_fetch_array($result)) :?>
              <a href="policy_detail.php?id=<?php echo $row['id'] ?>" class="list-group-item"><?php echo $row['en_title'] ?></a>

            <?php endwhile; ?>
          </div>
        </div>
        <!--     Quick link wedget       -->
        <?php include "quickLink.php"?>

      </div>

      <!-- content center -->
      <div class="col-lg-9">
        <div class="row">
          <div class="col-lg-12">
            <div class="bs-component">
              <?php
              include_once "include/connection.php";
              $select = "SELECT * FROM tbl_policy ORDER BY id ASC LIMIT 5";
              $result = mysqli_query($conn, $select);
              if(!$result){
                die("Can not fetch data from database".mysqli_error($conn));
              }
              ?>

              <div class="panel panel-default">
                <?php while ($row = mysqli_fetch_array($result)) :?>

                  <div class="panel-body">
                    <h3 style="margin-top: -20px "><?php echo $row['en_title']; ?></h3>
                    <hr>
                    <div class="bs-component">
                      <blockquote>
                        <p><?php echo TextContinueReading($row['en_body']); ?><a href="policy_detail.php?id=<?php echo $row['id']?>">continue reading <i class="fa fa-chevron-circle-right" aria-hidden="true"></i></a></p>
                        <small> <cite title="Source Title"><?php echo $row['en_title']; ?></cite></small>
                      </blockquote>
                    </div>
                  </div>
                <?php endwhile; ?>

                <div class="panel-footer"></div>
              </div>
            </div>
          </div>

        </div>
        <!-- end row -->
      </div>

    </div>

  </div>

</div>



<?php include_once "footer.php" ?>