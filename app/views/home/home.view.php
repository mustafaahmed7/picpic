<?php
/**
 * Created by PhpStorm.
 * User: Mustafa
 * Date: 16.10.2018 г.
 * Time: 15:52
 */

include_once "./app/views/layouts/header.view.php";
?>

<div id="container">
    <div id="tj_container" class="tj_container">
<!--        <div class="tj_nav"> <span id="tj_prev" class="tj_prev">Previous</span> -->
<!--            <span id="tj_next" class="tj_next">Next</span> </div>-->
        <div class="tj_wrapper">
            <ul class="tj_gallery" style="margin:0; padding:0">
                <?php foreach ($images as $image){ ?>
                    <li><a href="./uploads/<?php echo $image['path'] ?>"><img src="./uploads/<?php echo $image['path'] ?>" alt=""></a></li>
                <?php }?>
            </ul>
        </div>
    </div>
    <!-- END Portfolio -->

</div>
<!-- END container -->
<?php
include_once "./app/views/layouts/footer.view.php";
?>
