<?php 
         include "conn.php"; 
      
         session_start();

         if(!isset($_SESSION["login"]) &&  !isset($_SESSION["senha"])  )
            {
                 header("Location: index.html");
                  exit;
            }


            $dc =$_GET['dc'];

            $sql = mysql_query ("select * from base where dc = '$dc'" );

            $row = mysql_num_rows($sql);


    if (mysql_num_rows($sql) > 0)

    {
         while ($dado = mysql_fetch_assoc($sql))
         {
            $centro = $dado["centro"];
            $pep4 = $dado["pep4"];
            $descricao = $dado["descricao"];
            $contrato = $dado["contrato"];
            $sigla = $dado["sigla"];
            $estacao = $dado["estacao"];
            $cnl = $dado["cnl"];
            $localidade = $dado["localidade"];
            $tipo_servico = $dado["tipo_servico"];
            $tipo_projeto = $dado["tipo_projeto"];
            $fim_real = $dado["fim_real"];
            $prioridade = $dado["prioridade"];
            $handover = $dado["handover"];
            $data_abertura = $dado["data_abertura"];
            $vencimento_hf = $dado["vencimento_hf"];
            
            


            

          }
    
    }


?>



<!DOCTYPE html>
<html lang="en">
  <head>

  <link rel="icon" href="img/serede.png">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>





  
<style>
  #loading
{
  
width:70px;
height:70px;  
  
  
  
  
}
</style>




<link rel="stylesheet"  href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<link rel="stylesheet"  href="/resources/demos/style.css">



<script type="text/javascript" src="js/jquery-ui.js"></script>





    <meta name="description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    <!-- Twitter meta-->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:site" content="@pratikborsadiya">
    <meta property="twitter:creator" content="@pratikborsadiya">
    <!-- Open Graph Meta-->
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Vali Admin">
    <meta property="og:title" content="Vali - Free Bootstrap 4 admin theme">
    <meta property="og:url" content="http://pratikborsadiya.in/blog/vali-admin">
    <meta property="og:image" content="http://pratikborsadiya.in/blog/vali-admin/hero-social.png">
    <meta property="og:description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    <title>HANDOVER</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body class="app sidebar-mini rtl">
    <!-- Navbar-->
    <header class="app-header"><a class="app-header__logo" href="dashboard.php">Serede</a>
      <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>
      <!-- Navbar Right Menu-->
      <ul class="app-nav">
       
        <!--Notification Menu-->
       
        <!-- User Menu-->
        <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Open Profile Menu"><i class="fa fa-user fa-lg"></i></a>
          <ul class="dropdown-menu settings-menu dropdown-menu-right">
            
            <li><a class="dropdown-item" href="logout.php"><i class="fa fa-sign-out fa-lg"></i> Logout</a></li>
          </ul>
        </li>
      </ul>
    </header>
    <!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
      <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" style="width:38px; height:40px;" src="img/serede.jpg" alt="User Image">
        <div>
          <p class="app-sidebar__user-name"><?php echo $_SESSION['nome'];?> </p>
          <p class="app-sidebar__user-designation"><?php echo $_SESSION['area'];?></p>
        </div>
      </div>
      <ul class="app-menu">
        <li><a class="app-menu__item active" href="dashboard.php"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Dashboard</span></a></li>
        
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="bootstrap-components.html"><i class="icon fa fa-circle-o"></i> Bootstrap Elements</a></li>
            <li><a class="treeview-item" href="https://fontawesome.com/v4.7.0/icons/" target="_blank" rel="noopener"><i class="icon fa fa-circle-o"></i> Font Icons</a></li>
            <li><a class="treeview-item" href="ui-cards.html"><i class="icon fa fa-circle-o"></i> Cards</a></li>
            <li><a class="treeview-item" href="widgets.html"><i class="icon fa fa-circle-o"></i> Widgets</a></li>
          </ul>
        </li>
        
        
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-th-list"></i><span class="app-menu__label">Tables</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
           
            <li><a class="treeview-item" href="table-data-table.php"><i class="icon fa fa-circle-o"></i> Pendências</a></li>
            <li><a class="treeview-item" href="table-data-table.php"><i class="icon fa fa-circle-o"></i> Pesquisa</a></li>
          </ul>
        </li>
    </aside>
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-edit"></i> Handover</h1>
          <p></p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">Forms</li>
          <li class="breadcrumb-item"><a href="#">Form Components</a></li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="row">
              <div class="col-lg-12">
                <form method="post" enctype="multipart/form-data" action="enviar_cad.php ">
                <div class="accordion" id="accordionExample">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h5 class="mb-0">
      <a  data-toggle="collapse" href="#collapseOne" role="button" aria-expanded="false" aria-controls="collapseExample">
      DADOS
      </a>
      </h5>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
      <div class="form-group">
                    <label for="exampleInputEmail1">DC</label>
                    <input class="form-control" id="exampleInputEmail1" readonly required name="dc" id="ba" value="<?php echo $dc;?>" type="text" aria-describedby="emailHelp" >
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Pep4</label>
                    <input class="form-control" readonly id="exampleInputEmail1" name="back" value="<?php echo $pep4;?>" type="text" aria-describedby="emailHelp" >
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Descrição</label>
                    <input class="form-control" readonly id="exampleInputEmail1" name="mes" id="mes" value="<?php echo $descricao;?>" type="text" aria-describedby="emailHelp" >
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Contrato</label>
                    <input class="form-control" readonly id="exampleInputEmail1" name="estacao" id="estacao" value="<?php echo $contrato;?>" type="text" aria-describedby="emailHelp" >
                  </div>
                  
                  <div class="form-group">
                    <label for="exampleInputEmail1">Sigla</label>
                    <input class="form-control" readonly id="exampleInputEmail1" name="indicador" value="<?php echo $sigla;?>" type="text" aria-describedby="emailHelp" >
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Estação</label>
                    <input class="form-control" readonly id="exampleInputEmail1" name="abertura" value="<?php echo $estacao;?>" type="text" aria-describedby="emailHelp" >
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">CNL</label>
                    <input class="form-control" readonly id="exampleInputEmail1" name="promessa" value="<?php echo $cnl;?>" type="text" aria-describedby="emailHelp" >
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Localidade</label>
                    <input class="form-control" readonly id="exampleInputEmail1" name="acionamento" value="<?php echo $localidade;?>" type="text" aria-describedby="emailHelp" >
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Serviço</label>
                    <input class="form-control" readonly id="exampleInputEmail1" name="baixa" value="<?php echo $tipo_servico;?>" type="text" aria-describedby="emailHelp" >
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Projeto</label>
                    <input class="form-control" readonly value="<?php echo $tipo_projeto;?>" name="sla" id="exampleInputEmail1" type="text" aria-describedby="emailHelp" >
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Prioridade</label>
                    <input class="form-control" readonly value="<?php echo $prioridade;?>" name="sla" id="exampleInputEmail1" type="text" aria-describedby="emailHelp" >
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Handover</label>
                    <input class="form-control" readonly value="<?php echo $handover;?>" name="sla" id="exampleInputEmail1" type="text" aria-describedby="emailHelp" >
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Data abertura</label>
                    <input class="form-control" readonly value="<?php echo $data_abertura;?>" name="sla" id="exampleInputEmail1" type="text" aria-describedby="emailHelp" >
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Data vencimento</label>
                    <input class="form-control" readonly value="<?php echo $vencimento_hf;?>" name="sla" id="exampleInputEmail1" type="text" aria-describedby="emailHelp" >
                  </div>

                 
            </div>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h5 class="mb-0">
      <a  data-toggle="collapse" href="#collapseTwo" role="button" aria-expanded="false" aria-controls="collapseExample">
      TESTE
      </a>
      </h5>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
      <div class="card-body">
      <form method="post" enctype="multipart/form-data" action="enviar_cad.php ">
      <input class="form-control" id="exampleInputEmail1" readonly required name="dc"  value="<?php echo $dc;?>" type="hidden" aria-describedby="emailHelp" >
              <div class="form-group">
                            <label for="exampleInputEmail1">As curvas das fibras testadas e a atenuação total (máximo 0,22 dB/Km) estão dentro dos valores admissíveis em 1.550 nm, nos dois sentidos (com OTDR)</label>
                            <div class="form-group">
                                   
                                   <select class="form-control" id="exampleSelect1" name="teste1">
                                      <option value="NA">NA</option>
                                      <option value="OK">OK</option>
                                      <option value="NOK">NOK</option>
                      
                                   </select>
                             </div>
               </div>
               <div class="form-group">
                            <label for="exampleInputEmail1">Teste de atenuação por ponto de fusão não ultrapassando 0,1 dB/fusão (teste realizado com OTDR)</label>
                            <div class="form-group">
                                   
                                   <select class="form-control" id="exampleSelect1" name="teste2">
                                      <option value="NA">NA</option>
                                      <option value="OK">OK</option>
                                      <option value="NOK">NOK</option>
                      
                                   </select>
                             </div>
               </div>
               <div class="form-group">
                            <label for="exampleInputEmail1">Teste de potência óptica com power meter verificando continuidade e se não há inversão da fibra</label>
                            <div class="form-group">
                                   
                                   <select class="form-control" id="exampleSelect1" name="teste3">
                                      <option value="NA">NA</option>
                                      <option value="OK">OK</option>
                                      <option value="NOK">NOK</option>
                      
                                   </select>
                             </div>
               </div>
               <div class="form-group">
                            <label for="exampleInputEmail1">Testes nos conectores de destino e origem (com o uso da bobina de lançamento</label>
                            <div class="form-group">
                                   
                                   <select class="form-control" id="exampleSelect1" name="teste4">
                                      <option value="NA">NA</option>
                                      <option value="OK">OK</option>
                                      <option value="NOK">NOK</option>
                      
                                   </select>
                             </div>
               </div>
               
    </div>
  </div>

  <div class="card">
    <div class="card-header" id="headingThree">
      <h5 class="mb-0">
      <a  data-toggle="collapse" href="#collapseThree" role="button" aria-expanded="false" aria-controls="collapseExample">
      DGO e BEO
      </a>
      </h5>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
      <div class="card-body">
                <div class="form-group">
                            <label for="exampleInputEmail1">Verificar a existência de identificação correta, legível e visível nas bandejas, nos módulos, nas fibras, na fila e no bastidor</label>
                            <div class="form-group">
                                   
                                   <select class="form-control" id="exampleSelect1" name="dgo1">
                                      <option value="NA">NA</option>
                                      <option value="OK">OK</option>
                                      <option value="NOK">NOK</option>
                      
                                   </select>
                             </div>
                </div>
                <div class="form-group">
                            <label for="exampleInputEmail1">Verificar a existência de  plaquetas de identificação nos cabos instalados</label>
                            <div class="form-group">
                                   
                                   <select class="form-control" id="exampleSelect1" name="dgo2">
                                      <option value="NA">NA</option>
                                      <option value="OK">OK</option>
                                      <option value="NOK">NOK</option>
                      
                                   </select>
                             </div>
                </div>
                <div class="form-group">
                            <label for="exampleInputEmail1">Verificar se as unidades básicas, cordões ópticos e fibras estão acomodadas nos estojos/bandejas, livres de entrelaçamentos, esmagamentos e curvaturas</label>
                            <div class="form-group">
                                   
                                   <select class="form-control" id="exampleSelect1" name="dgo3">
                                      <option value="NA">NA</option>
                                      <option value="OK">OK</option>
                                      <option value="NOK">NOK</option>
                      
                                   </select>
                             </div>
                </div>
                <div class="form-group">
                            <label for="exampleInputEmail1">Verificar a existência dos adaptadores nos conectores das monofibras (PIG-TAIL)</label>
                            <div class="form-group">
                                   
                                   <select class="form-control" id="exampleSelect1" name="dgo4">
                                      <option value="NA">NA</option>
                                      <option value="OK">OK</option>
                                      <option value="NOK">NOK</option>
                      
                                   </select>
                             </div>
                </div>
                <div class="form-group">
                            <label for="exampleInputEmail1">Verificar se os adaptadores dos conectores das fibras vagas estão fixados e tamponados</label>
                            <div class="form-group">
                                   
                                   <select class="form-control" id="exampleSelect1" name="dgo5">
                                      <option value="NA">NA</option>
                                      <option value="OK">OK</option>
                                      <option value="NOK">NOK</option>
                      
                                   </select>
                             </div>
                </div>
                <div class="form-group">
                            <label for="exampleInputEmail1">Verificar a fixação correta do cabo óptico no bastidor do DGO</label>
                            <div class="form-group">
                                   
                                   <select class="form-control" id="exampleSelect1" name="dgo6">
                                      <option value="NA">NA</option>
                                      <option value="OK">OK</option>
                                      <option value="NOK">NOK</option>
                      
                                   </select>
                             </div>
                </div>
                <div class="form-group">
                            <label for="exampleInputEmail1">Verificar a existência de canaleta ou mangueria corrugada para monofibras (item válido somente na implantação de novo DGO)</label>
                            <div class="form-group">
                                   
                                   <select class="form-control" id="exampleSelect1" name="dgo7">
                                      <option value="NA">NA</option>
                                      <option value="OK">OK</option>
                                      <option value="NOK">NOK</option>
                      
                                   </select>
                             </div>
                </div>
                <div class="form-group">
                            <label for="exampleInputEmail1">Verificar se o DGO, BEO e DIO estão aterrados. (item válido somente para DGO, BEO e DIO novos)</label>
                            <div class="form-group">
                                   
                                   <select class="form-control" id="exampleSelect1" name="dgo8">
                                      <option value="NA">NA</option>
                                      <option value="OK">OK</option>
                                      <option value="NOK">NOK</option>
                      
                                   </select>
                             </div>
                </div>
                <div class="form-group">
                            <label for="exampleInputEmail1">Verificar se o DGO, BEO e DIO estão homologados</label>
                            <div class="form-group">
                                   
                                   <select class="form-control" id="exampleSelect1" name="dgo9">
                                      <option value="NA">NA</option>
                                      <option value="OK">OK</option>
                                      <option value="NOK">NOK</option>
                      
                                   </select>
                             </div>
                </div>
                  
      </div>
    </div>
  </div>

  <div class="card">
    <div class="card-header" id="headingThree">
      <h5 class="mb-0">
      <a  data-toggle="collapse" href="#collapseFour" role="button" aria-expanded="false" aria-controls="collapseExample">
      Cabo Óptico Interno
      </a>
      </h5>
    </div>
    <div id="collapseFour" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
      <div class="card-body">
                <div class="form-group">
                            <label for="exampleInputEmail1">Verificar se os cabos estão arrumados e amarrados nos degraus do porão e na sala de transmissão</label>
                            <div class="form-group">
                                   
                                   <select class="form-control" id="exampleSelect1" name="coi1">
                                      <option value="NA">NA</option>
                                      <option value="OK">OK</option>
                                      <option value="NOK">NOK</option>
                      
                                   </select>
                             </div>
                </div>
                <div class="form-group">
                            <label for="exampleInputEmail1">Verificar a existência de plaquetas de identificação nos cabos</label>
                            <div class="form-group">
                                   
                                   <select class="form-control" id="exampleSelect1" name="coi2">
                                      <option value="NA">NA</option>
                                      <option value="OK">OK</option>
                                      <option value="NOK">NOK</option>
                      
                                   </select>
                             </div>
                </div>
                <div class="form-group">
                            <label for="exampleInputEmail1">Verificar a existência de tamponamento nos furos dos subdutos / dutos de acesso à sala de transmissão e na saída do porão</label>
                            <div class="form-group">
                                   
                                   <select class="form-control" id="exampleSelect1" name="coi3">
                                      <option value="NA">NA</option>
                                      <option value="OK">OK</option>
                                      <option value="NOK">NOK</option>
                      
                                   </select>
                             </div>
                </div>
                <div class="form-group">
                            <label for="exampleInputEmail1">Verificar se o cabo não está comprometendo a arrumação da caixa de emenda</label>
                            <div class="form-group">
                                   
                                   <select class="form-control" id="exampleSelect1" name="coi4">
                                      <option value="NA">NA</option>
                                      <option value="OK">OK</option>
                                      <option value="NOK">NOK</option>
                      
                                   </select>
                             </div>
                </div>
                
                  
      </div>
    </div>
  </div>


  <div class="card">
    <div class="card-header" id="headingThree">
      <h5 class="mb-0">
      <a  data-toggle="collapse" href="#collapseFive" role="button" aria-expanded="false" aria-controls="collapseExample">
      Cabo Óptico Externo Subterrâneo/Enterrado
      </a>
      </h5>
    </div>
    <div id="collapseFive" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
      <div class="card-body">
                <div class="form-group">
                            <label for="exampleInputEmail1">Verificar arrumação dos cabos nos degraus das caixas subterrênea</label>
                            <div class="form-group">
                                   
                                   <select class="form-control" id="exampleSelect1" name="coe1">
                                      <option value="NA">NA</option>
                                      <option value="OK">OK</option>
                                      <option value="NOK">NOK</option>
                      
                                   </select>
                             </div>
                </div>
                <div class="form-group">
                            <label for="exampleInputEmail1">Verificar a existência de plaquetas de identificação nos cabos</label>
                            <div class="form-group">
                                   
                                   <select class="form-control" id="exampleSelect1" name="coe2">
                                      <option value="NA">NA</option>
                                      <option value="OK">OK</option>
                                      <option value="NOK">NOK</option>
                      
                                   </select>
                             </div>
                </div>
                <div class="form-group">
                            <label for="exampleInputEmail1">Verificar a existência das regretas e degraus</label>
                            <div class="form-group">
                                   
                                   <select class="form-control" id="exampleSelect1" name="coe3">
                                      <option value="NA">NA</option>
                                      <option value="OK">OK</option>
                                      <option value="NOK">NOK</option>
                      
                                   </select>
                             </div>
                </div>
                <div class="form-group">
                            <label for="exampleInputEmail1">Verificar a estrutura e as tampas das novas caixas subterrâneas</label>
                            <div class="form-group">
                                   
                                   <select class="form-control" id="exampleSelect1" name="coe4">
                                      <option value="NA">NA</option>
                                      <option value="OK">OK</option>
                                      <option value="NOK">NOK</option>
                      
                                   </select>
                             </div>
                </div>
                <div class="form-group">
                            <label for="exampleInputEmail1">Verificar a fixação correta da caixa de emenda no suporte de acomodação</label>
                            <div class="form-group">
                                   
                                   <select class="form-control" id="exampleSelect1" name="coe5">
                                      <option value="NA">NA</option>
                                      <option value="OK">OK</option>
                                      <option value="NOK">NOK</option>
                      
                                   </select>
                             </div>
                </div>
                <div class="form-group">
                            <label for="exampleInputEmail1">Verificar se os raios de curvatura dos cabos não estão comprometendo a integridade dos mesmos</label>
                            <div class="form-group">
                                   
                                   <select class="form-control" id="exampleSelect1" name="coe6">
                                      <option value="NA">NA</option>
                                      <option value="OK">OK</option>
                                      <option value="NOK">NOK</option>
                      
                                   </select>
                             </div>
                </div>
                <div class="form-group">
                            <label for="exampleInputEmail1">Verificar a existência de tamponamentos nos furos dos subdutos / dutos</label>
                            <div class="form-group">
                                   
                                   <select class="form-control" id="exampleSelect1" name="coe7">
                                      <option value="NA">NA</option>
                                      <option value="OK">OK</option>
                                      <option value="NOK">NOK</option>
                      
                                   </select>
                             </div>
                </div>
                <div class="form-group">
                            <label for="exampleInputEmail1">Verificar se cabo óptico está dentro das especificações do projeto</label>
                            <div class="form-group">
                                   
                                   <select class="form-control" id="exampleSelect1" name="coe8">
                                      <option value="NA">NA</option>
                                      <option value="OK">OK</option>
                                      <option value="NOK">NOK</option>
                      
                                   </select>
                             </div>
                </div>
                <div class="form-group">
                            <label for="exampleInputEmail1">Verificar a existência da tubulação / canaleta e suportes em viadutos / pontes</label>
                            <div class="form-group">
                                   
                                   <select class="form-control" id="exampleSelect1" name="coe9">
                                      <option value="NA">NA</option>
                                      <option value="OK">OK</option>
                                      <option value="NOK">NOK</option>
                      
                                   </select>
                             </div>
                </div>
                <div class="form-group">
                            <label for="exampleInputEmail1">Verificar se o traçado do cabo obedece o AS BUILT</label>
                            <div class="form-group">
                                   
                                   <select class="form-control" id="exampleSelect1" name="coe10">
                                      <option value="NA">NA</option>
                                      <option value="OK">OK</option>
                                      <option value="NOK">NOK</option>
                      
                                   </select>
                             </div>
                </div>
                
                  
      </div>
    </div>
  </div>


  <div class="card">
    <div class="card-header" id="headingThree">
      <h5 class="mb-0">
      <a  data-toggle="collapse" href="#collapseSix" role="button" aria-expanded="false" aria-controls="collapseExample">
      Cabo Óptico Externo Aéreo
      </a>
      </h5>
    </div>
    <div id="collapseSix" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
      <div class="card-body">
                <div class="form-group">
                            <label for="exampleInputEmail1">Verificar se a fixação e a arrumação da caixa de emenda e/ou sobra técnica está em RAC (no poste) ou em gota (no lance), conforme projeto</label>
                            <div class="form-group">
                                   
                                   <select class="form-control" id="exampleSelect1" name="coea1">
                                      <option value="NA">NA</option>
                                      <option value="OK">OK</option>
                                      <option value="NOK">NOK</option>
                      
                                   </select>
                             </div>
                </div>
                <div class="form-group">
                            <label for="exampleInputEmail1">Verificar estado de conservação do poste Oi e se o mesmo está inclinado</label>
                            <div class="form-group">
                                   
                                   <select class="form-control" id="exampleSelect1" name="coea2">
                                      <option value="NA">NA</option>
                                      <option value="OK">OK</option>
                                      <option value="NOK">NOK</option>
                      
                                   </select>
                             </div>
                </div>
                <div class="form-group">
                            <label for="exampleInputEmail1">Verificar a existência de plaquetas de identificação nos cabos</label>
                            <div class="form-group">
                                   
                                   <select class="form-control" id="exampleSelect1" name="coea3">
                                      <option value="NA">NA</option>
                                      <option value="OK">OK</option>
                                      <option value="NOK">NOK</option>
                      
                                   </select>
                             </div>
                </div>
                <div class="form-group">
                            <label for="exampleInputEmail1">Verificar a placa de identificação da caixa de emendas</label>
                            <div class="form-group">
                                   
                                   <select class="form-control" id="exampleSelect1" name="coea4">
                                      <option value="NA">NA</option>
                                      <option value="OK">OK</option>
                                      <option value="NOK">NOK</option>
                      
                                   </select>
                             </div>
                </div>
                <div class="form-group">
                            <label for="exampleInputEmail1">Verificar se os raios de curvatura dos cabos não estão comprometendo a integridade dos mesmos</label>
                            <div class="form-group">
                                   
                                   <select class="form-control" id="exampleSelect1" name="coea5">
                                      <option value="NA">NA</option>
                                      <option value="OK">OK</option>
                                      <option value="NOK">NOK</option>
                      
                                   </select>
                             </div>
                </div>
                <div class="form-group">
                            <label for="exampleInputEmail1">Verificar se os cabos estão a 5 metros do solo nas travessias em rede urbana e a 7 metros em rodovias</label>
                            <div class="form-group">
                                   
                                   <select class="form-control" id="exampleSelect1" name="coea6">
                                      <option value="NA">NA</option>
                                      <option value="OK">OK</option>
                                      <option value="NOK">NOK</option>
                      
                                   </select>
                             </div>
                </div>
                <div class="form-group">
                            <label for="exampleInputEmail1">Verificar se as caixas de emendas aéreas estão a 5 metros do solo</label>
                            <div class="form-group">
                                   
                                   <select class="form-control" id="exampleSelect1" name="coea7">
                                      <option value="NA">NA</option>
                                      <option value="OK">OK</option>
                                      <option value="NOK">NOK</option>
                      
                                   </select>
                             </div>
                </div>
                <div class="form-group">
                            <label for="exampleInputEmail1">Verificar a existência das ferragens / ancoragens (tensão ao encabeçamento), cordoalhas, espinamento, suporte dielétrico, aterramento e miscelâneos</label>
                            <div class="form-group">
                                   
                                   <select class="form-control" id="exampleSelect1" name="coea8">
                                      <option value="NA">NA</option>
                                      <option value="OK">OK</option>
                                      <option value="NOK">NOK</option>
                      
                                   </select>
                             </div>
                </div>
                <div class="form-group">
                            <label for="exampleInputEmail1">Verificar se o cabo está em atrito entre galhos de árvore / vegetação</label>
                            <div class="form-group">
                                   
                                   <select class="form-control" id="exampleSelect1" name="coea9">
                                      <option value="NA">NA</option>
                                      <option value="OK">OK</option>
                                      <option value="NOK">NOK</option>
                      
                                   </select>
                             </div>
                </div>
                <div class="form-group">
                            <label for="exampleInputEmail1">Verificar a integridade física do cabo</label>
                            <div class="form-group">
                                   
                                   <select class="form-control" id="exampleSelect1" name="coea10">
                                      <option value="NA">NA</option>
                                      <option value="OK">OK</option>
                                      <option value="NOK">NOK</option>
                      
                                   </select>
                             </div>
                </div>
                <div class="form-group">
                            <label for="exampleInputEmail1">Verificar a distância mínima de segurança do cabo óptico em relação a rede de alta tensão. Norma ABNT: DISTÂNCIAS MÍNIMAS (m) Até 600 V 0,60 acima de 600 V a 15.000 V 1,50  acima de 15.000 V a 35.000 V 1,80</label>
                            <div class="form-group">
                                   
                                   <select class="form-control" id="exampleSelect1" name="coea11">
                                      <option value="NA">NA</option>
                                      <option value="OK">OK</option>
                                      <option value="NOK">NOK</option>
                      
                                   </select>
                             </div>
                </div>
                <div class="form-group">
                            <label for="exampleInputEmail1">Verificar as subidas laterais, conforme padrão</label>
                            <div class="form-group">
                                   
                                   <select class="form-control" id="exampleSelect1" name="coea12">
                                      <option value="NA">NA</option>
                                      <option value="OK">OK</option>
                                      <option value="NOK">NOK</option>
                      
                                   </select>
                             </div>
                </div>
                <div class="form-group">
                            <label for="exampleInputEmail1">Se o cabo for DD, verificar se o mesmo está espinado na cordoalha</label>
                            <div class="form-group">
                                   
                                   <select class="form-control" id="exampleSelect1" name="coea13">
                                      <option value="NA">NA</option>
                                      <option value="OK">OK</option>
                                      <option value="NOK">NOK</option>
                      
                                   </select>
                             </div>
                </div>
                <div class="form-group">
                            <label for="exampleInputEmail1">Verificar a existência de emenda fora do padrão e/ou caixa não homologada</label>
                            <div class="form-group">
                                   
                                   <select class="form-control" id="exampleSelect1" name="coea14">
                                      <option value="NA">NA</option>
                                      <option value="OK">OK</option>
                                      <option value="NOK">NOK</option>
                      
                                   </select>
                             </div>
                </div>
                <div class="form-group">
                            <label for="exampleInputEmail1">Verificar se o traçado do cabo obedece o AS BUILT</label>
                            <div class="form-group">
                                   
                                   <select class="form-control" id="exampleSelect1" name="coea15">
                                      <option value="NA">NA</option>
                                      <option value="OK">OK</option>
                                      <option value="NOK">NOK</option>
                      
                                   </select>
                             </div>
                </div>
                  
      </div>
    </div>
  </div>


  <div class="card">
    <div class="card-header" id="headingThree">
      <h5 class="mb-0">
      <a  data-toggle="collapse" href="#collapseSeven" role="button" aria-expanded="false" aria-controls="collapseExample">
      CDOE/I
      </a>
      </h5>
    </div>
    <div id="collapseSeven" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
      <div class="card-body">
                <div class="form-group">
                            <label for="exampleInputEmail1">Verificar se a CDOE/I está corretamente identificada</label>
                            <div class="form-group">
                                   
                                   <select class="form-control" id="exampleSelect1" name="cdoe1">
                                      <option value="NA">NA</option>
                                      <option value="OK">OK</option>
                                      <option value="NOK">NOK</option>
                      
                                   </select>
                             </div>
                </div>
                <div class="form-group">
                            <label for="exampleInputEmail1">Verificar se os cordões ópticos e fibras estão acomodadas nos estojos/bandejas, livres de entrelaçamentos, esmagamentos e curvaturas</label>
                            <div class="form-group">
                                   
                                   <select class="form-control" id="exampleSelect1" name="cdoe2">
                                      <option value="NA">NA</option>
                                      <option value="OK">OK</option>
                                      <option value="NOK">NOK</option>
                      
                                   </select>
                             </div>
                </div>
                <div class="form-group">
                            <label for="exampleInputEmail1">Verificar se a CDOE/I está corretamente fixada</label>
                            <div class="form-group">
                                   
                                   <select class="form-control" id="exampleSelect1" name="cdoe3">
                                      <option value="NA">NA</option>
                                      <option value="OK">OK</option>
                                      <option value="NOK">NOK</option>
                      
                                   </select>
                             </div>
                </div>
                <div class="form-group">
                            <label for="exampleInputEmail1">Verificar se a altura da CDOE está de acordo com os padrões de construção Oi</label>
                            <div class="form-group">
                                   
                                   <select class="form-control" id="exampleSelect1" name="cdoe4">
                                      <option value="NA">NA</option>
                                      <option value="OK">OK</option>
                                      <option value="NOK">NOK</option>
                      
                                   </select>
                             </div>
                </div>
                
                  
      </div>
    </div>
  </div>


  <div class="card">
    <div class="card-header" id="headingEight">
      <h5 class="mb-0">
      <a  data-toggle="collapse" href="#collapseEight" role="button" aria-expanded="false" aria-controls="collapseExample">
      Documentos / Cadastro / Supervisão
      </a>
      </h5>
    </div>
    <div id="collapseEight" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
      <div class="card-body">
                <div class="form-group">
                            <label for="exampleInputEmail1">Documentação disponível para aceitação (Projeto Provisório, Testes do cabo óptico)</label>
                            <div class="form-group">
                                   
                                   <select class="form-control" id="exampleSelect1" name="doc1">
                                      <option value="NA">NA</option>
                                      <option value="OK">OK</option>
                                      <option value="NOK">NOK</option>
                      
                                   </select>
                             </div>
                </div>
                <div class="form-group">
                            <label for="exampleInputEmail1">Cadastro no NETWIN</label>
                            <div class="form-group">
                                   
                                   <select class="form-control" id="exampleSelect1"name="doc2">
                                      <option value="NA">NA</option>
                                      <option value="OK">OK</option>
                                      <option value="NOK">NOK</option>
                      
                                   </select>
                             </div>
                </div>
                <div class="form-group">
                            <label for="exampleInputEmail1">Cabo óptico implantado com Supervisão de Rede Óptica – SRO (Para casos onde é possível supervisionar através de PRS/RTU existente na Planta)</label>
                            <div class="form-group">
                                   
                                   <select class="form-control" id="exampleSelect1" name="doc3">
                                      <option value="NA">NA</option>
                                      <option value="OK">OK</option>
                                      <option value="NOK">NOK</option>
                      
                                   </select>
                             </div>
                </div>
                <div class="form-group">
                            <label for="exampleInputEmail1">Cadastro no SGRO / SRO (Rota de supervisão, estações, caixas de emenda, marcos) - (Para casos onde é possível supervisionar através de PRS/RTU existente na Planta)</label>
                            <div class="form-group">
                                   
                                   <select class="form-control" id="exampleSelect1" name="doc4">
                                      <option value="NA">NA</option>
                                      <option value="OK">OK</option>
                                      <option value="NOK">NOK</option>
                      
                                   </select>
                             </div>
                </div>
                
                  
      </div>
    </div>
  </div>

  


  <div class="card">
    <div class="card-header" id="headingNine">
      <h5 class="mb-0">
      <a  data-toggle="collapse" href="#collapseNine" role="button" aria-expanded="false" aria-controls="collapseExample">
      Evidencias
      </a>
      </h5>
    </div>
    <div id="collapseNine" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
      <div class="card-body">
              <div class="form-group">
                    <label for="exampleTextarea">OBS</label>
                    <textarea class="form-control" maxlength="300" id="exampleTextarea"  rows="3" name="obs"></textarea>
              </div>

              <div class="form-group">
                    
                    <input class="form-control-file"  required id="foto" name="foto1" type="file" aria-describedby="fileHelp"><small class="form-text text-muted" id="fileHelp">Tamanho máximo permitido 1 MB</small>
              </div>
              <div class="form-group">
                    
                    <input class="form-control-file"  required id="foto" name="foto2" type="file" aria-describedby="fileHelp"><small class="form-text text-muted" id="fileHelp">Tamanho máximo permitido 1 MB</small>
                  </div>
                  <button class="btn btn-primary" type="submit">Submit</button>

                  </form>
      </div>
    </div>
  </div>
</div>
                </form>
              </div>
            </div>
            
          </div>
        </div>
      </div>
    </main>
    <!-- Essential javascripts for application to work-->
  
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="js/plugins/pace.min.js"></script>
    <!-- Page specific javascripts-->
    <!-- Google analytics script-->
    <script type="text/javascript">
      if(document.location.hostname == 'pratikborsadiya.in') {
      	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
      	ga('create', 'UA-72504830-1', 'auto');
      	ga('send', 'pageview');
      }
    </script>
  </body>
</html>


<script>
$(function() {

/*var  availableTags = [

"ajskkdp",
"iiisosoa",
"ooiismsm",
"aassdddd",
"ooedmmmd",
"iisoosoos"
];

$( "#cabo" ).autocomplete({
  source: availableTags

  });
*/

$.getJSON("listar_cabos.php", function(data){
//console.log(data);
var retorno = [];


$(data).each( function (key, value){

 // console.log(value.cabo);

 retorno.push(value.cabo);


});
$("#cabo").autocomplete({
  source: retorno ,

 

  });




  });
});






</script>