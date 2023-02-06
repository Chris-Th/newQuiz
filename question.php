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
    
    <link href="styles/style.css" rel="stylesheet">

    <script src="scripts/script.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://kit.fontawesome.com/a26c0b57c5.js" crossorigin="anonymous"></script>

</head>
<body class="justify-content-center"> 


<?php
        // Bestimme die Anzahl der verfügbaren Fragen
        if (isset($quiz["questionIdSequence"])) {
            $questionCount = count($quiz["questionIdSequence"]);
            $id = $quiz["questionIdSequence"][$currentQuestionIndex];
        } 
        else {
            $questionCount = 0;
        }

        // Hole alle Datenfelder zur Frage mit $id von der Datenbank
        $question = fetchQuestionById($id, $dbConnection);
    ?>


  <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top sticky-top bg-opacity-75 justify-content-center">
    <ul class="nav justify-content-center">
    <li class="nav-item">
      <a class="navbar-brand" href="#"><img src="/images/thizQuizLogo/thizquiz-high-resolution-logo-color-on-transparent-background-no-container-kopie.png" height="60">  </a>
    </li>
  </ul>
  </nav> 
  <div class="container-fluid">
    
    <!--<div class="row justify-content-center  topBottomRow">
      <div class="col- topCol"></div// Generiere Antwort-Radio-Buttons mit Beschriftung

                    // Single Choice: Hole den Namen der richtigen Antwortspalte in $correct, aus $question["correct"]>
    </div>-->
    
    <div class="row d-flex align-items-center bg-warning rounded-2 min-vh-100 m-1">
      <div class="col-2"></div>
      <div class="col-8 bg-warning">
    <!--<div class="container-sm m-2 bg-warning min-vh-100 rounded-2">-->
        <div class="question p-2" style="color: white">
          <div class="py-2 h5"><h7>Frage <?php echo ($currentQuestionIndex + 1); ?> von <?php echo $quiz["questionNum"]; ?></h7></div>

          <h3><?php echo $question["question_text"]; ?></h3>

            <form id="quiz-form" action="<?php echo $actionUrl;?>" method="post" onsubmit="return navigate('next');">
                <?php 
                    
                    $correct = $question["correct"];

                    for ($a = 1; $a <= 5; $a++) {
                      http://localhost:8000/index.php
                        $answerColumnName = "answer-" . $a;

       
                        if (isset($question[$answerColumnName]) && $question[$answerColumnName] !== '') {
                            // ... hole den Antworttext aus $question.
                            $answerText = $question[$answerColumnName];

                         
                            // richtig -> 1 Punkt, falsch -> 0 Punkte
                            if ($correct === $answerColumnName) $value = 1;
                            else $value = 0;

                           /* echo "<div class='form-check'>
                                    <input class='form-check-input' type='radio' name='single-choice' id='$answerColumnName' value='$value'>
                                    <label class='form-check-label' for='single-choice-0'>$answerText</label>
                                  </div>"; */

                            echo "<div class='form-check'>
                                    
                                    <input class='form-check-input' type='radio' name='single-choice' id='$answerColumnName' value='$value'>$answerText
                                    <label class='form-check-label' for='single-choice-0'></label>
                                  </div>";    
                        }
                    }
                ?>

                <input type="hidden" id="questionNum" value="<?php echo $quiz["questionNum"]; ?>">
                <input type="hidden" id="lastQuestionIndex" name="lastQuestionIndex" value="<?php echo $currentQuestionIndex; ?> ">
                <input type="hidden" id="indexStep" name="indexStep" value="1">

                <!-- Validierungswarnung -->
                <p id="validation-warning" class="warning"></p>


                      <!-- submit -->
                <!-- button type="submit" class="btn btn-primary" onclick="navigatePrevious();">Previous</button -->
                <button type="submit" class="btn btn-primary">Next</button>
                <p class="spacer"></p>
            </form>
        </div>
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

        
       
        
        
       