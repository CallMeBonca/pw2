<!-- First Blog Post -->
                <?php foreach ($isi_berita as $ib): ?>
                    
                <h2 align="justify">
                    <a href="#"><?php echo $ib['judul'] ?></a>
                </h2>
                <p class="lead">
                    by <a href="index.php">Start Bootstrap</a>
                </p>
                <p><i class="fa fa-clock-o"></i> Posted on <?php echo date ('d-F-Y',strtotime($dt['tanggal'])); ?> </p>
                <hr>
                
                <hr>
                <p align="justify"><?php echo $ib['isi'] ?></p>
                <a class="btn btn-primary" href="#">Read More <i class="fa fa-angle-right"></i></a>

                <hr>

                <?php endforeach ?>
              <hr>

                <!-- Pager -->
                <ul class="pager">
                    <li class="previous">
                        <a href="#">&larr; Older</a>
                    </li>
                    <li class="next">
                        <a href="#">Newer &rarr;</a>
                    </li>
                </ul>

            </div> 

            <div class="col-md-4">