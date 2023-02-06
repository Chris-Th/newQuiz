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
<body class="justify-content-center bg-dark"> 
  <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top sticky-top bg-opacity-75 justify-content-center">
    <ul class="nav justify-content-center">
    <li class="nav-item">
      <a class="navbar-brand" href="#"><img src="images/thizQuizLogo/thizquiz-high-resolution-logo-color-on-transparent-background-no-container-kopie.png" height="60">  </a>
    </li>
  </ul>
  </nav> 
  <div class="container-fluid mainContainer">
    <div class="row d-flex align-items-center bg-warning rounded-2 min-vh-100 m-1">
      <div class="col-2"></div>
      <div class="col-8 bg-warning">
        <div class="question p-2">
          <form id="quiz-form" action="question.php" method="post"    onsubmit="return navigate('next');">
            <!-- Themenwahl -->
             <label for="quiz-topic" class="form-label">Quiz Thema - bitte auswählen!</label>
              <select style="width:300px" class="form-select" aria-label="Default select example" id="topic" name="topic">
                <option value="animals">Animals</option>  
                <option value="ch-norris">Chuck Norris</option>
                <option value="movies">Movies</option>
                <option value="d-n-d">Dungeons-n-Dragons</option>
              <option value="astronautics">Astronautics</option>
              <!--    <option value="movies">Technology</option>-->
                <!--<option value="movies">Artificial Intelligence</option>-->
                <option value="geography">Geography</option>
                <!--<option value="sports">Sports</option>-->
                <option value="science">Science</option>
                <option value="informatics">Informatics</option>
                <!--<option value="">General Knowledge</option>-->

                </select>

								 <!-- Anzahl Fragen -->
								 <label style="margin-top:20px;" for="questionNum" class="form-label">Number of Questions</label>
            			<input style="width:100px" type="number" class="form-control" 
                   id="questionNum" name="questionNum" 
                   min="5" max="40" value="10">

            <!-- 
                input type="hidden"
                    lastQuestionIndex: mit PHP gesetzt
                    indexStep: mit JavaScript setIntValue(fieldId, value) verändert
            -->
            <input type="hidden" id="lastQuestionIndex" name="lastQuestionIndex" value="-1">
            <input type="hidden" id="indexStep" name="indexStep" value="1">

            <!-- Validierungswarnung -->
            <p id="validation-warning" class="warning"></p>

            <!-- submit -->
            <input style="margin-top:20px;" type="submit" value="Start" class="btn btn-secondary">
        </form> 

            
        </div>
      </div>
    </div>
  </div>
  

  
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark fixed-bottom sticky-bottom bg-opacity-75 d-flex justify-content-between bg-secondary">
      <div class="align-self-center p-1">
        <button class="btn" type="button">
          &nbsp;&nbsp;&nbsp;
        </button>
      </div>
    <div class="p-1">
      <a class="navbar-brand" href="#">
        <img src="/images/thizQuizLogo/thizquiz-high-resolution-logo-color-on-transparent-background-no-container-kopie.png" height="60">  
      </a>
    </div>
    <div class="align-self-center p-2">
      <form class="">
          <button class="btn btn-primary" type="button">Next</button>
      </form>
      </div>

    </nav>
   
</body>
        
 
 

        
       
        
        
       