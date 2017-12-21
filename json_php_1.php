<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>

<h1>Tutorial</h1>
<div id="conentedor">

</div>

<?php

    $varios = array (
        "nombre" => "Joe Yanez",
        "id" => 313,
        "profesor" => true,
        "idCursos" => array(53,769,453,145),
        "cursos" => array (
            "marketing" => "Mi primera aplicacion para iPhone",
            "programacion" => array(
                "Objective-C",
                "Xcode",
                "Json"
            )
        ),
        "vacaciones" => null
    );

	echo json_encode($varios);

?>

</body>
</html>