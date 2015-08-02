<?php

class select_who_controller extends FS_controller {

    public $data = array();

    public function __construct()
    {
        parent::__construct();
        $data = $this->data;

        if($data['user']['uid'] == '')
        {
            $url = base_url('user/login/?url=game/start_game');
            header('Location: '.$url);
        }

        $this->load->helper('form');
        $this->load->library('form_validation');
    }
    
	public function index(){
        $data = $this->data;

	    //global
		$data['global']['style'][] = 'temp/global';
	    $data['global']['style'][] = 'temp/header_bar';
	    $data['global']['style'][] = 'temp/footer_bar';
	    $data['global']['style'][] = 'game/select_who';
	        
	    $data['global']['js'][] = 'game/global';
	    $data['global']['js'][] = 'script_header_bar_mobile';
	    
	    //temp
		$data['temp']['header_up'] = $this->load->view('temp/header_up', $data, TRUE);
		$data['temp']['header_down'] = $this->load->view('temp/header_down', $data, TRUE);
		$data['temp']['header_bar'] = $this->load->view('temp/header_bar', $data, TRUE);
		$data['temp']['footer_bar'] = $this->load->view('temp/footer_bar', $data, TRUE);
			
		//輸出模板
		$this->load->view('game/select_who', $data);
	}
}

?>