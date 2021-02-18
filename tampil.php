<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>Buku Tamu</title>
  </head>
  <body>
    <!-- navbar -->
        <nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark">
          <div class="container-fluid">
            <a class="navbar-brand page-scroll" href="#">Buku Tamu</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="tampil.php">Daftar Tamu</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
    <!-- akhir navbar -->
    <div class="container">
      <div class="card">
          <div class="card-header">   
			<h1>Daftar Tamu</h1>
          </div>
      <div class="card-body">
	<div class="table-responsive">
	<table class="table table-striped">
	  <thead class="table-dark">
	    <tr>
	    	<th scope="col">Nama</th>
			<th scope="col">Nim</th>
			<th scope="col">Jurusan</th>
			<th scope="col">Alamat</th>
			<th scope="col">Tanggal Sekarang</th>
			<th scope="col">Tanggal Lahir</th>
			<th scope="col">Usia</th>
			<th scope="col">Telepon</th>
			<th scope="col">Komentar</th>

	    </tr>
	  </thead >
	  <tbody>
		<?php

		$con = mysqli_connect("localhost","root","","modul5");
		// Check connection
		if (mysqli_connect_errno()) {
			echo "Failed to connect to MySQL: " . mysqli_connect_error();
		exit();
		}
		
		$sql= "select * from bukutamu";
		$result = mysqli_query($con,$sql);
		while ($row=mysqli_fetch_array($result)) {
		?>
		
		<tr>
			<td><?php echo $row[0] ?></td>
			<td><?php echo $row[1] ?></td>
			<td><?php echo $row[2] ?></td>
			<td><?php echo $row[3] ?></td>
			<td><?php echo $row[4] ?></td>
			<td><?php echo $row[5] ?></td>
			<td><?php 
				$dob = new DateTime($row[4]);
				$now = new DateTime($row[5]);
				$difference = $now->diff($dob);
				$umur = $difference->y;
				echo $umur; ?></td>
			<td><?php echo $row[6] ?></td>
			<td><?php echo $row[7] ?></td>
		</tr>
		<?php
		}
?>		
		</tbody>
		<tr>
			<td colspan="9">
				<?php
				if ($result=mysqli_query($con,$sql))
				  {
				  // Return the number of rows in result set
				  $rowcount=mysqli_num_rows($result);
				  printf("Result set has %d rows.\n",$rowcount);
				  // Free result set
				  mysqli_free_result($result);
				  }
			?></td>

		</tr>

	</table>
</div>
</div>
</div>
</div>
</body>
</html>