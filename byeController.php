<?php

class byeController{   
    public function bye(){
        $timeModel = new modeloTime();
        $currentTime = $timeModel -> getCurrentTime(); 
        $view = new genericView();
        $view -> genericView("Hola", $currentTime);
    }
}
?>