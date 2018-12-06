<?php $args = array(
     'post_id' => $id,
	  'post_status' => 'publish',
	  'post_type' => 'product',
	 'parent'      => 0
	  
	  );

$comments = get_comments($args);
$replies = array();
if($comments) :
    foreach($comments as $comment) :?>
	<?php 
	//print_r($comment); 
	 
	
	echo $comment_ID = $comment->comment_ID; 
	 $comment_parent = $comment->comment_parent;
	
	?>
	<?php
if($comment_ID == $comment_parent){
	
	$subcoment = $comment_ID;
	
}
	?>
	
	
	<?php
	$comment_content = $comment->comment_content;
	echo $comment_content;
	?>
	
		<?PHP 
	

$rating =  get_comment_meta($comment->comment_ID, 'rating', true);
if($rating>0){
	
	echo $rating;
}	
	
	?>
	
	
	
	<li>
		<div class="">
		
		<span></span>
		
		</div>
	</li>

	
	
	

	
	
        <div class="comment"><?php //echo $comment->comment_content; ?></div>
    <?php endforeach;
	
endif;?>
