<!DOCTYPE html>
<html lang="en">
<head>
<!-- Meta information -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
<!-- Title-->
<title>CAPLET |  Admin HTML Themes</title>
<!-- Favicons -->
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
<link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
<link rel="shortcut icon" href="assets/ico/favicon.ico">
<!-- CSS Stylesheet-->
<?php echo HTML::style('themes/wipper_world/assets/css/bootstrap/bootstrap.min.css');?>
<?php echo HTML::style('themes/wipper_world/assets/css/bootstrap/bootstrap-themes.css');?>
<?php echo HTML::style('themes/wipper_world/assets/css/style.css');?>

<!-- Styleswitch if  you don't chang theme , you can delete -->
<?php echo HTML::style('themes/wipper_world/assets/css/styleTheme1.css');?>
<?php echo HTML::style('themes/wipper_world/assets/css/styleTheme2.css');?>
<?php echo HTML::style('themes/wipper_world/assets/css/styleTheme3.css');?>
<?php echo HTML::style('themes/wipper_world/assets/css/styleTheme4.css');?>

</head>
<body class="leftMenu nav-collapse">
<div id="wrapper">
    <div id="header">
        <div class="logo-area clearfix"><a href="#" class="logo"></a></div>
        <div class="tools-bar">
		          <ul class="nav navbar-nav navbar-right tooltip-area">
                      <li>
                          <a href="#" class="avatar-header">
                            <?php echo HTML::image('themes/wipper_world/assets/img/avatar2.png', '', array('class' => 'circle'));?>
						  </a>
					   </li>
					   <li class="dropdown">
					      <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown">
						     <em><strong>Hi</strong>, Nathwat </em> <i class="dropdown-icon fa fa-angle-down"></i>
						  </a>
						  <ul class="dropdown-menu pull-right icon-right arrow">
						      <li><a href="#"><i class="fa fa-user"></i> Profile</a></li>
						      <li><a href="#"><i class="fa fa-cog"></i> Setting </a></li>
						      <li><a href="#"><i class="fa fa-bookmark"></i> Bookmarks</a></li>
						      <li><a href="#"><i class="fa fa-money"></i> Make a Deposit</a></li>
						      <li class="divider"></li>
						      <li><a href="#"><i class="fa fa-sign-out"></i> Signout </a></li>
						  </ul>
						</li>
                        <li><button class="btn btn-circle btn-header-search" ><i class="fa fa-search"></i></button></li>
                    </ul>
				</div>
		</div>

		<div class="widget-top-search">
			<span class="icon"><a href="#" class="close-header-search"><i class="fa fa-times"></i></a></span>
			<form id="top-search">
					<h2><strong>Quick</strong> Search</h2>
					<div class="input-group">
							<input  type="text" name="q" placeholder="Find something..." class="form-control" />
							<span class="input-group-btn">
							<button class="btn" type="button" title="With Sound"><i class="fa fa-microphone"></i></button>
							<button class="btn" type="button" title="Visual Keyboard"><i class="fa fa-keyboard-o"></i></button>
							<button class="btn" type="button" title="Advance Search"><i class="fa fa-th"></i></button>
							</span>
					</div>
			</form>
		</div>
        <nav id="menu"  data-search="close">
				<ul>
						<li><span><i class="icon  fa fa-laptop"></i> Dashboard</span>
								<ul>
										<li><a href="#"><i class="icon  fa fa-rocket"></i> First Design </a></li>
										<li><a href="#"><i class="icon  fa fa-th"></i> Dashboard New </a></li>
								</ul>
						</li>
						<li><a href="#"><i class="icon  fa fa-rocket"></i> Front End </a></li>
				</ul>
		</nav>
		<div id="main">
            {!! Theme::content() !!}

		</div>




</div>
<!-- //wrapper-->


<!--
////////////////////////////////////////////////////////////////////////
//////////     JAVASCRIPT  LIBRARY     //////////
/////////////////////////////////////////////////////////////////////
-->

<!-- Jquery Library -->
<?php echo HTML::script('themes/wipper_world/assets/js/jquery.min.js');?>
<?php echo HTML::script('themes/wipper_world/assets/js/jquery.ui.min.js');?>
<?php echo HTML::script('themes/wipper_world/assets/plugins/bootstrap/bootstrap.min.js');?>
<!-- Modernizr Library For HTML5 And CSS3 -->
<?php echo HTML::script('themes/wipper_world/assets/js/modernizr/modernizr.js');?>
<?php echo HTML::script('themes/wipper_world/assets/plugins/mmenu/jquery.mmenu.js');?>
<?php echo HTML::script('themes/wipper_world/assets/js/styleswitch.js');?>
<!-- Library 10+ Form plugins-->
<?php echo HTML::script('themes/wipper_world/assets/plugins/form/form.js');?>
<!-- Datetime plugins -->
<?php echo HTML::script('themes/wipper_world/assets/plugins/datetime/datetime.js');?>
<!-- Library Chart-->
<?php echo HTML::script('themes/wipper_world/assets/plugins/chart/chart.js');?>
<!-- Library  5+ plugins for bootstrap -->
<?php echo HTML::script('themes/wipper_world/assets/plugins/pluginsForBS/pluginsForBS.js');?>
<!-- Library 10+ miscellaneous plugins -->
<?php echo HTML::script('themes/wipper_world/assets/plugins/miscellaneous/miscellaneous.js');?>
<!-- Library Themes Customize-->
<?php echo HTML::script('themes/wipper_world/assets/js/caplet.custom.js');?>


</body>
</html>
