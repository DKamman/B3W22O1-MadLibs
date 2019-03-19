<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div id="main">
		<h1>Mad Libs</h1>
		<div id="title">
			<h3>Er heerst paniek...</h3>	<h3>Onkunde</h3>
		</div>
		<div id="body">
			<h2>Er heerst paniek...</h2>
				<form name="form1" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" >
					<div><p>Welk dier zou je nooit als huisdier willen hebben?</p><input type="text" name="pet" ></div>
					<div><p>Wie is de belangrijkste persoon in je leven?</p><input type="text" name="person"></div>
					<div><p>In welk land zou je graag willen wonen?</p><input type="text" name="house"></div>
					<div><p>Wat doe je als je je verveeld?</p><input type="text" name="bored"></div>
					<div><p>Met welk speelgoed speelde je als kind het meest?</p><input type="text" name="toy"></div>
					<div><p>Bij welke docent spijbel je het liefst?</p><input type="text" name="teacher"></div>
					<div><p>Als je €100.000,- had, wat zou je dan kopen?</p><input type="text" name="rich"></div>
					<div><p>Wat is je favoriete bezigheid?</p><input type="text" name="favorite"></div>
					<div><input type="submit" value="Versturen"></div>
				</form>
		</div>
	</div>
<p><?php
echo $_GET["pet"];
echo $_GET["person"];
echo $_GET["house"];
echo $_GET["bored"];
echo $_GET["toy"];
echo $_GET["teacher"];
echo $_GET["rich"];
echo $_GET["favorite"];
?>
</p>
</body>
</html>


