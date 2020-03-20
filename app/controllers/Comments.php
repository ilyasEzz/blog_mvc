<?php 

class Comments extends Controller {

  public function __construct() {
    $this->commentModel = $this->model('Comment');
  }
  
  public function delete($id) {
    if($_SERVER['REQUEST_METHOD'] == 'POST') {

      $comment = $this->commentModel->getCommentById($id);
      
      // Check for owner
      if($comment->author != $_SESSION['user_name'] OR !isAdmin()) {
        return redirect('posts/show/' . $comment->post_id);
      }
      
      if($this->commentModel->deleteComment($id)) {
        message('comment_message', "Comment Removed", 'alert alert-danger');
        redirect('posts/show/' . $comment->post_id);
      } else {
        die("Something went wrong");
      }
      
    }
  }
}