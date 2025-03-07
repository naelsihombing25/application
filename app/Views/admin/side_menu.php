<!DOCTYPE html>
<html>


<head>
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700,800,900" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link href="<?php echo base_url('css/admin.css'); ?> " rel="stylesheet">

</head>

<body>
    <div class="wrapper">
        <div class="side-menu">
            <div class="logo">
                Hi, Admin!
            </div>
            <div class="menu">
                <ul>
                    <li><a href="<?= base_url('admin') ?>"><i class="fa fa-server" aria-hidden="true"></i><span class="text"> Kelola Artikel </span></a></li>
                    <li><a href="#"><i class="fa fa-user-plus" aria-hidden="true"></i><span class="text"> Kelola Akun Admin </span></a></li>
                    <li><a href="<?= base_url('AuthController/logout') ?>"><i class="fa fa-sign-out" aria-hidden="true"></i><span class="text"> Keluar</span></a></li>

                </ul>
            </div>
        </div>
        <div class="main-content">
            <div class="topmenu">
                <div class="search"><i class="fa fa-search" aria-hidden="true"></i> <input type='text' class='src' placeholder='Search for cards...' /></div>
            </div>
            <div class="main-section">

                <?= $this->renderSection('content'); ?>

            </div>
        </div>
    </div>
</body>

</html>