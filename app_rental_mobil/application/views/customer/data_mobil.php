<div style="height: 40px;"></div>

<section class="blog-posts grid-system">
  <div class="container">
    <?= $this->session->flashdata('pesan'); ?>
    <div class="all-blog-posts">
      <div class="row">

        <?php foreach($mobil as $mb): ?>
        <div class="col-md-4 col-sm-6">
          <div class="blog-post">
            <div class="blog-thumb mb-1">
              <img width=100 height=200 src="<?= base_url('assets/upload/') . $mb->gambar ?>" alt="">
            </div>
            
            <div class="down-content" padding=20px>
              <div class="row">
                <div class="col-lg-12">
                  <ul class="post-tags d-flex justify-content-center">
                    <a href="offers.html"><h4><?= $mb->merek; ?></h4></a>
                  </ul>
                  <ul class="post-tags d-flex justify-content-center">
                    <span>Rp. <?= number_format($mb->harga,0,',','.'); ?>,-</span> <strong>per hari</strong>
                  </ul>
                </div>
              </div>

              <div class="post-options">
                <div class="row">
                  <div class="col-lg-12">
                    <ul class="post-tags d-flex justify-content-center">
                      <?php 
                      if($mb->status == "1"){ ?>
                        <a class="btn btn-lg btn-success mt-2 mr-1" href="<?= base_url('customer/rental/tambah_rental/'.$mb->id_mobil) ?>"> Rental</a>
                      <?php }
                      else{ ?>
                        <a class="btn btn-lg btn-danger mt-2 mr-1" href="#"> Tidak Tersedia</a>
                      <?php } ?>
                        <a class="btn btn-lg btn-info mt-2" href="<?= base_url('customer/data_mobil/detail_mobil/'.$mb->id_mobil) ?>"> Detail</a>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <?php endforeach; ?>

      </div>
    </div>
  </div>
</section>

<div style="height: 180px;"></div>


