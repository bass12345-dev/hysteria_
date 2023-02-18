<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gigs extends CI_Controller {


	public $gig_table = 'gigs';
	public $order_by_desc = 'desc';
	 public $order_key = 'created';
	 public $member_table = 'members';

	    public function __construct()
    {
        parent::__construct();

         if (!$this->session->userdata('member_id')) {
            redirect('login');
        }
    }

	
    public function add(){

    		$info = array(
			'location' => $this->input->post('location'),
			'event' => $this->input->post('event'),
			'date' => $this->input->post('date'),
			'time' => $this->input->post('time'),
			'created' =>  date('Y-m-d H:i:s', time()),
			'm_id' => $this->session->userdata('member_id')
			);

		$add  = $this->AddModel->add($this->gig_table,$info);


	$params = array('cond' => $add, 'message' => 'Successfully Added');
		$this->load->library('Condition', $params);


    }


    public function load_calendar_of_gigs(){


            $data = [];

        $gigs = $this->GetModel->get_with_join_gigs1($this->gig_table,$this->order_by_desc,$this->order_key); 




        foreach ($gigs as $row) {




            $data[] = array(

                        'title'=> $row['event'],
                        'start'=> date('Y-m', strtotime($row['date'])),
                        'description'=> 'gig at '. $row['location'],
                        'className'=> 'fc-event-danger fc-event-solid-warning'
                        
            );
        
        }

        echo json_encode($data);

    }


    public function get_gigs(){


		$data = [];

        $gigs = $this->GetModel->get_with_join_gigs1($this->gig_table,$this->order_by_desc,$this->order_key); 

        foreach ($gigs as $row) {




        	$data[] = array(

        				'gig_id' => $row['gig_id'],
        				'location' => $row['location'],
        				'event' => $row['event'],
        				'time' =>  date('h : i a', strtotime($row['time'])),
        				'date' => date('M d Y', strtotime($row['date'])),
        				'created' =>date('M d Y', strtotime($row['created'])).' '. date('h : i a', strtotime($row['created'])),
        				'name' => $row['full_name'],
                        // 'setlist' => $row['setlist']

        				
        	);
        
        }

        echo json_encode($data);



    }
}
