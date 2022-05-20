<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Extra</title>
	<link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style1.css">
	<link rel="icon" href="images/kawa.jpg">
</head>

<body>
<header > 
        <div class="logo">
            <img src="images/templatemo_image_01.jpg" width="2000px" height="80px">
        </div>

        <div class="titulo">
            <label class="slogan" >Slogan:El vehiculo que quieras al precio que prefieras</label>
        </div>

        <div class="input">
            
		<ul>
			
			<li><a href="index.php">Inicio</a></li>
		</ul>
        </div>
    
    </header>
	
	<?php include('includes/nav2.php');?>

			
<div class="wrapp">
      
    <div class="tabla">
        <table>
		<tr>
			<th>Nombre</th>
			<th>Modelo</th>
			<th>Color</th>
			<th>Foto</th>
		
		</tr>
		<tr>
        <td>Kawasaki</td>
		  <td>2019</td>
		  <td style="background-color: red;"></td>
		  <td><img src="images/kawa.jpg" width="50%">	</td>
		  
		</tr>
		<tr>
        <td>Pulsar 180</td>
		  <td> 2018</td>
		  <td style="background-color: greenyellow;"></td>
		  <td><img src="images/pulsar.jpg" width="50%"></td>
		  
		  
		</tr>
		<tr>
        <td>Yamaha MT-125</td>
		  <td> 2021</td>
		  <td style="background-color:#08D0D5 ;"></td>
		  <td><img src="images/yamaha.jpg" width="50%"></td>
		  
		  
		</tr>
		<td>Aprilia RSV 1000 R</td>
		  <td> 2020</td>
		  <td style="background-color:#EAEDED ;"></td>
		  <td><img src="images/aprilla.jpg" width="50%"></td>
		  
		  
		</tr>
		<td>MV Agusta F4 1000 R</td>
		  <td> 2019</td>
		  <td style="background-color:black ;"></td>
		  <td><img src="images/mv.jpg" width="50%"></td>
		  
		  
		</tr>
		
	 </table>
    </div>
    
    <div class="encabezado">
        
			<aside>
				<div class="widget">
					<h3>Encabezado</h3>
					<ul>
                        <li><a href="extra.php">Inicio</a></li>
                        <li><a href="carros.php">Carros</a></li>					                    
                        <li><a href="aviones.php">Aviones</a></li>
                        <li><a href="yates.php">Yates</a></li>                        
                        
                    </ul>
				</div>
			</aside>
    </div>
</div>
		
  

		<br>
				<br>
				<br>
	<?php include('includes/footer.php');?>

</body>
</html>