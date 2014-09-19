<?php
	$titles_text = "Portfolio Clelia";

	if (isset($_GET["page"])) {

      $title_page = $_GET["page"];

          switch ($title_page) {
	        case 'web':
	            $titles_text ="Web Design";
	            break;
	        case 'architecture':
	            $titles_text ="Arch Projects";
	            break;
	        case 'poster':
	            $titles_text = "Posters";
	            break;
	        case 'recycle':
	            $titles_text = "Recycle";
	            break;
	        case 'about':
	            $titles_text = "About Clelia";
	            break;
	       }
	}  
?>

<head>
	<title><?php echo $titles_text; ?></title>
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	<link href="css/main.css" rel="stylesheet">
	<script type="text/javascript" src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-54845020-1', 'auto');
	  ga('send', 'pageview');
	</script>
</head>