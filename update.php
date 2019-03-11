<?php
include 'updatephp.php';	
error_reporting(0);
?>	
<html>
<head>
			<meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>Product Update </title>
			<!--link-->
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
			<!--font awesome-->
			<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
			<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">				
</head>
<body>
		<!--1 navbar-->				
							<nav class="navbar navbar-expend-lg navbar-light bg-dark ">
								<font face="segoe script"size="4px"color="white">Salasar Art & Craft</font>
							</nav>
		<!--container-->
							<div class="container">
								<br><br>
								<form name="update" method="POST" action="update.php" enctype="multipart/form-data">
						<!--1row-->		
									<div class="row">
										<div class="col-lg-12 text-center">
											<legend align="center"><font face="segoe script"><u>Product Update From </u></font></legend>
											<font  color="red" size="3px">Enter update product form in values and receive product from</font>
										</div>
									</div>
						<!--2row--><br>
									<div class="row">
										<div class="col-lg-6">
											<label> Product Title  </label>
												<select name="select" class="form-control" autofocus >
													<option name="beds" value="beds">beds</option>
													<option name="bookshelve" value="bookshelve">bookshelves</option>
													<option name="chair" value="chair">chair</option>
													<option name="decor" value="decor">decor</option>
													<option name="otheritem" value="otheritem">otheritem</option>
													<option name="sideboard" value="sideboard">sideboard</option>
													<option name="sofas" value="sofas">sofas</option>
													<option name="storage" value="storage">storage</option>
													<option name="table1" value="table1">table1</option>
													<option name="wardrobes" value="wardrobes">wardrobes</option>
												</select>
										</div>
										<div class="col-lg-6">
											<label> Product Id </label>
												<input type="number" class="form-control" name="id" placeholder="Enter product Id" required>
										</div>
									</div>
						<!--3row-->	<br>	
									<div class="row">
										<div class="col-lg-4"></div>
										<div class="col-lg-4 text-center">
											<input type="submit" class="btn btn-primary btn-md btn-block" name="Submit" value="Submit">	
										</div>
										<div class="col-lg-4"></div>
									</div>
							</form>	
						<!--4row-->	<br>		
									<div class="row">
										<div class="col-lg-12 text-center">
										<legend align="center"><font face="segoe script"><u>Product From </u></font></legend>
											<font  color="red" size="3px">You can change Product form in</font>
										</div>
									</div>
						<!--5row-->	<br>		
									<div class="row">
										<div class="col-lg-6 text-center">
											<button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample1" aria-expanded="false" aria-controls="collapseExample1">
												Updata photo of Product
											</button>
											
											<div class="collapse" id="collapseExample1">
												<div class="card card-body">
													<form name="update1" method="POST" action="update.php" enctype="multipart/form-data">
													<label>photo1</label>
													<?php echo "<img src='$photo1' height='100px' width='100px'>";?>
													<br><input type="file"  name="file1" placeholder="choose product file"  required>
												<br><br><br>
													
													<label>photo2</label>
													<?php echo "<img src='$photo2' height='100px' width='100px'>";?>
													<br><input type="file"  name="file2" placeholder="choose product file"  required>	
													<br><br><br>
													
													<label>photo3</label>
													<?php echo "<img src='$photo3' height='100px' width='100px'>";?><br>
													<input type="file"  name="file3" placeholder="choose product file"  required>		
													<br><br><br>
													<input type="submit"  name="Submit1" value="update photo"  class="btn btn-primary" required>		
													
													</form>
												</div>
											</div>
										</div>
										<br><br><br><br>
										<div class="col-lg-6 text-center">
											
											<button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample2" aria-expanded="false" aria-controls="collapseExample2">
												Update content of product
											</button>
											
											<div class="collapse" id="collapseExample2">
												<div class="card card-body">
											<form name="update1" method="POST" action="update.php" enctype="multipart/form-data">
										<label> Product Id </label>
		<input type="number" class="form-control" name="id" placeholder="Enter product Id" value="<?php echo $p_id; ?>" required>
								<label> Product Name </label>
		<input type="text" class="form-control" name="name" placeholder="Enter product name" value="<?php echo $name; ?>" required>	
								<label> Product Cost </label>
		<input type="number" class="form-control" name="cost" placeholder="Enter product cost" value="<?php echo $cost; ?>" required>
								<label> Product Description </label>
		<textarea class="form-control" name="data" rows="3" placeholder="something special word..." ><?php echo $data; ?></textarea>	
		<label>Type of wood</label>
												<input type="text" class="form-control" name="wood"  placeholder="type of wood use in product" value="<?php echo $wood; ?>"required>
		<br>
		<input type="submit"  name="Submit2" value="update Details"  class="btn btn-primary" required>		
													
			</form>
												</div>
											</div>
										
										
										
										</div>
									
									</div>	
								<br>			
							</div>		
</body>

</html>
						