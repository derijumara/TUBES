<div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 col-md-10 offset-md-1">

            <?php foreach ($pengaduan as $key) {?>

                <div class="post-preview">
                <!-- untuk menampilkan isi laporan secara lengkap-->
                    <a href="post.html">
                        <h2 class="post-title">
                            <?php echo $key->judul_laporan;?>
                        </h2>
                        <h3 class="post-subtitle">
                            <!-- Untuk memotong jumlah huruf pada tampilan home -->
                            <?php 

                            echo $key->laporan;
                            ?>
                        </h3>
                    </a>
                    <p class="post-meta">Posted by <?php echo $key->username;?> <?php echo $key->tgl_melapor;?> for <?php echo $key->divisi;?> </p>
                 <p> Jawaban : </p>   
                    
            <?php }?>
                </div>
                <!-- Pager -->
             </div>  
            </div>
        </div>
