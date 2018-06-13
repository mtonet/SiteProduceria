<?php
//solicitacao
//dados
$cliente=$_POST['cliente'];
$projeto=$_POST['projeto'];
$solicitante=$_POST['solicitante'];
$diretorArte=$_POST['diretorArte'];
$solicitcao=$_POST['solicitcao'];
$midia=$_POST['midia'];
$dataInicial=$_POST['dataInicial'];
$dataEntrega=$_POST['dataEntrega'];
$item=$_POST['item'];
$veiculo=$_POST['veiculo'];
$formato=$_POST['formato'];
$paginas=$_POST['paginas'];
$lombada=$_POST['lombada'];
$cores=$_POST['cores'];
$resolucao=$_POST['resolucao'];
$extensao=$_POST['extensao'];
$sangria=$_POST['sangria'];
$corteEspecial=$_POST['corteEspecial'];
$quantidade=$_POST['quantidade'];
$descricao=$_POST['descricao'];
$link=$_POST['link'];
$email=$_POST['email'];
$envio=$_POST['envio'];

//files
$path=$_FILES['file']['tmp_name']; 
$fileType=$_FILES['file']['type']; 
$fileName=$_FILES['file']['name'];
$file01_size=$_FILES['file']['size'];

// Tamanho máximo do arquivo (em Bytes)
$_UP['tamanho'] = 1024 * 1024 * 10; // 10Mb

//session
$_SESSION['cliente']=$cliente;
$_SESSION['projeto']=$projeto;
$_SESSION['solicitante']=$solicitante;
$_SESSION['diretorArte']=$diretorArte;
$_SESSION['solicitcao']=$solicitcao;
$_SESSION['midia']=$midia;
$_SESSION['dataInicial']=$dataInicial;
$_SESSION['dataEntrega']=$dataEntrega;
$_SESSION['item']=$item;
$_SESSION['veiculo']=$veiculo;
$_SESSION['formato']=$formato;
$_SESSION['paginas']=$paginas;
$_SESSION['lombada']=$lombada;
$_SESSION['cores']=$cores;
$_SESSION['resolucao']=$resolucao;
$_SESSION['extensao']=$extensao;
$_SESSION['sangria']=$sangria;
$_SESSION['corteEspecial']=$corteEspecial;
$_SESSION['quantidade']=$quantidade;
$_SESSION['descricao']=$descricao;
$_SESSION['link']=$link;
$_SESSION['email']=$email;

//condições
if($cliente==""){
$msg='<div class="alert alert-danger text-center" role="alert">Por favor informe o Cliente</div>';
}elseif($projeto==""){
$msg='<div class="alert alert-danger text-center" role="alert">Por favor informe o Projeto</div>';
}elseif($solicitante==""){
$msg='<div class="alert alert-danger text-center" role="alert">Por favor informe o Solicitante</div>';
}elseif($dataEntrega==""){
$msg='<div class="alert alert-danger text-center" role="alert">Por favor informe a Data de entrega</div>';
}elseif($descricao==""){
$msg='<div class="alert alert-danger text-center" role="alert">Por favor informe uma Descrição</div>';
}elseif($email==""){
$msg='<div class="alert alert-danger text-center" role="alert">Por favor informe um Email</div>';
}elseif($_UP['tamanho'] < $_FILES['file']['size']){
$msg='<div class="alert alert-danger text-center" role="alert">Limite máximo de 10mb para anexo</div>';
}elseif($envio=="s"){
require"email.php";
//mensagem
$msg='<div class="alert alert-success text-center" role="alert">Solicitação enviada com sucesso!</div>';
}
?>