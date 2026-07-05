<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Booking Futsal</title>

	<link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css') ?>" />
</head>

<body>

<?= $this->include('layouts/navbar'); ?>

<!-- HERO -->
<div class="p-5 mb-4 bg-success text-white rounded-3">
	<div class="container py-5">
		<h1 class="display-5 fw-bold">⚽ Booking Lapangan Futsal</h1>
		<p class="col-md-8 fs-5">
			Pesan lapangan futsal sebelum jam 23.00 .
		</p>
		<a href="/post" class="btn btn-light btn-lg">Lihat Jadwal</a>
	</div>
</div>

<!-- FITUR -->
<div class="container">
	<div class="row text-center">

		<div class="col-md-4">
			<h3>⚡ Cepat</h3>
			<p>Booking lapangan hanya dalam beberapa klik.</p>
		</div>

		<div class="col-md-4">
			<h3>📅 Jadwal Lengkap</h3>
			<p>Lihat ketersediaan lapangan secara real-time.</p>
		</div>

		<div class="col-md-4">
			<h3>🔐 Aman</h3>
			<p>Sistem login untuk keamanan data booking.</p>
		</div>

	</div>
</div>

<!-- FOOTER -->
<div class="container py-4">
	<footer class="pt-3 mt-4 text-muted border-top">
		&copy; <?= date('Y') ?> Booking Futsal
	</footer>
</div>

<script src="<?= base_url('js/bootstrap.min.js') ?>"></script>

</body>
</html>