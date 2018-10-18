<?php
/**
 * Created by PhpStorm.
 * User: Mustafa
 * Date: 17.10.2018 г.
 * Time: 18:42
 */

include ('./app/views/layouts/header.view.php');
?>
<div id="container">
    <h1>Gallery</h1>
   <?php foreach ($images as $image){ ?>
    <div class="one-fifth">
        <p>
            <a title="" href="/uploads/<?php echo $image['path']?>" class="portfolio-item-preview" data-rel="prettyPhoto">
            <img src="/uploads/<?php echo $image['path']?>" alt="" width="158" height="100" class="portfolio-img pretty-box">
            </a>
        </p>
    </div>
    <?php }?>
    <div style="clear:both; height: 40px"></div>
    <nav aria-label="Page navigation example">
        <ul class="pagination">
            <?php
            $url= $_SERVER['REQUEST_URI'];
            $counter = substr($url,8);
            $_url = substr($url,0,8);
            ?>
            <?php if($_url == "/images"){ ?>
                <li class="page-item disabled"><a class="page-link" href="">Previous</a></li>
                <li class="page-item"><a class="page-link" href="/images/2">Next</a></li>
           <?php }else{ ?>
                <li class="page-item "><a class="page-link" href="<?php echo $_url;
                if($counter-1 == 0){
                    echo "1";
                }else{
                echo $counter -1;
                }?>">Previous</a></li>
                <li class="page-item"><a class="page-link" href="<?php echo $_url;echo $counter +1;?>">Next</a></li>
            <?php }?>
        </ul>
    </nav>
</div>
<!-- close container -->
<?php
include ('./app/views/layouts/footer.view.php');
?>
