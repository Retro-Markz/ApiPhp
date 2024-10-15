<?php


$arrayRoutes = explode("/", $_SERVER['REQUEST_URI']); //detecta la URL base '/'





if(count(array_filter($arrayRoutes)) == 0  ){


        //si no se hace peticion a la APi:

    $json = array(

        "detalle" => "no encontrado"
    
        );
    
    echo json_encode($json,true);

    return;
    
}else{

        //al pasar un registro en la URL mostrar:

    if(count(array_filter($arrayRoutes)) == 1){

        //peticiones desde la ruta 'cursos'


        if(array_filter($arrayRoutes)[1] == "cursos"){

            if(isset($_SERVER['REQUEST_METHOD']) && ($_SERVER['REQUEST_METHOD']) == "POST"){


                $cursos = new cursosController();
                $cursos ->create();

            }
            else if(isset($_SERVER['REQUEST_METHOD']) && ($_SERVER['REQUEST_METHOD']) == "GET"){
                $cursos = new cursosController();
                $cursos ->index();
            }
        

        }

        //peticiones desde la ruta 'cursos'

        if(array_filter($arrayRoutes)[1] == "clientes"){

            if(isset($_SERVER['REQUEST_METHOD']) && ($_SERVER['REQUEST_METHOD']) == "GET"){

                    $clientes = new clientesController();
                    $clientes ->create();

            }
          
        }
    
    }

    else{

        if(array_filter($arrayRoutes)[1] == "cursos" && is_numeric(array_filter($arrayRoutes)[2])){

            //peticion GET  

            if(isset($_SERVER['REQUEST_METHOD']) && ($_SERVER['REQUEST_METHOD']) == "GET"){

                $curso = new cursosController();
                $curso ->show(array_filter($arrayRoutes)[2]);

            };

            //peticiones PUT

            if(isset($_SERVER['REQUEST_METHOD']) && ($_SERVER['REQUEST_METHOD']) == "PUT"){

                $editarCurso = new cursosController();
                $editarCurso ->update(array_filter($arrayRoutes)[2]);

            };

             //peticiones DELETE

             if(isset($_SERVER['REQUEST_METHOD']) && ($_SERVER['REQUEST_METHOD']) == "DELETE"){

                $borrarCurso = new cursosController();
                $borrarCurso ->delete(array_filter($arrayRoutes)[2]);

            };

        };

    }

};
 
?>