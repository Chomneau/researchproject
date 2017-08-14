
<div class="bs-component">
    <div class="list-group" style="font-size:18px">
        <a href="#" class="list-group-item active">
            Quick link
        </a>
        <?php
        include_once "include/connection.php";
        $select = "SELECT * FROM tbl_link";
        $result = mysqli_query($conn, $select);
        if(!$result){
            die("Can not fetch data from database".mysqli_error($conn));
        }
        ?>
        <?php while($row = mysqli_fetch_array($result)) :?>
            <a href="<?php echo $row['url'] ?>" class="list-group-item" target="_blank"><?php echo TextSidebarShorten($row['en_label']) ?></a>
        <?php endwhile; ?>
    </div>
</div>