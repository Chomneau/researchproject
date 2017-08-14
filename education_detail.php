<?php include "header.php" ?>
<?php include "include/formatHelper.php"?>
<!-- slider or umbotron -->
<div class="container">
    <div class="row">
        <div class=" col-lg-12">
            <div class="bs-docs-section">
                <div class="page-header text-center">
                    <h2 id="containers" class="title-page" style="color:#585f6b">EDUCATION RESEARCH</h2>
                </div>
            </div>
        </div>
    </div><!-- end row -->
</div><!-- end container -->


<!-- content  -->
<div class="container">
    <div class="row">

        <!-- center -->
        <div class="col-lg-8 col-md-8 col-sm-12">

            <div class="bs-component">
                <?php
                include_once "include/connection.php";
                $select = "SELECT * FROM tbl_education WHERE id = '{$_GET['id']}'";
                $result = mysqli_query($conn, $select);
                if(!$result){
                    die("Can not fetch data from database".mysqli_error($conn));
                }
                ?>
                <?php while($row = mysqli_fetch_array($result)) :?>
                    <div class="panel panel-default">

                        <div class="panel-body">
                            <div class="bs-component">
                                <div class="col-md-12 col-sm-12 event-image" style="margin-top:-20px">
                                    <img src="admin/upload/<?php echo $row['image'] ?>" alt="" width="690px" height="420px">
                                </div>
                                <div class="col-md-12 col-sm-12 event-body" style="margin-right:10px">

                                    <h3 class="event-title"><?php echo $row['en_title'] ?> </h3>
                                    <p style="color: #9a9ea0"><i class="fa fa-calendar" aria-hidden="true"></i> <?php echo formatDate($row['create_date']) ?> by   <?php echo "admin" ?> </p>
                                    <p style="font-size: 18px "><?php echo $row['en_body'] ?></p>

                                </div>
                                <hr>

                            </div>
                        </div>

                        <div class="panel-footer"></div>

                    </div>
                <?php endwhile;?>
            </div>
        </div>

        <!-- right sidebar -->
        <div class="col-lg-4 pull-right">
            <!-- recent publication widget-->
            <?php include "recent_education.php"?>
            <!-- recent publication widget-->
            <?php include "recent_publication.php"?>

            <!-- recent event and meeting-->
            <?php include "recent_event_meeting.php"?>
            <!-- quick link widget-->
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
