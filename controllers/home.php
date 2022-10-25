<?php
 require_once 'models/persona.php';
 class Home extends Controller{

    function __construct(){
        parent::__construct();
    }
     
    //funcion que retorna la vista home
    function render(){
        try {
            $this->view->render('home/index');
        } catch (Exception $e) {
            echo 'Excepción capturada: ',  $e->getMessage(), "\n";
        }
      
    }
 
    
    //funcion que retorna un json con los datos
    function listarData(){
        header("Content-type: application/json;");
        try {
            //se crea un array de objetos 
            $data = array(
                new Persona(1,12343,"juan",date("2022-05-20 10:15:30")),
                new Persona(2,12344,"pedro",date("2021-10-29 15:30:30")),
                new Persona(3,12345,"maria",date("2022-05-21 08:10:50")),
                new Persona(4,12346,"jose",date("2022-04-10 11:25:34"))
            );
            //se retorna una Notación de Objetos de JavaScript con el array de objetos
            echo json_encode(["data" => $data]);
        } catch (Exception $e) {
             //se retorna una Notación de Objetos de JavaScript con el error ocurrido
            echo json_encode(["message" => $e->getMessage()]);
        }

    }
 }
 
 ?>