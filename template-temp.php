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
			};
		</script>
		<script src="less.js" type="text/javascript"></script>
<!-- These styles are specifically to show how this template works -->
		<style type="text/css">
			.parent {background-color: #fcfcfc;}
			.parent > div {background-color: #eee;}
		</style>
	</head>
	<body>
		<div class="main">
			<div>
				<div class="content">
				</div>
			</div>
		</div>
	</body>
</html>