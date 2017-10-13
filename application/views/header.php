<!DOCTYPE html>
<html lang="en" itemscope itemtype="http://schema.org/WebPage">
	<head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8"> 
        <meta charset="utf-8">
        <title>Findrecuiter</title>
        <meta name="generator" content="Bootply">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <!--[if lt IE 9]>
          <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <link rel="apple-touch-icon" sizes="114x114" href="http://s.bootply.com/bootstrap/img/apple-touch-icon-114x114.png">
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/jquery-ui.css">
        <link href="<?php echo base_url(); ?>css/template-style.css" rel="stylesheet">
		<link href="<?php echo base_url(); ?>css/style.css" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.min.css">
   
        <script type="text/javascript">
        var base_url = "<?php echo base_url(); ?>";
        </script>
		
    </head>
<body>

<div class="container">
        <div class="navbar navbar-default navbar-fixed-top move-me ">
        <div class="container">
            <div class="navbar-header">
                <button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <a href="http://freewebcodedesign.com" class="navbar-brand logo">
                <!--<img src="http://freewebcodedesign.com/wp-content/themes/free/images/logo.jpg" /> -->
                <img class="logo" src="<?php echo base_url(); ?>/image/logo.png">
                
                </a>
            </div>
                 <div class="navbar-collapse collapse move-me">
                                                <ul class="nav navbar-nav navbar-right">
                    <li><a href="home">HOME</a></li>
                 <!--   <li><a href="jobs">JOBS</a></li>
                    <li><a href="job-seekers">JOBSEEKERS</a></li>
                    <li><a href="profile">PROFILE</a></li>-->
                <!--    <li><a href="recruiter">RECUITER</a></li> -->
                   
                    <?php if((int)$this->session->userdata("user_id")>0){ ?>
					<!-- <li><a href="profile">PROFILE</a></li>
                    <li><a href="user/logout">LOGOUT</a></li> -->
					<li class="dropdown">
						<a title="Bootstrap Related Resources" data-toggle="dropdown" class="dropdown-toggle" href="#" aria-expanded="false">Rakesh Kumar <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="profile">PROFILE</a></li>
							<li><a href="dashboard">Dashboard</a></li>
							<li><a href="user/logout">LOGOUT</a></li>
						</ul>
					</li>
                    <?php } else { ?>
                     <li><a href="sign-up">LOGIN / SIGN UP</a></li>
                    <?php } ?>
                </ul>
            </div>

        </div>
    </div>
