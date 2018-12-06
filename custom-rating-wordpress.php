
<div class="rating">
<?php 
global $woocommerce, $product;
$id = $product->get_id();
    $average = $product->get_average_rating();
	$count_rating = $product->get_rating_count();
	//$average = ( $average / 5 ) * 100;
	$title= get_the_title();
	$percent = $average/5*100;
echo "<div class='rating-title'>".$count_rating.' đánh giá '. $title."</div>"; 
?>


<!-- GET 5 STAR -->

<?php
$args_5 = array(
	'post_id' => $id,
	'meta_value' => 5, // use post_id, not post_ID
    'meta_key' => 'rating', //return only the count
	'count' => true,
	'post_status' => 'publish',
	'post_type' => 'product'
);
$args_4 = array(
'post_id' => $id,
	'meta_value' => 4, // use post_id, not post_ID
    'meta_key' => 'rating', //return only the count
	'count' => true,
	'post_status' => 'publish',
	'post_type' => 'product'
);
$args_3 = array(
'post_id' => $id,
	'meta_value' => 3, // use post_id, not post_ID
    'meta_key' => 'rating', //return only the count
	'count' => true,
	'post_status' => 'publish',
	'post_type' => 'product'
);
$args_2 = array(
'post_id' => $id,
	'meta_value' => 2, // use post_id, not post_ID
    'meta_key' => 'rating', //return only the count
	'count' => true,
	'post_status' => 'publish',
	'post_type' => 'product'
);
$args_1 = array(
'post_id' => $id,
	'meta_value' => 1, // use post_id, not post_ID
    'meta_key' => 'rating', //return only the count
	'count' => true,
	'post_status' => 'publish',
	'post_type' => 'product'
);

$start_5 = get_comments($args_5);
$start_4 = get_comments($args_4);
$start_3 = get_comments($args_3);
$start_2 = get_comments($args_2);
$start_1 = get_comments($args_1);


if($start_5>0){
$percent_5 = $start_5/$count_rating*100;
}else{
	$percent_5 = 0;
}

if($start_4>0){
$percent_4 = $start_4/$count_rating*100;
}else{
	$percent_4 = 0;
}

if($start_3>0){
$percent_3 = $start_3/$count_rating*100;
}else{
	$percent_3 = 0;
}

if($start_2>0){
$percent_2 = $start_2/$count_rating*100;
}else{
	$percent_2 = 0;
}

if($start_1>0){
$percent_1 = $start_1/$count_rating*100;
}else{
	$percent_1 = 0;
}


//echo $comments

?>


<div class="clear"></div>
<div class="box-rating">

	<div class="crt">

                    <div class="rt_left">
                        <b><?php echo $average; ?><i class="fa fa-star" style="color:#FFC107;" aria-hidden="true"></i>  </b>
						<div class="clear"></div>
                        <span><?php echo $count_rating; ?> đánh giá</span>
                    </div>
                    <div class="rt_right">
<?php $danhgia = ' đánh giá'; ?>					
 
 5 me                   
<div class="box-out">
 <div class="box-in" style="width: <?php echo $percent_5.'%' ?>"> </div>
</div>
<?php echo $start_5.$danhgia; ?> 
<div class="clear"></div>

4 <i class="fa fa-star" style="" aria-hidden="true"></i>                     
<div class="box-out">
 <div class="box-in" style="width: <?php echo $percent_4.'%' ?>"> </div>
</div>
<?php echo $start_4.$danhgia; ?> 
<div class="clear"></div>


3 <i class="fa fa-star" style="" aria-hidden="true"></i>                     
<div class="box-out">
 <div class="box-in" style="width: <?php echo $percent_3.'%' ?>"> </div>
</div>
<?php echo $start_3.$danhgia; ?> 
<div class="clear"></div>

 2 <i class="fa fa-star" style="" aria-hidden="true"></i>                     
<div class="box-out">
 <div class="box-in" style="width: <?php echo $percent_2.'%' ?>"> </div>
</div>
<?php echo $start_2.$danhgia; ?> 
<div class="clear"></div>


 1 <i class="fa fa-star" style="" aria-hidden="true"></i>                     
<div class="box-out">
 <div class="box-in" style="width: <?php echo $percent_1.'%' ?>"> </div>
</div>
<?php echo $start_1.$danhgia; ?> 
<div class="clear"></div>


                      

                    </div>
					
