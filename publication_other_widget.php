<!-- Other publication -->
<div class="container " style="margin-bottom: 30px">
    <div class="row">
        <div class="publication">
            <h3 style="color: #2F6FAD"><i class="fa fa-bookmark" aria-hidden="true"></i> Publications</h3>
            <hr>
        </div>
        <?php
        include_once "include/connection.php";
        $select = "SELECT * FROM tbl_publication ORDER BY id ASC LIMIT 6";
        $result = mysqli_query($conn, $select);
        if(!$result){
            die("Can not fetch data from database".mysqli_error($conn));
        }
        ?>
        <?php while($row = mysqli_fetch_array($result)) :?>
        <!-- publication  -->
        <div class="col-lg-4 col-md-4 col-sm-12">
            <div class="panel-body">
                <div class="bs-component">
                    <div class="col-md-3 col-sm-12 event-image" style="margin-top:15px;">
                        <a href="publication_detail.php?id=<?php echo $row['id'] ?>">
                            <img src="admin/upload/<?php echo $row['image'] ?>" width="120" height="150px">
                        </a>
                    </div>
                    <div class="col-md-9 col-sm-12 event-body-public">

                        <h3 class="event-title-public"><a href="publication_detail.php?id=<?php echo $row['id'] ?>"><?php echo $row['en_title'] ?></a> </h3>
                        <p style="font-size:14px"><?php echo OtherTextShorten($row['en_body']) ?></p>
                        <small><a href="publication_detail.php?id=<?php echo $row['id'] ?>">Read more</a>  </small>
                    </div>
                </div>
            </div>
        </div>

        <?php endwhile; ?>
        <!-- publication 4 -->


    </div><!-- end row -->
</div><!-- end container -->