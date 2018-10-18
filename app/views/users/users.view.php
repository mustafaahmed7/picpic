<?php
/**
 * Created by PhpStorm.
 * User: Mustafa
 * Date: 17.10.2018 г.
 * Time: 18:43
 */

include ('./app/views/layouts/header.view.php');
?>

<div id="container">
    <div id="portfolio">
        <!--END filtering-nav-->
        <div class="portfolio-container" id="columns">
            <ul>
                <?php foreach ($users as $user){ ?>
                    <li class="one-fourth web">
                        <p> <a title="Caption Text" href="img/demo/slide_2.jpg"
                               class="portfolio-item-preview" data-rel="prettyPhoto">
                                <img src="img/portfolio/portfolio-img-01.jpg"
                                     alt="" width="210" height="145" class="portfolio-img pretty-box">
                            </a> </p>
                        <h4><a href="#"><?php echo $user['username']?></a></h4>
                    </li>
                <?php }?>

            </ul>
            <!--END ul-->
        </div>
        <!--END portfolio-wrap-->
    </div>
    <div style="clear:both; height: 40px"></div>
</div>
<!-- close container -->
<?php
include ('./app/views/layouts/footer.view.php');
?>
