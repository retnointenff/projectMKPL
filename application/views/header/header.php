<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PT. PYXIS</title>
        <link type="text/css" href="<?php echo base_url(); ?>/asset/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link type="text/css" href="<?php echo base_url(); ?>/asset/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
        <link type="text/css" href="<?php echo base_url(); ?>/asset/css/theme.css" rel="stylesheet">
        <link type="text/css" href="<?php echo base_url(); ?>/asset/images/icons/css/font-awesome.css" rel="stylesheet">
        <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600'rel='stylesheet'>
        <link rel="icon" type="image/png" href="<?php echo base_url(); ?>/asset/images/Pyxiss.png">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    </head>

        <script src="<?php echo base_url();?>asset/scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>asset/scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>asset/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>asset/scripts/flot/jquery.flot.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>asset/scripts/flot/jquery.flot.resize.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>asset/scripts/datatables/jquery.dataTables.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>asset/scripts/common.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>asset/scripts/my.js"type="text/javascript" ></script>
        <script src="<?php echo base_url();?>asset/scripts/desimal.js"type="text/javascript" ></script>
        
        <style type="text/css">
            #kiri{
                width:50%;
                height:80px;
                float:left;
            }
            #kanan{
                width:50%;
                height:80px;
                float:right;
            }
            #tengah{
                width:50%;
                height:80px;
                float:left;
            }
        </style>
    </head>
    <body>
        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
                        <i class="icon-reorder shaded"></i></a><a class="brand" href="#"><img src="<?php echo base_url(); ?>/asset/images/Pyxis.png" width="90"></a>
                    <div class="nav-collapse collapse navbar-inverse-collapse">
                        <ul class="nav pull-right">
                            <li class="nav-user dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="<?php echo base_url(); ?>/asset/images/user.png" class="nav-avatar"/>
                                <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="<?php echo base_url('index.php/hrd/edit_profil'); ?>">Edit Profile</a></li>
                                    <li class="divider"></li>
                                    <li><a href="<?php echo base_url('index.php/auth/logout'); ?>">Logout</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="wrapper">
            <div class="container">
                <div class="row">
                    <div class="span3">
                        <div class="sidebar">
                            <ul class="widget widget-menu unstyled">
                                <li class="active"><a href="<?php echo base_url('index.php/hrd'); ?>"><i class="menu-icon icon-dashboard"></i>Dashboard</a></li>
                                <li><a href="<?php echo base_url('index.php/hrd/karyawan'); ?>"><i class="menu-icon icon-list-alt"></i>Data Karyawan</a></li>
                                <li><a href="<?php echo base_url('index.php/hrd/absensi'); ?>"><i class="menu-icon icon-list-alt"></i>Data Absensi</a></li>
                                <li><a class="collapsed" data-toggle="collapse" href="#togglePages"><i class="menu-icon icon-cog">
                                </i><i class="icon-chevron-down pull-right"></i><i class="icon-chevron-up pull-right">
                                </i>Izin </a>
                                    <ul id="togglePages" class="collapse unstyled">
                                        <li><a href="<?php echo base_url('index.php/hrd/cuti'); ?>"><i class="icon-inbox"></i>Cuti </a></li>
                                        <li><a href="<?php echo base_url('index.php/hrd/keluar'); ?>"><i class="icon-inbox"></i>Keluar</a></li>
                                        <li><a href="<?php echo base_url('index.php/hrd/khusus'); ?>"><i class="icon-inbox"></i>Khusus</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>                        