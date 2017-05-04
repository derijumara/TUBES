<div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 col-md-10 offset-md-1">

            <?php foreach ($pengaduan->result() as $key) {?>

                <div class="post-preview">
                <!-- untuk menampilkan isi laporan secara lengkap-->
                    <a href="<?php echo base_url('index.php/home/readmore/'.$key->kode_laporan)?>">
                        <h2 class="post-title">
                            <?php echo $key->judul_laporan;?>
                        </h2>
                        <h3 class="post-subtitle">
                            <!-- Untuk memotong jumlah huruf pada tampilan home -->
                            <?php 

                            $isilaporan = $key->laporan;
                            $potong = substr($isilaporan,0,150);
                            echo $potong;
                            ?>
                        </h3>
                    </a>
                    <p class="post-meta">Posted by <?php echo $key->username;?> <?php echo $key->tgl_melapor;?> for Dinas <?php echo $key->divisi;?> </p>
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