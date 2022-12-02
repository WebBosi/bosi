<?php

// se verifica si existe la cookie si no se crea y se le da un valor, si sí solo se va sumando las veces que quiere que se vea
if (!isset($_COOKIE["cookie_count_init"]) || @$_COOKIE["cookie_count_init"] < 2) {
   
    $n=@$_COOKIE["cookie_count_init"]+1;
    setcookie("cookie_count_init", $n, time() + (86400 * 30), "/");
    echo TRUE;
}else{
    echo FALSE;
}

?>