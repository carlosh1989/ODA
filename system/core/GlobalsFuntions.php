<?php
function Send($url,$type, $message)
{
	\System\tools\rounting\Redirect::sendController($url,$type,$message);
}

function Success($url,$message)
{
	\System\tools\rounting\Redirect::sendController($url,'success',$message);
}

function Error($url,$message)
{
	\System\tools\rounting\Redirect::sendController($url,'error',$message);
}

function Info($url,$message)
{
	\System\tools\rounting\Redirect::sendController($url,'info',$message);
}

function Arr($data)
{
	\System\tools\render\Arr::show($data);
}

function redirect($url)
{
	Redirect::to($url);
}

function Role($role)
{
	\System\tools\security\Permission::withRole($role);
}

function View($data=Null)
{
	\System\template\View::view($data);
}

function Repo($data=Null)
{
	$modulo = URI_MODULO;  
	$controlador = ucfirst(URI_CONTROLADOR);  
	$cargarClase =  '\App\\'.$modulo.'\\repositories\\'.$controlador.'Repository';
	//llamamos a la clase
	$repository = new $cargarClase();
	$funcion = debug_backtrace()[1]['function'];
	return $repository->$funcion($data);
}

function RepoConfirm($data,$urlSuccess,$urlError)
{
	$modulo = URI_MODULO;  
	$controlador = ucfirst(URI_CONTROLADOR);  
	$cargarClase =  '\App\\'.$modulo.'\\repositories\\'.$controlador.'Repository';
	//llamamos a la clase
	$repository = new $cargarClase();
	$funcion = debug_backtrace()[1]['function'];

     $ingreso = $repository->$funcion($data);

    //la variable $ingreso debe devolver true o en su caso un mensaje diciendo el error resultante
    if (is_numeric($ingreso)) 
    {
        Success($urlSuccess.'/'.$ingreso, 'Exito..!');
    } 
    else 
    {
        Error($urlError, $ingreso);
    }
}

function Uri($num)
{
	return \System\tools\url\Url::uri($num);
}

function variable_name( &$var, $scope=false, $prefix='UNIQUE', $suffix='VARIABLE' ){
    if($scope) {
        $vals = $scope;
    } else {
        $vals = $GLOBALS;
    }
    $old = $var;
    $var = $new = $prefix.rand().$suffix;
    $vname = FALSE;
    foreach($vals as $key => $val) {
        if($val === $new) $vname = $key;
    }
    $var = $old;
    return $vname;
}

new Eloquent();