<?php include "header.php" ?>
<?php include "include/formatHelper.php" ?>

<!-- slider or umbotron -->
<div class="container">
  <div class="row">
    <div class=" col-lg-12">
      <div class="bs-docs-section">
        <div class="page-header text-center">
          <h2 id="containers" class="title-page" style="color:#585f6b">PUBLICATION</h2>
        </div>
      </div>
  </div>
</div><!-- end row -->
</div><!-- end container -->


<!-- content  -->
        <div class="container">
          <div class="row">


                        <!-- right sidebar -->
                          <div class="col-lg-3">
                            <div class="bs-component">
                              <div class="list-group" style="font-size:18px">
                                <a href="#" class="list-group-item active">
                                  Publication
                                </a>
                                <?php
                                include_once "include/connection.php";
                                $select = "SELECT * FROM tbl_publication ORDER BY id DESC ";
                                $result = mysqli_query($conn, $select);
                                if(!$result){
                                  die("Can not fetch data from database".mysqli_error($conn));
                                }
                                ?>
                                <?php while($row = mysqli_fetch_array($result)) :?>
                                <a href="publication_detail.php?id=<?php echo $row['id'] ?>" class="list-group-item">
                                  <?php echo TextSidebarShorten($row['en_title']) ?></a>

                                <?php endwhile; ?>
                              </div>
                            </div>

                            <div class="bs-component">
                              <div class="list-group" style="font-size:18px">
                                <a href="#" class="list-group-item active">
                                  Journals
                                </a>
                                <a href="#" class="list-group-item">Service 1
                                </a>
                                <a href="#" class="list-group-item">Service 2
                                </a>
                              </div>
                            </div>

                            <div class="bs-component">
                              <div class="list-group" style="font-size:18px">
                                <a href="#" class="list-group-item active">
                                  Books
                                </a>
                                <a href="#" class="list-group-item">Facebook
                                </a>
                                <a href="#" class="list-group-item">Twitter
                                </a>
                              </div>
                            </div>
                            <div class="bs-component">
                              <div class="list-group" style="font-size:18px">
                                <a href="#" class="list-group-item active">
                                  Research point
                                </a>
                                <a href="#" class="list-group-item">Facebook
                                </a>
                                <a href="#" class="list-group-item">Twitter
                                </a>
                              </div>
                            </div>
                          </div>

            <!-- center -->
            <div class="col-lg-6 col-md-6 col-sm-12">

              <div class="bs-component">
                <div class="panel panel-default">

                      <?php
                      include_once "include/connection.php";
                      $select = "SELECT * FROM tbl_publication ORDER BY id LIMIT 3";
                      $result = mysqli_query($conn, $select);
                      if(!$result){
                        die("Can not fetch data from database".mysqli_error($conn));
                      }
                      ?>
                      <?php while($row = mysqli_fetch_array($result)) :?>
                  <div class="panel-body">
                    <div class="bs-component">
                      <div class="col-md-3 col-sm-12 event-image" style="margin-top:10px">
                        <a href="news_detail.php?id=<?php echo $row['id'] ?>"><img src="admin/upload/<?php echo $row['image'] ?>" alt="" width="120" height="150px"></a>

                      </div>
                      <div class="col-md-9 col-sm-12 event-body">

                          <h3 class="event-title"><a href="publication_detail.php?id=<?php echo $row['id']?>"><?php echo $row['en_title']?></a> </h3>
                          <p style="font-size:18px"><?php echo Textshorten($row['en_body'], 170) ?><a href="education_detail.php?id=<?php echo $row['id']?>">continue reading <i class="fa fa-chevron-circle-right" aria-hidden="true"></i></a></p>

                      </div>


                    </div>
                  </div>
                        <hr>
                      <?php endwhile; ?>
                  <div class="panel-footer"></div>

                </div>
              </div>
            </div>

            <!-- right sidebar -->
              <div class="col-lg-3 pull-right">

                <!--     Quick link widget  -->
                <?php include "recent_event_meeting.php"?>
                <!--     Quick link widget  -->
                <?php include "quickLink.php"?>

              </div>
          </div>
          <!-- end row -->
        </div>
        <!-- end container -->

        <!-- Other publication -->
        <?php include "publication_other_widget.php"?>
<!-- footer space -->
        <div class="footspace">
            <hr>
        </div>







<?php include_once "footer.php" ?>
