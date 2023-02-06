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
      <a class="navbar-brand" href="#"><img src="/images/thizQuizLogo/thizquiz-high-resolution-logo-color-on-transparent-background-no-container-kopie.png" height="60">  </a>
    </li>
  </ul>
  </nav> 
  <div class="container-fluid">
    
          <!--<div class="row justify-content-center  topBottomRow">
            <div class="col- topCol"></div>
          </div>-->
    
    <div class="row d-flex align-items-center bg-warning rounded-2 min-vh-100 m-1">
      <div class="col-2"></div>
      <div class="col-8 bg-warning">
            <!--<div class="container-sm m-2 bg-warning min-vh-100 rounded-2">-->
        
        <div class="p-2 h5 mb-0">
          <b>Please choose your topic:</b>
        </div> 
        
       
      
        <div class="p-2 h5 mb-0">
        </div> 
        
                <!-- topic dropdown -->  
        <form id="quiz-form" action="question.php" method="post" onsubmit="return navigate('next');">
          <div class="dropdown dropend p-1 pt-0">
            <span style="line-height: 12px; text-align: center" class="btnOffDot">
              ⦁
            </span>
            <button class="btn btn-dark mx-3 pt-0 rounded-pill" type="button" data-bs-toggle="dropdown">
              <p style="line-height: 12px; text-align: center;">
                ↑
              </p>
            </button>
            <span style="line-height: 12px; text-align: center">
              <span class="btnOnDot">
                ⦁
              </span>
                &nbsp;&nbsp;&nbsp;&nbsp;Turn button pls!
            </span>
          
            <ul class="dropdown-menu dropdown-menu-end ms-2">
              <li class="dropdown-item" value="animals">
                    Animals
              </li>
              <li class="dropdown-item" value="geography">
                    geography
              </li>
            </ul> 
          </div>
          <input type="hidden" id="lastQuestionIndex" name="lastQuestionIndex" value="-1">
            <input type="hidden" id="indexStep" name="indexStep" value="1">

            <!-- Validierungswarnung -->
            <p id="validation-warning" class="warning"></p>
          <input style="margin-top:20px;" type="submit" value="Start" class="btn btn-secondary">
        </form>   
      </div>
    </div>
  </div>
  
  <!--
  <div class="row justify-content-center topBottomRow">
    <div class="col- topBottomCol"></div>
  </div>
  -->
  
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark fixed-bottom sticky-bottom bg-opacity-75 d-flex justify-content-between bg-secondary">
   <!-- <div class="navbar navbar-expand-sm navbar-dark bg-dark fixed-bottom sticky-bottom bg-opacity-75 d-flex justify-content-between bg-secondary mb-3">-->
    <div class="align-self-center p-1">
      <button class="btn" type="button">
        &nbsp;&nbsp;&nbsp;
      </button>
    </div>
    <div class="p-1"><a class="navbar-brand" href="#"><img src="/images/thizQuizLogo/thizquiz-high-resolution-logo-color-on-transparent-background-no-container-kopie.png" height="60">  </a></div>
    <div class="align-self-center p-2"><form class="">
          <button class="btn btn-primary" type="button">Next</button>
        </form></div>
 <!-- </div>-->
      </nav>
   
</body>

        
       
        
        
       
