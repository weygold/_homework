<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Notepaper Blockquote</title>
<style>
/*
 * Copyright (c) 2012-2013 Thibaut Courouble
 * http://www.cssflow.com
 * Licensed under the MIT License
 *
 * Sass/SCSS source: http://goo.gl/8hncj
 * PSD by Liam McCabe: http://goo.gl/md3Dj
 */

body {
	font: 12px/20px "Lucida Grande", Tahoma, Verdana, sans-serif;
	color: #404040;
	background: #dce1e1;
}
.notepaper {
	position: relative;
	margin: 30px auto;
	padding: 29px 20px 20px 45px;
	width: 280px;
	line-height: 30px;
	color: #6a5f49;
	text-shadow: 0 1px 1px white;
	background-color: #f2f6c1;
	background-image: -webkit-radial-gradient(center, cover, rgba(255, 255, 255, 0.7) 0%, rgba(255, 255, 255, 0.1) 90%), -webkit-repeating-linear-gradient(top, transparent 0%, transparent 29px, rgba(239, 207, 173, 0.7) 29px, rgba(239, 207, 173, 0.7) 30px);
	background-image: -moz-radial-gradient(center, cover, rgba(255, 255, 255, 0.7) 0%, rgba(255, 255, 255, 0.1) 90%), -moz-repeating-linear-gradient(top, transparent 0%, transparent 29px, rgba(239, 207, 173, 0.7) 29px, rgba(239, 207, 173, 0.7) 30px);
	background-image: -o-radial-gradient(center, cover, rgba(255, 255, 255, 0.7) 0%, rgba(255, 255, 255, 0.1) 90%), -o-repeating-linear-gradient(top, transparent 0%, transparent 29px, rgba(239, 207, 173, 0.7) 29px, rgba(239, 207, 173, 0.7) 30px);
	border: 1px solid #c3baaa;
	border-color: rgba(195, 186, 170, 0.9);
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	box-sizing: border-box;
	-webkit-box-shadow: inset 0 1px rgba(255, 255, 255, 0.5), inset 0 0 5px #d8e071, 0 0 1px rgba(0, 0, 0, 0.1), 0 2px rgba(0, 0, 0, 0.02);
	box-shadow: inset 0 1px rgba(255, 255, 255, 0.5), inset 0 0 5px #d8e071, 0 0 1px rgba(0, 0, 0, 0.1), 0 2px rgba(0, 0, 0, 0.02);
}
.notepaper:before, .notepaper:after {
	content: '';
	position: absolute;
	top: 0;
	bottom: 0;
}
.notepaper:before {
	left: 28px;
	width: 2px;
	border: solid #efcfad;
	border-color: rgba(239, 207, 173, 0.9);
	border-width: 0 1px;
}
.notepaper:after {
	z-index: -1;
	left: 0;
	right: 0;
	background: rgba(242, 246, 193, 0.9);
	border: 1px solid rgba(170, 157, 134, 0.7);
	-webkit-transform: rotate(2deg);
	-moz-transform: rotate(2deg);
	-ms-transform: rotate(2deg);
	-o-transform: rotate(2deg);
	transform: rotate(2deg);
}
.quote {
	font-family: Georgia, serif;
	font-size: 14px;
}
.curly-quotes:before, .curly-quotes:after {
	display: inline-block;
	vertical-align: top;
	height: 30px;
	line-height: 48px;
	font-size: 50px;
	opacity: .2;
}
.curly-quotes:before {
	content: '\201C';
	margin-right: 4px;
	margin-left: -8px;
}
.curly-quotes:after {
	content: '\201D';
	margin-left: 4px;
	margin-right: -8px;
}
.quote-by {
	display: block;
	padding-right: 10px;
	text-align: right;
	font-size: 13px;
	font-style: italic;
	color: #84775c;
}
.lt-ie8 .notepaper {
	padding: 15px 25px;
}
</style>
</head>

<body>
<div class="notepaper">
  <figure class="quote">
    <blockquote class="curly-quotes" cite="http://www.youtube.com/watch?v=qYLrc9hy0t0"> The same wind blows on us all.
      The difference in arrival is not
      the blowing of the wind,
      but the set of the sail. </blockquote>
    <figcaption class="quote-by">— Jim Rohn</figcaption>
  </figure>
</div>
</body>
</html>