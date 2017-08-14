<div class="bs-component">
    <div class="list-group" style="font-size:18px">
        <a href="education.php" class="list-group-item active">
            Education
        </a>
        <?php
        include_once "include/connection.php";
        $select = "SELECT * FROM tbl_education ORDER BY id ASC LIMIT 5";
        $result = mysqli_query($conn, $select);
        if(!$result){
            die("Can not fetch data from database".mysqli_error($conn));
        }
        ?>
        <?php while($row = mysqli_fetch_array($result)) :?>
            <a href="about_detail.php?id=<?php echo $row['id'] ?>" class="list-group-item"><?php echo TextSidebarShorten($row['en_title']) ?></a>
        <?php endwhile; ?>
    </div>
</div>