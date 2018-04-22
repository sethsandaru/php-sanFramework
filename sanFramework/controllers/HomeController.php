<?php

/**
 * Class HomeController
 * @property User_model $user_model
 */
class HomeController extends Controller
{
	public function __construct()
	{
		parent::__construct();
		
		// load model
		//$this->load_model("User_model");
	}
	
    public function index()
    {
		//$all = $this->user_model->get_all();
        $all = ['test'];
        $this->view('test', ['item' => $all]);
    }

    public function item($id)
    {
        $this->view('test_data', ['id' => $id]);
    }
}