<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title></title>
</head>
<body>

	<div class="wrapper">
		<dir class="content">
           <h1 class="title"> Currency exchange </h1>
	      	<form action="exchange.php" method="GET">
	      
	      <div class="box-money-exch">
	      	<input type="text" name="number" class="input-box-money-exch" placeholder=" MONEY EXCHANGE"><br><br>
		  </div>

		  		<div class="box-select-money">
				<select class="select-money" name="form">
	      			<option value="THB">THB</option>
	      			<option value="KRW">KOREA</option>
	      			<option value="JPY">JAPAN</option>
	      			<option value="USD">USD</option>
	      		</select>
	      		</div>


	      		<div class="box-select-money">
	      		<select class="to-money select-money" name="to">
	      			<option value="THB">THB</option>
	      			<option value="KRW">KOREA</option>
	      			<option value="JPY">JAPAN</option>
	      			<option value="USD">USD</option>
	      		</select><br><br>
	      		</div>

	                 	<div class="money-exc">
	                  		<?php
	                 			 session_start();
	                 			 if ( isset($_SESSION["moneylast"])&&isset($_SESSION["resultlast"])){
	                       		 echo $_SESSION["moneylast"]." : ".$_SESSION["resultlast"];
	                 		 	}  
	                  		?>
	            </div>


	      		<div class="box-button-exch">
	      			<input type="submit" name="submit" class="box-button-exch" value="exchange" >
	      		</div> <!-- button-exch -->  	 	
				</form>	
		</dir> <!-- content -->
    </div> <!-- wrapper -->

</body>
</html>