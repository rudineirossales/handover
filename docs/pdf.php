<?php

include 'mpdf/mpdf.php';


 include "conn.php";


 $dc =$_GET['dc'];
  

$select = mysql_query ("select * from base join cadastro on base.dc = cadastro.dc where base.dc = '$dc'
			");
	$linha = mysql_fetch_array($select);//atribui o array recebido a variavel $linha
	
	$row = mysql_num_rows($select);
  
  $html2 .= "<img src='img/logo_serede.png' alt='' width='80' height='80'  > <br><br>
  <H3>Relatorio Handover - DC - $linha[dc]</H3> 
  	";
  do  
  {
    $html .= "
    
<span>CENTRO:  $linha[centro]   </span><br>
<span>PEP4:  $linha[pep4]   </span><br>
<span>DESCRIÇÃO:  $linha[descricao]   </span><br>
<span>SIGLA:  $linha[sigla]   </span><br>
<span>ESTAÇÃO:  $linha[estacao]   </span><br>
<span>CNL:  $linha[cnl]   </span><br>
<span>LOCALIDADE:  $linha[localidade]   </span><br>
<span>SERVIÇO:  $linha[tipo_servico]   </span><br>
<span>PROJETO:  $linha[tipo_projeto]   </span><br>
<span>CONTRATO:  $linha[contrato]   </span><br>
<span>PRIORIDADE:  $linha[prioridade]   </span><br>
<span>HANDOVER:  $linha[handover]   </span><br>
<span>ABERTURA:  $linha[data_abertura]   </span><br>
<span>VENCIMENTO:  $linha[vencimento_hf]   </span><br>

<span>CADASTRADO POR:  $linha[id_tec]   </span><br>
<span>DATA DO CADASTRO:  $linha[data_cad]   </span><br>
</span><br><br><br><br><br><br><br><br><br>





<span>OBS.TÉCNICA: <br> <fieldset style='border: 1px solid; padding: 12px;'>$linha[obs_tec]  </span></fieldset><br><br>
<br><br>



    
    <table border=1 >
    
    <tr>
    
    
    </tr>
    <tr>
     
      
    </tr>	
    <tr>
    <td> <img src='fotos/$linha[foto1]' width='300' height='300'><br></td>
    <td> <img src='fotos/$linha[foto2]' width='300' height='300'><br></td>
    
    </tr>
    
    
   
   
</table>";
  } while ($linha = mysql_fetch_array($select));

	
//==============================================================
//==============================================================
//==============================================================

include("../mpdf/mpdf.php");

$mpdf=new mPDF(); 
$css = file_get_contents("../css/styleRelatotio.css");
$mpdf->WriteHTML($css,1);
$mpdf->WriteHTML($html2.$html);
$mpdf->Output();
exit;

//==============================================================
//==============================================================
//==============================================================


?>