<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Solar System</title>
<style>
/*
  Malik Dellidj - @Dathink

  Solar System orbit animation true time scaled

  Revolution of planets in earth days (from Wikipedia)
  Mercury : ~87,5 days
  Venus : ~224,7 days
  Earth : ~365,2563 days
    + Moon : ~27,3216 days (around earth)
  Mars : ~687 days (~1,8 year)
  Jupiter : ~4 331 days (~12 years)
  Saturn : ~10 747 days (~30 years)
  Uranus : ~30 589 days (~84 years)
  Neptune : ~59 802 days (~165 years)
  Pluto : ~90 580 days (~248 years)
*/
*, *:before, *:after {
	padding: 0;
	margin: 0;
	box-sizing: border-box;
}
html, body {
	height: 100%;
	width: 100%;
}
body {
	font: normal 1em/1.45em "Helvetica Neue", Helvetica, Arial, sans-serif;
	-webkit-font-smoothing: antialiased;
	color: #fff;
	background: -webkit-radial-gradient(ellipse at bottom, #1c2837 0%, #050608 100%);
	background: radial-gradient(ellipse at bottom, #1c2837 0%, #050608 100%);
	background-attachment: fixed;
}
h1 {
	font-weight: 300;
	font-size: 2.5em;
	text-transform: uppercase;
	font-family: Lato;
	line-height: 1.6em;
	letter-spacing: .1em;
}
a, a:visited {
	text-decoration: none;
	color: white;
	opacity: .7;
}
a:hover, a:visited:hover {
	opacity: 1;
}
a.icon, a:visited.icon {
	margin-right: 2px;
	padding: 3px;
}
.description {
	padding: 30px;
	position: absolute;
	top: 0;
	left: 0;
	width: 25%;
	z-index: 999;
}
.description p {
	font-size: .9em;
}
.description p + p {
	margin-top: 20px;
}
.description p.author {
	font-size: .7em;
}
.description p.author .fa-heart {
	color: #860014;
}
hr {
	margin: 26px 0;
	border: 0;
	border-top: 1px solid white;
	background: transparent;
	width: 25%;
	opacity: .1;
}
code {
	color: #ae94c0;
	font-family: Menlo, Monaco, Consolas, 'Courier New', monospace;
	font-size: .9em;
}
.solar-syst {
	margin: 0 auto;
	width: 100%;
	height: 100%;
	position: relative;
}
.solar-syst:after {
	content: "";
	position: absolute;
	height: 2px;
	width: 2px;
	top: -2px;
	background: white;
	box-shadow: 1444px 1299px 0 0px rgba(255, 255, 255, 0.048), 991px 605px 0 0px rgba(255,255,255, 0.07), 491px 639px 0 0px rgba(255,255,255, 0.733), 79px 175px 0 0px rgba(255,255,255, 0.641), 1540px 237px 0 0px rgba(255,255,255, 0.501), 352px 89px 0 0px rgba(255,255,255, 0.983), 1466px 53px 0 0px rgba(255,255,255, 0.026), 1644px 1672px 0 0px rgba(255,255,255, 0.824), 1041px 1184px 0 0px rgba(255,255,255, 0.537), 300px 622px 0 0px rgba(255,255,255, 0.147), 1085px 711px 0 0px rgba(255,255,255, 0.66), 1175px 1643px 0 0px rgba(255,255,255, 0.745), 1605px 1130px 0 0px rgba(255,255,255, 0.675), 1289px 1449px 0 0px rgba(255,255,255, 0.539), 1325px 870px 0 0px rgba(255,255,255, 0.15), 661px 1549px 0 0px rgba(255,255,255, 0.895), 543px 1043px 0 0px rgba(255,255,255, 0.284), 1236px 1429px 0 0px rgba(255,255,255, 0.351), 279px 586px 0 0px rgba(255,255,255, 0.697), 1771px 554px 0 0px rgba(255,255,255, 0.267), 784px 243px 0 0px rgba(255,255,255, 0.308), 1275px 36px 0 0px rgba(255,255,255, 0.002), 271px 1278px 0 0px rgba(255,255,255, 0.488), 197px 1431px 0 0px rgba(255,255,255, 0.626), 188px 1160px 0 0px rgba(255,255,255, 0.983), 48px 1453px 0 0px rgba(255,255,255, 0.823), 1019px 1519px 0 0px rgba(255,255,255, 0.426), 1021px 427px 0 0px rgba(255,255,255, 0.766), 1160px 475px 0 0px rgba(255,255,255, 0.783), 1382px 1739px 0 0px rgba(255,255,255, 0.427), 1032px 1424px 0 0px rgba(255,255,255, 0.737), 802px 903px 0 0px rgba(255,255,255, 0.334), 314px 1157px 0 0px rgba(255,255,255, 0.611), 1731px 146px 0 0px rgba(255,255,255, 0.849), 1735px 1467px 0 0px rgba(255,255,255, 0.284), 424px 724px 0 0px rgba(255,255,255, 0.879), 1332px 182px 0 0px rgba(255,255,255, 0.681), 1128px 789px 0 0px rgba(255,255,255, 0.158), 257px 1136px 0 0px rgba(255,255,255, 0.922), 309px 1214px 0 0px rgba(255,255,255, 0.126), 1046px 1790px 0 0px rgba(255,255,255, 0.324), 1105px 172px 0 0px rgba(255,255,255, 0.506), 252px 387px 0 0px rgba(255,255,255, 0.013), 1062px 1661px 0 0px rgba(255,255,255, 0.278), 497px 898px 0 0px rgba(255,255,255, 0.452), 709px 4px 0 0px rgba(255,255,255, 0.155), 212px 479px 0 0px rgba(255,255,255, 0.735), 870px 1147px 0 0px rgba(255,255,255, 0.914), 291px 1372px 0 0px rgba(255,255,255, 0.178), 597px 1615px 0 0px rgba(255,255,255, 0.549), 1447px 1234px 0 0px rgba(255,255,255, 0.709), 828px 547px 0 0px rgba(255,255,255, 0.7), 1327px 904px 0 0px rgba(255,255,255, 0.925), 415px 1475px 0 0px rgba(255,255,255, 0.587), 1735px 1708px 0 0px rgba(255,255,255, 0.42), 160px 1800px 0 0px rgba(255,255,255, 0.107), 681px 1404px 0 0px rgba(255,255,255, 0.301), 1522px 161px 0 0px rgba(255,255,255, 0.677), 1531px 1384px 0 0px rgba(255,255,255, 0.294), 1636px 384px 0 0px rgba(255,255,255, 0.296), 1112px 10px 0 0px rgba(255,255,255, 0.685), 1105px 1056px 0 0px rgba(255,255,255, 0.059), 57px 430px 0 0px rgba(255,255,255, 0.193), 299px 758px 0 0px rgba(255,255,255, 0.114), 155px 1021px 0 0px rgba(255,255,255, 0.765), 1177px 1597px 0 0px rgba(255,255,255, 0.538), 1423px 331px 0 0px rgba(255,255,255, 0.177), 1728px 52px 0 0px rgba(255,255,255, 0.467), 1211px 556px 0 0px rgba(255,255,255, 0.346), 1410px 1298px 0 0px rgba(255,255,255, 0.019), 1184px 1092px 0 0px rgba(255,255,255, 0.489), 677px 149px 0 0px rgba(255,255,255, 0.4), 1714px 842px 0 0px rgba(255,255,255, 0.71), 1410px 1588px 0 0px rgba(255,255,255, 0.594), 1765px 531px 0 0px rgba(255,255,255, 0.934), 111px 1086px 0 0px rgba(255,255,255, 0.93), 1071px 1453px 0 0px rgba(255,255,255, 0.827), 1218px 1305px 0 0px rgba(255,255,255, 0.8), 1696px 26px 0 0px rgba(255,255,255, 0.827), 689px 1258px 0 0px rgba(255,255,255, 0.457), 459px 486px 0 0px rgba(255,255,255, 0.27), 418px 491px 0 0px rgba(255,255,255, 0.711), 1597px 305px 0 0px rgba(255,255,255, 0.258), 1439px 943px 0 0px rgba(255,255,255, 0.566), 1204px 313px 0 0px rgba(255,255,255, 0.404), 1714px 627px 0 0px rgba(255,255,255, 0.236), 795px 250px 0 0px rgba(255,255,255, 0.599), 739px 520px 0 0px rgba(255,255,255, 0.751), 67px 15px 0 0px rgba(255,255,255, 0.133), 1264px 99px 0 0px rgba(255,255,255, 0.752), 715px 1797px 0 0px rgba(255,255,255, 0.78), 631px 1185px 0 0px rgba(255,255,255, 0.388), 163px 321px 0 0px rgba(255,255,255, 0.148), 365px 692px 0 0px rgba(255,255,255, 0.643), 1315px 736px 0 0px rgba(255,255,255, 0.408), 221px 297px 0 0px rgba(255,255,255, 0.455), 1036px 1124px 0 0px rgba(255,255,255, 0.918), 240px 113px 0 0px rgba(255,255,255, 0.325), 1706px 564px 0 0px rgba(255,255,255, 0.769), 1051px 669px 0 0px rgba(255,255,255, 0.863), 584px 742px 0 0px rgba(255,255,255, 0.028), 683px 806px 0 0px rgba(255,255,255, 0.145), 254px 1726px 0 0px rgba(255,255,255, 0.686), 22px 403px 0 0px rgba(255,255,255, 0.064), 1393px 1636px 0 0px rgba(255,255,255, 0.433), 551px 1057px 0 0px rgba(255,255,255, 0.077), 172px 116px 0 0px rgba(255,255,255, 0.76), 1750px 331px 0 0px rgba(255,255,255, 0.267), 863px 1423px 0 0px rgba(255,255,255, 0.013), 133px 54px 0 0px rgba(255,255,255, 0.811), 1398px 709px 0 0px rgba(255,255,255, 0.272), 1179px 1762px 0 0px rgba(255,255,255, 0.734), 721px 1326px 0 0px rgba(255,255,255, 0.553), 34px 1664px 0 0px rgba(255,255,255, 0.302), 775px 205px 0 0px rgba(255,255,255, 0.487), 1408px 194px 0 0px rgba(255,255,255, 0.525), 95px 1164px 0 0px rgba(255,255,255, 0.531), 578px 1382px 0 0px rgba(255,255,255, 0.56), 630px 504px 0 0px rgba(255,255,255, 0.288), 396px 1649px 0 0px rgba(255,255,255, 0.548), 1472px 1259px 0 0px rgba(255,255,255, 0.542), 547px 811px 0 0px rgba(255,255,255, 0.9), 1604px 1525px 0 0px rgba(255,255,255, 0.813), 942px 438px 0 0px rgba(255,255,255, 0.361), 1082px 1006px 0 0px rgba(255,255,255, 0.241), 392px 1111px 0 0px rgba(255,255,255, 0.375), 811px 762px 0 0px rgba(255,255,255, 0.775), 66px 902px 0 0px rgba(255,255,255, 0.768), 1095px 1591px 0 0px rgba(255,255,255, 0.37), 588px 1160px 0 0px rgba(255,255,255, 0.212), 369px 1137px 0 0px rgba(255,255,255, 0.142), 330px 1684px 0 0px rgba(255,255,255, 0.071), 1211px 825px 0 0px rgba(255,255,255, 0.549), 1265px 1102px 0 0px rgba(255,255,255, 0.503), 926px 977px 0 0px rgba(255,255,255, 0.212), 1479px 550px 0 0px rgba(255,255,255, 0.619), 27px 911px 0 0px rgba(255,255,255, 0.883), 1410px 1667px 0 0px rgba(255,255,255, 0.273), 1681px 160px 0 0px rgba(255,255,255, 0.121), 561px 487px 0 0px rgba(255,255,255, 0.609), 1157px 181px 0 0px rgba(255,255,255, 0.917), 509px 1473px 0 0px rgba(255,255,255, 0.781), 902px 1638px 0 0px rgba(255,255,255, 0.019), 1385px 1258px 0 0px rgba(255,255,255, 0.798), 1705px 229px 0 0px rgba(255,255,255, 0.126), 1623px 946px 0 0px rgba(255,255,255, 0.111), 1409px 1664px 0 0px rgba(255,255,255, 0.943), 308px 840px 0 0px rgba(255,255,255, 0.712), 856px 963px 0 0px rgba(255,255,255, 0.625), 1730px 703px 0 0px rgba(255,255,255, 0.843), 62px 245px 0 0px rgba(255,255,255, 0.834), 1120px 583px 0 0px rgba(255,255,255, 0.413), 1742px 1694px 0 0px rgba(255,255,255, 0.904), 1026px 1506px 0 0px rgba(255,255,255, 0.598), 1573px 337px 0 0px rgba(255,255,255, 0.617), 640px 987px 0 0px rgba(255,255,255, 0.34), 886px 1361px 0 0px rgba(255,255,255, 0.493), 1171px 872px 0 0px rgba(255,255,255, 0.976), 1502px 1431px 0 0px rgba(255,255,255, 0.257), 1424px 60px 0 0px rgba(255,255,255, 0.628), 479px 1356px 0 0px rgba(255,255,255, 0.45), 718px 1361px 0 0px rgba(255,255,255, 0.365), 107px 340px 0 0px rgba(255,255,255, 0.24), 425px 343px 0 0px rgba(255,255,255, 0.36), 867px 1794px 0 0px rgba(255,255,255, 0.267), 852px 1664px 0 0px rgba(255,255,255, 0.133), 422px 1662px 0 0px rgba(255,255,255, 0.517), 19px 1783px 0 0px rgba(255,255,255, 0.942), 653px 1029px 0 0px rgba(255,255,255, 0.461), 418px 663px 0 0px rgba(255,255,255, 0.84), 1416px 1591px 0 0px rgba(255,255,255, 0.521), 1339px 1116px 0 0px rgba(255,255,255, 0.954), 489px 341px 0 0px rgba(255,255,255, 0.163), 1394px 1731px 0 0px rgba(255,255,255, 0.801), 1663px 1115px 0 0px rgba(255,255,255, 0.886), 51px 771px 0 0px rgba(255,255,255, 0.878), 1161px 324px 0 0px rgba(255,255,255, 0.695), 1732px 73px 0 0px rgba(255,255,255, 0.127), 1491px 694px 0 0px rgba(255,255,255, 0.937), 1203px 1195px 0 0px rgba(255,255,255, 0.368), 1075px 525px 0 0px rgba(255,255,255, 0.539), 858px 426px 0 0px rgba(255,255,255, 0.622), 1502px 1553px 0 0px rgba(255,255,255, 0.984), 201px 1527px 0 0px rgba(255,255,255, 0.341), 114px 1301px 0 0px rgba(255,255,255, 0.904), 1285px 480px 0 0px rgba(255,255,255, 0.347), 988px 1086px 0 0px rgba(255,255,255, 0.204), 791px 1612px 0 0px rgba(255,255,255, 0.322), 1016px 933px 0 0px rgba(255,255,255, 0.311), 530px 873px 0 0px rgba(255,255,255, 0.789), 195px 678px 0 0px rgba(255,255,255, 0.101), 1013px 1330px 0 0px rgba(255,255,255, 0.816), 666px 1159px 0 0px rgba(255,255,255, 0.033), 1342px 68px 0 0px rgba(255,255,255, 0.875), 1113px 150px 0 0px rgba(255,255,255, 0.799), 1435px 459px 0 0px rgba(255,255,255, 0.825), 627px 751px 0 0px rgba(255,255,255, 0.659), 1701px 1174px 0 0px rgba(255,255,255, 0.026), 1423px 1463px 0 0px rgba(255,255,255, 0.875), 1041px 1129px 0 0px rgba(255,255,255, 0.404), 264px 684px 0 0px rgba(255,255,255, 0.922), 581px 1061px 0 0px rgba(255,255,255, 0.503), 350px 1468px 0 0px rgba(255,255,255, 0.876), 1248px 1639px 0 0px rgba(255,255,255, 0.174), 1097px 1455px 0 0px rgba(255,255,255, 0.046), 669px 1177px 0 0px rgba(255,255,255, 0.003), 1610px 1477px 0 0px rgba(255,255,255, 0.618), 521px 1208px 0 0px rgba(255,255,255, 0.378), 1038px 626px 0 0px rgba(255,255,255, 0.825), 289px 409px 0 0px rgba(255,255,255, 0.904), 110px 320px 0 0px rgba(255,255,255, 0.12), 679px 1591px 0 0px rgba(255,255,255, 0.024), 588px 1411px 0 0px rgba(255,255,255, 0.901), 1144px 1776px 0 0px rgba(255,255,255, 0.84), 615px 3px 0 0px rgba(255,255,255, 0.358), 1551px 1422px 0 0px rgba(255,255,255, 0.079), 1694px 1783px 0 0px rgba(255,255,255, 0.168), 1663px 870px 0 0px rgba(255,255,255, 0.852), 1518px 968px 0 0px rgba(255,255,255, 0.049), 17px 944px 0 0px rgba(255,255,255, 0.459), 32px 1087px 0 0px rgba(255,255,255, 0.357), 554px 1338px 0 0px rgba(255,255,255, 0.387), 885px 1276px 0 0px rgba(255,255,255, 0.453), 539px 1326px 0 0px rgba(255,255,255, 0.428), 483px 127px 0 0px rgba(255,255,255, 0.394), 773px 557px 0 0px rgba(255,255,255, 0.017), 799px 1774px 0 0px rgba(255,255,255, 0.719), 518px 403px 0 0px rgba(255,255,255, 0.8), 1079px 393px 0 0px rgba(255,255,255, 0.713), 641px 141px 0 0px rgba(255,255,255, 0.477), 1387px 1776px 0 0px rgba(255,255,255, 0.934), 1201px 47px 0 0px rgba(255,255,255, 0.887), 1131px 598px 0 0px rgba(255,255,255, 0.233), 1752px 674px 0 0px rgba(255,255,255, 0.106), 1319px 1710px 0 0px rgba(255,255,255, 0.881), 291px 955px 0 0px rgba(255,255,255, 0.672), 306px 660px 0 0px rgba(255,255,255, 0.614), 1356px 964px 0 0px rgba(255,255,255, 0.95), 1045px 1288px 0 0px rgba(255,255,255, 0.199), 1153px 238px 0 0px rgba(255,255,255, 0.853), 1800px 632px 0 0px rgba(255,255,255, 0.285), 277px 947px 0 0px rgba(255,255,255, 0.438), 1625px 90px 0 0px rgba(255,255,255, 0.579), 1690px 333px 0 0px rgba(255,255,255, 0.166), 1189px 361px 0 0px rgba(255,255,255, 0.03), 1126px 807px 0 0px rgba(255,255,255, 0.872), 1251px 1006px 0 0px rgba(255,255,255, 0.978), 60px 31px 0 0px rgba(255,255,255, 0.034), 1268px 967px 0 0px rgba(255,255,255, 0.913), 1475px 982px 0 0px rgba(255,255,255, 0.181), 723px 448px 0 0px rgba(255,255,255, 0.258), 235px 1625px 0 0px rgba(255,255,255, 0.57), 186px 1707px 0 0px rgba(255,255,255, 0.994), 1726px 1720px 0 0px rgba(255,255,255, 0.58), 699px 1305px 0 0px rgba(255,255,255, 0.396), 406px 1523px 0 0px rgba(255,255,255, 0.389), 1140px 296px 0 0px rgba(255,255,255, 0.852), 441px 1132px 0 0px rgba(255,255,255, 0.332), 437px 1104px 0 0px rgba(255,255,255, 0.326), 1314px 285px 0 0px rgba(255,255,255, 0.416), 832px 484px 0 0px rgba(255,255,255, 0.578), 574px 237px 0 0px rgba(255,255,255, 0.983), 1362px 98px 0 0px rgba(255,255,255, 0.287), 485px 1743px 0 0px rgba(255,255,255, 0.172), 1325px 656px 0 0px rgba(255,255,255, 0.958), 1725px 1643px 0 0px rgba(255,255,255, 0.13), 835px 185px 0 0px rgba(255,255,255, 0.523), 328px 261px 0 0px rgba(255,255,255, 0.017), 1183px 422px 0 0px rgba(255,255,255, 0.793), 1153px 1343px 0 0px rgba(255,255,255, 0.173), 1086px 1421px 0 0px rgba(255,255,255, 0.196), 1417px 108px 0 0px rgba(255,255,255, 0.323), 788px 1731px 0 0px rgba(255,255,255, 0.114), 158px 466px 0 0px rgba(255,255,255, 0.439), 419px 1766px 0 0px rgba(255,255,255, 0.806), 1410px 330px 0 0px rgba(255,255,255, 0.618), 1771px 585px 0 0px rgba(255,255,255, 0.955), 1256px 837px 0 0px rgba(255,255,255, 0.815), 394px 1019px 0 0px rgba(255,255,255, 0.161), 713px 1792px 0 0px rgba(255,255,255, 0.67), 576px 562px 0 0px rgba(255,255,255, 0.64), 1108px 194px 0 0px rgba(255,255,255, 0.439), 289px 9px 0 0px rgba(255,255,255, 0.896), 201px 1241px 0 0px rgba(255,255,255, 0.342), 1502px 385px 0 0px rgba(255,255,255, 0.752), 375px 1070px 0 0px rgba(255,255,255, 0.771), 1119px 625px 0 0px rgba(255,255,255, 0.88), 330px 1060px 0 0px rgba(255,255,255, 0.977), 1206px 314px 0 0px rgba(255,255,255, 0.408), 154px 1088px 0 0px rgba(255,255,255, 0.224), 914px 1394px 0 0px rgba(255,255,255, 0.845), 500px 593px 0 0px rgba(255,255,255, 0.57), 1541px 1450px 0 0px rgba(255,255,255, 0.165), 142px 1156px 0 0px rgba(255,255,255, 0.973), 148px 236px 0 0px rgba(255,255,255, 0.022), 992px 283px 0 0px rgba(255,255,255, 0.003), 698px 1537px 0 0px rgba(255,255,255, 0.727), 244px 1112px 0 0px rgba(255,255,255, 0.706), 375px 1535px 0 0px rgba(255,255,255, 0.384), 78px 1162px 0 0px rgba(255,255,255, 0.638), 855px 694px 0 0px rgba(255,255,255, 0.614), 698px 430px 0 0px rgba(255,255,255, 0.077), 804px 1198px 0 0px rgba(255,255,255, 0.459), 1283px 1424px 0 0px rgba(255,255,255, 0.159), 346px 1365px 0 0px rgba(255,255,255, 0.986), 1398px 687px 0 0px rgba(255,255,255, 0.622), 1409px 264px 0 0px rgba(255,255,255, 0.446), 761px 1099px 0 0px rgba(255,255,255, 0.008), 1211px 389px 0 0px rgba(255,255,255, 0.395), 115px 1210px 0 0px rgba(255,255,255, 0.233), 1217px 1061px 0 0px rgba(255,255,255, 0.732), 1076px 35px 0 0px rgba(255,255,255, 0.985), 812px 581px 0 0px rgba(255,255,255, 0.936), 191px 702px 0 0px rgba(255,255,255, 0.834), 668px 192px 0 0px rgba(255,255,255, 0.644), 104px 23px 0 0px rgba(255,255,255, 0.46), 472px 1521px 0 0px rgba(255,255,255, 0.819), 598px 411px 0 0px rgba(255,255,255, 0.89), 699px 18px 0 0px rgba(255,255,255, 0.348), 919px 1251px 0 0px rgba(255,255,255, 0.721), 1290px 171px 0 0px rgba(255,255,255, 0.373), 1584px 568px 0 0px rgba(255,255,255, 0.275), 1679px 307px 0 0px rgba(255,255,255, 0.032), 1677px 690px 0 0px rgba(255,255,255, 0.639), 1167px 1618px 0 0px rgba(255,255,255, 0.256), 1285px 1570px 0 0px rgba(255,255,255, 0.476), 469px 547px 0 0px rgba(255,255,255, 0.703), 1336px 221px 0 0px rgba(255,255,255, 0.567), 1422px 1274px 0 0px rgba(255,255,255, 0.101), 459px 210px 0 0px rgba(255,255,255, 0.559), 390px 1114px 0 0px rgba(255,255,255, 0.068), 1648px 1526px 0 0px rgba(255,255,255, 0.92), 1777px 337px 0 0px rgba(255,255,255, 0.877), 1325px 1033px 0 0px rgba(255,255,255, 0.453), 698px 927px 0 0px rgba(255,255,255, 0.084), 1294px 1671px 0 0px rgba(255,255,255, 0.83), 1316px 998px 0 0px rgba(255,255,255, 0.028), 1344px 1721px 0 0px rgba(255,255,255, 0.277), 1788px 821px 0 0px rgba(255,255,255, 0.492), 1068px 1131px 0 0px rgba(255,255,255, 0.913), 102px 552px 0 0px rgba(255,255,255, 0.493), 23px 875px 0 0px rgba(255,255,255, 0.228), 664px 1262px 0 0px rgba(255,255,255, 0.848), 380px 336px 0 0px rgba(255,255,255, 0.004), 865px 1499px 0 0px rgba(255,255,255, 0.084), 164px 808px 0 0px rgba(255,255,255, 0.151), 528px 839px 0 0px rgba(255,255,255, 0.284), 123px 1316px 0 0px rgba(255,255,255, 0.406), 753px 700px 0 0px rgba(255,255,255, 0.808), 1329px 59px 0 0px rgba(255,255,255, 0.878), 1740px 1443px 0 0px rgba(255,255,255, 0.26), 820px 516px 0 0px rgba(255,255,255, 0.119), 446px 451px 0 0px rgba(255,255,255, 0.741), 1178px 1448px 0 0px rgba(255,255,255, 0.035), 1146px 1119px 0 0px rgba(255,255,255, 0.633), 701px 1353px 0 0px rgba(255,255,255, 0.026), 418px 367px 0 0px rgba(255,255,255, 0.371), 353px 1779px 0 0px rgba(255,255,255, 0.053), 1764px 1023px 0 0px rgba(255,255,255, 0.832), 1716px 1357px 0 0px rgba(255,255,255, 0.644), 1263px 1027px 0 0px rgba(255,255,255, 0.743), 1199px 775px 0 0px rgba(255,255,255, 0.795), 1795px 662px 0 0px rgba(255,255,255, 0.2), 892px 715px 0 0px rgba(255,255,255, 0.049), 750px 404px 0 0px rgba(255,255,255, 0.494), 513px 32px 0 0px rgba(255,255,255, 0.117), 142px 383px 0 0px rgba(255,255,255, 0.662), 1730px 683px 0 0px rgba(255,255,255, 0.824), 809px 1209px 0 0px rgba(255,255,255, 0.862), 925px 1789px 0 0px rgba(255,255,255, 0.62), 1609px 1035px 0 0px rgba(255,255,255, 0.079), 49px 1395px 0 0px rgba(255,255,255, 0.315), 946px 742px 0 0px rgba(255,255,255, 0.518), 1046px 1740px 0 0px rgba(255,255,255, 0.803), 1040px 1395px 0 0px rgba(255,255,255, 0.484), 72px 275px 0 0px rgba(255,255,255, 0.917), 204px 698px 0 0px rgba(255,255,255, 0.04), 1459px 1449px 0 0px rgba(255,255,255, 0.876), 294px 845px 0 0px rgba(255,255,255, 0.913), 325px 909px 0 0px rgba(255,255,255, 0.557), 1779px 440px 0 0px rgba(255,255,255, 0.96), 156px 1538px 0 0px rgba(255,255,255, 0.634), 846px 1023px 0 0px rgba(255,255,255, 0.649), 11px 1567px 0 0px rgba(255,255,255, 0.829), 761px 1459px 0 0px rgba(255,255,255, 0.05), 795px 1254px 0 0px rgba(255,255,255, 0.462), 838px 901px 0 0px rgba(255,255,255, 0.209), 106px 1577px 0 0px rgba(255,255,255, 0.498), 70px 922px 0 0px rgba(255,255,255, 0.833), 1798px 800px 0 0px rgba(255,255,255, 0.43), 537px 869px 0 0px rgba(255,255,255, 0.821), 586px 296px 0 0px rgba(255,255,255, 0.947), 422px 591px 0 0px rgba(255,255,255, 0.072), 871px 286px 0 0px rgba(255,255,255, 0.814), 677px 206px 0 0px rgba(255,255,255, 0.033), 1266px 802px 0 0px rgba(255,255,255, 0.68), 639px 1512px 0 0px rgba(255,255,255, 0.565), 468px 1767px 0 0px rgba(255,255,255, 0.821), 914px 664px 0 0px rgba(255,255,255, 0.915), 1700px 950px 0 0px rgba(255,255,255, 0.961), 723px 1435px 0 0px rgba(255,255,255, 0.564), 587px 1245px 0 0px rgba(255,255,255, 0.946), 709px 1364px 0 0px rgba(255,255,255, 0.731), 1024px 309px 0 0px rgba(255,255,255, 0.788), 651px 822px 0 0px rgba(255,255,255, 0.55), 191px 47px 0 0px rgba(255,255,255, 0.67), 93px 75px 0 0px rgba(255,255,255, 0.214), 582px 344px 0 0px rgba(255,255,255, 0.662), 640px 1023px 0 0px rgba(255,255,255, 0.693), 144px 1175px 0 0px rgba(255,255,255, 0.934), 768px 878px 0 0px rgba(255,255,255, 0.298), 1405px 1318px 0 0px rgba(255,255,255, 0.162), 1718px 826px 0 0px rgba(255,255,255, 0.457), 1760px 951px 0 0px rgba(255,255,255, 0.942), 1563px 1182px 0 0px rgba(255,255,255, 0.961), 508px 1242px 0 0px rgba(255,255,255, 0.494), 60px 977px 0 0px rgba(255,255,255, 0.415), 1520px 590px 0 0px rgba(255,255,255, 0.921), 1214px 117px 0 0px rgba(255,255,255, 0.535), 192px 1049px 0 0px rgba(255,255,255, 0.365), 774px 1706px 0 0px rgba(255,255,255, 0.523), 1191px 331px 0 0px rgba(255,255,255, 0.964), 1039px 348px 0 0px rgba(255,255,255, 0.198), 1021px 1298px 0 0px rgba(255,255,255, 0.402), 60px 1239px 0 0px rgba(255,255,255, 0.837), 443px 973px 0 0px rgba(255,255,255, 0.695), 506px 928px 0 0px rgba(255,255,255, 0.516), 1293px 1327px 0 0px rgba(255,255,255, 0.291), 860px 1688px 0 0px rgba(255,255,255, 0.554), 1570px 417px 0 0px rgba(255,255,255, 0.856), 394px 994px 0 0px rgba(255,255,255, 0.12), 8px 1371px 0 0px rgba(255,255,255, 0.699), 1543px 985px 0 0px rgba(255,255,255, 0.396), 1121px 1334px 0 0px rgba(255,255,255, 0.762), 232px 1614px 0 0px rgba(255,255,255, 0.664), 1447px 295px 0 0px rgba(255,255,255, 0.725), 670px 222px 0 0px rgba(255,255,255, 0.918), 416px 314px 0 0px rgba(255,255,255, 0.358), 1671px 718px 0 0px rgba(255,255,255, 0.096), 374px 553px 0 0px rgba(255,255,255, 0.077), 690px 1579px 0 0px rgba(255,255,255, 0.473), 563px 49px 0 0px rgba(255,255,255, 0.591), 1393px 1725px 0 0px rgba(255,255,255, 0.824), 697px 1606px 0 0px rgba(255,255,255, 0.738), 1249px 1242px 0 0px rgba(255,255,255, 0.803), 1204px 1259px 0 0px rgba(255,255,255, 0.9), 265px 1587px 0 0px rgba(255,255,255, 0.665), 248px 185px 0 0px rgba(255,255,255, 0.452), 1788px 1039px 0 0px rgba(255,255,255, 0.054), 279px 693px 0 0px rgba(255,255,255, 0.147), 1633px 1281px 0 0px rgba(255,255,255, 0.336), 647px 108px 0 0px rgba(255,255,255, 0.514), 1748px 416px 0 0px rgba(255,255,255, 0.207), 106px 203px 0 0px rgba(255,255,255, 0.657), 496px 365px 0 0px rgba(255,255,255, 0.785), 429px 1472px 0 0px rgba(255,255,255, 0.992), 1194px 1324px 0 0px rgba(255,255,255, 0.675), 1028px 722px 0 0px rgba(255,255,255, 0.162), 674px 409px 0 0px rgba(255,255,255, 0.825), 1027px 970px 0 0px rgba(255,255,255, 0.643), 1434px 554px 0 0px rgba(255,255,255, 0.197), 47px 1693px 0 0px rgba(255,255,255, 0.996), 1551px 1220px 0 0px rgba(255,255,255, 0.766), 1483px 666px 0 0px rgba(255,255,255, 0.513), 1398px 1411px 0 0px rgba(255,255,255, 0.06), 942px 362px 0 0px rgba(255,255,255, 0.31), 1697px 1651px 0 0px rgba(255,255,255, 0.189), 1652px 1719px 0 0px rgba(255,255,255, 0.073), 980px 49px 0 0px rgba(255,255,255, 0.748), 926px 627px 0 0px rgba(255,255,255, 0.044), 1472px 989px 0 0px rgba(255,255,255, 0.449), 192px 1173px 0 0px rgba(255,255,255, 0.011), 1361px 1087px 0 0px rgba(255,255,255, 0.549), 1131px 1779px 0 0px rgba(255,255,255, 0.64), 865px 791px 0 0px rgba(255,255,255, 0.453), 600px 1680px 0 0px rgba(255,255,255, 0.676), 22px 325px 0 0px rgba(255,255,255, 0.558), 497px 433px 0 0px rgba(255,255,255, 0.457), 1380px 1388px 0 0px rgba(255,255,255, 0.413), 1348px 1703px 0 0px rgba(255,255,255, 0.97), 441px 947px 0 0px rgba(255,255,255, 0.201), 1595px 956px 0 0px rgba(255,255,255, 0.834), 594px 1148px 0 0px rgba(255,255,255, 0.263), 1766px 202px 0 0px rgba(255,255,255, 0.913), 152px 663px 0 0px rgba(255,255,255, 0.205), 1204px 1277px 0 0px rgba(255,255,255, 0.375), 1075px 639px 0 0px rgba(255,255,255, 0.436), 1007px 1776px 0 0px rgba(255,255,255, 0.987), 1545px 145px 0 0px rgba(255,255,255, 0.086), 408px 1626px 0 0px rgba(255,255,255, 0.031), 1466px 1481px 0 0px rgba(255,255,255, 0.732), 500px 834px 0 0px rgba(255,255,255, 0.454), 1305px 527px 0 0px rgba(255,255,255, 0.25), 660px 1786px 0 0px rgba(255,255,255, 0.315), 1598px 1420px 0 0px rgba(255,255,255, 0.811), 710px 886px 0 0px rgba(255,255,255, 0.931), 629px 726px 0 0px rgba(255,255,255, 0.301), 693px 1035px 0 0px rgba(255,255,255, 0.859), 1766px 1191px 0 0px rgba(255,255,255, 0.514), 438px 455px 0 0px rgba(255,255,255, 0.539);
	border-radius: 100px;
}
.solar-syst div {
	border-radius: 1000px;
	top: 50%;
	left: 50%;
	position: absolute;
	z-index: 999;
}
.solar-syst div:not(.sun) {
	border: 1px solid rgba(102, 166, 229, 0.12);
}
.solar-syst div:not(.sun):before {
	left: 50%;
	border-radius: 100px;
	content: "";
	position: absolute;
}
.solar-syst div:not(.asteroids-belt):before {
	box-shadow: inset 0 6px 0 -2px rgba(0, 0, 0, 0.25);
}
.sun {
	background: -webkit-radial-gradient(center, ellipse, #ffd000 1%, #f9b700 39%, #f9b700 39%, #e06317 100%);
	background: radial-gradient(ellipse at center, #ffd000 1%, #f9b700 39%, #f9b700 39%, #e06317 100%);
	height: 40px;
	width: 40px;
	margin-top: -20px;
	margin-left: -20px;
	background-clip: padding-box;
	border: 0 !important;
	background-position: -28px -103px;
	background-size: 175%;
	box-shadow: 0 0 10px 2px rgba(255, 107, 0, 0.4), 0 0 22px 11px rgba(255, 203, 0, 0.13);
}
.mercury {
	height: 70px;
	width: 70px;
	margin-top: -35px;
	margin-left: -35px;
	-webkit-animation: orb 7.18673s linear infinite;
	animation: orb 7.18673s linear infinite;
}
.mercury:before {
	height: 4px;
	width: 4px;
	background: #9f5e26;
	margin-top: -2px;
	margin-left: -2px;
}
.venus {
	height: 100px;
	width: 100px;
	margin-top: -50px;
	margin-left: -50px;
	-webkit-animation: orb 18.45553s linear infinite;
	animation: orb 18.45553s linear infinite;
}
.venus:before {
	height: 8px;
	width: 8px;
	background: #BEB768;
	margin-top: -4px;
	margin-left: -4px;
}
.earth {
	height: 145px;
	width: 145px;
	margin-top: -72.5px;
	margin-left: -72.5px;
	-webkit-animation: orb 30s linear infinite;
	animation: orb 30s linear infinite;
}
.earth:before {
	height: 6px;
	width: 6px;
	background: #11abe9;
	margin-top: -3px;
	margin-left: -3px;
}
.earth:after {
	position: absolute;
	content: "";
	height: 18px;
	width: 18px;
	left: 50%;
	top: 0px;
	margin-left: -9px;
	margin-top: -9px;
	border-radius: 100px;
	box-shadow: 0 -10px 0 -8px grey;
	-webkit-animation: orb 2.24404s linear infinite;
	animation: orb 2.24404s linear infinite;
}
.mars {
	height: 190px;
	width: 190px;
	margin-top: -95px;
	margin-left: -95px;
	-webkit-animation: orb 56.42613s linear infinite;
	animation: orb 56.42613s linear infinite;
}
.mars:before {
	height: 6px;
	width: 6px;
	background: #cf3921;
	margin-top: -3px;
	margin-left: -3px;
}
.jupiter {
	height: 340px;
	width: 340px;
	margin-top: -170px;
	margin-left: -170px;
	-webkit-animation: orb 355.72282s linear infinite;
	animation: orb 355.72282s linear infinite;
}
.jupiter:before {
	height: 18px;
	width: 18px;
	background: #c76e2a;
	margin-top: -9px;
	margin-left: -9px;
}
.saturn {
	height: 440px;
	width: 440px;
	margin-top: -220px;
	margin-left: -220px;
	-webkit-animation: orb 882.69525s linear infinite;
	animation: orb 882.69525s linear infinite;
}
.saturn:before {
	height: 12px;
	width: 12px;
	background: #e7c194;
	margin-top: -6px;
	margin-left: -6px;
}
.saturn:after {
	position: absolute;
	content: "";
	height: 2.34%;
	width: 4.676%;
	left: 50%;
	top: 0px;
	-webkit-transform: rotateZ(-52deg);
	transform: rotateZ(-52deg);
	margin-left: -2.3%;
	margin-top: -1.2%;
	border-radius: 50% 50% 50% 50%;
	box-shadow: 0 1px 0 1px #987641, 3px 1px 0 #987641, -3px 1px 0 #987641;
	-webkit-animation: orb 882.69525s linear infinite;
	animation: orb 882.69525s linear infinite;
	-webkit-animation-direction: reverse;
	animation-direction: reverse;
	-webkit-transform-origin: 52% 60%;
	-ms-transform-origin: 52% 60%;
	transform-origin: 52% 60%;
}
.uranus {
	height: 520px;
	width: 520px;
	margin-top: -260px;
	margin-left: -260px;
	-webkit-animation: orb 2512.4002s linear infinite;
	animation: orb 2512.4002s linear infinite;
}
.uranus:before {
	height: 10px;
	width: 10px;
	background: #b5e3e3;
	margin-top: -5px;
	margin-left: -5px;
}
.neptune {
	height: 630px;
	width: 630px;
	margin-top: -315px;
	margin-left: -315px;
	-webkit-animation: orb 4911.78386s linear infinite;
	animation: orb 4911.78386s linear infinite;
}
.neptune:before {
	height: 10px;
	width: 10px;
	background: #175e9e;
	margin-top: -5px;
	margin-left: -5px;
}
.asteroids-belt {
	opacity: .7;
	border-color: transparent !important;
	height: 300px;
	width: 300px;
	margin-top: -150px;
	margin-left: -150px;
	-webkit-animation: orb 179.95583s linear infinite;
	animation: orb 179.95583s linear infinite;
	overflow: hidden;
}
.asteroids-belt:before {
	top: 50%;
	height: 210px;
	width: 210px;
	margin-left: -105px;
	margin-top: -105px;
	background: transparent;
	border-radius: 140px !important;
	box-shadow: -15px 10px 0 -104px rgba(255, 255, 255, 0.06), 139px -61px 0 -104px rgba(255,255,255, 0.164), 45px 142px 0 -104px rgba(255,255,255, 0.635), 105px 128px 0 -104px rgba(255,255,255, 0.198), -116px 49px 0 -104px rgba(255,255,255, 0.43), 97px -78px 0 -104px rgba(255,255,255, 0.922), 59px -137px 0 -104px rgba(255,255,255, 0.878), -144px -42px 0 -104px rgba(255,255,255, 0.696), -114px 48px 0 -104px rgba(255,255,255, 0.119), 115px -99px 0 -104px rgba(255,255,255, 0.594), 104px -9px 0 -104px rgba(255,255,255, 0.557), 48px -35px 0 -104px rgba(255,255,255, 0.552), 66px -58px 0 -104px rgba(255,255,255, 0.578), 139px 64px 0 -104px rgba(255,255,255, 0.73), 64px 39px 0 -104px rgba(255,255,255, 0.189), -89px -110px 0 -104px rgba(255,255,255, 0.406), 0px -136px 0 -104px rgba(255,255,255, 0.391), -25px -106px 0 -104px rgba(255,255,255, 0.412), -5px 24px 0 -104px rgba(255,255,255, 0.452), -11px -97px 0 -104px rgba(255,255,255, 0.885), -107px 27px 0 -104px rgba(255,255,255, 0.759), 47px 124px 0 -104px rgba(255,255,255, 0.65), -24px -15px 0 -104px rgba(255,255,255, 0.532), -130px -121px 0 -104px rgba(255,255,255, 0.379), -35px 118px 0 -104px rgba(255,255,255, 0.373), 14px 81px 0 -104px rgba(255,255,255, 0.267), 113px 16px 0 -104px rgba(255,255,255, 0.021), -13px 107px 0 -104px rgba(255,255,255, 0.993), 39px -10px 0 -104px rgba(255,255,255, 0.772), -105px -82px 0 -104px rgba(255,255,255, 0.372), 9px -74px 0 -104px rgba(255,255,255, 0.74), 113px 0px 0 -104px rgba(255,255,255, 0.735), -15px -57px 0 -104px rgba(255,255,255, 0.972), -9px -91px 0 -104px rgba(255,255,255, 0.939), 116px -22px 0 -104px rgba(255,255,255, 0.232), 124px -123px 0 -104px rgba(255,255,255, 0.133), -30px -69px 0 -104px rgba(255,255,255, 0.658), 126px 13px 0 -104px rgba(255,255,255, 0.545), 44px 41px 0 -104px rgba(255,255,255, 0.646), 29px 43px 0 -104px rgba(255,255,255, 0.933), 125px 12px 0 -104px rgba(255,255,255, 0.723), 143px 10px 0 -104px rgba(255,255,255, 0.418), 105px 111px 0 -104px rgba(255,255,255, 0.976), 41px -119px 0 -104px rgba(255,255,255, 0.217), -81px -123px 0 -104px rgba(255,255,255, 0.094), -46px -42px 0 -104px rgba(255,255,255, 0.474), -121px -91px 0 -104px rgba(255,255,255, 0.464), 126px 134px 0 -104px rgba(255,255,255, 0.09), -23px 145px 0 -104px rgba(255,255,255, 0.28), 79px -125px 0 -104px rgba(255,255,255, 0.283), 57px -91px 0 -104px rgba(255,255,255, 0.713), 136px 126px 0 -104px rgba(255,255,255, 0.722), 8px 96px 0 -104px rgba(255,255,255, 0.105), 14px -18px 0 -104px rgba(255,255,255, 0.514), 4px -79px 0 -104px rgba(255,255,255, 0.784), -121px -137px 0 -104px rgba(255,255,255, 0.043), -89px -106px 0 -104px rgba(255,255,255, 0.162), -20px 140px 0 -104px rgba(255,255,255, 0.253), -46px 39px 0 -104px rgba(255,255,255, 0.5), 42px 91px 0 -104px rgba(255,255,255, 0.801), 66px -70px 0 -104px rgba(255,255,255, 0.836), 11px 107px 0 -104px rgba(255,255,255, 0.322), 129px 96px 0 -104px rgba(255,255,255, 0.522), 145px 119px 0 -104px rgba(255,255,255, 0.742), -66px 70px 0 -104px rgba(255,255,255, 0.743), 126px -42px 0 -104px rgba(255,255,255, 0.73), 112px 120px 0 -104px rgba(255,255,255, 0.927), -34px -90px 0 -104px rgba(255,255,255, 0.194), 59px 14px 0 -104px rgba(255,255,255, 0.008), -107px 46px 0 -104px rgba(255,255,255, 0.611), -26px 144px 0 -104px rgba(255,255,255, 0.407), -16px -133px 0 -104px rgba(255,255,255, 0.439), 75px 103px 0 -104px rgba(255,255,255, 0.981), -39px 122px 0 -104px rgba(255,255,255, 0.799), 60px 46px 0 -104px rgba(255,255,255, 0.052), 46px 105px 0 -104px rgba(255,255,255, 0.715), -71px -17px 0 -104px rgba(255,255,255, 0.474), -32px 81px 0 -104px rgba(255,255,255, 0.858), -24px -106px 0 -104px rgba(255,255,255, 0.096), 104px -110px 0 -104px rgba(255,255,255, 0.465), 63px -91px 0 -104px rgba(255,255,255, 0.211), -25px 133px 0 -104px rgba(255,255,255, 0.64), -1px 6px 0 -104px rgba(255,255,255, 0.503), -33px 73px 0 -104px rgba(255,255,255, 0.594), 102px -104px 0 -104px rgba(255,255,255, 0.609), 7px -99px 0 -104px rgba(255,255,255, 0.273), -1px 86px 0 -104px rgba(255,255,255, 0.319), -95px 119px 0 -104px rgba(255,255,255, 0.597), -79px 66px 0 -104px rgba(255,255,255, 0.606), 6px -46px 0 -104px rgba(255,255,255, 0.148), -129px -15px 0 -104px rgba(255,255,255, 0.142), -62px 55px 0 -104px rgba(255,255,255, 0.999), 127px -38px 0 -104px rgba(255,255,255, 0.499), 14px 141px 0 -104px rgba(255,255,255, 0.75), -75px -19px 0 -104px rgba(255,255,255, 0.657), -112px 75px 0 -104px rgba(255,255,255, 0.176), -63px 52px 0 -104px rgba(255,255,255, 0.262), 114px -6px 0 -104px rgba(255,255,255, 0.824), 89px 60px 0 -104px rgba(255,255,255, 0.755), -99px 75px 0 -104px rgba(255,255,255, 0.851), 70px 57px 0 -104px rgba(255,255,255, 0.225), 103px 109px 0 -104px rgba(255,255,255, 0.947), -77px -62px 0 -104px rgba(255,255,255, 0.174), 29px 76px 0 -104px rgba(255,255,255, 0.405), 91px -74px 0 -104px rgba(255,255,255, 0.631), -109px -62px 0 -104px rgba(255,255,255, 0.014), 29px 44px 0 -104px rgba(255,255,255, 0.66), 43px -48px 0 -104px rgba(255,255,255, 0.881), 77px 46px 0 -104px rgba(255,255,255, 0.52), -22px 141px 0 -104px rgba(255,255,255, 0.6), 120px 87px 0 -104px rgba(255,255,255, 0.96), 39px 104px 0 -104px rgba(255,255,255, 0.406), 124px -140px 0 -104px rgba(255,255,255, 0.681), 18px 79px 0 -104px rgba(255,255,255, 0.77), 99px -37px 0 -104px rgba(255,255,255, 0.256), 7px 139px 0 -104px rgba(255,255,255, 0.805), 57px -56px 0 -104px rgba(255,255,255, 0.96), 122px 127px 0 -104px rgba(255,255,255, 0.517), 11px 27px 0 -104px rgba(255,255,255, 0.595), -48px 37px 0 -104px rgba(255,255,255, 0.265), -137px 42px 0 -104px rgba(255,255,255, 0.273), -124px 113px 0 -104px rgba(255,255,255, 0.493), -31px 124px 0 -104px rgba(255,255,255, 0.788), 97px 21px 0 -104px rgba(255,255,255, 0.411), 18px -51px 0 -104px rgba(255,255,255, 0.357), 95px 55px 0 -104px rgba(255,255,255, 0.111), 108px -103px 0 -104px rgba(255,255,255, 0.642), -97px 142px 0 -104px rgba(255,255,255, 0.965), -135px 145px 0 -104px rgba(255,255,255, 0.73), 126px 76px 0 -104px rgba(255,255,255, 0.687), -105px 79px 0 -104px rgba(255,255,255, 0.94), 145px 33px 0 -104px rgba(255,255,255, 0.136), 134px -82px 0 -104px rgba(255,255,255, 0.09), -75px -84px 0 -104px rgba(255,255,255, 0.162), 66px 39px 0 -104px rgba(255,255,255, 0.27), 105px -17px 0 -104px rgba(255,255,255, 0.665), 7px 84px 0 -104px rgba(255,255,255, 0.155), 108px 132px 0 -104px rgba(255,255,255, 0.38), 9px 77px 0 -104px rgba(255,255,255, 0.428), -109px -117px 0 -104px rgba(255,255,255, 0.432), 17px 86px 0 -104px rgba(255,255,255, 0.69), -77px 88px 0 -104px rgba(255,255,255, 0.854), -41px -54px 0 -104px rgba(255,255,255, 0.712), -14px -27px 0 -104px rgba(255,255,255, 0.717), 126px 55px 0 -104px rgba(255,255,255, 0.261), 6px 0px 0 -104px rgba(255,255,255, 0.139), -83px -106px 0 -104px rgba(255,255,255, 0.466), -50px 143px 0 -104px rgba(255,255,255, 0.453), 104px 18px 0 -104px rgba(255,255,255, 0.836), 46px -73px 0 -104px rgba(255,255,255, 0.753), 16px 38px 0 -104px rgba(255,255,255, 0.108), 106px -114px 0 -104px rgba(255,255,255, 0.417), -73px -98px 0 -104px rgba(255,255,255, 0.62), 52px -143px 0 -104px rgba(255,255,255, 0.851), -81px 78px 0 -104px rgba(255,255,255, 0.827), 15px -93px 0 -104px rgba(255,255,255, 0.473), 137px 54px 0 -104px rgba(255,255,255, 0.105), -2px 3px 0 -104px rgba(255,255,255, 0.863), 31px 25px 0 -104px rgba(255,255,255, 0.115), -98px 128px 0 -104px rgba(255,255,255, 0.003), 49px -4px 0 -104px rgba(255,255,255, 0.514), 93px -129px 0 -104px rgba(255,255,255, 0.065), 79px 63px 0 -104px rgba(255,255,255, 0.085), -5px -129px 0 -104px rgba(255,255,255, 0.915), 23px 99px 0 -104px rgba(255,255,255, 0.272), -129px 121px 0 -104px rgba(255,255,255, 0.653), 37px 57px 0 -104px rgba(255,255,255, 0.022), 106px 131px 0 -104px rgba(255,255,255, 0.048), -56px 77px 0 -104px rgba(255,255,255, 0.329), -86px -115px 0 -104px rgba(255,255,255, 0.951), -66px 20px 0 -104px rgba(255,255,255, 0.351), -17px -144px 0 -104px rgba(255,255,255, 0.422), -48px -103px 0 -104px rgba(255,255,255, 0.568), 134px 0px 0 -104px rgba(255,255,255, 0.53), 75px -80px 0 -104px rgba(255,255,255, 0.447), -121px 109px 0 -104px rgba(255,255,255, 0.078), -72px -51px 0 -104px rgba(255,255,255, 0.161), 121px -109px 0 -104px rgba(255,255,255, 0.786), -117px 56px 0 -104px rgba(255,255,255, 0.32), -106px 139px 0 -104px rgba(255,255,255, 0.96), 132px 22px 0 -104px rgba(255,255,255, 0.321), 71px -34px 0 -104px rgba(255,255,255, 0.111), -143px 124px 0 -104px rgba(255,255,255, 0.538), -72px 101px 0 -104px rgba(255,255,255, 0.448), 70px 98px 0 -104px rgba(255,255,255, 0.622), 18px -113px 0 -104px rgba(255,255,255, 0.853), -11px 4px 0 -104px rgba(255,255,255, 0.706), 30px -59px 0 -104px rgba(255,255,255, 0.843), 125px 44px 0 -104px rgba(255,255,255, 0.802), -9px -35px 0 -104px rgba(255,255,255, 0.729), 78px -49px 0 -104px rgba(255,255,255, 0.019), 31px 1px 0 -104px rgba(255,255,255, 0.76), -60px -44px 0 -104px rgba(255,255,255, 0.037), -78px 13px 0 -104px rgba(255,255,255, 0.876), -111px -23px 0 -104px rgba(255,255,255, 0.514), 88px 110px 0 -104px rgba(255,255,255, 0.406), -11px -105px 0 -104px rgba(255,255,255, 0.412), 3px 89px 0 -104px rgba(255,255,255, 0.81), -5px 106px 0 -104px rgba(255,255,255, 0.572), 72px -98px 0 -104px rgba(255,255,255, 0.165), 59px 113px 0 -104px rgba(255,255,255, 0.222), 64px 41px 0 -104px rgba(255,255,255, 0.714), 44px -14px 0 -104px rgba(255,255,255, 0.071), -65px -111px 0 -104px rgba(255,255,255, 0.341), 78px -53px 0 -104px rgba(255,255,255, 0.495), -86px 91px 0 -104px rgba(255,255,255, 0.621), 71px -75px 0 -104px rgba(255,255,255, 0.271), -12px -66px 0 -104px rgba(255,255,255, 0.067), 74px -49px 0 -104px rgba(255,255,255, 0.865), -1px 20px 0 -104px rgba(255,255,255, 0.195), 44px -81px 0 -104px rgba(255,255,255, 0.349), 98px -73px 0 -104px rgba(255,255,255, 0.05), 24px 26px 0 -104px rgba(255,255,255, 0.362), -1px -22px 0 -104px rgba(255,255,255, 0.914), 58px -136px 0 -104px rgba(255,255,255, 0.47), -118px 122px 0 -104px rgba(255,255,255, 0.78), 101px 34px 0 -104px rgba(255,255,255, 0.867), 56px -85px 0 -104px rgba(255,255,255, 0.355), 101px -138px 0 -104px rgba(255,255,255, 0.425), -70px -61px 0 -104px rgba(255,255,255, 0.452), -13px 44px 0 -104px rgba(255,255,255, 0.041), 28px -64px 0 -104px rgba(255,255,255, 0.795), -118px 69px 0 -104px rgba(255,255,255, 0.48), 69px -75px 0 -104px rgba(255,255,255, 0.336), -98px -6px 0 -104px rgba(255,255,255, 0.309), -52px -57px 0 -104px rgba(255,255,255, 0.527), -132px -123px 0 -104px rgba(255,255,255, 0.92), 125px -113px 0 -104px rgba(255,255,255, 0.169), 23px 103px 0 -104px rgba(255,255,255, 0.143), -59px 37px 0 -104px rgba(255,255,255, 0.453), -10px 77px 0 -104px rgba(255,255,255, 0.252), 109px 99px 0 -104px rgba(255,255,255, 0.151), 68px -128px 0 -104px rgba(255,255,255, 0.864), -23px -5px 0 -104px rgba(255,255,255, 0.171), 101px -14px 0 -104px rgba(255,255,255, 0.697), -130px -133px 0 -104px rgba(255,255,255, 0.487), -141px 79px 0 -104px rgba(255,255,255, 0.116), -127px 65px 0 -104px rgba(255,255,255, 0.261), 119px -73px 0 -104px rgba(255,255,255, 0.156), 108px -15px 0 -104px rgba(255,255,255, 0.452), -116px 75px 0 -104px rgba(255,255,255, 0.686), 3px -1px 0 -104px rgba(255,255,255, 0.078), -73px -66px 0 -104px rgba(255,255,255, 0.083), -4px 96px 0 -104px rgba(255,255,255, 0.09), 83px 16px 0 -104px rgba(255,255,255, 0.011), 18px -22px 0 -104px rgba(255,255,255, 0.003), 34px -50px 0 -104px rgba(255,255,255, 0.441), -16px 75px 0 -104px rgba(255,255,255, 0.856), 96px -27px 0 -104px rgba(255,255,255, 0.886), -118px 97px 0 -104px rgba(255,255,255, 0.001), 132px -51px 0 -104px rgba(255,255,255, 0.839), -31px 2px 0 -104px rgba(255,255,255, 0.944), -132px 121px 0 -104px rgba(255,255,255, 0.875), -16px -49px 0 -104px rgba(255,255,255, 0.685), 37px 18px 0 -104px rgba(255,255,255, 0.408), -33px -94px 0 -104px rgba(255,255,255, 0.428), -134px -41px 0 -104px rgba(255,255,255, 0.348), 61px -54px 0 -104px rgba(255,255,255, 0.027), 82px 2px 0 -104px rgba(255,255,255, 0.67), 141px 14px 0 -104px rgba(255,255,255, 0.959), -112px -39px 0 -104px rgba(255,255,255, 0.964), -104px -13px 0 -104px rgba(255,255,255, 0.286), -29px -26px 0 -104px rgba(255,255,255, 0.622), -126px 112px 0 -104px rgba(255,255,255, 0.465), -142px 94px 0 -104px rgba(255,255,255, 0.387), 131px 35px 0 -104px rgba(255,255,255, 0.574), 12px 21px 0 -104px rgba(255,255,255, 0.921), -11px 72px 0 -104px rgba(255,255,255, 0.696), 33px -54px 0 -104px rgba(255,255,255, 0.858), -99px -49px 0 -104px rgba(255,255,255, 0.723), -26px 138px 0 -104px rgba(255,255,255, 0.601), 46px 77px 0 -104px rgba(255,255,255, 0.02), -133px -36px 0 -104px rgba(255,255,255, 0.796), -123px 107px 0 -104px rgba(255,255,255, 0.964), 77px 133px 0 -104px rgba(255,255,255, 0.408), 115px 57px 0 -104px rgba(255,255,255, 0.877), -22px -48px 0 -104px rgba(255,255,255, 0.44), -116px -23px 0 -104px rgba(255,255,255, 0.902), -132px 76px 0 -104px rgba(255,255,255, 0.78), -20px 133px 0 -104px rgba(255,255,255, 0.29), -115px -101px 0 -104px rgba(255,255,255, 0.293), -121px -57px 0 -104px rgba(255,255,255, 0.868), -6px 24px 0 -104px rgba(255,255,255, 0.892), 58px 9px 0 -104px rgba(255,255,255, 0.963), -1px -144px 0 -104px rgba(255,255,255, 0.423), 79px -58px 0 -104px rgba(255,255,255, 0.699), -56px 37px 0 -104px rgba(255,255,255, 0.687), -84px 10px 0 -104px rgba(255,255,255, 0.04), 5px 93px 0 -104px rgba(255,255,255, 0.579), 117px 68px 0 -104px rgba(255,255,255, 0.532), -75px 56px 0 -104px rgba(255,255,255, 0.345), -108px -142px 0 -104px rgba(255,255,255, 0.818), 4px -142px 0 -104px rgba(255,255,255, 0.003), 116px -34px 0 -104px rgba(255,255,255, 0.929), 139px -23px 0 -104px rgba(255,255,255, 0.75), -108px -63px 0 -104px rgba(255,255,255, 0.779), 70px -107px 0 -104px rgba(255,255,255, 0.547), 94px -14px 0 -104px rgba(255,255,255, 0.927), 18px 69px 0 -104px rgba(255,255,255, 0.406), 143px -84px 0 -104px rgba(255,255,255, 0.889), -22px 3px 0 -104px rgba(255,255,255, 0.055), 33px -24px 0 -104px rgba(255,255,255, 0.34), -98px 24px 0 -104px rgba(255,255,255, 0.844), 91px -88px 0 -104px rgba(255,255,255, 0.164), 115px -112px 0 -104px rgba(255,255,255, 0.934), 103px 10px 0 -104px rgba(255,255,255, 0.384), -11px 16px 0 -104px rgba(255,255,255, 0.836), -98px 16px 0 -104px rgba(255,255,255, 0.797), 54px 125px 0 -104px rgba(255,255,255, 0.692), -133px -11px 0 -104px rgba(255,255,255, 0.458), 59px 40px 0 -104px rgba(255,255,255, 0.916), 19px 131px 0 -104px rgba(255,255,255, 0.467), -57px -24px 0 -104px rgba(255,255,255, 0.472), 117px 39px 0 -104px rgba(255,255,255, 0.048), 100px 50px 0 -104px rgba(255,255,255, 0.429), -77px 103px 0 -104px rgba(255,255,255, 0.785), -104px 100px 0 -104px rgba(255,255,255, 0.7), 25px 7px 0 -104px rgba(255,255,255, 0.153), 20px 3px 0 -104px rgba(255,255,255, 0.474), 61px -70px 0 -104px rgba(255,255,255, 0.555), -119px -117px 0 -104px rgba(255,255,255, 0.109), 8px -58px 0 -104px rgba(255,255,255, 0.579), 102px -98px 0 -104px rgba(255,255,255, 0.785), -2px 63px 0 -104px rgba(255,255,255, 0.558), 28px -133px 0 -104px rgba(255,255,255, 0.678), 2px -29px 0 -104px rgba(255,255,255, 0.924), 110px -69px 0 -104px rgba(255,255,255, 0.113), 145px 75px 0 -104px rgba(255,255,255, 0.985), -59px 51px 0 -104px rgba(255,255,255, 0.521), -25px 140px 0 -104px rgba(255,255,255, 0.508), 139px -128px 0 -104px rgba(255,255,255, 0.519), -61px 115px 0 -104px rgba(255,255,255, 0.943), 67px 115px 0 -104px rgba(255,255,255, 0.842), 44px -32px 0 -104px rgba(255,255,255, 0.107), 138px -122px 0 -104px rgba(255,255,255, 0.201), -105px -3px 0 -104px rgba(255,255,255, 0.193), 34px -143px 0 -104px rgba(255,255,255, 0.64), -25px 114px 0 -104px rgba(255,255,255, 0.787), -73px 32px 0 -104px rgba(255,255,255, 0.485), 137px -80px 0 -104px rgba(255,255,255, 0.584), 20px 85px 0 -104px rgba(255,255,255, 0.339), 87px 54px 0 -104px rgba(255,255,255, 0.58), -49px -24px 0 -104px rgba(255,255,255, 0.081), 129px -106px 0 -104px rgba(255,255,255, 0.929), 61px 143px 0 -104px rgba(255,255,255, 0.09), 77px 18px 0 -104px rgba(255,255,255, 0.957), -77px 93px 0 -104px rgba(255,255,255, 0.616), 133px 12px 0 -104px rgba(255,255,255, 0.226), -92px -48px 0 -104px rgba(255,255,255, 0.624), 132px -63px 0 -104px rgba(255,255,255, 0.252), 43px 114px 0 -104px rgba(255,255,255, 0.903), 55px -115px 0 -104px rgba(255,255,255, 0.352), 29px 119px 0 -104px rgba(255,255,255, 0.213), -97px -26px 0 -104px rgba(255,255,255, 0.08), -18px 4px 0 -104px rgba(255,255,255, 0.281), 46px -131px 0 -104px rgba(255,255,255, 0.303), 30px -24px 0 -104px rgba(255,255,255, 0.738), 4px 95px 0 -104px rgba(255,255,255, 0.838), 31px 123px 0 -104px rgba(255,255,255, 0.803), -54px 33px 0 -104px rgba(255,255,255, 0.747), 107px 113px 0 -104px rgba(255,255,255, 0.897), -61px 82px 0 -104px rgba(255,255,255, 0.476), 135px 54px 0 -104px rgba(255,255,255, 0.097), -139px 86px 0 -104px rgba(255,255,255, 0.207), -52px -84px 0 -104px rgba(255,255,255, 0.037), -109px 133px 0 -104px rgba(255,255,255, 0.857), -65px 2px 0 -104px rgba(255,255,255, 0.107), 13px 3px 0 -104px rgba(255,255,255, 0.986), -45px -140px 0 -104px rgba(255,255,255, 0.717), -89px -132px 0 -104px rgba(255,255,255, 0.869), -73px 4px 0 -104px rgba(255,255,255, 0.392), -48px 49px 0 -104px rgba(255,255,255, 0.987), -13px -21px 0 -104px rgba(255,255,255, 0.159), 67px 22px 0 -104px rgba(255,255,255, 0.021), 30px -39px 0 -104px rgba(255,255,255, 0.657), 43px 83px 0 -104px rgba(255,255,255, 0.229), -7px 135px 0 -104px rgba(255,255,255, 0.325), -21px 13px 0 -104px rgba(255,255,255, 0.876), -43px -68px 0 -104px rgba(255,255,255, 0.473), 37px -26px 0 -104px rgba(255,255,255, 0.971), -75px 126px 0 -104px rgba(255,255,255, 0.369), 30px 68px 0 -104px rgba(255,255,255, 0.312), -54px 53px 0 -104px rgba(255,255,255, 0.93), 35px 116px 0 -104px rgba(255,255,255, 0.973), 136px -56px 0 -104px rgba(255,255,255, 0.472), 116px 55px 0 -104px rgba(255,255,255, 0.191), -102px -30px 0 -104px rgba(255,255,255, 0.912), 103px -92px 0 -104px rgba(255,255,255, 0.586), -68px -143px 0 -104px rgba(255,255,255, 0.495), 106px -99px 0 -104px rgba(255,255,255, 0.145);
}
.pluto {
	height: 780px;
	width: 780px;
	margin-top: -450px;
	margin-left: -320px;
	-webkit-animation: orb 7439.70741s linear infinite;
	animation: orb 7439.70741s linear infinite;
}
.pluto:before {
	height: 3px;
	width: 3px;
	background: #fff;
	margin-top: -1.5px;
	margin-left: -1.5px;
}
.hide {
	display: none;
}
.links {
	margin-top: 5px !important;
	font-size: 1em !important;
}
 @-webkit-keyframes orb {
 from {
 -webkit-transform: rotate(0deg);
 transform: rotate(0deg);
}
 to {
 -webkit-transform: rotate(-360deg);
 transform: rotate(-360deg);
}
}
 @keyframes orb {
 from {
 -webkit-transform: rotate(0deg);
 transform: rotate(0deg);
}
 to {
 -webkit-transform: rotate(-360deg);
 transform: rotate(-360deg);
}
}
</style>
</head>

<body>
<div class='description'>
  <h1>Solar System</h1>
  <hr>
  <p> I know this is not the first one on CodePen, but I'm a space and physics lover, and I wanted to create mine :) </p>
  <p> Here is a true time scaled solar-system, which means that every objects have a time relative to an Earth year.
    You can change the number in second of the <br>
    <code>$year-in-second</code> variable to increase the speed of revolutions. Here 1 year = 30 seconds. </p>
  <p class='hide'> Note the css tricks for the Saturn rings (box-shadow) and reverse animation to compensate the orbit. </p>
  <hr>
  <p class='author'> Made with <i class='fa fa-heart'></i> by Malik Dellidj </p>
  <p class='links'> <a class='fa fa-codepen icon' href='http://codepen.io/kowlor/' target='_blank'></a> <a class='fa fa-github-alt icon' href='https://github.com/KOWLOR' target='_blank'></a> <a class='fa fa-twitter icon' href='https://twitter.com/Dathink' target='_blank'></a> </p>
</div>
<div class='solar-syst'>
  <div class='sun'></div>
  <div class='mercury'></div>
  <div class='venus'></div>
  <div class='earth'></div>
  <div class='mars'></div>
  <div class='jupiter'></div>
  <div class='saturn'></div>
  <div class='uranus'></div>
  <div class='neptune'></div>
  <div class='pluto'></div>
  <div class='asteroids-belt'></div>
</div>
</body>
</html>