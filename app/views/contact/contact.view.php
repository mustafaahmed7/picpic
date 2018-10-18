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
    <div class="one-half">
        <div class="heading_bg">
            <h2>Contact</h2>
        </div>
            Tel: 0880000000<br>
            mail: mail@test.com </p>
    </div>
    <div class="one-half last">
        <form id="contact_form" method="post">
            <fieldset>
                <label>Name <span class="required">*</span></label>
                <input type="text" name="name" id="Myname" value="" class="text requiredField">
            </fieldset>
            <fieldset>
                <label>Email <span class="required">*</span></label>
                <input type="text" name="email" id="myemail" value="" class="text requiredField email">
            </fieldset>
            <fieldset>
                <label>Subject <span class="required">*</span></label>
                <input type="text" name="subject" id="mySubject" value="" class="text requiredField subject">
            </fieldset>
            <fieldset>
                <label>Your Message <span class="required">*</span></label>
                <textarea name="message" id="Mymessage" rows="20" cols="30" class="text requiredField"></textarea>
            </fieldset>
            <fieldset>
                <input name="Mysubmitted" id="Mysubmitted" value="Send Message" class="button white" type="submit">
            </fieldset>
        </form>
        <!--END form ID contact_form -->
    </div>
    <div style="clear:both; height: 40px"></div>
</div>
<!-- close container -->

<?php include ('./app/views/layouts/footer.view.php'); ?>
