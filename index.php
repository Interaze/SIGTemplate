<?php
    include 'connect.php';
    include 'article_template.php';

    $sql = "SELECT * FROM `Article`";
    $result = $conn->query($sql);

    if (!$result) {
        echo "res failure";
    }else {
        
    }
?>

<!DOCTYPE html >
<html>
    <?php 
    include 'head.php';
    ?>

    <body>
        <?php include 'navbar.php'; ?>

        <div class = "content">
            <br>
            <h1 id = "title">Current Articles</h1>
            <br>

            <?php 
                //Add some spacing
                echo "<br><br>";

                //Display the users
                while ($row = $result->fetch_assoc()) {
                    display_article($row);

                    echo "<br><br>";
                }
            ?>
        </div>
        
        <?php include 'footer.php'; ?>
    </body>
</html>