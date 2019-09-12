<?php function display_article($article) { ?>
    
    <div class = "article-card">
        <h1><?php echo $article['title']; ?></h1>
        
        <img width = "200" src = "
            <?php echo $article["img"]; ?>
        "/>
        
        <p>
            <?php
                echo $article['content'];
            ?>
        </p>
    </div>

<?php } ?>