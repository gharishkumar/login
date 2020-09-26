<html>
<head>
	<title>Registration page</title>
</head>
<link rel="stylesheet" href="main.css">
<body>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<div class="session">
	<form action="regis.php" method="POST" class="log-in" autocomplete="off">
		<h4>Welcome new user</h4>
		<p>Choose a user name</p>
		<div class="floating-label">
			<input placeholder="Name" type="text" name="studname" id="stdname" autocomplete="off">
			<label for="email">Name:</label>
			<div class="icon">
				<svg enable-background="new 0 0 513 599" version="1.1" viewBox="0 0 513 599" xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
					<style type="text/css">
						.st0{fill:none;}
						.st1{fill:#010101;}
					</style>
					<g transform="translate(-298 -18)">
						<path class="st1" d="M554.5 303C475.926 303 412 239.302 412 161.003 412 82.7028 475.926 19 554.5 19 633.074 19 697 82.7028 697 161.003 697 239.302 633.074 303 554.5 303ZM554.5 61.6002C499.498 61.6002 454.75 106.187 454.75 161.003 454.75 215.813 499.498 260.4 554.5 260.4 609.502 260.4 654.251 215.813 654.251 161.003 654.251 106.187 609.502 61.6002 554.5 61.6002Z"/>
						<path class="st1" d="M789.625 616 319.375 616C307.576 616 298 606.443 298 594.667L298 495.109C298 420.615 358.733 360 433.373 360L675.627 360C750.267 360 811 420.615 811 495.109L811 594.667C811 606.443 801.424 616 789.625 616ZM340.75 573.333 768.25 573.333 768.25 495.109C768.25 444.141 726.695 402.667 675.627 402.667L433.373 402.667C382.305 402.667 340.75 444.141 340.75 495.109Z"/>
					</g>
					<rect class="st0" width="513" height="599"></rect>
				</svg>
			</div>
		</div>
		<div class="floating-label">
			<input placeholder="Email" type="email" name="email" id="email" autocomplete="off">
			<label for="email">Email:</label>
			<div class="icon">
				<svg enable-background="new 0 0 100 100" version="1.1" viewBox="0 0 100 100" xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
					<style type="text/css">
						.st0{fill:none;}
					</style>
					<g transform="translate(0 -952.36)">
						<path d="m17.5 977c-1.3 0-2.4 1.1-2.4 2.4v45.9c0 1.3 1.1 2.4 2.4 2.4h64.9c1.3 0 2.4-1.1 2.4-2.4v-45.9c0-1.3-1.1-2.4-2.4-2.4h-64.9zm2.4 4.8h60.2v1.2l-30.1 22-30.1-22v-1.2zm0 7l28.7 21c0.8 0.6 2 0.6 2.8 0l28.7-21v34.1h-60.2v-34.1z"></path>
					</g>
					<rect class="st0" width="100" height="100"></rect>
				</svg>
			</div>
		</div>
		<div class="floating-label">
			<input placeholder="Password" type="password" name="password" id="password" autocomplete="off">
			<label for="password">Password:</label>
			<div class="icon">
				<svg enable-background="new 0 0 24 24" version="1.1" viewBox="0 0 24 24" xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
					<style type="text/css">
						.st0{fill:none;}
						.st1{fill:#010101;}
					</style>
					<rect class="st0" width="24" height="24"></rect>
					<path class="st1" d="M19,21H5V9h14V21z M6,20h12V10H6V20z"></path>
					<path class="st1" d="M16.5,10h-1V7c0-1.9-1.6-3.5-3.5-3.5S8.5,5.1,8.5,7v3h-1V7c0-2.5,2-4.5,4.5-4.5s4.5,2,4.5,4.5V10z"></path>
					<path class="st1" d="m12 16.5c-0.8 0-1.5-0.7-1.5-1.5s0.7-1.5 1.5-1.5 1.5 0.7 1.5 1.5-0.7 1.5-1.5 1.5zm0-2c-0.3 0-0.5 0.2-0.5 0.5s0.2 0.5 0.5 0.5 0.5-0.2 0.5-0.5-0.2-0.5-0.5-0.5z"></path>
				</svg>
			</div>
		</div>
		<button type="submit" name="submit">Create</button>
		<a href="index.php" class="discrete">Cancel</a>
	</form>
</div>
</body>
</html>