<?php

class clientesController{

    public function create(){
        $json = array(

            "detalle" => "estos son los Registros de Clientes"
        
            );
        
        echo json_encode($json,true);
    
        return;
    }
}

?>