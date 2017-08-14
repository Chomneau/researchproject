<div class="bs-component">
    <div class="list-group" style="font-size:18px">
        <a href="#" class="list-group-item active">
            Recent Event and Meeting
        </a>
        <?php
        include_once "include/connection.php";
        $select = "SELECT * FROM tbl_news ORDER BY id DESC LIMIT 3 ";
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