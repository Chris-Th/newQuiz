<?php
    require "./includes/data-collector.php"; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/main.js"></script>
</head>
<body>
    <?php
        /*
                    $_SESSION-Werte müssen gesetzt sein,
                     bevor die Punkte gesammelt werden.
        */
        $totalPoints = 0;

        foreach ($_SESSION as $name => $value) {
            if (str_contains($name, 'question-')) {
                if (isset($value["single-choice"])) {
                    $points = intval($value["single-choice"]);
                    $totalPoints = $totalPoints + $points; // Kurzform: $totalPoints += $points;
                }
            }
        }

        // Maximal mögliche Punkte
        $maxPoints = $_SESSION["quiz"]["questionNum"];
    ?>

	<nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top sticky-top bg-opacity-75 justify-content-center">
    <ul class="nav justify-content-center">
    <li class="nav-item">
      <a class="navbar-brand" href="#"><img src="/images/thizQuizLogo/thizquiz-high-resolution-logo-color-on-transparent-background-no-container-kopie.png" height="60">  </a>
    </li>
  </ul>
  </nav> 
  <div class="container-fluid">
		<div class="row d-flex align-items-center bg-warning rounded-2 min-vh-100 m-1">
      <div class="col-2"></div>
      <div class="col-8 bg-warning">
    		<!--<div class="container-sm m-2 bg-warning min-vh-100 rounded-2">-->
        <div class="question p-2" style="color: white">
          <div class="py-2 h5">
            <!-- Bilanz -->
            <h7>Congratulations!</h7>
            <h3>You achieved <?php echo $totalPoints; ?> out of 
                    possible <?php echo $maxPoints; ?> points.</h3>
        	</div>
				</div>
        <button class="btn btn-primary" onclick="document.location='/index.php';">Neues Quiz</button>
    	</div>
		</div>
	</div>
	
	<nav class="navbar navbar-expand-sm navbar-dark bg-dark fixed-bottom sticky-bottom bg-opacity-75 d-flex justify-content-between bg-secondary">
    <div class="align-self-center ps-4">
      <button class="btn" type="button">
        &nbsp;&nbsp;&nbsp;
      </button>
    </div>
    <div class="">
      <a class="navbar-brand" href="#">
        <img src="/images/thizQuizLogo/thizquiz-high-resolution-logo-color-on-transparent-background-no-container-kopie.png" height="60">
      </a>
    </div>
    <div class="align-self-center pe-4">
      <form class="">
        <button class="btn btn-primary" type="button">
          Next
        </button>
      </form>
    </div>
  </nav>
</body>
</html>