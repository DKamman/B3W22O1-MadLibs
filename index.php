<?php

$petErr = $personErr = $houseErr = $boredErr = $toyErr = $teacherErr = $richErr = $favoriteErr =  "";
$pet = $person = $house = $bored = $toy = $teacher = $rich = $favorite = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["pet"])) {
    $petErr = "Name is required";
  } else {
    $pet = test_input($_POST["pet"]);
  }
}

	function test_input($data) {
	  $data = trim($data);
	  $data = stripslashes($data);
	  $data = htmlspecialchars($data);
	  return $data;
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Paniek</title>
	<meta charset="utf-8">
	<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div id="main">
		<h1 id="hoofd">Mad Libs</h1>
		<div id="title">
			<h3><a class="active" href="index.php">Er heerst paniek...</a></h3>	<h3><a href="onkunde.php">Onkunde</a></h3>
		</div>

		<?php if ($_SERVER["REQUEST_METHOD"] != "POST") { ?>

		<div class="body">
			<h2>Er heerst paniek...</h2>
				<form name="form1" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" >
					<div><p>Welk dier zou je nooit als huisdier willen hebben?</p><input type="text" name="pet" required><span class="error"><?php echo $petErr; ?></span></div>
					<div><p>Wie is de belangrijkste persoon in je leven?</p><input type="text" name="person" required></div>
					<div><p>In welk land zou je graag willen wonen?</p><input type="text" name="house" required></div>
					<div><p>Wat doe je als je je verveeld?</p><input type="text" name="bored" required></div>
					<div><p>Met welk speelgoed speelde je als kind het meest?</p><input type="text" name="toy" required></div>
					<div><p>Bij welke docent spijbel je het liefst?</p><input type="text" name="teacher" required></div>
					<div><p>Als je €100.000,- had, wat zou je dan kopen?</p><input type="text" name="rich" required></div>
					<div><p>Wat is je favoriete bezigheid?</p><input type="text" name="favorite" required></div>
					<div><input type="submit" value="Versturen"></div>
				</form>
		</div>

		<?php } else{ ?>

		<div class="body formuitslag">
				<h2>Er heerst paniek...</h2>
				<p>Er heerst paniek in het koningkrijk <?php echo $_POST["house"]; ?>. Koning Egmond is ten einde raad en als koning Egmond ten einde raad is, dan roept hij zijn ten-einde-raadsheer <?php echo $_POST["person"]; ?>.</p>
				<p>"<?php echo $_POST["person"]; ?>! Het is een ramp! Het is een schande!"</p>
				<p>"Sire, Majesteit, Uwe Luidruchtigheid, wat is er aan de hand?"</p>
				<p>Mijn <?php echo $_POST["pet"]; ?> is verdwenen! Zo maar, zonder waarschuwing. En ik had net <?php echo $_POST["toy"]; ?> voor hem gekocht!"</p>
				<p>"Majesteit, uw <?php echo $_POST["pet"]; ?> komt vast vanzelf weer terug?"</p>
				<p>Ja, da's leuk en aardig, maar hoe moet ik in de tussentijd <?php echo $_POST["favorite"]; ?> leren?"</p>
				<p>"Maar Sire, daar kunt u toch uw <?php echo $_POST["rich"]; ?> voor gebruiken?"</p>
				<p>"<?php echo $_POST["person"]; ?>, je hebt helemaal gelijk! Wat zou ik doen als ik jou niet had."</p>
				<p>"<?php echo $_POST["bored"]; ?>, Sire."</p>

				<?php } ?>
				<?php include "include/footer.php"; ?>

		</div>
</body>
</html>
