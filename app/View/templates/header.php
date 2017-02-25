<?php if (! defined('ABSPATH')) die('permision denied');?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo SITE_TITLE ;?></title>
    <link rel="stylesheet" href="/node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/app/assets/css/freelancer.min.css">
    <link rel="stylesheet" href="/app/assets/css/styles.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<header class="navbar navbar-default navbar-fixed-top navbar-custom affix-top">
    <div class="menu_panel">
        <ul>
            <li><a class="btn btn-primary" href="/"><?php $this->_('Main');?></a></li>
            <li><a class="btn btn-primary" href="/admin"><?php $this->_('Admin panel');?></a></li>
            <li><a class="btn btn-primary" href="/register"><?php $this->_('Registration');?></a></li>
        </ul>
    </div>
    <div class="eng_panel">
        <button type="button" class="btn btn-primary logout"><?php $this->_('Logout');?></button>
        <button type="button" class="btn btn-info cookie" data-cookie="ru">RU</button>
        <button type="button" class="btn btn-info cookie" data-cookie="en">EN</button>
    </div>
</header>