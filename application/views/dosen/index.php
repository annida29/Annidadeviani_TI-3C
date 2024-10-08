<div class="container">
	<div class="row mt-5">
		<div class="col mt-4">

		 <div class="row mt-3">
				<div class="col-md-8">
						<a href="<?= base_url(); ?> dosen/tambah" class="btn btn-primary">Tambah Dosen</a>
				</div>
		 </div>

			<!-- awal flash data -->
			<?php if($this->session->flashdata('flash')) : ?>
					<div class="row mt-3">
						<div class="col-md-8">
							<div class="alert alert-success alert-dismissible fade show" role="alert">
							  Data Dosen<strong> Berhasil </strong><?= $this->session->flashdata('flash');  ?>
							  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
							</div>
						</div>
					</div>
				<?php endif; ?>
			<!-- akhir flash data -->

<!-- place button untuk cari data -->
			<div class="row mt-4">
				<div class="col-md-6">
					<form action="" method="post">
						<div class="input-group">
							<input type="text" class="form-control" placeholder="cari data Dosen..." name="keyword">
							<div class="input-group-append">
								<button class="btn btn-primary" type="submit">cari</button>
							</div>
						</div>
					</form>
				</div>
			</div>

			<!-- Daftar nama dosen -->
			<div class="row mt-4">
			<div class="col-md-6">
				<h3>DAFTAR NAMA DOSEN</h3> 

		<ul class="list-group">
				<?php foreach($dosen as $d); ?>
  		<li class="list-group-item">
  			<?= $d['namadosen']; ?>
  			<a href="<?= base_url();>dosen/hapus<?= $d['id']; ?>" class="badge bg-danger float-right" onclick="return confirm('Anda Yakin?');">Hapus</a>
  			
  		</li>
  	</ul>
			</div>
			</div>
<?php endforeach; ?>