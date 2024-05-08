<?php
    $texto = " cotil - unicamp ";

    //trim - Retira o espaço no início e final de um string
    echo "-" . trim($texto) . "-" . "<br>";

    //Retira o espaço em branco (ou outros caracteres) do início da string
    echo "-" . ltrim($texto) . "-" . "<br>";

    //rtrim - Retira espaços em branco (ou outros caracteres) do fim da string
    echo "-" . rtrim($texto) . "-" . "<br>";

    //quebra a string a cada 3 caracteres
    $str = str_split("$texto", 3);
    print_r($str);

    echo "<br>";

    //Encontra a posição da primeira ocorreência de uma string
    echo strpos($texto, "unicamp") . "<br>";

    $email = "cl202156@g.unicamp.br";

    //Retorna a String após o caracter informado "@"
    echo strchr($email, "@");

    //Retorna a String antes do caracter informado "@"
    echo strchr($email, "@", true) . "<br>";

    //Retorna uma parte de uma string
    echo substr("abcdef", 1) . "<br>"; //bcdef
    echo substr("abcdef", 1, 3) . "<br>"; //bcd

    echo str_replace("i", "X", $texto) . "<br>";

    //Castring
    $valor = "0"; // $valor é string (ASCII 48)
    $valor += 2; // $valor é agora um inteiro (@)
    $valor = $valor + 1.3; //$valor é agora um float (3.3)
    echo $valor . " - "; //conteúdo de $valor
    echo var_dump($valor); //tipo de $valor

    /*
        md5 - ghera uma cópai criptografada - mão única
        algortimo de um hash de 128 bits - 32 caracteres
        PROBLEMA: para a mesma string, sempre o MESMO resultado
        Fàcil achar na internet listas com resultados
        SOLUÇÃO: concatenar um salt
    */
    
    //Senhas
    $senha = "minhasenha";
    echo "<br> *** md5 ***<br>";
    $x = md5($senha);
    echo($x);
    echo "<br>";

    if(md5($senha) == $x){
        echo "Senha ok! <br><br>";
    }

    //com salt - Uma string de salt para base de encriptação
    $salt = "c0t1lUn1camp";
    $senha = $senha . $salt;
    echo "senha = " . $senha . "<br>";
    echo md5($senha);
    echo "<br>";

    /* crypt - gera uma cópia criptografada
        retornará uma string criptografada usando o algortimo  de encriptação Unix Standard DES-based ou 
        algortimos alternativos disponíveis no sistema.
    */
    echo "<br> *** crypt ***<br>";

    // o 2o parâmetro é o salt, que se não fornecido, será gerado randomicamente pleo pHP cada vez que chamar esta função
    //$x = crypt($senha, "");
    $x = crypt($senha, "c0tilUn1camp");
    echo $x;
    echo "<br>";

    if(crypt($senha, "") == $x){
        echo "Senha ok! <br><br>";
    }

    /* BASE 64
        É um método par codificação dos dados para transferência na Internet. Ela é uma codificação de mão dupla, e usando uma
        segunda função você pode descobrir a stringoriginal de uma string codificada.
    */

    $string = "O rato roeu a roupa do rei de Roma";
    $codificada = base64_encode($string);
    echo "Resultado da codificação usando base64: " . $codificada;

    echo "<br>";

    $original = base64_decode($codificada);
    echo "Resultado da decodificação usando base64: " . $original;

    $usuarioDesejado = "admin";
    
?>