<html>
<head>
	<title>Funció var_dump amb la funció gettype</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
</head>

<body>	
  <?php
  
    // El gettype($temporal) ens retorna el tipus de dada depenent quina sigui aquesta variable, $temporal.
  
    // En aquest cas, el gettype(Joan) ens retorna un string ja que Joan es un string.
    
    $temporal="Joan";
    $resultat=var_dump($temporal);
    echo $resultat;
    echo gettype($temporal)."<br/>";

    // En aquest cas, el gettype(false) ens retorna un boolean(booleà) ja que false es un boolean(booleà).

    $temporal=false;
    $resultat=var_dump($temporal);
    echo $resultat;
    echo gettype($temporal)."<br/>";
    
    // En aquest cas, el gettype(3) ens retorna un integer ja que 3 es un integer).

    $temporal=3;
    $resultat=var_dump($temporal);
    echo $resultat;
    echo gettype($temporal)."<br/>";
    
    // En aquest cas, el gettype(null) ens retorna NULL ja que null es una variable nula (NULL).

    $temporal=null;
    $resultat=var_dump($temporal);
    echo $resultat;
    echo gettype($temporal)."<br/>";

  ?>
  
</body>
</html>
