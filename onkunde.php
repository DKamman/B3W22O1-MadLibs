<!DOCTYPE html>
<html>
<head>
	<title>Onkune</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div id="main">
		<h1>Mad Libs</h1>
		<div id="title">
			<h3><a class="active" href="index.php">Er heerst paniek...</a></h3>	<h3><a href="onkunde.php">Onkunde</a></h3>
		</div>
		<?php if ($_SERVER["REQUEST_METHOD"] != "POST") { ?>
		<div class="body">
			<h2>Onkunde</h2>
				<form name="form2" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" >
					<div><p>Wat zou je graag willen kunnen?</p><input type="text" name="q1" ></div>

					<div><p>Met welke persoon kun je goed opschieten?</p><input type="text" name="q2"></div>

					<div><p>Wat is je favoriete getal</p><input type="text" name="q3"></div>

					<div><p>Wat heb je altijd bij je als je op vakantie gaat?</p><input type="text" name="q4"></div>

					<div><p>Wat is je beste persoonlijke eigenschap?</p><input type="text" name="q5"></div>

					<div><p>Wat is je slechtste persoonlijke eigenschap?</p><input type="text" name="q6"></div>

					<div><p>Wat is het ergste dat je kan overkomen?</p><input type="text" name="q7"></div>

					<div><input type="submit" value="Versturen"></div>
			</form>
		</div>
		<?php } else{ ?>
		<div class="body formuitslag2">
			<h2>Onkunde</h2>
			<p>Er zijn veel mensen die niet kunnen <?php echo $_POST["q1"]; ?>. Neem nou <?php echo $_POST["q2"]; ?>. Zelfs met de hulp van een <?php echo $_POST["q4"]; ?> of zelfs <?php echo $_POST["q3"]; ?> kan <?php echo $_POST["q2"]; ?> niet <?php echo $_POST["q1"]; ?>. Dat heeft niet te maken met een gebrek aan <?php echo $_POST["q5"]; ?>, maar met een te veel aan <?php echo $_POST["q6"]; ?>. Te veel <?php echo $_POST["q6"]; ?> leidt tot <?php echo $_POST["q7"]; ?> en dat is niet goed als je wilt <?php echo $_POST["q1"]; ?>. Helaas voor <?php echo $_POST["q2"]; ?>.</p>
		</div>
		<?php } ?>
		<?php include "include/footer.php"; ?>
	</div>
</body>
</html>