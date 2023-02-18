<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Setlist extends CI_Controller {

	public $song_table = 'songs';
	public $member_table = 'members';
	public $order_by_desc = 'desc';
	public $order_key = 'created';

	public $artist_table = 'artist';
	public $singer_table = 'singers';
	public $admin_table = 'admin';
	public $setlist_table = 'setlists';

	public function __construct()
    {
        parent::__construct();

         if (!$this->session->userdata('member_id')) {
            redirect('login');
        }
    }
	public function index()
	{
		$data['singers'] = $this->GetModel->get($this->singer_table,$this->order_by_desc,$this->order_key);
		$where = 'member_id ='.$this->session->userdata('member_id');
		$data['admin_access'] = $this->CountModel->count1($this->admin_table,$where);


		$data['singers'] = $this->GetModel->get3($this->member_table,$this->order_by_desc,$this->order_key); 
		
		$this->load->view('admin/index',$data);
	}


	function add(){


		$where = array('g_id' => $this->input->post('gig_id'));		
		$item = $this->CountModel->count1($this->setlist_table,$where);

		if ($item == 1) {

		$data = array(
			
			'setlist' => $this->input->post('setlist'));
			
		$update = $this->UpdateModel->update1($where,$data,$this->setlist_table);

		$params = array('cond' => $update, 'message' => 'Successfully updated');
		$this->load->library('Condition', $params);




			# code...
		}else {


			$info = array(
			'g_id' => $this->input->post('gig_id'),
			'setlist' => $this->input->post('setlist'),
			'created' =>  date('Y-m-d H:i:s', time()));

		$result  = $this->AddModel->add($this->setlist_table,$info);

		$params = array('cond' => $result, 'message' => 'Successfully Added');
		$this->load->library('Condition', $params);

		}


		
		

	}

function get_setlist(){

		$where = array('g_id' => $this->input->post('id'));


		$item = $this->GetModel->get_data_selected($this->setlist_table,$where);

		echo json_encode($item);
}

}
