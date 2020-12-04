<!DOCTYPE html>

<html lang="pt-br">

<head>

  <meta http-equiv="refresh" content="60;">
  <link href="css/bootstrap.css" rel="stylesheet">
  <title>Programacao</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="estilo.css" rel="stylesheet">

</head>

<body>

  <script type="text/jacascript" src="js/bootstrap.js"></script>

  <div class="container-fluid">

    <div id="titulo" class="col-sm-12" style="margin-top: 2%">
      <img src="logo.gif" alt="NAVIOS" title="NAVIOS" width="170" height="80" align='left'/>

      <h1 style="margin-left: 30%; position: absolute;margin-top: 2%">
        Programação de Entrega
      </h1>
    </div>
    

    <div class="col-sm-12"  style="margin-top: 100px">
      <table class="table">

        <thead class="thead-dark">

          <tr>
            <th scope="col">NUM ÚNICO</th>
            <th scope="col">NAVIO</th>
            <th scope="col">ENTREGA</th>
            <th scope="col">DIA</th>
            <th scope="col">PORTO</th>
            <th scope="col">CHANDLER</th>
            <th scope="col">EQUIPE</th>
            <th scope="col">PLACA</th>
            <th scope="col">VEICULO</th>
            <th scope="col">MOTORISTA</th>
          </tr>
        </thead>

        <?php 

        include 'conexao.php';

        $i = 2;

        $query = "select NUMUNICO,NAVIO,ENTREGA,DIA,PORTO,CHANDLER,EQUIPE,PLACA,VEICULO,MOTORISTA

from ENTREGA (nolock)
ORDER BY DIA";

        $stmt = sqlsrv_query($conn, $query);

        while($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)){

          $a = $row['COR'];
          $verde = 'VERDE';
          $amarelo = 'AMARELO';
          $Tverde = strcmp($a, $verde);
          $Tamarelo = strcmp($a, $amarelo);

          if ($Tverde == 0){

           ?>
           <tr class="table" id="texto" style="background-color: #00FF7F">

            <td><b><?php echo $row['UNICO']; ?></b></td>
            <td><b><?php echo $row['NAVIO']; ?></b></td>
            <td><b><?php echo $row['ENTREGA']; ?></b></td>
            <td><b><?php echo $row['DIA']; ?></b></td>
            <td><b><?php echo $row['PORTO']; ?></b></td>
            <td><b><?php echo $row['CHANDLER']; ?></b></td>
            <td><b><?php echo $row['EQUIPE']; ?></b></td>
            <td><b><?php echo $row['PLACA']; ?></b></td>
            <td><b><?php echo $row['VEICULO']; ?></b></td>
            <td><b><?php echo $row['MOTORISTA']; ?></b></td>

          </tr>
          <?php
        }elseif ($Tamarelo == 0) {
          ?>
          <tr class="table" id="texto" style="background-color: yellow">


            <td><b><?php echo $row['UNICO']; ?></b></td>
            <td><b><?php echo $row['NAVIO']; ?></b></td>
            <td><b><?php echo $row['ENTREGA']; ?></b></td>
            <td><b><?php echo $row['DIA']; ?></b></td>
            <td><b><?php echo $row['PORTO']; ?></b></td>
            <td><b><?php echo $row['CHANDLER']; ?></b></td>
            <td><b><?php echo $row['EQUIPE']; ?></b></td>
            <td><b><?php echo $row['PLACA']; ?></b></td>
            <td><b><?php echo $row['VEICULO']; ?></b></td>
            <td><b><?php echo $row['MOTORISTA']; ?></b></td>

          </tr>
          <?php
        }else{
          ?>
          <tr class="table" id="texto" style="background-color: #FF6347">


            <td><b><?php echo $row['UNICO']; ?></b></td>
            <td><b><?php echo $row['NAVIO']; ?></b></td>
            <td><b><?php echo $row['ENTREGA']; ?></b></td>
            <td><b><?php echo $row['DIA']; ?></b></td>
            <td><b><?php echo $row['PORTO']; ?></b></td>
            <td><b><?php echo $row['CHANDLER']; ?></b></td>
            <td><b><?php echo $row['EQUIPE']; ?></b></td>
            <td><b><?php echo $row['PLACA']; ?></b></td>
            <td><b><?php echo $row['VEICULO']; ?></b></td>
            <td><b><?php echo $row['MOTORISTA']; ?></b></td>

          </tr>
          <?php
        }}
        ?>

      </table>

    </div>

    <?php
    sqlsrv_close($conn); //fechando conexao
    ?>

  </div>

</body>
</html>