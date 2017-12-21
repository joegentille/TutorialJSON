<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>
<h1>Tutorial JSON</h1>
<div id="contenedor">

</div>
<?php

    $varios = '{
        "nombre":"Joe Yanez",
        "id":313,
        "profesor":true,
        "idCursos":[53,769,453,145],
        "cursos":{
            "marketing":"Mi primera aplicacion para iPhone",
            "programacion":[
                "Objective-C",
                "Xcode",
                "Json"
            ]
        },
        "vacaciones":null        
    }';

	print_r(json_decode($varios,true));

?>

</body>
</html>