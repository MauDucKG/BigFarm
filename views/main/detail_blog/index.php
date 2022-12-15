<?php
include_once('views/main/navbar.php');
$id = $_GET['id'];
?>

<body>
    
    <!-- ======= Blog Section ======= -->
    <section style="margin-top: 7.5%;">
    <div class="text-center fs-2 fw-bold">TIN TỨC</div>
      <div class="container mt-2">

        <div class="row">

          <div class="col-lg-8" id="new">
            <!-- Entry -->

            <?php
                foreach ($newses as $news) {
                    if ($id == $news->id){
                        echo ' 
                        <div class = "row mt-3">
                            <h5 class="text-start fw-bold">' . $news->title . '</h5>
                        </div>
                        <div class = "row container">
                            <span class="card-subtitle text-muted"><i class="bi bi-clock"></i> <time>' . date("F j, Y, g:i a", strtotime($news->date)) . '</time></span>
                        </div>
                        <div class = "row mt-3 justify-content">
                            <p> '. $news->content .'</p>
                        </div>
                        <div class = "row container">
                            <span class="card-subtitle text-muted"><i class="bi bi-chat-dots"> </i>' . count($news->comments) . ' Bình luận</span>

                        </div>
                        ';

                        foreach ($news->comments as $comment)
                         {
                            echo '
                            <div class = "row mt-3">
                                <div>
                                  <h5 class = "fw-bold">' . $comment->user_name . '</h5> 
                                  <p class="m-0">
                                  ' . $comment->content . '
                                  </p>
                                  <div class = "card-subtitle text-muted small mt-1 container"><time>' . date("F j, Y, g:i a", strtotime($comment->date)) . '</time></div>
                                  
                                </div>
                            </div>';
                            foreach ($comment->replies as $reply)
                            {
                              echo '
                                <div class = "row mt-3 ms-4">
                                    <div>
                                    <h5 class = "fw-bold">' . $reply->user_name . '</h5> 
                                    <p class="m-0">
                                    ' . $reply->content . '
                                    </p>
                                    <div class = "card-subtitle text-muted small mt-1"> <time>' . date("F j, Y, g:i a", strtotime($reply->date)) . '</time></div>
                                    
                                    </div>
                                </div>';
                        
                            }
                            echo '
                            <div class="row mt-3 ms-4">
                                <div class="row">
                                    <div class="form-group">
                                        <textarea name="comment" class="form-control" placeholder="Phản hồi ' .$comment->user_name .'"></textarea>
                                    </div>
                                </div>
                                <form>
                                <button class="btn btn-dark mt-2" data-news=' . $news->id . ' data-parent=' . $comment->id .' data-user="' . @$_SESSION["guest"] . '">Gửi bình luận</button>
                                </form>
                            </div>';
                            }
  
                            echo '
                            <div class="row mt-4">
                                <h4>Bình luận bài viết</h4>
                                <div class="row">
                                    <div class="form-group">
                                    <textarea name="comment" class="form-control" placeholder="Viết bình luận ..."></textarea>
                                    </div>
                                </div>
                                <form>
                                <button class="btn btn-dark mt-1" data-news=' . $news->id . ' data-parent=' . $comment->id .' data-user="' . @$_SESSION["guest"] . '">Gửi bình luận</button>
                                </form>
                            </div>';
                        }
                          
                    
                    
                }
            
            ?>

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