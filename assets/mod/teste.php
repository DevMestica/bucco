<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<?php
require 'dbaSis.php';

//teste de conexao
if (conect()) {
    echo 'Conectado<br/><hr/>';
};



// ========================================
//inserção de valores nivel
//$dados = array(
//    'id'        => 'default',
//    'descricao' => 'user'
//);
//
////create('nivel', $dados);
//
//echo 'Adicionados '. var_dump($dados);
// ========================================
// 
// 
// 
// 
// 
// 
// 
// 
// 
// ========================================
//inserção de valores user



//$fields = read('user');

//echo mysqli_field_count($fields);
//mysqli_fetch_field ( mysqli_result $result );
//$i = 0;
//while ($finfo = $fields->fetch_field()) {
//    echo $finfo->name . '<br/>';
//    $i++;
//}
//echo "quantidade de colunas " . $i ."<br/>";
//$dados = array(
//    'id'        => 'default',
//    'cpf'       => 12345678912,
//    'nome'      => utf8_decode('Usuário 1'),
//    'email'     => 'teste@teste.com.br',
//    'senha'     => '123456',
//    'nivel'     => '1',
//    'empresa'   => 'Mestiça Propaganda',
//    'ativo'     => '1'
//);
//
//print_r($dados);


//echo "<ul>";
//foreach ($fields as $key => $value) {
//    echo '<li>' . $key . '</li>';
//}
//echo "</ul>";
//create('user', $dados);
//echo 'Adicionados '. var_dump($dados);


// ========================================
//inserção de valores partner

//$fields = read('parceiro');
//$i = 0;
//while ($finfo = $fields->fetch_field()) {
//    echo $finfo->name . '<br/>';
//    $i++;
//}
//echo "quantidade de colunas " . $i ."<br/>";
//$dados = array(
//    'id'                => 'default',
//    'cnpj'              => '12345678901234',
//    'nome_empresa'      => utf8_decode('Usuário 1'),
//    'email_admin'       => 'teste@teste.com.br',
//    'senha'             => '123456',
//    'nivel'             => '1',
//    'ativo'             => '1'
//);
//create('parceiro', $dados);