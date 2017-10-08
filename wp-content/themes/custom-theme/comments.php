<?php
$args = array(
  'status' => 'approve'
);
$comments_query = new WP_Comment_Query;
$comments = $comments_query->query( $args );
if ( $comments ) {
  foreach ( $comments as $comment ) {
    echo '<hr>';
    echo '<p>'.$comment->comment_content.'</p>';
  }
} else {
  echo '<p>No comments found.</p>';
}
comment_form();
?>
