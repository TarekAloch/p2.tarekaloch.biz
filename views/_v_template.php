<!DOCTYPE html>
<html>

<head>
	<!-- Bookmark Icon -->
	<link rel="icon" type="image/png" href="images/bookmark-icon/myicon.png" />
	<link rel="shortcut icon" href="/images/bookmark-icon/myicon.png?v=2" />
	
	<!-- Apple Icon -->      
	<link rel="apple-touch-icon-precomposed" href="images/bookmark-icon/apple-touch-iphone.png" />
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/bookmark-icon/apple-touch-ipad.png" />
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/bookmark-icon/touch-icon-iphone-retina.png" />
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/bookmark-icon/apple-touch-ipad-retina.png" />

	<!-- Google Web Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Lato:400,700|Roboto+Slab:300' rel='stylesheet' 	type='text/css' />

	<title><?php if(isset($title)) echo $title; ?></title>

	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	
	<link rel="stylesheet" type="text/css" href="/css/style.css">
					
	<!-- Controller Specific JS/CSS -->
	<?php if(isset($client_files_head)) echo $client_files_head; ?>
	
</head>

<body>

<header class="mainHeader">
	<div id="headerContent">
		<a href='/'><img src="/images/logo.png" id="logo" alt="logo"></a>
			<nav>
				<?php if($user): ?>
						
				<a href='/posts'>Thought Bank</a>
				<a href='/posts/add'>Add a thought</a>
				<a href='/posts/users'>Others</a>
				
				<!-- show logged in info in status -->
				<a href='/users/profile'><?=$user->first_name?> <?=$user->last_name?></a>			
				<a href='/users/logout'>Sign out</a>
						
						
				
				<?php else: ?>
				
				<a href='/'>Home/login</a>
				<a href='/users/signup'>Register</a>
						
				<?php endif; ?>
			</nav>
			
	</div> <!-- End of headerContent -->
</header>

<div id="wrap">

	<? echo $content ?>
	
	

</div> <!-- End of wrap -->


<footer>
	<p>2013+ ThoughtBranch -Tarek Aloch-</p>
</footer>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.3/jquery.min.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript">!window.jQuery && document.write(unescape('%3Cscript src="/js/libs/jquery-1.4.4.min.js"%3E%3C/script%3E'))</script>
<!--[if lt IE 7 ]> <script src="{{static_url("js/libs/dd_belatedpng.js")}}"></script> <script> DD_belatedPNG.fix('img, .png_bg'); </script> <![endif]-->
<script type="text/javascript" charset="utf-8">
if (typeof jQuery == 'undefined'){
	document.write(unescape("%3Cscript src='/js/jquery-ui.min.js' type='text/javascript'%3E%3C/script%3E"));
}
</script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.5/jquery-ui.min.js" type="text/javascript"></script>


<script>
	
	$(window).load(function(){
	$('#frame > p.para-1').fadeIn(3000);
	$('#frame > p.para-2').fadeIn(5000);
});
</script>

</body>
</html>
