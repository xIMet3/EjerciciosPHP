<?php

    // REALIZA UN CONTEO DE PALABRAS QUE ME DETERMINE CUANTAS LETRAS CONTIENE LA ORACION


    $oracion = "Quiere la boca exhausta vid, kiwi, piña y fugaz jamón. Fabio me exige, sin tapujos, 

    que añada cerveza al whisky. Jovencillo emponzoñado de whisky, ¡qué figurota exhibes! 
    
    La cigüeña tocaba cada vez mejor el saxofón y el búho pedía kiwi y queso. El jefe buscó el 
    
    éxtasis en un imprevisto baño de whisky y gozó como un duque. Exhíbanse politiquillos zafios, 
    
    con orejas kilométricas y uñas de gavilán. El cadáver de Wamba, rey godo de España, fue exhumado
    
     y trasladado en una caja de zinc que pesó un kilo. El pingüino Wenceslao hizo kilómetros bajo 
    
     exhaustiva lluvia y frío, añoraba a su querido cachorro. El veloz murciélago hindú comía feliz
    
      cardillo y kiwi. La cigüeña tocaba el saxofón detrás del palenque de paja. Quiere la boca
    
       exhausta vid, kiwi, piña y fugaz jamón. Fabio me exige, sin tapujos, que añada cerveza al
    
        whisky. Jovencillo emponzoñado de whisky, ¡qué figurita exhibes! La cigüeña tocaba cada 
    
        vez mejor el saxofón y el búho pedía kiwi y queso. El jefe buscó el éxtasis en un imprevisto 
    
         de whisky y gozó como un duque. Exhíbanse politiquillos zafios, 
    
    con orejas kilométricas y uñas de gavilán. El cadáver de Wamba, rey godo de España, fue";

    // Realiza el conteo de palabras
    $conteoPalabras = str_word_count($oracion);
    // Muestra el resultado
    echo "Número total de palabras en la oración: $conteoPalabras";

    // Calcula la cantidad total de letras
    $conteoLetras = strlen(preg_replace('/\s+/', '', $oracion));

    // Muestra el resultado
    echo "<br>Número total de letras en la oración: $conteoLetras";

    /*preg_replace('/\s+/', '', $oracion): Utiliza la función preg_replace para reemplazar todas 
    las secuencias de espacios en blanco (\s+) en la cadena de texto ($oracion) por una cadena 
    vacía (''). Esto es esencialmente eliminando todos los espacios en blanco de la cadena.*/

    /*strlen(...): Calcula la longitud de la cadena resultante después de haber eliminado los espacios
     en blanco con preg_replace. La función strlen devuelve el número total de caracteres en la cadena.*/

     ?>