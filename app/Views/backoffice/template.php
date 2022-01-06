<html>
<head>
    <?php 
		$pengaturan = $model->getSpecificData('pengaturan', array('id' => 1));
		$session=session();
    ?>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Content Management System</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('public/css/bootstrap.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('public/css/font-awesome.css');?>">
    <link rel="shortcut icon" type="image/png" href="<?php echo base_url('public/images/'.$pengaturan->favicon); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('public/css/bootstrap-datetimepicker.min.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('public/css/dashboard.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('public/css/alertify.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('public/css/themes/default.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('public/css/nestle.css'); ?>">
    <style>
        dl.defs{ margin: 10px 0 10px 40px; }
        dl.defs dt{ font-weight: bold; line-height: 20px; margin: 10px 0 0 0; }
        dl.defs dd{ margin: -20px 0 10px 160px; padding-bottom: 10px; border-bottom: solid 1px #eee;}
        pre{ font-size: 12px; line-height: 16px; padding: 5px 5px 5px 10px; margin: 10px 0; background-color: #e4f4d4; border-left: solid 5px #9EC45F; overflow: auto; tab-size: 4; -moz-tab-size: 4; -o-tab-size: 4; -webkit-tab-size: 4; }

        .wrapper{ background-color: #ffffff; width: 800px; border: solid 1px #eeeeee; padding: 20px; margin: 0 auto; }
        #tabs{ margin: 20px -20px; border: none; }
        #tabs, #ui-datepicker-div, .ui-datepicker{ font-size: 85%; }
        .clear{ clear: both; }
        
        .example-container{ background-color: #f4f4f4; border-bottom: solid 2px #777777; margin: 0 0 20px 40px; padding: 20px; }
        .example-container input{ border: solid 1px #aaa; padding: 4px; width: 175px; }
        .ebook{}
        .ebook img.ebookimg{ float: left; margin: 0 15px 15px 0; width: 100px; }
        .ebook .buyp a iframe{ margin-bottom: -5px; }
        .form-group{margin-bottom:3px;}
	</style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="<?php echo base_url('public/js/bootstrap.js'); ?>"></script>
    <script src="<?php echo base_url('public/js/bootstrap-datetimepicker.min.js'); ?>"></script>
    <script src="<?php echo base_url('public/ckeditor/ckeditor.js'); ?>"></script>
    <script src="<?php echo base_url('public/js/alertify.js'); ?>"></script>
    <script src="<?php echo base_url('public/js/alertConfirm.js'); ?>"></script>
    <script src="<?php echo base_url('public/js/jquery.slimscroll.js'); ?>"></script>
    <script src="<?php echo base_url('public/js/jquery.nestable.js'); ?>"></script>
    <script src="<?php echo base_url('public/js/navmenu.js'); ?>"></script>
</head>
<body>
    <nav class="navbar navbar-default">
        <div class="container">
            <div class="row clearfix">
                <div class="col-sm-12 column">
                    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button> <a class="navbar-brand" href="index.php">Home</a>
                        </div>
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav">
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Umum<strong class="caret"></strong></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Kontak Kami</a></li>
                                        <li><a href="#">Testimoni</a></li>
                                        <li><a href="#">Pengumuman</a></li>
                                        <li><a href="#">Info Karir</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Gallery<strong class="caret"></strong></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Video Kegiatan</a></li>
                                        <li><a href="#">Foto Kegiatan</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Content<strong class="caret"></strong></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Slider</a></li>
                                        <li><a href="#">Tentang Kami</a></li>
                                        <li><a href="#">Pelayanan</a></li>
                                        <li><a href="#">Mitra</a></li>
                                        <li><a href="#">Investor</a></li>
                                        <li class="divider"></li>
                                        <li><a href="#">Kategori Bank Data</a></li>
                                        <li><a href="#">Bank Data</a></li>
                                        <li class="divider"></li>
                                        <li><a href="#">Berita</a></li>
                                        <li><a href="#">Find us on</a></li>
                                    </ul>
                                </li>
                            </ul>
                            <ul class="nav navbar-nav navbar-right">
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Admin Setting<strong class="caret"></strong></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Edit Account</a></li>
                                        <li class="divider"></li>
                                        <li><a href="#">Logout</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>        
        </div>
    </nav>
    <div class="theme-showcase container">
    	<div style="font-weight:bold;color:#000000;height:20px;padding-top: -50px;">
    		<MARQUEE  onmouseover="this.stop()" onMouseOut="this.start()" direction="left" scrollamount="5" width="100%">
    			Yth. Bapak/Ibu, untuk melakukan PENGADUAN atau untuk permintaan INFORMASI teknis terkait pekerjaan silahkan menginventarisasi masalah terlebih dahulu  kemudian dibuat list permasalahan lalu sampaikan ke <a href="mailto:team@rumahmedia.com">team@rumahmedia.com</a> agar mudah ditangani oleh tim kami.
    		</MARQUEE>
    	</div> 
	</div> 
    <?= $this->renderSection('content') ?>
    <hr>
    <div id="notifications"><?php echo session()->getFlashData('msg'); ?></div> 
    <style>
        #notifications {
        cursor: pointer;
        position: fixed;
        right: 0px;
        z-index: 9999;
        bottom: 0px;
        margin-bottom: 22px;
        margin-right: 15px;
        min-width: 300px; 
        max-width: 800px;  
    }
    </style>
    <style>
        div .errors > ul{
            padding: unset;
            margin: unset;
            list-style: none;
        }
        div .errors > ul > li{
            color: #b94a48;
            background-color: #f2dede;
            border-color: #eed3d7;
            padding: 15px;
            margin-bottom: 10px;
            border: 1px solid transparent;
            border-radius: 4px;
            font-size: 14px;
        }
    </style>
    <script>   
        $('#notifications').slideDown('slow').delay(3000).slideUp('slow');
    </script>
</body>
</html>
