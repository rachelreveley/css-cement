<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title><?php echo $meta_title;?></title>
		<meta name="author" content="Rachel Reveley">
		<link rel="stylesheet/less" type="text/css" href="berry/berry.less" />
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
		<meta name="viewport" content="initial-scale=1" />
		<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-4069218-3', 'auto');
  ga('send', 'pageview');

</script>
	</head>
	<body>
		<div class="tools fixed fixed-0">
			<div>
				<nav>
					<ul>
						<li>
							<a href="/">Built by Rachel Reveley</a>
						</li>
					</ul>
				</nav>
			</div>
		</div>
		<header>
			<div>
				<div class="logo">
					<a href="/css-cement">CSS Cement</a>
					<p>Less powered front-end framework</p>
				</div>
				<a href="https://github.com/rachelreveley/css-cement" class="download">Download<span>v1.0</span></a>
			</div>
			<nav class="main">
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="template-widgets.php">Standard Widets</a>
						<ul>
							<li><a href="#bar-chart">Bar charts</a></li>
							<li><a href="#calendar">Calendar</a></li>
							<li><a href="#chat-boxes">Chat boxes</a></li>
							<li><a href="#corner-ribbons">Corner ribbons</a></li>
							<li><a href="#dialog-boxes">Dialog boxes</a></li>
							<li><a href="#feature-boxes">Feature boxes</a></li>
							<li><a href="#forum-threads">Forum threads</a></li>
							<li><a href="#gallery">Gallery</a></li>
							<li><a href="#highlight">Highlighted content box</a></li>
							<li><a href="#loading">Loading</a></li>
							<li><a href="#pagination">Pagination</a></li>
							<li><a href="#progress-bar">Progress bar</a></li>
							<li><a href="#tables">Tables</a></li>
							<li><a href="#static-tabs">Static Tabs</a></li>
							<li><a href="#tags">Tags</a></li>
						</ul>
					</li>
					<li><a href="template-grid-sizes.php">Grid system</a></li>
					<li><a href="template-forms.php">Forms</a></li>
					<li><a href="template-type.php">Type</a></li>
					<li><a href="template-nav.php">side navigation</a></li>
					<li><a href="template-non-semantic.php">Other widgets</a></li>
					<li><a href="themes.php">Themes</a></li>
					<li><a href="https://github.com/rachelreveley/css-cement">Github</a></li>
				</ul>
			</nav>
		</header>
		<div class="main">
			<div>