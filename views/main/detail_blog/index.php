<?php
include_once('views/main/navbar.php');
$id = $_GET['id'];
?>

<body>
  <?php
  foreach ($newses as $news) {
    if ($id == $news->id) {
      echo ' 
  <!-- ======= Blog Section ======= -->
  <section id="blog" class="blog" style="margin-top: 7.5%;">
    <div class="container" data-aos="fade-up">
      <div class="row">
        <div class="col-lg-12 entries">
          <!-- Blog entry -->
          <article class="entry entry-single">
            <h2>
              ' . $news->title . '
            </h2>
            <div class="entry-meta">
              <ul>
                <li class="d-flex align-items-center"><i class="bi bi-clock me-2"></i><time>' . date("F j, Y, g:i a", strtotime($news->date)) . '</time></li>
                <li class="d-flex align-items-center"><i class="bi bi-chat-dots me-2"></i>' . count($news->comments) . ' Comments</li>
              </ul>
            </div>

            <div class="entry-content">
              <p>
                ' . $news->content . '
              </p>
            </div>

          </article><!-- End blog entry -->


          <div class="blog-comments">

            <h4 class="comments-count">' . count($news->comments) . ' Comments</h4>';

      foreach ($news->comments as $comment) {
        echo '
            <div id="comment-' . $comment->id . '" class="comment">
              <div class="d-flex">
                <div>
                  <h3><p href="" >' . $comment->user_name . '</p></h3>
                  <time class="fst-italic">' . date("F j, Y, g:i a", strtotime($comment->date)) . '</time>
                  <p class="mx-3 text-primary">
                    ' . $comment->content . '
                  </p>
                </div>
              </div>
            </div>';
      }
      echo '
                        <div class="reply-form">
                          <h4>Bình luận</h4>
                            <div class="row">
                              <div class="col form-group">
                                <textarea name="comment" class="form-control" placeholder="Viết bình luận tại đây"></textarea>
                              </div>
                            </div>
                            <button class="btn btn-primary btn-comment mt-2" data-news=' . $news->id . ' data-parent="" data-user="' . $_SESSION["guest"] . '">Gửi bình luận</button>
                </form>
              </div>

            </div><!-- End blog comments -->
          </div><!-- End blog entries list -->


        </div>

      </div>
  </section><!-- End Blog Single Section -->';
    }
  } ?>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="public/plugins/jquery/jquery.min.js"></script>
  <script src="assets\javascripts\blog\index.js"></script>
</body>

<?php
include_once('views/main/footer.php');
?>