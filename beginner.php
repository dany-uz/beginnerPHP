<?php

    /* 
        Sintaxis:
        - Tanto para iniciar, como para llamar un variable, debemos usar el "$".
        - Siempre que terminamos una ejecución debemos colocar el ";".
        - La estructura cumple un flujo principal que es de arriba hacia abajo,
            por lo que no podemos mostrar algo que no hemos declarado con
            anterioridad. Si se hace, mostrará un error.
    */

    // Parte 1 - Maneras de imprimir/mostrar
        echo ("<h2>Print y Echo</h2>");

        /* Con este método solo podremos imprimir 1 mensaje. */
            print ("Hello World! 1 <br>"); 

        /* Con este método podremos imprimir mas de 1 mensaje. */
            echo    ("Hello World! 2 <br>"), 
                    ("Hello World! 3 <br>");

            echo("<br>"); // Salto de línea.



    // Parte 2 - Variables y cómo mostrarlas
        echo ("<h2>Tipo de Datos</h2>");

        /* Acá tenemos el sistema básico de Tipos de Datos. */
            $numerico = 6;
            echo ("Numb = $numerico <br>");

            $cadena = "palabra";
            echo ("String = $cadena <br>");

            $boleano = true; // True o False
            echo ("Boolean = $boleano <br>");

            $arreglo = array("Rojo", "Verde", "Azul");
                            // 0       1       2
            echo ("Array = $arreglo[0] <br>");
                        //^^^^^^^^^^^
                        // Esto debe ir junto
                        // sino presentará un
                        // error.

            $arregloConPropiedades = array("Ej1"=>"Ejemplo 1", "Ej2"=>"Ejemplo 2");
            echo ("ArrayProperties = $arregloConPropiedades[Ej1] <br>");
                                    //^^^^^^^^^^^^^^^^^^^^^^^^^
                                    // Esto debe ir junto
                                    // sino presentará un
                                    // error.

            $objeto = (object)["Ej1"=>"Ejemplo 1", "Ej2"=>"Ejemplo 2", "Etc"=>"Etc"];
            echo ("Object = $objeto->Ej1 <br>");
                          //^^^^^^^^^^^
                          // Esto debe ir junto
                          // sino presentará un
                          // error.
            echo("<br>");


    // Parte 3 - var_dump($variable)
        echo ("<h2>Var_dump</h2>");

        /* 
            Esta función nos permite obtener información sobre una variable.
        */

        var_dump($numerico);
        echo("<br>");
        var_dump($cadena);
        echo("<br>");
        var_dump($boleano);
        echo("<br>");
        var_dump($arreglo);
        echo("<br>");
        var_dump($arregloConPropiedades);
        echo("<br>");
        var_dump($objeto);
        echo("<br>");

        echo("<br>");



    // Parte 4 - Funciones
        echo ("<h2>Funciones</h2>");

        function funcionSinParametros(){
            echo ("Prueba de función <br>");
        }
        funcionSinParametros();

                                /*
                                    Dentro de los paréntesis
                                    es donde irán los parámetros
                                    que necesitemos.
                                */
        function funcionConParametros($parametro){
            echo ("$parametro");
        }
        funcionConParametros("Función con parametros <br>");

        function funcionConRetorno($retornar){
            return $retornar;
        }
        echo funcionConRetorno("Retornar <br>"); // Esto es lo que va a retornar

        echo("<br>");



    // Parte 5 - Condicionales y Ciclos
        
        echo ("<h2>If, Else If y Else</h2>");

        $a = 5;
        $b = 10;

        // Si ocurre esto, haz:
            if ($a > $b) {
                echo ("A es mayor que B <br>");
            }
        // Sino, si ocurre esto, haz:
            else if($a == $b) {
                echo ("A es igual que B <br>");
            }
        // Sino, si no ocurre ninguna, haz:
            else {
                echo ("A es menor que B <br>");
            }
            echo("<br>");

        /* 
            Ésta es la estructura de "Switch"
            la cual en su mayoría es similar
            al "Caso".
            Si la variable cumple X valor
            hará una tarea específica
        */
        echo ("<h2>Switch</h2>");

            $prueba = "P1"; 

            switch($prueba) {

                case 'P1': echo "Se cumple P1 <br>";
                break; // El "break" finaliza una ejecución

                case 'P2': echo "Se cumple P2 <br>";
                break;

                default: echo "No se cumple ninguna <br>";
            }
            echo("<br>");
            echo("<br>");


        // WHILE y DO WHILE
        
        echo ("<h2>While</h2>");

            $n = 0;

            // Mientras la variable cumpla una condición
                while ($n <= 5) {
                    // Ejecturá una tarea específica
                    echo $n;
                    $n++; // Incremetara N + 1
                }
            echo("<br>");
            echo("<br>");

        echo ("<h2>Do While</h2>");
        

            $p = 0;

            // Esta tarea se ejecutará N veces
                do {
                    echo $p;
                    $p++;
                }
            // Hasta que se cumpla esta condición
                while ($p <= 5);

            echo("<br>");
            echo("<br>");

        echo ("<h2>For</h2>");
        

            // Para i desde 0 hasta <= 5 y con incremento
            for ($i = 0; $i <= 5; $i++) {
                // Hará lo siguiente
                echo $i;
            }

            echo("<br>");
            echo("<br>");


        
    // Parte 6 - Código Imperativo vs Código POO (Programación Orientada a Objetos)

        /* 
            Código Imperativo
            Es cuando declaramos variables, luego las funciones y unas condiciones.
        */
            echo ("<h2>Código Imperativo</h2>");

            $ejemplo1 = (object)["C1" => "Característica A", "C2" => "Característica B"];
            $ejemplo2 = (object)["C1" => "Característica C", "C2" => "Característica D"];

            function mostrar($ejemplo) { // ↓ Acá llamamos a la variable
                echo ("<p>Acá muestro la $ejemplo->C1 y $ejemplo->C2</p>");
            }

            mostrar($ejemplo1);
            mostrar($ejemplo2);


            echo("<br>");

        /*
            Código POO (Programación Orientada a Objetos)
            Clase/Class : Comparten comportamiento, estado e identidad.
        */  

            echo ("<h2>Código POO</h2>");

            class Ejemplo {

                /* 
                    Propiedades: "Public" o "Private", si las designamos public
                                    significa que esta variable podrá funcionar
                                    en cualquier parte de la aplicación. Si la
                                    designamos como private, lo que utilicemos
                                    funcionará únicamente en esta clase.
                */
                public $C1;
                public $C2;

                /*
                    Método: Es la manera en como llamamos a las funciones de una
                            clase (En la POO)
                */
                public function mostrar() {
                                                 // Acá ya no llamamos a la variable sino
                                                 // a la propiedad "C1"
                                                 // ↓
                    echo ("<p>Acá muestro la $this->C1 y $this->C2</p>");
                                            // ↑
                                            // Acá heredamos el objeto
                                            // que necesitamos en esta
                                            // clase.
                }


                
            }
            
            /*
                Objeto: Entidad que nos provee métodos (funciones) o mensajes
                        a los cuales responde propiedades con valores concretos.
            */
            $ej1 = new Ejemplo(); // Creamos un objeto en la clase "Ejemplo"
            $ej1 -> C1 = "Característica A"; // Asignamos valor a C1
            $ej1 -> C2 = "Característica B"; // Asignamos valor a C2
            $ej1 -> mostrar(); // Ejecutamos el método "mostrar"

            $ej2 = new Ejemplo();
            $ej2 -> C1 = "Característica C";
            $ej2 -> C2 = "Característica D";
            $ej2 -> mostrar();

            echo("<br><br>")

    // Parte 7 - Patrón MVC (Model, View, Controller (Modelo, Vista, Controlador))
        // Esta parte es meramente teórica.
        /* 
            Es un diseño  en el que se desarrolla una aplicación
            por medio de una serie de filtros.

            Modelo: Se encarga de la lógica y conexión a base de datos.
            Cotrolador: Gestiona las peticiones del Usuario.
            Vista: Son los resultados que obtiene el usuario.

            El Usuario hace una petición la cual pasa por el primer filtro en
            el cual se hace una serie de Validaciones. Luego el controlador
            hace la Validación por medio del servidor, en el que si es válida,
            la pasará al modelo. El modelo es el que decide qué se hace con esa
            información. La respuesta que genera el Modelo se transfiere al
            Controlador el cual procesa esa respuesta a través de la Vista.
            De esta manera el Usuario recibe su respuesta sin saber qué sucede
            detrás de su petición.
        */
?>