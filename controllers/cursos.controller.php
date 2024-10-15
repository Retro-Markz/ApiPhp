<?php


class cursosController{

    public function index(){

        $json = array(

            "detalle" => "estos son los Cursos"
        
            );
        
        echo json_encode($json,true);
    
        return;
     

    }


    public function create(){

        $json = array(

            "detalle" => "estas en la creacion de cursos"
        );

        echo json_encode($json,true);
    
        return;
    }

    public function show($id){

        $json = array(

            "detalle" => "este es el curso con ID ... ".$id
        );

        echo json_encode($json,true);
    
        return;

    }

    public function update($id){

        $json = array(

            "detalle" => "curso con el id ".$id." actualizado"
        );

        echo json_encode($json,true);
    
        return;
    }

    public function delete($id){
        $json = array(

            "detalle" => "curso con el id ".$id." eliminado"
        );

        echo json_encode($json,true);
    
        return;
    }

}

?>