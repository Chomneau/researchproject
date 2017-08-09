<?php
    include "connection.php";
    $select = "SELECT * FROM tbl_about";
    $result = mysqli_query($conn, $select);
?>
<form action="view_function.php" method="get">
<table class="table table-striped table-advance table-hover">
       <tbody>
          <tr>
			 <th><i class="fa fa-hashtag" aria-hidden="true"></i>#id</th>
			 <th><i class="icon_profile"></i>English Title</th>
             <th><i class="icon_profile"></i>Description(EN)</th>
              <th><i class="icon_profile"></i>Khmer Title</th>
              <th><i class="icon_profile"></i>Description(KH)</th>
              <th><i class="fa fa-calendar" aria-hidden="true"></i> created</th>
              <th><i class="fa fa-cogs" aria-hidden="true"></i> action</th>
          </tr>
          <tr>
  <?php
  while ($row = mysqli_fetch_array($result)):?>
    <tr>
        <td><?php echo $row['about_id']?></td>
        <td><?php echo $row['about_title_en']?></td>
        <td><?php echo $row['about_des_en']?></td
        <td><?php echo $row['about_title_kh']?></td>
        <td><?php echo $row['about_des_kh']?></td>
        <td><?php echo $row['created_date']?></td>
        <td>
            <?php echo "<a href=about_edit_form.php?id=". $row['about_id']." ><i class=\"fa fa-pencil-square-o\" aria-hidden=\"true\"></i> Edit</a>" ?> |
            <?php echo "<a href=delete.php?id=". $row['about_id']." ><i class=\"fa fa-times\" aria-hidden=\"true\"></i> Delete</a>" ?>
        </td>
    <tr>

  <?php endwhile; ?>

       </tr>
</tbody>
</table>
</form>
