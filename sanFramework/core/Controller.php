<?php

class Controller {
    public function __construct()
    {

    }

    /**
     * Load a view
     * @param $name
     * @param array $data
     */
    public function view($name, $data = [])
    {
        foreach ($data as $key => $item)
            $$key = $item;
        include "./views/$name.php";
    }

    /**
     * Load a model
     * @param $model_name
     * @param string $var
     */
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