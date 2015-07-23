<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Pure CSS Status Icons</title>
<style>
@charset "UTF-8";
@import url(http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,700);
body {
	margin: 40px 0;
	text-align: center;
	font-size: 100%;
	line-height: normal;
	font-weight: normal;
	font-family: 'Source Sans Pro', 'Helvetica Neue', arial, sans-serif;
}
.grow, .fade, .spin {
	backface-visibility: none;
	perspective: 1000;
	transform: translate3d(0, 0, 0);
}
.grow:before, .fade:before, .spin:before {
	animation-duration: 1s;
	animation-iteration-count: 2;
	animation-timing-function: ease-in-out;
}
.grow:hover:before {
	animation-name: grow;
}
.fade:hover:before {
	animation-name: fade;
}
.spin:hover:before {
	animation-name: spin;
}
.status {
	display: inline-block;
	margin: 4px;
	width: 18px;
	height: 18px;
	border-radius: 9px;
	border: 2px solid transparent;
	box-sizing: border-box;
	position: relative;
	cursor: pointer;
}
.status:before {
	position: absolute;
	top: 50%;
	left: 50%;
}
.status.passed {
	border-color: #a3aebb;
}
.status.passed:before {
	content: '';
	border-bottom: 2px solid #a3aebb;
	width: 6px;
	margin-left: -3px;
	margin-top: -1px;
	display: block;
}
.status.pending {
	border-color: #747f8d;
}
.status.pending:before {
	content: '';
	display: block;
	height: 6px;
	width: 2px;
	margin-top: -3px;
	margin-left: -3px;
	border-right: 2px solid #747f8d;
	border-left: 2px solid #747f8d;
}
.status.active {
	border-color: #3cb87e;
}
.status.active:before {
	content: '';
	border-width: 3px;
	border-color: transparent;
	border-style: solid;
	margin-top: -3px;
	margin-left: -2px;
	border-left: 5px solid #3cb87e;
}
.status.offered {
	border-color: #ed9f03;
	border-width: 2px;
}
.status.offered:before {
	content: '';
	margin-left: -5px;
	margin-top: -5px;
	width: 10px;
	height: 10px;
	background: #ed9f03;
	border-radius: 5px;
}
.status.lost {
	border-color: #f04848;
	font-family: arial, sans-serif;
}
.status.lost:before {
	line-height: 100%;
	font-size: 14px;
	height: 100%;
	width: 100%;
	margin-top: -50%;
	margin-left: -50%;
	content: '×';
	font-weight: bold;
	color: #f04848;
}
.status.complete {
	border-color: #3cb87e;
}
.status.complete:before {
	content: '✓';
	color: white;
	display: block;
	width: 16px;
	height: 16px;
	margin-top: -8px;
	margin-left: -8px;
	text-indent: 1px;
	background: #3cb87e;
	font-weight: bold;
	line-height: 12px;
	text-shadow: 2px 0px 1px #3cb87e, -2px 0px 1px #3cb87e, 0 -2px 1px #3cb87e, 0 2px 1px #3cb87e;
	border-radius: 8px;
}
.status.waiting {
	border-color: #bbb;
}
.status.waiting:before {
	width: 3px;
	height: 4px;
	top: 2px;
	margin-left: -1px;
	content: '';
	border-left: 2px solid #bbb;
	border-bottom: 2px solid #bbb;
}
 @keyframes spin {
 from {
 transform: rotate(0deg);
}
 to {
 transform: rotate(360deg);
}
}
@keyframes fade {
 0% {
 opacity: 1;
}
 50% {
 opacity: 0.1;
}
 100% {
 opacity: 1;
}
}
@keyframes grow {
 0% {
 transform: scale(1);
}
 50% {
 transform: scale(0.75);
}
 100% {
 transform: scale(1);
}
}
</style>
</head>

<body>
<h1>Pure CSS Status Icons</h1>
<div class="status pending fade"></div>
<div class="status passed spin"></div>
<div class="status offered grow"></div>
<div class="status active fade"></div>
<div class="status lost fade"></div>
<div class="status complete fade"></div>
<div class="status waiting fade"></div>
</body>
</html>