<?php include "header.php" ?>
<?php include "include/formatHelper.php" ?>
<!-- slider or umbotron -->
<div class="container">
  <div class="row">
    <div class=" col-lg-12">

      <div class="bs-docs-section">

        <div class="page-header text-center">
          <h2 id="containers" class="title-page" style="color:#585f6b">EVENT AND MEETING</h2>
        </div>

      </div>
  </div>

</div><!-- end row -->
</div><!-- end container -->


<!-- left sidebar -->
<!--
      <div class="page-header" id="banner">
        <div class="row">

        </div>
        <div class="row"> -->


<!-- content center -->
        <div class="container">
          <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-12">

              <div class="bs-component">
                <div class="panel panel-default">
                  <?php
                  include_once "include/connection.php";
                  $select = "SELECT * FROM tbl_news";
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
                          <p style="font-size:18px"><?php echo Textshorten($row['en_body']) ?><a href="news_detail.php?id=<?php echo $row['id']?>">continue reading <i class="fa fa-chevron-circle-right" aria-hidden="true"></i></a></p>


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
              <div class="col-lg-4 pull-right">
                <div class="bs-component">
                  <div class="list-group" style="font-size:18px">
                    <a href="#" class="list-group-item active">
                      Event and Meeting
                    </a>
                    <?php
                    include_once "include/connection.php";
                    $select = "SELECT * FROM tbl_news ORDER BY id DESC ";
                    $result = mysqli_query($conn, $select);
                    if(!$result){
                      die("Can not fetch data from database".mysqli_error($conn));
                    }
                    ?>
                    <?php while($row = mysqli_fetch_array($result)) :?>
                    <a href="news_detail.php?id=<?php echo $row['id'] ?>" class="list-group-item"><?php echo substr($row['en_title'], 0 , 40) ?> ...</a>
                    <?php endwhile; ?>
                  </div>
                </div>
                <!--     Quick link wedget       -->
                <?php include "recent_publication.php"?>
                <!--     Quick link wedget       -->
                <?php include "quickLink.php"?>


              </div>
            </div>
        </div>
<!--end container-->


    <div class="container">
      <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
          <ul class="pagination pagination-lg text-center">
            <li class="disabled"><a href="#">&laquo;</a></li>
            <li class="active"><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">5</a></li>
            <li><a href="#">&raquo;</a></li>
        </ul>
        </div>
        <div class="col-md-4"></div>
      </div>

    </div>

<?php include_once "footer.php" ?>
