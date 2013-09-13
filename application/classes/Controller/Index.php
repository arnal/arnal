<?php

class Controller_Index extends Controller {
	
  public function action_index()
  {
    return $this->response->body('Welcome!');
  }
}
