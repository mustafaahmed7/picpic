<?php
/**
 * Created by PhpStorm.
 * User: Mustafa
 * Date: 18.10.2018 г.
 * Time: 10:43
 */

include "./app/views/admin/layouts/header.view.php";
?>
<table class="table">
    <thead>
    <tr>
        <th scope="col">ID</th>
        <th scope="col">Path</th>
        <th scope="col">Created at</th>
        <th scope="col">Updated at</th>
        <th scope="col">Actions</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($images as $image){ ?>
    <tr>
        <th scope="row"><?php echo $image['id'] ?></th>
        <td><?php echo $image['path'] ?></td>
        <td><?php echo $image['created_at'] ?></td>
        <td><?php echo $image['updated_at'] ?></td>
        <td>
<!--            <a href="/admin/images/edit/--><?php //echo $image['id'] ?><!--" type="button" class="btn btn-success">Edit</a>-->
            <a href="/admin/images/remove/<?php echo $image['id'] ?>" type="button" class="btn btn-danger">Remove</a>
        </td>
    </tr>
    <?php }?>


    </tbody>
</table>
