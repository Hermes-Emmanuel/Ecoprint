<?php
  //Variáveis
  $nome = $_POST['nome'];
  $sobrenome = $_POST['sobrenome'];
  $email = $_POST['email'];
  $empresa = $_POST['empresa'];
  $mensagem = $_POST['mensagem'];
  $data_envio = date('d/m/Y');
  $hora_envio = date('H:i:s');
  $image = "";


  //Compo E-mail
  $arquivo = "
    <html>
    <center>
    <h1>Um cliente entrou em contato<br>com você pelo seu site</h1>
    <img src='https://i.ibb.co/gdHm2Lp/email.png'>
  <table style='table-layout: fixed; width: 500px; border-collapse: collapse; padding:10px;'> 
      <thead style='background:#7C7C7C; color:#ffffff; padding:10px;'>
        <tr>
          <th colspan='1' style='width: 400px'>Detalhes</th>          
        </tr>
      </thead>    
      <tbody style='background:#DBDBDB;padding:10px;'>
        <tr>
          <td colspan='1' align='center' heigth='20'><b>Nome: </b>$nome $sobrenome<br></td>
        </tr>
        <tr height='15px'>
          <td colspan='1' align='center'><b>Empresa: </b>$empresa<br></td>                  
        </tr>
        <tr height='15px'>
          <td colspan='1' align='center'><b>Mensagem: </b><div style='word-wrap: break-word; padding:5px 20px 20px 20px;'>\"$mensagem\"</div></td>
        </tr>
      </tbody>  
      <tbody>
        <tr>
          <td align='center'>
            <br>
            <hr style='transform: translateY(15px)'>
            <a href=mailto:$email>
              <button style='padding: 10px; border: none; border-radius:8px; color: #ffffff; background:#2B730D; cursor: pointer; transform: translateY(-10px);'>Responda agora mesmo</button>
            </a>
          </td>
        </tr>
      </tbody>
    </table>
    </center>
</html>
  ";
  
  //Emails para quem será enviado o formulário
  $destino = "hermesemmanuel2@gmail.com";
  $assunto = "Contato pelo Site";

  //Este sempre deverá existir para garantir a exibição correta dos caracteres
  $headers  = "MIME-Version: 1.0\n";
  $headers .= "Content-type: text/html; charset=iso-8859-1\n";
  $headers .= "From: $nome <$email>";

  //Enviar
  mail($destino, $assunto, $arquivo, $headers);
  
  // echo "<meta http-equiv='refresh' content='10;URL=../index.html'>";
  header('location:index.html');
