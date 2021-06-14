<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script> -->
    <title>List Mahasiswa</title>
</head>
<body>
    <div class="container pt-4">
        <div class="card">
            <div class="card-header">
                <h3 class="text-center">Daftar Mahasiswa</h3>
            </div>
			<div class="card-body">
				<div class="table-responsive">
					<table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
						<thead class="text-center">
							<tr>
								<th>Nama</th>
								<th>NRP</th>
								<th>Alamat</th>
								<th>Telepon</th>
							</tr>
						</thead>
						<tbody class="text-center">
							<?php foreach ($mahasiswa as $mhs): ?>
							<tr>
								<td>
									<?php echo $mhs['nama'] ?>
								</td>
								<td>
									<?php echo $mhs['nrp'] ?>
								</td>
								<td>
									<?php echo $mhs['alamat'] ?>
								</td>
								<td>
									<?php echo $mhs['telepon'] ?>
								</td>
							</tr>
							<?php endforeach; ?>
						</tbody>
					</table>
				</div>
				<!-- <button class="btn btn-primary">Tambah Mahasiswa</button> -->
				<a href="http://localhost:8080/add-mahasiswa" class="btn btn-primary" role="button">Tambah Mahasiswa</a>
			</div>
		</div>
    </div>

	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
</body>
</html>