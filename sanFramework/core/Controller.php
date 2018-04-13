<?php
namespace Core;

class Controller {
    public function __construct()
    {

    }


    public function view($name, $data = [])
    {
        foreach ($data as $key => $item)
            $$key = $item;
        include "./views/$name.php";
    }
	
	public function load_model($model_name, $var = '')
	{
		include_once "./models/$model_name.php";
		
		if ($var != '')
			$this->$var = new $model_name();
		else
		{
			$lower = strtolower($model_name);
			$this->$lower = new $model_name(); 
		}
	}
}