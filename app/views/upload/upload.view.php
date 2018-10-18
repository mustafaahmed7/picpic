<?php
/**
 * Created by PhpStorm.
 * User: Mustafa
 * Date: 17.10.2018 г.
 * Time: 19:27
 */

include("./app/views/layouts/header.view.php");
?>
    <div class="d-flex justify-content-center">
        <form method="post" enctype="multipart/form-data">
            <div class="form-group">
                <div class="col-xs-6 col-xs-offset-3">
                    <label for="exampleFormControlFile1">Select Images</label>
                    <input type="file" name="upload_file" class="form-control-file" id="exampleFormControlFile1">
                </div>
            </div>
            <div class="form-group">
                <div class="col-xs-6 col-xs-offset-3">
                    <input type="submit" value="Save"/>
                </div>
            </div>
        </form>
    </div>
<?php
/**
 * Created by PhpStorm.
 * User: Mustafa
 * Date: 17.10.2018 г.
 * Time: 19:27
 */

include("./app/views/layouts/footer.view.php");
?>