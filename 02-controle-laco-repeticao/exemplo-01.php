<h1>Entre com nome e data de nascimento</h1>

<form action="">
    <input type="text" name="nome" id="">
    <input type="date" name="data" id="">
    <button type="submit">Entrar</button>
</form>


<?php

if (isset($_GET)){
    foreach ($_GET as $key => $value) {
        echo "Seus dados: " . $value; 
        echo "<br>";
    }
}

?>