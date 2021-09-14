<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
redirect('Welcome/home');

	}
	
	public function home()
	{
		$this->load->view('landing/header');
		$this->load->view('landing/index');
		$this->load->view('landing/footer');

	}
	public function about_us()
	{
		$this->load->view('landing/header');
		$this->load->view('landing/about_us');
		$this->load->view('landing/footer');
	}
	public function how_it_work()
	{
		$this->load->view('landing/header');
		$this->load->view('landing/how_it_work');
		$this->load->view('landing/footer');
	}
	public function faq()
	{
		$this->load->view('landing/header');
		$this->load->view('landing/faq');
		$this->load->view('landing/footer');
	}

	public function contact_us()
	{
		$this->load->view('landing/header');
		$this->load->view('landing/contact_us');
		$this->load->view('landing/footer');
	}
	public function sendmail(){
  $this->load->library('email');
if(isset($_POST['submit'])){
  $sub="Contact Us Form";
  $message=$_POST['message'];
  $fname=$_POST['fname'];
  $lname=$_POST['lname'];
  $phone=$_POST['phone'];
  $email=$_POST['email'];
    $option=$_POST['option1'];
  $m="Name: ".$fname." ".$lname." <br> Email: ".$email." <br> Phone: ".$phone." <br> message: ".$message." <br> Option: ".$option;
// echo $m;
$from="";
$to="info@customercheck.co.za";

$this->email->from('webmaster@customercheck.co.za');
$this->email->to($to);
$this->email->subject($sub);
$this->email->message($m);

if($this->email->send()){
     
}
} 
		$this->load->view('landing/header');
		$this->load->view('landing/thankyou');
		$this->load->view('landing/footer');
}

}
