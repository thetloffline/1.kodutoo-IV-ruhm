<?php
	// var_dump ($_GET);
	// echo "<br>";
	// var_dump ($_POST);

//Kasutajanime sisestamise kontroll
echo "mvp kirjeldus: Pinkisi matchmaker; TLÜ kohvikute võrdlev lehekülg; teenindussektori töötajate väärtuse hindamise loodud tagasiside keskkond, A la 'Kiida teenindajat'. Teenindaja annab kliendile unikaalse id, mille alusel saab tagasiside anda. <br><br>";
	$signupEmailError = " *";

if (isset ($_POST["signupEmail"])) {

	if (empty ($_POST["signupEmail"])) {

	echo " e-post on tyhi";
	echo "<br><br>";
	}

}


//Kasutaja parooli sisestamise kontroll
$signupPasswordError = " *";

if (isset ($_POST["signupPassword"])) {

	if (empty ($_POST["signupPassword"])) 

	 {

		if (strlen($_POST["signupPassword"]) < 8 ) {

			$signupPasswordError = " parool peab olema vähemalt 8 tähemärki pikk";
		}
	}

	echo " parool on puudu";
	}


//Pangakaardi andmete sisestamise kontroll
$creditCardError = " *";

if (isset ($_POST["creditCard"])) {

	// kas on tyhi?
	// on olemas

	if (empty ($_POST["creditCard"])) 

	{
		if (strlen($_POST["creditCard"]) != 16 ) {

			$creditCardError = " Pangakaardi number peab olema 16 tähemärki pikk";
		}


	//on tyhi

	echo " kaardi andmed on puudu";
	echo "<br><br>";
	}

}


//Pangakaardi parooli sisestamise kontroll
$creditCardPasswordError = " *";

if (isset ($_POST["creditCardPassword"])) {

	// kas on tyhi?
	// on olemas

	if (empty ($_POST["creditCardPassword"])) {

	//on tyhi

	echo " kaardi parool on puudu";
	}

}


?>

<!DOCTYPE html>
<html>
	<head>
		<title>Sisselogimise leht</title>
	</head>
	<body>

		<h1>Logi sisse</h1>
			<form method="POST">

				<input type="email" placeholder="sisesta e-post" name="loginEmail">
				<br><br>
				<input type="password" placeholder="sisesta parool" name="loginPassword">
				<br><br>
				<input type="submit" value="logi sisse">
			</form>

		<h1>Loo kasutaja</h1>
			<form method="POST">

				<input type="email" placeholder="loo kasutaja" name="signupEmail"><?php echo $signupEmailError; ?>
				<br><br>
				<input type="password" placeholder="sisesta parool" name="signupPassword"><?php echo $signupPasswordError; ?>
				<br><br>
				<input type="submit" value="loo kasutaja">
		
		
		<h1>Sisesta pangakaardi andmed</h1>
			

				<input type="text" placeholder="sisesta pangakaardi andmed" name="creditCard" maxlength=16><?php echo $creditCardError; ?>
				<br><br>
				<input type="password" placeholder="sisesta pangakaardi parool" name="creditCardPassword" maxlength=4><?php echo $creditCardPasswordError; ?>
				<br><br>
				<input type="submit" value="edasta andmed">
		</form>
	</body>
</html>