<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct(){
		parent::__construct();
		//Loading template engine
		$this->load->library('Template');
		
		//Choosing template
		$this->template->set_template('default');
		
		$this->data	=	array();
	}
	
	
	public function index(){
		
		//$this->template->add_css('path_to_file_from_root');
		//$this->template->add_js('path_to_file_from_root');
		
		
		//Passing date to view
		$this->data['pheader']	=	'Default Template Page';
				
		$this->template->write('title', 'Welcome User');
		
		$this->template->write_view('content', 'welcome', $this->data);
		$this->template->render(); //Final step to load content on template
	}
	
	
	public function admin(){
		
		//chenge the template
		$this->template->set_template('admin');
		
		
		
		//$this->template->add_css('path_to_file_from_root');
		//$this->template->add_js('path_to_file_from_root');
		
		
		//Passing date to view
		$this->data['pheader']	=	'Admin Template Page';
				
		$this->template->write('title', 'Welcome Admin');
		
		$this->template->write_view('content', 'welcome', $this->data);
		$this->template->render(); //Final step to load content on template
	}
}

/* End of file home.php */
/* Location: ./application/controllers/home.php */