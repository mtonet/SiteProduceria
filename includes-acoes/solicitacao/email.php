<?php
// Adiciona o arquivo class.phpmailer.php - você deve especificar corretamente o caminho da pasta com o este arquivo.
require_once("../includes-acoes/PHPMailer/PHPMailerAutoload.php");
// Inicia a classe PHPMailer
$mail = new PHPMailer();
 
// DEFINIÇÃO DOS DADOS DE AUTENTICAÇÃO - Você deve auterar conforme o seu domínio!
$mail->IsSMTP(); // Define que a mensagem será SMTP
$mail->Host = "smtp.produceria.com.br"; // Seu endereço de host SMTP
$mail->SMTPAuth = true; // Define que será utilizada a autenticação -  Mantenha o valor "true"
$mail->Port = 587; // Porta de comunicação SMTP - Mantenha o valor "587"
$mail->SMTPSecure = false; // Define se é utilizado SSL/TLS - Mantenha o valor "false"
$mail->SMTPAutoTLS = false; // Define se, por padrão, será utilizado TLS - Mantenha o valor "false"
$mail->Username = 'form@produceria.com.br'; // Conta de email existente e ativa em seu domínio
$mail->Password = 'plus2020'; // Senha da sua conta de email
 
// DADOS DO REMETENTE
$mail->Sender = "form@produceria.com.br"; // Conta de email existente e ativa em seu domínio
$mail->From = "contato@produceria.com.br"; // Sua conta de email que será remetente da mensagem
$mail->FromName = "Produceria"; // Nome da conta de email
 
// DADOS DO DESTINATÁRIO
$mail->AddAddress('trafego@produceria', 'Produceria'); // Define qual conta de email receberá a mensagem
//$mail->AddAddress('recebe2@dominio.com.br'); // Define qual conta de email receberá a mensagem
//$mail->AddCC("$email"); // Define qual conta de email receberá uma cópia
$mail->AddBCC("$email"); // Define qual conta de email receberá uma cópia oculta
 
// Definição de HTML/codificação
$mail->IsHTML(true); // Define que o e-mail será enviado como HTML
$mail->CharSet = 'utf-8'; // Charset da mensagem (opcional)
 
// DEFINIÇÃO DA MENSAGEM
$mail->Subject  = "Solicitação - Produceria"; // Assunto da mensagem
$mail->Body .= '<table width="600" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td colspan="2" bgcolor="#000000">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2" bgcolor="#000000" align="center"><img src="http://produceria.com.br/email/produceria-logo.png" /></td>
  </tr>
  <tr>
    <td colspan="2" bgcolor="#000000">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td width="300">&nbsp;</td>
    <td width="300">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2" align="center" style="font-family:Arial, Helvetica, sans-serif; font-size:20px; color:#000;"><b>Solicitação</b></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td style="font-family:Arial, Helvetica, sans-serif; font-size:18px; color:#000; padding:10px;">Cliente</td>
    <td style="font-family:Arial, Helvetica, sans-serif; font-size:18px; color:#000; padding:10px;">Projeto</td>
  </tr>
  <tr>
    <td style="font-family:Arial, Helvetica, sans-serif; font-size:16px; color:#000; padding:10px;">'.$cliente.'</td>
    <td style="font-family:Arial, Helvetica, sans-serif; font-size:16px; color:#000; padding:10px;">'.$projeto.'</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td style="font-family:Arial, Helvetica, sans-serif; font-size:18px; color:#000; padding:10px;">Solicitante</td>
    <td style="font-family:Arial, Helvetica, sans-serif; font-size:18px; color:#000; padding:10px;">Responsável pela Criação</td>
  </tr>
  <tr>
    <td style="font-family:Arial, Helvetica, sans-serif; font-size:16px; color:#000; padding:10px;">'.$solicitante.'</td>
    <td style="font-family:Arial, Helvetica, sans-serif; font-size:16px; color:#000; padding:10px;">'.$diretorArte.'</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td style="font-family:Arial, Helvetica, sans-serif; font-size:18px; color:#000; padding:10px;">Orçamento</td>
    <td style="font-family:Arial, Helvetica, sans-serif; font-size:18px; color:#000; padding:10px;">Mídia Impressa</td>
  </tr>
  <tr>
    <td style="font-family:Arial, Helvetica, sans-serif; font-size:16px; color:#000; padding:10px;">'.$solicitcao.'</td>
    <td style="font-family:Arial, Helvetica, sans-serif; font-size:16px; color:#000; padding:10px;">'.$midia.'</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td style="font-family:Arial, Helvetica, sans-serif; font-size:18px; color:#000; padding:10px;">Data Inicial</td>
    <td style="font-family:Arial, Helvetica, sans-serif; font-size:18px; color:#000; padding:10px;">Data Entrega</td>
  </tr>
  <tr>
    <td style="font-family:Arial, Helvetica, sans-serif; font-size:16px; color:#000; padding:10px;">'.$dataInicial.'</td>
    <td style="font-family:Arial, Helvetica, sans-serif; font-size:16px; color:#000; padding:10px;">'.$dataEntrega.'</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td style="font-family:Arial, Helvetica, sans-serif; font-size:18px; color:#000; padding:10px;">Item</td>
    <td style="font-family:Arial, Helvetica, sans-serif; font-size:18px; color:#000; padding:10px;">Veículo</td>
  </tr>
  <tr>
    <td style="font-family:Arial, Helvetica, sans-serif; font-size:16px; color:#000; padding:10px;">'.$item.'</td>
    <td style="font-family:Arial, Helvetica, sans-serif; font-size:16px; color:#000; padding:10px;">'.$veiculo.'</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td style="font-family:Arial, Helvetica, sans-serif; font-size:18px; color:#000; padding:10px;">Formato</td>
    <td style="font-family:Arial, Helvetica, sans-serif; font-size:18px; color:#000; padding:10px;">Páginas</td>
  </tr>
  <tr>
    <td style="font-family:Arial, Helvetica, sans-serif; font-size:16px; color:#000; padding:10px;">'.$formato.'</td>
    <td style="font-family:Arial, Helvetica, sans-serif; font-size:16px; color:#000; padding:10px;">'.$paginas.'</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td style="font-family:Arial, Helvetica, sans-serif; font-size:18px; color:#000; padding:10px;">Sem Lombada</td>
    <td style="font-family:Arial, Helvetica, sans-serif; font-size:18px; color:#000; padding:10px;">4x4 cores</td>
  </tr>
  <tr>
    <td style="font-family:Arial, Helvetica, sans-serif; font-size:16px; color:#000; padding:10px;">'.$lombada.'</td>
    <td style="font-family:Arial, Helvetica, sans-serif; font-size:16px; color:#000; padding:10px;">'.$cores.'</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td style="font-family:Arial, Helvetica, sans-serif; font-size:18px; color:#000; padding:10px;">Resolução </td>
    <td style="font-family:Arial, Helvetica, sans-serif; font-size:18px; color:#000; padding:10px;">Extensão</td>
  </tr>
  <tr>
    <td style="font-family:Arial, Helvetica, sans-serif; font-size:16px; color:#000; padding:10px;">'.$resolucao.'</td>
    <td style="font-family:Arial, Helvetica, sans-serif; font-size:16px; color:#000; padding:10px;">'.$extensao.'</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td style="font-family:Arial, Helvetica, sans-serif; font-size:18px; color:#000; padding:10px;">Sangria</td>
    <td style="font-family:Arial, Helvetica, sans-serif; font-size:18px; color:#000; padding:10px;">Corte</td>
  </tr>
  <tr>
    <td style="font-family:Arial, Helvetica, sans-serif; font-size:16px; color:#000; padding:10px;">'.$sangria.'</td>
    <td style="font-family:Arial, Helvetica, sans-serif; font-size:16px; color:#000; padding:10px;">'.$corteEspecial.'</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td style="font-family:Arial, Helvetica, sans-serif; font-size:18px; color:#000; padding:10px;">Quantidade</td>
    <td style="font-family:Arial, Helvetica, sans-serif; font-size:18px; color:#000; padding:10px;">Link</td>
  </tr>
  <tr>
    <td style="font-family:Arial, Helvetica, sans-serif; font-size:16px; color:#000; padding:10px;">'.$quantidade.'</td>
    <td style="font-family:Arial, Helvetica, sans-serif; font-size:16px; color:#000; padding:10px;">'.$link.'</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2" style="font-family:Arial, Helvetica, sans-serif; font-size:18px; color:#000; padding:10px;">Email</td>
  </tr>
  <tr>
    <td colspan="2" style="font-family:Arial, Helvetica, sans-serif; font-size:16px; color:#000; padding:10px;">'.$email.'</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2" style="font-family:Arial, Helvetica, sans-serif; font-size:18px; color:#000; padding:10px;">Descrição</td>
  </tr>
  <tr>
    <td colspan="2" style="font-family:Arial, Helvetica, sans-serif; font-size:16px; color:#000; padding:10px;">'.$descricao.'</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>'; // Texto da mensagem
// anexar arquivo
 $mail->AddAttachment($path, $fileName);
// ENVIO DO EMAIL
$enviado = $mail->Send();
// Limpa os destinatários e os anexos
$mail->ClearAllRecipients();
?>