<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>CSS Cement</title>
		<meta name="author" content="Rachel Reveley">
		<link rel="stylesheet/less" type="text/css" href="css-cement/all.less" />
		<script type="text/javascript">
			less = {
				env: "development", // or "production"
				async: false,	   // load imports async
				fileAsync: false,   // load imports async when in a page under
									// a file protocol
				poll: 1000,		 // when in watch mode, time in ms between polls
				functions: {},	  // user functions, keyed by name
				dumpLineNumbers: "comments", // or "mediaQuery" or "all"
				relativeUrls: false,// whether to adjust url's to be relative
									// if false, url's are already relative to the
									// entry less file
									//resource
				strictMath: true,
			};
		</script>
		<script src="less.js" type="text/javascript"></script>
	</head>
	<body>
		<div class="tools fixed fixed-40">
			<div>
				<nav>
					<ul>
						<li><a href="/">Built by Rachel Reveley</a></li>
					</ul>
				</nav>
			</div>
		</div>
		<header>
			<div>
				<div class="logo">
					<a href="/css-cement">CSS Cement</a>
				</div>
				<nav class="main">
					<ul>
						<li><a href="index.php">Home</a></li>
						<li><a href="template-widgets.php">Standard Widets</a></li>
						<li><a href="template-grid-sizes.php">Grid system</a></li>
						<li><a href="template-forms.php">Forms</a></li>
						<li><a href="template-type.php">Type</a></li>
						<li><a href="template-non-semantic.php">Other widgets</a></li>
						<li><a href="themes.php">Themes</a></li>
						<li><a href="https://github.com/rachelreveley/css-cement">Github</a></li>
					</ul>
				</nav>
			</div>
		</header>
		<div class="main">
			<div>