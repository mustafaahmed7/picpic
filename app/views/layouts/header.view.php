<!DOCTYPE HTML>
<head>
    <title>PicPic</title>
    <meta charset="utf-8">
    <!-- CSS Files -->
    <link rel="stylesheet" type="text/css" media="screen" href="/public/css/style.css" >
    <link rel="stylesheet" type="text/css" media="screen" href="/public/menu/css/simple_menu.css">
    <link rel="stylesheet" type="text/css" href="/public/css/gridNavigation.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!--JS FILES -->
    <script src="/public/js/jquery.min.js"></script>
    <script src="/public/js/jquery.mousewheel.js"></script>
    <script src="/public/js/jquery.gridnav.js"></script>
    <script src="/public/js/easing/jquery.easing.1.3.js"></script>
    <script>
        $(function () {
            $('#tj_container').gridnav({
                type: {
                    mode: 'seqfade', // use def | fade | seqfade | updown | sequpdown | showhide | disperse | rows
                    speed: 500, // for fade, seqfade, updown, sequpdown, showhide, disperse, rows
                    easing: '', // for fade, seqfade, updown, sequpdown, showhide, disperse, rows
                    factor: 100, // for seqfade, sequpdown, rows
                    reverse: '' // for sequpdown
                }
            });
        });
    </script>
</head>
<body>
<div class="header">
    <!-- Logo/Title -->
    <div id="site_title"><a href="/"> <img src="/public/img/logo.png" alt=""></a> </div>
    <!-- Main Menu -->
    <ol id="menu">
        <li><a href="/">Home</a></li>
        <!-- end sub menu -->
        <li><a href="/images">Images</a></li>
        <!-- end sub menu -->
        <li><a href="/users">Users</a></li>
        <!-- sub menu -->
        <!-- end sub menu -->
        <li><a href="/contact">Contact</a></li>
        <?php
        if(isset($_SESSION['admin']) || isset($_SESSION['user'])){
            echo '<li><a href="/logout">Logout</a></li>';
            echo '<li><a href="/upload">Upload</a></li>';
            if(isset($_SESSION['admin'])){
                echo '<li><a href="/admin">Admin</a></li>';
            }
        }else{
            echo '<li><a href="/login">Login</a>';
            echo '</li><li><a href="/register">Register</a></li>';
        }
        ?>
    </ol>
</div>
<!-- END header -->