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
                    $select = "SELECT * FROM tbl_news WHERE id = '{$_GET['id']}'";
                    $result = mysqli_query($conn, $select);
                    if(!$result){
                        die("Can not fetch data from database".mysqli_error($conn));
                    }
                    ?>
                    <?php while($row = mysqli_fetch_array($result)) :?>

                        <div class="panel-body">

                            <div class="bs-component">

                                <div class="col-md-8 col-sm-12 ">
                                    <img src="admin/upload/<?php echo $row['image'] ?>" alt="" width="690px" height="420px">
                                </div>

                                <div class="col-md-12 col-sm-12 event-body">

                                    <h3 class="event-title" style="color: #0f86c1"><?php echo $row['en_title'] ?> </h3>
                                    <p style="color: #9a9ea0"><i class="fa fa-calendar" aria-hidden="true"></i> <?php echo formatDate($row['create_date']) ?> by   <?php echo "admin" ?> </p>
                                    <hr>
                                    <p style="font-size:18px"><?php echo $row['en_body'] ?></p>

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

                        $select = "SELECT * FROM tbl_news ORDER BY id DESC";
                        $result = mysqli_query($conn, $select);
                        if (!$result) {
                            die("Can not fetch data from database" . mysqli_error($conn));
                        }
                    ?>
                    <?php while($row = mysqli_fetch_array($result)) :?>
                        <a href="news_detail.php?id=<?php echo $row['id']?>" class="list-group-item"><?php echo substr($row['en_title'], 0 , 40) ?> ...</a>
                    <?php endwhile; ?>
                </div>
            </div>

            <!--     Quick link widget       -->
            <?php include "quickLink.php"?>

        </div>
    </div>

</div>
<!--end container-->




<?php include_once "footer.php" ?>
