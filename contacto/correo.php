<?PHP
session_start();
    require 'PHPMailer/class.smtp.php';
    require 'PHPMailer/class.phpmailer.php';
    //--- PREPARO CORREO ---//                     
    
    $cuerpo = "
    <table width='500' cellspacing='0' cellpadding='0'>        
        <tr>
            <td width='200' align='left'><b>NOMBRE:</b></td>
            <td width='10'></td>
            <td width='240'>".utf8_decode($_POST["nombre"])."</td>
        </tr>
        <tr>           
            <td><br /></td>           
        </tr>
        <tr>
            <td align='left'><b>CORREO:</b></td>
            <td></td>
            <td>".utf8_decode($_POST["correo"])."</td>
        </tr>
        <tr>           
            <td><br /></td>           
        </tr>        
        <tr>
            <td align='left'><b>ASUNTO:</b></td>
            <td></td>
            <td>".utf8_decode($_POST["asunto"])."</td>
        </tr>
        <tr>           
            <td><br /></td>           
        </tr>       
    </table>
    ";
    $asunto = "Correo contacto FUV";
    //para el env�o en formato HTML
    $headers = "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
    //direcci�n del remitente
    $headers .= "From: ".utf8_decode($_POST["nombre"])." <".$_POST["correo"]."> \r\n";
    //direcci�n de respuesta, si queremos que sea distinta que la del remitente
    //$headers .= "Reply-To: ".utf8_decode($_POST["nombre"])." <".$_POST["correo"].">  \r\n";
    //ruta del mensaje desde origen a destino
    //$headers .= "Return-path:  \r\n";
    //direcciones que recibir�n copia oculta
    $headers .= "Bcc: contacto@fundacionuv.org";  
                           
    
        if(mail("contacto@fundacionuv.org",$asunto,$cuerpo,$headers)){ echo "1"; }
        else{ echo "0"; }    
?>
