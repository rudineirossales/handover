<?php

 $state_csv = false;

 class csv extends mysqli
 {

 function __construct()
 {

    parent::__construct("localhost","root","","handover");
    if($this->connect_error)
    {

          echo "Conexão falhou". $this->connect_error;

    }


 }
function import($file)
{
   $contador = 0;
   $contador2 = 0;
   $file = fopen($file, 'r');
   echo "<pre> <strong>LOGS:</strong><br></pre>";  
   while ($row = fgetcsv($file))
   {
      
      $value = "'". implode("';'", $row). "'";

      
      
      $value2 = preg_replace("';'","','", $value);


      $value2 =  utf8_decode($value2);

      





      
      
      $q = "insert into base (centro,pep4,dc,descricao,sigla,estacao,cnl,localidade,tipo_servico,tipo_projeto,contrato,fim_real,prioridade,handover,data_abertura,vencimento_hf) values(". $value2 .")";
      if ( $this->query($q) ) 
      {

              $this->state_csv = true;


      } 

      else
      {

                $this->state_csv = false;

      }
             
    if ( $this->state_csv)
    {

           echo "<pre style='color:green;'>$value OK<br></pre>";
           $contador = $contador + 1; 

    }

    else
    {

      echo "<pre style='color:red;'>$value ERRO<br></pre>";
      $contador2 = $contador2 + 1; 

    }

   }
   echo "<pre> Upload de $contador arquivos<br></pre>";
   echo "<pre> Arquivos duplicados $contador2 <br></pre>";
}
}

?> 