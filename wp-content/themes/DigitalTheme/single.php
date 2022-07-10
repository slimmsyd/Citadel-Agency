



<?php 

$nameArray = array("This", "That", "Can", "Make");
$count = 0; 

//while we still have post to loop through keep looping
while(have_posts()) { 
    the_post(); //keep track of which post we are currenlty working with
    ?>
    <h2><?php the_title() ?></h2>
    <?php the_content(); ?>
    <?php
}
?>
