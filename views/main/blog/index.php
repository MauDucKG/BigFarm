<?php
include_once('views/main/navbar.php');
?>

<body>
    
    <!-- ======= Blog Section ======= -->
    <section id="blog" style="margin-top: 7.5%;">
    <div class="text-center fs-2 fw-bold">TIN TỨC</div>
      <div class="container mt-2">

        <div class="row">

          <div class="col-lg-8" id="new">
            <!-- Entry -->

            <?php

              foreach ($newses as $news) {
                echo '
                  <article class="card mb-5">
                    <div class="row mx-2">
                        <div class="col-9">
                            <h6 class="card-title mt-3 fw-bold">
                            <a class="text-dark" href="index.php?page=main&controller=detail_blog&id='. $news->id .'&action=index">' . $news->title . '</a>
                            </h6>
                            <div class="card-subtitle mt-2 text-muted">
                                <small>
                                    <ul>
                                        <li class="card-subtitle"><i class="bi bi-clock"></i> <time>' . date("F j, Y, g:i a", strtotime($news->date)) . '</time></li>
                                        <li class="card-subtitle"><i class="bi bi-chat-dots"> </i>' . count($news->comments) . ' Bình luận</li>
                                    </ul>
                                </small>
                            </div>
                        </div>
                        <div class="col-3 text-center mt-3">
                            <a class="btn btn-dark" href="index.php?page=main&controller=detail_blog&id='. $news->id .'&action=index">Đọc thêm</a>
                            
                        </div>
                    </div>
                    <div class="mx-3 mb-3">
                      <div class="fs-6 justify-content">
                        ' . $news->description . '
                      </div>
                    </div>
                  </article><!-- End blog entry -->
                ';
              }
            ?>
<!-- 
            <div class="blog-pagination w-25 mx-auto">
              <ul class="d-flex justify-content-evenly">
                <li><a href="index.php?page=main&controller=blog&action=index&pg=1">1</a></li>
                <li><a href="index.php?page=main&controller=blog&action=index&pg=2">2</a></li>
                <li><a href="index.php?page=main&controller=blog&action=index&pg=3">3</a></li>
              </ul>
            </div> -->


          </div>
          <div class="col-lg-4">

            <div>

              <p class="fs-5 fw-bold text-center">Bài viết gần đây</p>
              <div>
              <?php
                foreach ($recent as $news)
                {
                  echo '
                  <div class="mb-1">
                    <div><a class="text-dark fw-bold" href="index.php?page=main&controller=detail_blog&id='. $news->id .'&action=index">' . $news->title . '</a>
                    </div>
                    <small class="text-muted">
                        <time>' . date("F j, Y, g:i a", strtotime($news->date)) . '</time>
                    </small>
                  </div>
                  ';
                }
              ?>

              </div><!-- End sidebar recent posts-->

            </div><!-- End sidebar -->

          </div><!-- End blog sidebar -->

        </div>

      </div>
    </section><!-- End Blog Section -->
</body>

<?php
include_once('views/main/footer.php');
?>