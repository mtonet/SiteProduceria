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
$mail->From = "noreply@produceria.com.br"; // Sua conta de email que será remetente da mensagem
$mail->FromName = "Produceria"; // Nome da conta de email
 
// DADOS DO DESTINATÁRIO
$mail->AddAddress('trafego@produceria.com.br', 'Produceria'); // Define qual conta de email receberá a mensagem
//$mail->AddAddress('recebe2@dominio.com.br'); // Define qual conta de email receberá a mensagem
//$mail->AddCC("$email"); // Define qual conta de email receberá uma cópia
$mail->AddBCC("$email"); // Define qual conta de email receberá uma cópia oculta
 
// Definição de HTML/codificação
$mail->IsHTML(true); // Define que o e-mail será enviado como HTML
$mail->CharSet = 'utf-8'; // Charset da mensagem (opcional)
 
// DEFINIÇÃO DA MENSAGEM
$mail->Subject  = "$cliente - $projeto - $solicitcao"; // Assunto da mensagem
$mail->Body .= '<table width="600" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td bgcolor="#f5f5f5"><table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td height="60" colspan="2" bgcolor="#000000" style="padding-left:20px;"><img src="http://produceria.com.br/email/produceria-logo.png" alt="" /></td>
        <td width="280" align="right" bgcolor="#000000"><span style="font-family:Arial, Helvetica, sans-serif; font-size:20px; color:#FFF; padding-right:20px">Solicitação</span></td>
      </tr>
      <tr>
        <td width="39">&nbsp;</td>
        <td width="281">&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:16px;  color:#000; ">&nbsp;</td>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:16px;  color:#000; ">Cliente</td>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:16px;  color:#000; ">Projeto</td>
      </tr>
      <tr>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:14px; color:#000; ">&nbsp;</td>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:14px; color:#666; ">'.$cliente.'</td>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:14px; color:#666; ">'.$projeto.'</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:16px;  color:#000; ">&nbsp;</td>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:16px;  color:#000; ">Solicitante</td>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:16px;  color:#000; ">Responsável pela Criação</td>
      </tr>
      <tr>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:14px; color:#000; ">&nbsp;</td>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:14px; color:#666; ">'.$solicitante.'</td>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:14px; color:#666; ">'.$diretorArte.'</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:16px;  color:#000; ">&nbsp;</td>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:16px;  color:#000; ">Orçamento</td>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:16px;  color:#000; ">Mídia Impressa</td>
      </tr>
      <tr>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:14px; color:#000; ">&nbsp;</td>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:14px; color:#666; ">'.$solicitcao.'</td>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:14px; color:#666; ">'.$midia.'</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:16px;  color:#000; ">&nbsp;</td>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:16px;  color:#000; ">Data Inicial</td>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:16px;  color:#000; ">Data Entrega</td>
      </tr>
      <tr>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:14px; color:#000; ">&nbsp;</td>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:14px; color:#666; ">'.$dataInicial.'</td>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:14px; color:#ec0000; ">'.$dataEntrega.'</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:16px;  color:#000; ">&nbsp;</td>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:16px;  color:#000; ">Item</td>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:16px;  color:#000; ">Veículo</td>
      </tr>
      <tr>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:14px; color:#000; ">&nbsp;</td>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:14px; color:#666; ">'.$item.'</td>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:14px; color:#666; ">'.$veiculo.'</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:16px;  color:#000; ">&nbsp;</td>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:16px;  color:#000; ">Formato</td>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:16px;  color:#000; ">Páginas</td>
      </tr>
      <tr>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:14px; color:#000; ">&nbsp;</td>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:14px; color:#666; ">'.$formato.'</td>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:14px; color:#666; ">'.$paginas.'</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:16px;  color:#000; ">&nbsp;</td>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:16px;  color:#000; ">Lombada</td>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:16px;  color:#000; ">Cores</td>
      </tr>
      <tr>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:14px; color:#000; ">&nbsp;</td>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:14px; color:#666; ">'.$lombada.'</td>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:14px; color:#666; ">'.$cores.'</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:16px;  color:#000; ">&nbsp;</td>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:16px;  color:#000; ">Resolução </td>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:16px;  color:#000; ">Extensão</td>
      </tr>
      <tr>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:14px; color:#000; ">&nbsp;</td>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:14px; color:#666; ">'.$resolucao.'</td>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:14px; color:#666; ">'.$extensao.'</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:16px;  color:#000; ">&nbsp;</td>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:16px;  color:#000; ">Sangria</td>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:16px;  color:#000; ">Corte</td>
      </tr>
      <tr>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:14px; color:#000; ">&nbsp;</td>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:14px; color:#666; ">'.$sangria.'</td>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:14px; color:#666; ">'.$corteEspecial.'</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:16px;  color:#000; ">&nbsp;</td>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:16px;  color:#000; ">Quantidade</td>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:16px;  color:#000; ">Link</td>
      </tr>
      <tr>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:14px; color:#000; ">&nbsp;</td>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:14px; color:#666; ">'.$quantidade.'</td>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:14px; color:#666; ">'.$link.'</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td><span style="font-family:Arial, Helvetica, sans-serif; font-size:16px;  color:#000; ">Email</span></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td><span style="font-family:Arial, Helvetica, sans-serif; font-size:14px; color:#666; ">'.$email.'</span></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td><span style="font-family:Arial, Helvetica, sans-serif; font-size:16px;  color:#000; ">Descrição</span></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td colspan="3" style="font-family:Arial, Helvetica, sans-serif; font-size:16px;  color:#000; padding-left:30px "><span style="font-family:Arial, Helvetica, sans-serif; font-size:14px; color:#666; ">'.$descricao.'</span></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td bgcolor="#f5f5f5">&nbsp;</td>
  </tr>
  <tr>
    <td height="60" align="center" bgcolor="#000000"><span style="font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#FFF;">Rua Sarita Cyrillo 288 - Jadrim Paulista - +55 11 3854 8035</span></td>
  </tr>
</table>'; // Texto da mensagem
// anexar arquivo
 $mail->AddAttachment($path, $fileName);
// ENVIO DO EMAIL
$enviado = $mail->Send();
// Limpa os destinatários e os anexos
$mail->ClearAllRecipients();
?>