<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Codigofacilito extends CI_Controller {

function __construct(){
    parent::__construct();
    $this->load->helper('form');
    $this->load->model('codigofacilito_model');
}
function index(){
    $this->load->library('menu',array('Inicio2','3Inicio','Inicio'));
    $data['mi_menu'] = $this->menu->construirMenu();
    $this->load->view('headers');   
    $this->load->view('codigofacilito/bienvenido',$data);
}

function holaMundo(){ 
    $this->load->view('headers');   
    $this->load->view('codigofacilito/bienvenido');
   
}

}
?>