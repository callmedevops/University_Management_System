<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Dashboard</title>
		<link rel="stylesheet" href="main.css">
		<script src="main.js"></script>

		<style>
			.ad {
				position: absolute;
				width: 300px;
				height: 250px;
				border: 1px solid #ddd;
				left: 50%;
				transform: translateX(-50%);
				top: 250px;
				z-index: 10;
			}
			.ad .close {
				position: absolute;
				font-family: 'ionicons';
				width: 20px;
				height: 20px;
				color: #fff;
				background-color: #999;
				font-size: 20px;
				left: -20px;
				top: -1px;
				display: table-cell;
				vertical-align: middle;
				cursor: pointer;
				text-align: center;
			}
		</style>
		<script type="text/javascript">
			$(function() {
				$('.close').click(function() {
					$('.ad').css('display', 'none');
				})
			})
		</script>

	</head>
	<body>
		<div class="header">
			<div class="logo">		
				<span>MyKU</span>
			</div>
		</div>
		<div class="side-nav">
			<div class="logo">
				<span><a href="../index.php">MyKU</a></span>
			</div>
			<nav>
				<ul>
					<li>
						<a href="../announcement/index.php">
							<span>Announcements</span>
						</a>
					</li>
					<li>
						<a href="../message/index.php">
							<span>Messages</span>
						</a>
					</li>
					<li>
						<a href="../assignment/index.php">
					
							<span>Assignment</span>
						</a>
					</li>
					<li>
						<a href="../discussion/index.php">
							<span>Discussion</span>
						</a>
					</li>
				</ul>
			</nav>
		</div>
		<div class="main-content">
			<h2>
			This is Discussion page.
		</h2>
		</div>
	</body>
</html>