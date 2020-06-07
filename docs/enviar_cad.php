<?php  include "conn.php";  ?>


<?php 


session_start();

if(!isset($_SESSION["login"]) &&  !isset($_SESSION["senha"]) )
{
  header("Location: index.html");
  exit;
  
  
}



 


?>



<script type="text/javascript">
function saidasuccessfully()
{
	setTimeout("window.location='table-data-table.php'",1000);
	
	
}


</script> 



<?php

session_start();













	

	
//}

?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
<link href="css/style.css" rel="stylesheet">
<link rel="icon" href="img/icon.ico">

<script type="text/javascript">
function saidasuccessfully()
{
	setTimeout("window.location='dashboard.php'",3000);
	
	
}
</script> 


<link rel="icon" href="img/logo.png">

<link rel="stylesheet" href="estilopres.css"/>

<meta charset="UTF-8"/>

<title>FTTH</title>


</head>



<body>








<?php



$dc =$_POST['dc'];
$teste1 =$_POST['teste1'];
$teste2 =$_POST['teste2'];
$teste3 =$_POST['teste3'];
$teste4 =$_POST['teste4'];
$dgo1 =$_POST['dgo1'];
$dgo2 =$_POST['dgo2'];
$dgo3 =$_POST['dgo3'];
$dgo4 =$_POST['dgo4'];
$dgo5 =$_POST['dgo5'];
$dgo6 =$_POST['dgo6'];
$dgo7 =$_POST['dgo7'];
$dgo8 =$_POST['dgo8'];
$dgo9 =$_POST['dgo9'];
$coi1 =$_POST['coi1'];
$coi2 =$_POST['coi2'];
$coi3 =$_POST['coi3'];
$coi4 =$_POST['coi4'];
$coe1 =$_POST['coe1'];
$coe2 =$_POST['coe2'];
$coe3 =$_POST['coe3'];
$coe4 =$_POST['coe4'];
$coe5 =$_POST['coe5'];
$coe6 =$_POST['coe6'];
$coe7 =$_POST['coe7'];
$coe8 =$_POST['coe8'];
$coe9 =$_POST['coe9'];
$coe10 =$_POST['coe10'];
$coea1 =$_POST['coea1'];
$coea2 =$_POST['coea2'];
$coea3 =$_POST['coea3'];
$coea4 =$_POST['coea4'];
$coea5 =$_POST['coea5'];
$coea6 =$_POST['coea6'];
$coea7 =$_POST['coea7'];
$coea8 =$_POST['coea8'];
$coea9 =$_POST['coea9'];
$coea10 =$_POST['coea10'];
$coea11 =$_POST['coea11'];
$coea12 =$_POST['coea12'];
$coea13 =$_POST['coea13'];
$coea14 =$_POST['coea14'];
$coea15 =$_POST['coea15'];
$cdoe1 =$_POST['cdoe1'];
$cdoe2 =$_POST['cdoe2'];
$cdoe3 =$_POST['cdoe3'];
$cdoe4 =$_POST['cdoe4'];
$doc1 =$_POST['doc1'];
$doc2 =$_POST['doc2'];
$doc3 =$_POST['doc3'];
$doc4 =$_POST['doc4'];
$foto1 =$_POST['foto1'];
$foto2 =$_POST['foto2']; 
$obs =$_POST['obs']; 
$_UP['tamanho'] = 1024 * 1024 * 1; // 1Mb

?>


<script type="text/javascript">
function saidasuccessfully2()
{
	setTimeout("window.location='cadastro.php?dc=<?php echo $dc;?>'",1000);
	
	
}
</script>

<?php





   

	$permite = array('image/jpg', 'image/jpeg' , 'image/png');

	  $type =$_FILES['foto1'] ['type'];
    $type2 =$_FILES['foto2'] ['type'];
    

    $tamanho1 =$_FILES['foto1']['size'];
    $tamanho2 =$_FILES['foto2']['size'];
   

    if (empty($type))
            {

               $type = 'image/png';



            }

             if (empty($type2))
            {

               $type2 = 'image/png';



            }
            



    if (!in_array($type,$permite) || !in_array($type2,$permite )  )
{

echo "EXTENSÃO DA IMAGEM INVALIDA, SUA IMAGEM DEVE SER NO FORMATO JPEG,JPG OU PNG!";
	// echo "<script>saidasuccessfully()</script>";
}
else if ($_UP['tamanho'] < $_FILES['foto1']['size'] || $_UP['tamanho'] < $_FILES['foto2']['size'])
{

  echo "
  <script language='JavaScript'>
  window.alert('TAMANHO MÁXIMO DA IMAGEM 1MB')
  
  </script>";
   echo "<script>saidasuccessfully2()</script>";
}


else{



if(isset($_FILES['foto1'])) {
	
	$extensao = strtolower (substr($_FILES['foto1'] ['name'], -4));
	$novo_nome  = md5(mt_rand(1, 1000) . microtime()) . $extensao;
    $diretorio = "fotos/";



move_uploaded_file($_FILES['foto1'] ['tmp_name'], $diretorio.$novo_nome )	;
	}
	
	if(isset($_FILES['foto2'])) {

$extensao = strtolower (substr($_FILES['foto2'] ['name'], -4));
	$novo_nome2  = md5(mt_rand(1, 1000) . microtime()) . $extensao;
    $diretorio = "fotos/";



move_uploaded_file($_FILES['foto2'] ['tmp_name'], $diretorio.$novo_nome2 )	;

  }
  
  /*

	if(isset($_FILES['foto'])) {

		if($tamanho3 <= 0){
          $novo_nome3 = "null";

		}else{

$extensao = strtolower (substr($_FILES['foto'] ['name'], -4));
	$novo_nome3  = md5(mt_rand(1, 1000) . microtime()) . $extensao;
    $diretorio = "arquivo/";



move_uploaded_file($_FILES['foto'] ['tmp_name'], $diretorio.$novo_nome3 )	;

	}
   }
 
*/

$query = "insert into cadastro (dc,teste1,teste2,teste3,teste4,dgo1,dgo2,dgo3,dgo4,dgo5,dgo6,dgo7,dgo8,dgo9,coi1,coi2,coi3,coi4,coe1,coe2,coe3,coe4,coe5,coe6,coe7,coe8,coe9,coe10,coea1,coea2,coea3,coea4,coea5,coea6,coea7,coea8,coea9,coea10,coea11,coea12,coea13,coea14,coea15,cdoe1,cdoe2,cdoe3,cdoe4,doc1,doc2,doc3,doc4,foto1,foto2,obs_tec,data_cad,id_tec)";

$query.= "values ('$dc','$teste1','$teste2','$teste3','$teste4','$dgo1','$dgo2','$dgo3','$dgo4','$dgo5','$dgo6','$dgo7','$dgo8','$dgo9','$coi1','$coi2','$coi3','$coi4','$coe1','$coe2','$coe3','$coe4','$coe5','$coe6','$coe7','$coe8','$coe9','$coe10','$coea1','$coea2','$coea3','$coea4','$coea5','$coea6','$coea7','$coea8','$coea9','$coea10','$coea11','$coea12','$coea13','$coea14','$coea15','$cdoe1','$cdoe2','$cdoe3','$cdoe4','$doc1','$doc2','$doc3','$doc4','$novo_nome','$novo_nome2','$obs',NOW(),'".$_SESSION['id']."')";

$query2 = "update base set  cadastro = 'S' where dc = '$dc'";


$sql = mysql_query($query);
$sql2 = mysql_query($query2);



if($sql)
{
  
  
  echo "
  <script language='JavaScript'>
  window.alert('ENVIADA COM SUCESSO!!')
  
  </script>";

  echo "<script>saidasuccessfully()</script>";
  

 ;
  

  
}
else
{
  
  echo "<script language='JavaScript'>
   window.alert('ERRO NO ENVIO!');
   </script> " ;
  
}





}


?>

























</body>


</html>