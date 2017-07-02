<?php
require_once('vendor/autoload.php');
use Stripe\Stripe;
use Stripe\Charge;
use Stripe\Customer;

defined('BASEPATH') OR exit('No direct script access allowed');

class Action extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('Sponsor_model');

    }

	public function take()
	{
		$data['nombre'] = " Take Action | Iniciativa Guatemala";
		$this->load->view('plantilla/header',$data);
		$this->load->view('action/take');
		$this->load->view('plantilla/footer');
	}

	public function sponsor()
	{
 		
        $info['nombre'] = " Sponsor a child| Iniciativa Guatemala";
        $tabs = $this->Sponsor_model->tabs();   // recupera los nombres de los tabs o pestanas 

            if(isset($tabs)){

                if ($tabs == FALSE) {

                    $data['vacio'] = 'No data to print';
                    $this->load->view('plantilla/header',$info);
					$this->load->view('action/sporsor',$data);
					$this->load->view('plantilla/footer');

                }else{

                    $data['tabs'] = $tabs;

                    $this->load->view('plantilla/header',$info);
					$this->load->view('action/sporsor',$data);
					$this->load->view('plantilla/footer');
                }
            }
	
	}

	public function stripe(){
        //Arr::show($_POST);
        try {
            Stripe::setApiKey('sk_test_UhDOTTpPmYMaTx0dJae5sHKF');

            extract($_POST);
             $charge = Customer::create(array(
                'card'     => $stripeToken,
                'email'   => $stripeEmail,
                'plan' => $plans,
                'description' => $id_pago
            ));

            echo "Exito..!"; 
            //Redirect::send('admin/patrocinadores/','success', 'Afiliación hecha con exito..!.');
        } catch (\Stripe\Error\Card $e) {
            $error = $e->getMessage();
            echo $error;
        }
        //Guard
	}
	 
	public function ver(){
		$id = $this->uri->segment(4);
		$ver = $this->Sponsor_model->ver($id);
		$this->load->view('action/ver',$ver);
	}

	

	public function support()
	{
		$data['nombre'] = " Family support | Iniciativa Guatemala";
		$this->load->view('plantilla/header',$data);
		$this->load->view('action/support');
		$this->load->view('plantilla/footer');
	}

}