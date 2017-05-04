<div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 col-md-10 offset-md-1">

            <?php foreach ($pengaduan->result() as $key) {?>

                <div class="post-preview">
                    <a href="post.html">
                        <h2 class="post-title">
                            <?php echo $key->judul_laporan;?>
                        </h2>
                        <h3 class="post-subtitle">
                            <?php echo $key->laporan;?>
                        </h3>
                    </a>
                    <p class="post-meta"><?php echo $key->tgl_melapor;?> for <?php echo $key->divisi;?> </p>
                    <p> Jawab : </p>
                </div>
                <div class="clearfix">
                    <a class="btn btn-secondary float-right" href="<?php echo base_url('index.php/delete_laporan/delete/').$key->kode_laporan?>">Hapus</a>
                </div>
               <hr>

            <?php }?>

                <!-- Pager -->
                <div class="clearfix">
                    <a class="btn btn-secondary float-right" href="#">Older Posts &rarr;</a>
                </div>
            </div>
        </div>
    </div>