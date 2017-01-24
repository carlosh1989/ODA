<?php
namespace App\partidas\controllers;

use App\partidas\models\PrincipalModel;
use Particle\Validator\Validator;
use Controller,View;

class Principal extends Controller
{
    
    function __construct()
    {
        # code....
    }

    public function index()
    {
		//$this->view('partidas/index');
        $data['titulo'] = 'Este es un titulo';
        $data['contenido'] = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis unde quam, possimus. Dolorum illum, ex non placeat esse nam enim autem quibusdam, adipisci, eius at quaerat, tenetur. Sapiente, aperiam. Vitae.';
        
        View::ver('partidas/index', $data);
    }

    public function dos()
    {
    	echo PrincipalModel::dos();
    }

    public function variables()
    {
    	echo getenv('ENV_DB_ADAPTER_PHINX');
    }

    public function validator()
    {
        $v = new Validator;

        $v->required('Nombre')->lengthBetween(2, 50)->alpha();
        $v->required('Apellido')->lengthBetween(2, 50)->alpha();
        $v->required('newsletter')->bool();

        $result = $v->validate([
            
            'Nombre' => 'John',
            'Apellido' => 'D',
            'newsletter' => true,
        ]);

        $result->isValid(); // bool(false).
        var_dump($result->getMessages()); 
        echo "<hr>";
        $krumo = new \Krumo;
        $krumo->dump($result->getMessages());
        echo "<hr>";
        $mensaje = $result->getMessages();

        foreach ($mensaje as $key => $value) {
            foreach ($value as $key => $value) {
                echo $value;
            }
        }
        echo "<hr>";

        if ($result->isValid() == True) {
            echo "VALIDADO";
        }
        else
        {
            echo "NO ESTA VALIDADO";
        }
    }

    public function validador()
    {   
        /*esta forma ocupa dos lineas
            $testModel = new PrincipalModel();
            $testModel->testModel();
        */

        /* esta forma solo ocupa una sola linea
        PrincipalModel::testModel();
        */

    }

    public function vali()
    {   
        echo PrincipalModel::testModel();
    }

    public function vali2()
    {
        echo PrincipalModel::testModel2();
    }
}
