<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Photo Stack</title>
<style>
/*Simple CSS-reset that removes margin and padding from every element*/
* {
	margin: 0;
	padding: 0;
}
body {
	background: #346;
	font-family: Arial, sans-serif;
	color: #f0f0f0;
}
h1 {
	margin-top: 3%;
	font-size: 320%;
	text-align: center;
}
h1 div {
	font-size: 60%;
	font-weight: 700;
	text-align: center;
	line-height: 24px;
	color: #c0c0c0;
}
/*The actual photo stack starts here*/

#imgstack {
	width: 300px;
	margin: 0 auto;
	margin-top: 2%;
}
#imgstack a {
	width: 288px;
	height: 200px;
	position: absolute;
	display: block;
	border: 6px solid #f0f0f0;
	border-radius: 2px;
	box-shadow: 0 0 10px rgba(0,0,0,.3);
	transition: margin .5s;
	-webkit-transition: margin .5s;
}
#imgstack img {
	width: 288px;
	max-height: 100%;
}
#imgstack a:first-of-type {
	margin-top: -5px;
	margin-left: -20px;
	z-index: 2;
	transform: rotate(-3deg);
	-webkit-transform: rotate(-3deg);
}
#imgstack a:nth-of-type(2) {
	margin-top: -5px;
	margin-left: -10px;
	z-index: 1;
}
#imgstack a:last-of-type {
	transform: rotate(3deg);
	-webkit-transform: rotate(3deg);
}
#imgstack:hover a:first-of-type {
	margin-left: -310px;
	margin-top: 5px;
}
#imgstack:hover a:nth-of-type(2) {
	margin-top: -5px;
}
#imgstack:hover a:last-of-type {
	margin-left: 290px;
	margin-top: 5px;
}
#imgstack a:first-of-type:hover, #imgstack a:last-of-type:hover {
	margin-top: -5px;
}
#imgstack a:nth-of-type(2):hover {
	margin-top: -10px;
}
</style>
</head>

<body>
<h1>
  <div>Expanding</div>
  Photo Stack</h1>
<div id="imgstack"> <a href="#"><img src="//lorempixel.com/300/250/animals/1/" alt /></a> <a href="#"><img src="//lorempixel.com/300/250/animals/2/" alt /></a> <a href="#"><img src="//lorempixel.com/300/250/animals/3/" alt /></a> </div>
</body>
</html>