<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>MyBlog</title>

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css') ?>" />
</head>

<body>

	<?= $this->include('layouts/navbar'); ?>

	<div class="p-5 mb-4 bg-light rounded-3">
      <div class="container py-5">
        <h1 class="display-5 fw-bold">Lapangan Futsal</h1>
         <p class="col-md-8 fs-5">Buka jam 06.00 - 23.00</p>
		 <a href="/post/create" class="btn btn-success mt-3">
    + Booking Lapangan
</a>
        <!-- <p class="col-md-8 fs-4">di laman portal berita</p> -->
        <!-- <button class="btn btn-primary btn-sm" type="button">Read more</button> -->
      </div>
    </div>

	<div class="container">
		<div class="row">
			<?php foreach ($posts as $post) : ?>
				<div class="col-md-12 my-3">
	<div class="card shadow-sm border-0">
		<div class="card-body">
						<h5 class="h5">⚽ <?= $post['title'] ?></h5>

<small class="text-muted">
    Jadwal: <?= date('d M Y', strtotime($post['created_at'])) ?>
</small>

<p><?= substr($post['content'], 0, 120) ?></p>
<div class="mt-2">
    <a href="/post/<?= $post['slug'] ?>" class="btn btn-sm btn-success">Detail</a>

    <?php if(session()->get('logged_in')): ?>
        <a href="/admin/post/<?= $post['id'] ?>/edit" class="btn btn-sm btn-warning">Edit</a>
        <a href="/admin/post/<?= $post['id'] ?>/delete" class="btn btn-sm btn-danger">Hapus</a>
    <?php endif; ?>
</div>
					</div>
				</div>
			<?php endforeach ?>
		</div>
	</div>
	<div class="container py-4">
		<footer class="pt-3 mt-4 text-muted border-top">
			<div class="container">
				&copy; <?= Date('Y') ?>
			</div>
		</footer>
	</div>

	<!-- Jquery dan Bootsrap JS -->
	<script src="<?= base_url('js/jquery.min.js') ?>"></script>
	<script src="<?= base_url('js/bootstrap.min.js') ?>"></script>

</body>

</html>