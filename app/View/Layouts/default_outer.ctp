<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Orangescrum</title>
    
	<meta name="robots" content="noindex,nofollow" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="<?php echo HTTP_ROOT; ?>plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="<?php echo HTTP_ROOT; ?>plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="<?php echo HTTP_ROOT; ?>plugins/animate-css/animate.css" rel="stylesheet" />

	<!-- Favicon-->
    <!-- Custom Css -->
    <?php 
	echo $this->Html->meta('icon'); 
	echo $this->Html->css('style.css?v='.RELEASE);
	?>
    <!-- Jquery Core Js -->
    
    <script type="text/javascript">
	    var PROTOCOL = '<?php echo PROTOCOL;?>';
	    var DOMAIN = '<?php echo DOMAIN;?>';
	    var HTTP_APP = "<?php echo HTTP_APP; ?>";
	    var DOMAIN_COOKIE = "<?php echo DOMAIN_COOKIE; ?>";
	    
	    //For google login and signup start
	    var CLIENT_ID = "<?php echo CLIENT_ID; ?>";
	    var CLIENT_ID_SIGNUP = "<?php echo CLIENT_ID_SIGNUP; ?>";
	    var REDIRECT = "<?php echo REDIRECT_URI; ?>";
	    var REDIRECT_SIGNUP = "<?php echo REDIRECT_URI_SIGNUP; ?>";
	    //For google login and signup end
	</script>  
	<script src="<?php echo HTTP_ROOT; ?>plugins/jquery/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo JS_PATH; ?>index/common_outer.js"></script>
</head>
<?php flush(); ?>
<body class="login-page head_back" id="headbody">
	<?php 
	/**
	 * Note: Dunno what this div#cover does. Keeping it as it is to avoid breaking.
	 */
	?>
	<div id="cover" class="outer" style="filter:alpha(opacity=50);"></div>
	<?php echo $this->fetch('content'); ?>
    <!-- Bootstrap Core Js -->
    <script src="<?php echo HTTP_ROOT; ?>plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="<?php echo HTTP_ROOT; ?>plugins/node-waves/waves.js"></script>

    <!-- Validation Plugin Js -->
    <script src="<?php echo HTTP_ROOT; ?>plugins/jquery-validation/jquery.validate.js"></script>

    <!-- Custom Js -->
    <script src="<?php echo JS_PATH; ?>admin.js"></script>
    <script src="<?php echo JS_PATH; ?>sign-in.js"></script>
    
    <script type="text/javascript" src="<?php echo JS_PATH; ?>index/common_outer.js"></script>
</body>
</html>