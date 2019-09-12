<?php function display_user($user) { ?>
    
    <div class = "user-card">
        <h1><?php echo $user['name'] ?></h1>
        <p>Id = <?php echo $user['pk'] ?></p>
    </div>

<?php } ?>