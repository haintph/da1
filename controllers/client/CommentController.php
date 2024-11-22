<?php
class CommentController
{
  public function createComment()
  {
    $data = $_POST ?? null;
    (new Comment)->create($data);
    $_SESSION['message'] = "Thêm comment thành công";
    header("Location: ?ctl=details&id=$data[product_id]");
    exit();
  }
}
