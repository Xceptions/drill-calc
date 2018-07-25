<?php
   class hoistingSystem{
   	  private $drillStringWeight;
   	  private $numOfLines;
   	  private $efficiency;
   	  private $fastLineTensionAnswer;
   	  private $deadLineTensionAnswer;
   	  private $verticalLoadAnswer;

   	  public function calculateRequest(){
   	  	if (isset($_POST['calculate'])){
   	  	   return true;
   	  	}
   	  	else{
   	  	   return false;
   	  	}
   	  }

   	  public function receiveParameters($drillStringWeight, $numOfLines){
   	  	$this->drillStringWeight = $drillStringWeight;
   	  	$this->numOfLines        = $numOfLines;
   	  	switch($_POST['numOfLines']){
   	  		case 6:
   	  		    $this->efficiency = 0.874;
   	  		    break;
   	  		case 8:
   	  		    $this->efficiency = 0.842;
   	  		    break;
   	  		case 10:
   	  		    $this->efficiency = 0.811;
   	  		    break;
   	  		case 12:
   	  		    $this->efficiency = 0.782;
   	  		    break;
   	  		case 14:
   	  		    $this->efficiency = 0.755;
   	  		    break;
   	  		default:
   	  		    $this->efficiency = 1;
   	  	}
   	  }


   	  public function calculateFastLineTensionAnswer(){
   	  	if(isset($_POST['fastlineTension'])){
   	  		$this->fastLineTensionAnswer = ($this->drillStringWeight) / ( ($this->numOfLines) * ($this->efficiency));
   	  	}
   	  	else{
   	  		$this->fastLineTensionAnswer = '';
   	  	}
   	  }

   	  public function getFastLineTensionAnswer(){
   	  	echo $this->fastLineTensionAnswer;
   	  }


   	  public function calculatedeadLineTensionAnswer(){
   	  	if(isset($_POST['deadlineTension'])){
   	  		$this->deadLineTensionAnswer = ($this->drillStringWeight) / ($this->numOfLines);
   	  	}
   	  	else{
   	  		$this->deadLineTensionAnswer = '';
   	  	}
   	  }

   	  public function getDeadLineTensionAnswer(){
   	  	echo $this->deadLineTensionAnswer;
   	  }


   	  public function calculateVerticalLoadAnswer(){
   	  	if(isset($_POST['verticalLoad'])){
   	  		$this->verticalLoadAnswer = ($this->drillStringWeight) + ($this->fastLineTensionAnswer) + ($this->deadLineTensionAnswer);
   	  	}
   	  	else{
   	  		$this->verticalLoadAnswer = '';
   	  	}
   	  }

   	  public function getVerticalLoadAnswer(){
   	  	echo $this->verticalLoadAnswer;
   	  }
   }


$hoistingcalc = new hoistingSystem();
if ($hoistingcalc->calculateRequest()){
    $hoistingcalc->receiveParameters($_POST['drillStringWeight'] , $_POST['numOfLines']);
    $hoistingcalc->calculateFastLineTensionAnswer();
    $hoistingcalc->calculatedeadLineTensionAnswer();
    $hoistingcalc->calculateVerticalLoadAnswer();
}
?>