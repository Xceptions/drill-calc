<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0' />
    <link rel='stylesheet' href='../css/application.css'>
    <link rel='stylesheet' href='../css/bootstrap/css/bootstrap.min.css'/>
	<title>drillcalc hoistingSystem</title>
	<script type="text/javascript" src='../javascript/jquery.min.js'></script>
    <script type= 'text/javascript' src='../css/bootstrap/js/bootstrap.min.js'></script>
</head>
<body>
  <div class="container-fluid">
      <?php
          include('header.php');
          include('../../server/hoistingSystem.class.php');
      ?>
      <form role='form' class='form-inline' action='' method="post">
          <fieldset>
                <legend>YOUR HOISTING SYSTEM CALCULATIONS</legend>
                <div class="form-group">
                    <label for="text">weight of drillstring (lbs)</label>
                    <input type="text" class="form-control" id="text" name='drillStringWeight'>
               </div><br><br>
               <div class="form-group">
                    <label for="text">num of line btw crown and traveling block</label>
                    <input type="text" class="form-control" id="text" name='numOfLines'>
               </div><br><br>
               <div class='form-group'>
               <h3>calculations</h3>
                    <input type='checkbox' class="form-control" name='fastlineTension'> Tension in the fast-line (lbs)
               </div><br>
               <input type="text" class="form-control" id="text" name='fastlineTensionAnswer' value='<?php $hoistingcalc->getFastLineTensionAnswer()?>' ><br><br>
               <div class='form-group'>
                    <input type='checkbox' class="form-control" name='deadlineTension'> Tension in the dead-line (lbs)
               </div><br>
               <input type="text" class="form-control" id="text" name='deadlineTensionAnswer' value='<?php $hoistingcalc->getDeadLineTensionAnswer()?>'><br><br>
               <div class='form-group'>
                    <input type='checkbox' class="form-control" name='verticalLoad'> Vertical load when pulling the string (lbs)
               </div><br>
               <input type="text" class="form-control" id="text" name='verticalLoadAnswer' value='<?php $hoistingcalc->getVerticalLoadAnswer()?>'><br><br>

               <button type="submit" class="btn btn-warning" name='calculate'>calculate</button><br><br>

          </fieldset>
      </form>
  </div>
</body>
</html>