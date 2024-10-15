<div class="container">
     <div class="row mt-5">
          <div class="col-md-4">
               <div class="card">           
                     <div class="card-header">
                    Detail Data Dosen
                    </div>
                    <div class="card-body">
                         <!-- bisa di ganti pakai 'id' atau 'nip' fungsi sama -->
                    <h5 class="card-title"><?= $dosen['nip'];?></h5>
                    <p class="card-text"><?= $dosen['namadosen'];?></p>
                    <a href="<?= base_url(); ?>dosen" class="btn btn-primary">Kembali</a>
               </div>
               </div>
          </div>
     </div>
</div>