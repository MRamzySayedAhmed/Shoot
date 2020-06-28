<?php
include "../includes/header.php";
include "config.php";
?>
<title>News Details</title>
<div class="details">
    <div class="container">

        <?php

            $value = $_GET['value'];

        // Preparing The SQL Statement

        $stmt = $conn->prepare("SELECT * FROM contents WHERE title like CONCAT ('%',?,'%') OR description like CONCAT ('%',?,'%')");
        // Executing The Statement
        $stmt->execute([$value, $value]);
        $count = $stmt->rowCount();

        // Assigning To Variable

        $rows = $stmt->fetchAll();
        if($count == 0)
        {
            echo "<div class='alert alert-danger' style='margin-top: 10px'>";
            echo "There are No News According to This Title or Description";
            echo "</div>";
        }
        else
        {
            foreach ($rows as $row)
            {
                echo "<div class='news_details'>";
                echo "<h2 class='title'>" . $row['title'] . "</h2>";
                echo "<span>Description: </span>" . "<p class='description'>" . $row['description'] . "</p>";
                echo "<span>Writer: </span>" . "<p class='writer'>" . $row['writer'] . "</p>";
                echo "<img class='image' src='../admin/layout/images/news/" . $row['image'] . "'>";
                echo "</div>";

            }
            ?>
            <hr style="margin-right: 400px">
        <?php
        }

        ?>

    </div>
</div>
