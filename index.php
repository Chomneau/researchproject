
<?php include "header.php" ?>
<!-- slider or umbotron -->
<?php include "slider.php" ?>
<?php include "include/formatHelper.php" ?>


<!-- content center -->
<div class="container" style="margin-top: 50px">
  <div class="row">
    <div class="col-lg-9 col-md-9 col-sm-12">

      <div class="bs-component">
        <div class="panel panel-default">
          <?php
          include_once "include/connection.php";
          $select = "SELECT * FROM tbl_news ORDER BY id DESC LIMIT 3";
          $result = mysqli_query($conn, $select);
          if(!$result){
            die("Can not fetch data from database".mysqli_error($conn));
          }
          ?>
          <?php while($row = mysqli_fetch_array($result)) :?>

            <div class="panel-body">

              <div class="bs-component">

                <div class="col-md-3 col-sm-12 ">
                  <a href="news_detail.php?id=<?php echo $row['id'] ?>"><img src="admin/upload/<?php echo $row['image'] ?>" alt="" width="150" height="150px"></a>
                </div>
                <div class="col-md-9 col-sm-12 event-body">

                  <h3 class="event-title"><a href="news_detail.php?id=<?php echo $row['id'] ?>"><?php echo $row['en_title'] ?></a> </h3>
                  <p style="font-size:18px"><?php echo Textshorten($row['en_body']) ?></p>
                  <small><a href="news_detail.php?id=<?php echo $row['id'] ?>">Read more</a>  </small>

                </div>
              </div>
            </div>
            <hr>
          <?php endwhile; ?>

          <!--                  <div class="panel-footer"></div>-->
        </div>
      </div>
    </div>

            <!-- right sidebar -->
              <div class="col-lg-3 pull-right">
                <!--recent news event-->
                <?php include "recent_event_meeting.php"?>
                <!--recent publication-->
                <?php include "recent_publication.php"?>
                <!--quick link-->
                <?php include "quickLink.php"?>

                <div class="bs-component">
                  <div class="list-group" style="font-size:17px">
                    <a href="#" class="list-group-item active">
                      Follow us
                    </a>
                    <a href="#" class="list-group-item">Facebook
                    </a>
                    <a href="#" class="list-group-item">Twitter
                    </a>
                  </div>
                </div>
              </div>
          </div>
        </div>

    <div class="container">
      <div class="row">
        <?php include "partner.php" ?>
      </div>
    </div>




<?php include_once "footer.php" ?>
