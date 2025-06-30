<?php 

    // echo '123';
    // echo "123";

    $str = "abc";
    // echo $str;
    // var_dump($str);

    /*$str[1] = "2";
    echo $str[0];
    echo $str[1];
    echo $str[2];
    // echo $str[3];

    echo "<hr>";
    $tam = strlen($str);
    echo $tam;

    for ($i=0; $i < $tam; $i++) { 
        echo "<br>";
        echo $str[$i];
    }

    echo "<br>texto de teste";
    echo '<br>texto de teste';

    echo "<br> outro \texto";
    echo '<br> outro \texto';

    echo "<br><br>";
    echo "<br> outro \n texto";
    echo '<br> outro \n texto';

    echo "<br><br>";
    echo "<br> outro \\n texto";
    echo '<br> outro \\n texto';

    echo "<br><br>";
    $var = "um texto";
    echo "<br> mostrando var: $var";
    echo '<br> mostrando var: $var';

    echo "<br> Deletar C:\\usuario\teste\nicole\php";
    echo "<br> Deletar C:\\usuario\\teste\\nicole\\php";
    echo '<br> Deletar C:\\\\usuario\teste\nicole\php';
    echo "<br>https://www.google.com/";


    // echo '<br> this isn't';
    echo "<br> this isn't";
    echo '<br> this isn\'t';
    echo '<br> "aspas" ';
    echo "<br> \"aspas\" ";

    echo "<hr>";

    $num = 22;
    echo "<br>O valor de num é {$num}"; // interpolar
    echo "<br>O valor de num é " . $num; // concatenar
    echo '<br>O valor de num é $num' . $num; // '

    $array = ['azul', 'amarelo', 'vermelho tbm', "nome" => "maria"];
    echo "<br>A cor da bola é $array[1]";
    echo "<br>A cor da bola é " . $array[2];
    
    // X echo "<br>O nome é $array['nome']";
    // X echo "<br>O nome é $array["nome"]";
    echo "<br>O nome é {$array["nome"]}";
    echo "<br>O nome é " . $array['nome'];


    $a = "oi";
    $oi = "legal";
    $$a = "teste";
    $$$a = "i";

    echo "<br>Valor de a " . $$$a;
    echo "<br>Valor de a R$$oi " . $teste;
    */

    echo "<hr><br>\n";

    // heredoc & nowdoc

    $num = 10;

    // heredoc
    $texto = <<<NOMELEGAL
        <div class="container" style="">
            <p>O valor de x é: $num</p>
        </div>
    NOMELEGAL;

    echo $texto;

    // nowdoc
    $outroTexto = <<<'BLOCOHTML'
        <div class="container" style="">
            <p>O valor de x é: $num</p>
        </div>
    BLOCOHTML;
  
    echo $outroTexto;


    echo "<hr>";
    $str = "aaabbbccc";
    $tam = strlen($str);
    
    echo "<br>String " . $str;
    echo "<br>Quantidade de Caracteres: " . $tam;

    $str = "abc123";
    // $parte = substr($str, 1, 4);
    $parte = substr($str, 2);
    echo "<br>String " . $str;
    echo "<br> Parte: " . $parte;

    echo "<br><br>";
    $texto = "uM mOnTe dE InFo BoA";
    $up = strtoupper($texto);
    $lo = strtolower($texto);
    $uc = ucfirst($texto);
    $ucw = ucwords($texto);

    echo "<br> String: " . $texto;
    echo "<br> To Upper: " . $up;
    echo "<br> To Lower: " . $lo;
    echo "<br> UC first: " . $uc;
    echo "<br> Uc Words: " . $ucw;

    $uc_lo = ucfirst(strtolower($texto));
    $ucw_lo = ucwords($lo);
    echo "<br><br> UC first 2: " . $uc_lo;
    echo "<br> UC words 2: " . $ucw_lo;

    // str_replace(toReplace, toWhat, theStr) - troca um pedaço
	$str = "aaabbbccc";
	$nova = str_replace('ccc', 'ggg', $str);
	echo "<br><br>String: " . $str;
	echo "<br>Replace: " . $nova;

    $str = "oç";
    var_dump($str);
	
	// -------- Resumo e outras funcoes
	/*

	number_format(); // formatação de numero
	printf(); // formatação
	print_r(); // Pode mostrar 
	var_dump();

	wordwrap(); // envolve a string, pode fazer quebras por character
	strlen(); // tamanho da string
    str_word_count(); // conta as palavras na frase
	
	trim(); // remove espaçõs antes de depois das palavras
	ltrim(); // remove espaços do inicio
	rtrim(); // remove espaçoes do final

	// quebra a frase => ["quebra",  "a",  "frase"] 
	explode(); // quebra a frase em array dividindo pelo character espaço
    str_split(); // quebra a string por cada letra e não palavras
	
    // ["quebra",  "a",  "frase"] => quebra a frase
	implode(); // junta um array de string em uma string só
	join(); // a mesma coisa

	chr(); // pega a letra dado o codigo dela
	ord(); // ver o cóodigo da letra

	strlower(); // retorna tudo minusculo
	strupper(); // retorna tudo maiúsculo
	ucfisrt(); // retorna primeira letra maiúscula
	ucwords(); // retorna primeira letra de cada palavra maiúscula

	strrev(); // inverte a string

	strpos(); // retorna a posição em que a string foi encontrada
	stripos(); // a mesma coisa ignorando maiúsculo/minúsculo

	substr_count(); // conta as vezes que uma frase/palavra foi encontrada em outra
	substr(); // pega um pedaço da string

	str_pad(); // faz a string ocupar um determinado tamanho 
	str_repeat(); // repete a string varias vezes
	str_replace(); // troca um pedaço da string por outro
	*/


