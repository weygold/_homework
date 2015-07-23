<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<script language="javascript" type="text/javascript">
var numericalGrade = 75;
var letterGrtade;

if(numericalGrade >= 90){
		letterGrade = "A";
	}
	else if (numericalGrade >= 80){
		letterGrade = "B";
	}
	else if (numericalGrade >= 70){
		letterGrade = "C";
	}
	else if (numericalGrade >= 60){
		letterGrade = "D";
	}
	else {letterGrade = "F";}
document.write(letterGrade);
</script>
</body>
</html>