<?php

class View {

    private $tpl = ' ';

  public function setTemplete(string $filename)
  {
      if(empty($filename)){
        trigger_error('<b>View error:</b> No template the filE given', E_USER_ERROR);
      }
          $this->tpl = $filename;
  }

  public function display()
  {

    if(!file_exist($this->tpl)){
         trigger_error('<b> View error : </b> File ' . $this->tpl. 'does not exist .
         cannot bind the template ', E_USER_ERROR);
    }

  }
  public function addVar($name, $value)
  {
    
  }

}