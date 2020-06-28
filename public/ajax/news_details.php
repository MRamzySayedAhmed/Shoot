<?php
include "../includes/header.php";
include "config.php";
?>
<title>News Details</title>
<div class="details">
 <div class="container">

    <?php
		      if(isset($_GET['id']) && is_numeric($_GET['id']))

                   {

                       $id = intval($_GET['id']);
                   }

               else

                   {
                       $id = 0;
                   }

                // Preparing The SQL Statement

                $stmt = $conn->prepare("SELECT * FROM contents WHERE id = ". $id);

                // Executing The Statement

                $stmt->execute();

                // Assigning To Variable

                $rows = $stmt->fetchAll();
     ?>

    <?php
               foreach($rows as $row)
               {
                   echo "<div class='news_details'>";
                   echo "<h2 class='title'>". $row['title']. "</h2>";
                   echo "<span>Description: </span>". "<p class='description'>". $row['description']. "</p>";
                   echo "<span>Writer: </span>". "<p class='writer'>". $row['writer']. "</p>";
                   echo "<img class='image' src='../admin/layout/images/news/". $row['image']. "'>";
                   echo "</div>";
               }
    ?>

                   <hr style="margin-right: 400px">

</div>
</div>
