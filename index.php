<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
    <title>Money Calculator</title>
    <link href="css/general.css" rel="stylesheet">
</head>
<body>

<div class="inputs">
<form action="index.php" method="post">
	<p>
	<label for="FirstInput">First Item's Cost</label>
	<input type="text" id="FirstInput" name="FirstInput">
	</p>
    <p>
	<label for="SecondInput">Second Item's Cost</label>
	<input type="text" id="SecondInput" name="SecondInput">
	</p>
    <p>
	<label for="calc">What Function to Preform?</label>
	<select id="calc" name="calc">
		<option value="a">Add "+"</option>
		<option value="s">Subtract "-"</option>
		<option value="m">Multiply "x"</option>
		<option value="d">Divide "/"</option>
	</select>
	</p>
    <p>
	<button type="submit">Compute</button>
    </p>
</form>
</div>

<div class="outputs">

<p><strong>The Result Plus Tax Of 13% Is:  </strong></p>
<p><strong>
<?php if (!empty($_POST["FirstInput"]) && !empty($_POST["SecondInput"])) :

if ($_POST["calc"] == "a") {

   $result = $_POST["FirstInput"] + $_POST["SecondInput"];
		 print number_format($result * 1.13, 2);
} else if ($_POST["calc"] == "s") {

   $result = $_POST["FirstInput"] - $_POST["SecondInput"];
		 print number_format($result * 1.13, 2);
} else if ($_POST["calc"] == "m") {

   $result = $_POST["FirstInput"] * $_POST["SecondInput"];
		 print number_format($result * 1.13, 2);
} else if ($_POST["calc"] == "d") {

   $result = $_POST["FirstInput"] / $_POST["SecondInput"];
		 print number_format($result * 1.13, 2);
}

endif; ?>
</strong>
</p>
</div>

</body>
</html>
