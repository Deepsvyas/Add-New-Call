<?php
header('Access-Control-Allow-Origin: *');
defined('BASEPATH') OR exit('No direct script access allowed');

class Maincontroller extends CI_Controller {

	

	public function index()
	{
		$this->load->model('mainmodel');
		//echo "<pre>";print_r($_POST);echo "</pre>";
		if(isset($_POST['submit'])){
			$i=1;
			foreach ($_POST as $postarray) {
				//echo "<pre>";print_r($postarray);echo "</pre>";
				foreach ($postarray as $value) {
					//echo "<pre>";print_r($value);echo "</pre>";
					//echo json_encode(array_slice($value['answer'], 0, 5));
					$insertdata = array(
						'question'=>$value['question'],
						'answertype'=>$value['answertype'],
						'answer'=>($value['answertype']=='multichoice') ? json_encode(array_slice($value['answer'], 0, 5)) : $value['answer'][0],
						'subquestions'=> (array_key_exists('subquestionarray', $value['answer'])) ? json_encode($value['answer']['subquestionarray']) : '',
						'created'=>date('Y-m-d H:i:s')
					);
					$lastinserid = $this->mainmodel->insertdata($insertdata);
				}

			}
			$this->session->set_flashdata('flsh_msg', '<div class="alert alert-success">Questions has been added succefully</div>');
			//var_dump($this->session->flashdata('flsh_msg'));
			redirect('/');
		}else{
			$this->load->view('header');
			$this->load->view('index');
			$this->load->view('footer');
		}
	}

	public function viewallcalls(){
		$this->load->model('mainmodel');
		$data['allcalls'] = $this->mainmodel->getallrecrods();
		$this->load->view('header');
		$this->load->view('viewallquestions',$data);
		$this->load->view('footer');
	}

	public function deletecalls($id){
		$this->load->model('mainmodel');
		$this->mainmodel->deleteData($id);
		$this->session->set_flashdata('flsh_msg', '<div class="alert alert-danger">Record Deleted</div>');
		//var_dump($this->session->flashdata('flsh_msg'));
		redirect('/maincontroller/viewallcalls');
	}

	public function addnewquestion(){
		$data['no'] = $this->input->post('qcount');;
		$this->load->view('questions',$data);
	}

	public function answertype(){
		//print_r($_POST);
		$this->data['answertype']=$this->input->post('typeofanswer');
		$this->data['answertypeno']=$this->input->post('qcount');
		$this->load->view('answertype',$this->data);
	}

	public function addnewquestionsub(){
		$data['no'] = $this->input->post('qcount');
		$data['subquestionarray'] = $this->input->post('subquestionarray');
		$this->load->view('addnewquestionsub',$data);
	}

	public function answertypesub(){
		$data['answertype']=$this->input->post('typeofanswer');
		$data['subquestionarray']=$this->input->post('subquestionarray');
		$data['no'] = $this->input->post('no');
		$data['answertypeno'] = $this->input->post('answertypeno');
		$data['questionarray'] = $this->input->post('questionarray');
		//print_r($data);
		$this->load->view('answertypesub',$data);
	}
}
