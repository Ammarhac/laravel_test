<!DOCTYPE HTML>
<!-- Website Template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8">
	<title>Ammar</title>
	<link rel="stylesheet" href="{{URL::asset('css/style.css')}}" type="text/css">
</head>
<body>
	<div id="header">
		<div class="section">
			<div class="logo">
				<a href="home">Ammar</a>
			</div>
			<ul>
				<li class="selected">
					<a href="/">home</a>
				</li>
				<li>
					<a href="about">about</a>
				</li>
				<li>
					<a href="hairstyles">hairstyles</a>
				</li>
				<li>
					<a href="news">news</a>
				</li>
				<li>
					<a href="contact">contact</a>
				</li>
			</ul>
		</div>
		<div class="article">
			<img src="images/1.jpg" alt="">
			<h1>Great hairstyle comes from the experts.</h1>
		</div>
	</div>
	<div id="body">
	
	  @yield('home')

      @yield('about')

      @yield('hairstyles')

      @yield('news')

      @yield('contact')



       </div>
	<div id="footer">
		<div>
			<div class="connect">
				<a href="http://freewebsitetemplates.com/go/twitter/" id="twitter">twitter</a>
				<a href="http://freewebsitetemplates.com/go/facebook/" id="facebook">facebook</a>
				<a href="http://freewebsitetemplates.com/go/googleplus/" id="googleplus">googleplus</a>
				<a href="http://pinterest.com/fwtemplates/" id="pinterest">pinterest</a>
			</div>
			<p>
				&copy; copyright 2023 | all rights reserved.
			</p>
		</div>
	</div>
</body>
</html>