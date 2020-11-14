<main class="page_main_wrapper">



<div class="container">

</div>

<div class="container p-b-20 br-bottom">

<div class="row two-col-layout">



<div class="col-left br-right bg-grey">

<!-- start lead section  -->

<?php

 $this->load->view('main/lead_section');

  ?>



<!-- end lead section  -->



<!-- Start Breaking Section -->

<?php 

$this->load->view('main/breaking_section');

 ?>

<!-- End breaking Section -->



<!-- start video section -->

<?php 

$this->load->view('main/video_section');

 ?>

<!-- end video Section  -->



</div>



<div class="col-right">

<div class="advert" style="margin-bottom:5px; padding-top: 5px;">



<div id='div-gpt-ad-1589089585864-0' style='width: 300px; height: 250px;'>

<a href="#"><img src="https://via.placeholder.com/300x250"></a>

</div>

</div>

<div class="tabs-container p-t-10" style="height: 410px;">

<div class="tabs-wrapper">

<ul class="nav nav-tabs" role="tablist">

<li role="presentation" class="active">

<a class="p-5" href="#latest" aria-controls="latest" role="tab" data-toggle="tab">

<h3 class="no-margin no-padding">সর্বশেষ</h3>

</a></li>

<li role="presentation">

<a class="p-5" href="#popular" aria-controls="popular" role="tab" data-toggle="tab">

<h3 class="no-margin no-padding">জনপ্রিয়</h3>

</a></li>

</ul>

<div class="tab-content" style="overflow: scroll; height: 345px">

<div role="tabpanel" class="tab-pane fade in active" id="latest">

<div class="most-viewed" id="latest">

<div class="row mobile_list_simple ">

 <?php $this->db->from('posts');

    $this->db->where(array('post_type' =>'article','visibility' =>'1','lang_id' => '1'));

    $this->db->order_by("id","DESC");

    $this->db->limit(10);  

    $query = $this->db->get();

        $counter = 1;

foreach ($query->result() as $row)

{

 ?>

<div class="col-xs-12 p-t-10 p-b-10 br-bottom item">

<a href="<?php echo permalink($row->id); ?>">

<div class="title-holder">

<h3 class="post-title no-margin"><?php echo $row->title; ?></h3>

</div>

<div class="category-meta">

<p class="category"><?php echo category($row->category_id); ?></p>

</div>

</a>

</div>



<?php }?>

</div>

</div>

</div>

<div role="tabpanel" class="tab-pane fade" id="popular">

<div class="most-viewed" id="most-today">

<div class="row mobile_list_simple ">

    

 <?php $this->db->from('posts');

    $this->db->where(array('post_type' =>'article','visibility' =>'1','lang_id' => '1'));

    $this->db->order_by("pageviews","DESC");

    $this->db->limit(10);  

    $query = $this->db->get();

        $counter = 1;

foreach ($query->result() as $row)

{

 ?>
 

<div class="col-xs-12 p-t-10 p-b-10 br-bottom item">

<a href="<?php echo permalink($row->id); ?>">

<div class="title-holder">

<h3 class="post-title no-margin"><?php echo $row->title; ?></h3>

</div>

<div class="category-meta">

<p class="category"><?php echo category($row->category_id); ?></p>

</div>

</a>

</div>



<?php }?>





</div> </div>

</div>

</div>

</div>

</div>

<div class="advert" style="margin-top:5px;">



<div id='div-gpt-ad-1554357996237-0' style='height:250px; width:300px;'>

<a href="#"><img src="https://via.placeholder.com/300x250"></a>

</div>

</div>

<div class="special-feature p-t-20 p-b-20">

<div class="section-title bg-danger no-margin p-0">

<a href="topic/corona"><h2>বাংলাদেশে করোনাভাইরাস</h2></a>

</div>

<div class="contents p-l-10">

<div class="row ">

<div class="col-xs-12 p-t-10">
       <?php $this->db->from('posts');
    $this->db->where(array('post_type' =>'article','visibility' =>'1','lang_id' => '1'));
    $this->db->order_by("id","DESC");
    $this->db->limit(1);  
    $query = $this->db->get();
        $counter = 1;
foreach ($query->result() as $row)
{
 ?>

<a class="post-item" href="<?php echo permalink($row->id); ?>">

<figure class="img-holder">

<img src="<?php echo $row->image_mid; ?>" alt="<?php echo $row->title; ?>">

<div class="link-icon"><i class="fa fa-play"></i></div>

</figure>

<div class="p-b-10">

<div class="title-holder p-t-10">

<h3 class="post-title no-margin p-b-10"><?php echo $row->title; ?></h3>

</div>

<div class="category-meta">

<p class="category"><?php echo category($row->category_id); ?></p>

</div>

</div>

</a>
<?php }?>

</div>

</div> <div class="row ">
<div class="col-xs-12 p-t-10">
       <?php $this->db->from('posts');
    $this->db->where(array('post_type' =>'article','visibility' =>'1','lang_id' => '1'));
    $this->db->order_by("id","DESC");
    $this->db->limit(10);  
    $query = $this->db->get();
        $counter = 1;
foreach ($query->result() as $row)
{
 ?>
<div class="col-xs-12  p-t-10 p-b-10 br-bottom">

<a href="<?php echo permalink($row->id); ?>">

<div class="col-xs-5 no-padding">

<figure class="img-holder">

<img src="<?php echo $row->image_mid; ?>">

</figure>

</div>

<div class="col-xs-7 p-l-10">

<div class="title-holder">

<h3 class="post-title no-margin"><?php echo $row->title; ?></h3>

</div>

<div class="category-meta">

<p class="category"><?php echo category($row->category_id); ?></p>

</div>

</div>

</a>

</div>
<?php }?>


</div> </div>

</div>

<div class="advert" style="margin:5px 0;">



<div id='div-gpt-ad-1565185486322-0' style='width: 300px; height: 250px;'>

<a href="#"><img src="https://via.placeholder.com/300x250"></a>


</div>

</div>

</div>

</div>

</div>


<!--------------------------Sports------------------------------------->
<div class="p-b-20 p-t-20 br-top">
<div class="row two-col-layout">
<div class="col-left br-right">

<div class="container p-b-20 br-bottom p-t-20">
<div class="row two-col-layout">
<div class="col-left br-right p-l-20">
<div class="row">
<div class="col-xs-12">
<div class="section-title p-b-20">
<a href="<?php echo category_link(5); ?>">
<h2><?php echo category(5); ?></h2>
</a>
</div>
</div>
</div>
<div class="row">
<div class="col-xs-12 col-sm-7">
<div class="row">
    <?php $this->db->from('posts');
    $this->db->where(array('post_type' =>'article','visibility' =>'1','lang_id' => '1','category_id' =>'5'));
    $this->db->order_by("id","DESC");
    $this->db->limit(2);  
    $query = $this->db->get();
        $counter = 1;
foreach ($query->result() as $row)
{
 ?>
<div class="col-md-6 br-right">
<a href="<?php echo permalink($row->id); ?>">
<figure class="img-holder">
<img src="/<?php echo $row->image_mid; ?>" alt="News Photo">
</figure>
<div class="post-content p-l-0">
<h3><?php echo $row->title; ?></h3>
<p class="post-desc"><?php echo
    excerpt($row->content, 250);

 ?></p>
<div class="category-meta">
<p class="category"><?php echo category($row->category_id); ?></p>
</div>
</div>
</a>
</div>

<?php }?>
</div>
</div>
<div class="col-xs-12 col-sm-5">
<div class="top-news-3 p-l-20 p-r-20">

 <?php $this->db->from('posts');
    $this->db->where(array('post_type' =>'article','visibility' =>'1','lang_id' => '1','category_id' =>'5'));
    $this->db->order_by("id","DESC");
    $this->db->limit(3,2);  
    $query = $this->db->get();
        $counter = 1;
foreach ($query->result() as $row)
{
 ?>
<div class="post-item br-bottom m-b-20">
<a href="<?php echo permalink($row->id); ?>">
<div class="post-content">
<div class="title-holder">
<h3 class="no-margin no-padding">  <?php echo $row->title; ?></h3>
</div>
<div class="category-meta p-t-20">
<p class="category"><?php echo category($row->category_id); ?></p>
</div>
</div>
<figure class="img-holder">
<img src="<?php echo $row->image_mid; ?>" alt="<?php echo $row->title; ?>">
</figure>
</a>
</div>

<?php }?>


</div>
</div>
</div>
</div>
<div class="col-right p-t-20">

<div id="div-gpt-ad-1576578288838-0" data-google-query-id="COKwrYOj2ewCFeENtwAdbv8MUw">
<a href="#"><img src="https://via.placeholder.com/300x250"></a>
</div>

<div id="div-gpt-ad-1599390381238-0" style="width: 300px; height: 250px; padding-top:5px;" data-google-query-id="COOwrYOj2ewCFeENtwAdbv8MUw">
<a href="#"><img src="https://via.placeholder.com/300x250"></a>
</div>
</div>
</div>
</div> </div>
<div class="col-right">
<div class="add-block" style="text-align:center;">
</div>
</div>
</div>
</div>
<!---------------------------------------------------------------------------->

<div class="container p-b-20 br-bottom p-t-20">

<div class="row">



<div class="row no-margin p-b-20 p-t-20 ">

<div class="col-sm-12">

 <div class="section-title">

<h2> <?php echo category(6); ?>  </h2>

</div>

</div>

<div class="col-xs-12 col-md-5">



<div class="row">

<div class="col-xs-12">
    <?php $this->db->from('posts');
    $this->db->where(array('post_type' =>'article','visibility' =>'1','lang_id' => '1','category_id' =>'6'));
    $this->db->order_by("id","DESC");
    $this->db->limit(1);  
    $query = $this->db->get();
        $counter = 1;
foreach ($query->result() as $row)
{
 ?>
<div class="post-item br-bottom">

<a href="<?php echo permalink($row->id); ?>">

<figure>

<img src="<?php echo $row->image_mid; ?>" height="242" width="345" alt="<?php echo $row->title; ?>  " class="img-responsive">

</figure>

<div class="post-info">

<h2 class="post-title"><?php echo $row->title; ?>  </h2>

<p><?php echo
    excerpt($row->content, 250);

 ?></p>

<div class="category-meta">

<p><?php echo category($row->category_id); ?></p>

</div>

</div>

</a>

</div>
<?php }?>

</div>

<div class="row p-r-20 p-l-20 br-bottom">
   <?php $this->db->from('posts');
    $this->db->where(array('post_type' =>'article','visibility' =>'1','lang_id' => '1','category_id' =>'6'));
    $this->db->order_by("id","DESC");
    $this->db->limit(2,1);  
    $query = $this->db->get();
        $counter = 1;
foreach ($query->result() as $row)
{
 ?>
<div class="col-xs-12 col-sm-6 p-t-20 br-right">

<div class="row ">

<div class="col-xs-12 p-t-10">

<a class="post-item" href="<?php echo permalink($row->id); ?>">

<figure class="img-holder">

<img src="<?php echo $row->image_small; ?>" alt="<?php echo $row->title; ?>">

<div class="link-icon"><i class="fa fa-play"></i></div>

</figure>

<div class="p-b-10">

<div class="title-holder p-t-10">

<h3 class="post-title no-margin p-b-10"><?php echo $row->title; ?></h3>

</div>

<div class="category-meta">

<p class="category"><?php echo category($row->category_id); ?></p>

</div>

</div>

</a>

</div>

</div>

</div>

<?php }?>

</div>

<div class="row p-r-20 p-l-20">

   <?php $this->db->from('posts');
    $this->db->where(array('post_type' =>'article','visibility' =>'1','lang_id' => '1','category_id' =>'6'));
    $this->db->order_by("id","DESC");
    $this->db->limit(2,3);  
    $query = $this->db->get();
        $counter = 1;
foreach ($query->result() as $row)
{
 ?>
<div class="col-xs-12 col-sm-6 p-t-20 br-right">

<div class="row ">

<div class="col-xs-12 p-t-10">

<a class="post-item" href="<?php echo permalink($row->id); ?>">

<figure class="img-holder">

<img src="<?php echo $row->image_small; ?>" alt="<?php echo $row->title; ?>">

<div class="link-icon"><i class="fa fa-play"></i></div>

</figure>

<div class="p-b-10">

<div class="title-holder p-t-10">

<h3 class="post-title no-margin p-b-10"><?php echo $row->title; ?></h3>

</div>

<div class="category-meta">

<p class="category"><?php echo category($row->category_id); ?></p>

</div>

</div>

</a>

</div>

</div>

</div>

<?php }?>


</div>

</div>

</div>

<div class="col-sm-7 col-xs-12 bg-black">

<div class="row p-l-20 p-r-20">

<h2 class="pull-right p-b-10">বিনোদন মাল্টিমিডিয়া </h2>
   <?php $this->db->from('posts');
    $this->db->where(array('post_type' =>'video','lang_id' => '1','category_id' =>'6'));
    $this->db->order_by("id","DESC");
    $this->db->limit(1);  
    $query = $this->db->get();
        $counter = 1;
foreach ($query->result() as $row)
{
 ?>
<iframe class="br-bottom p-b-20" width="100%" height="380px" src="<?php echo $row->video_embed_code; ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
<?php }?>

</div>

<div class="row p-t-10">

<div class="row no-margin p-b-20 br-bottom album-photo-slider" id="binodon-slider">

<div class="col-xs-7">

<div class="section-title">

<h3 style="color: #fff">

<?php // echo $row->title; ?>

</h3>

</div>

</div>

<div class="col-xs-2 pull-right slider-nav p-b-10 p-t-20">

<img class="left" src="assets/icons/slider/left-arrow.png" alt="Nav next">

<img class="right" src="assets/icons/slider/right-arrow.png" alt="Nav next">

</div>
   <?php $this->db->from('gallery_albums');
    // $this->db->where(array('gallery_albums' =>'1'));
    $this->db->order_by("id","DESC");
    $this->db->limit(1);  
    $query = $this->db->get();
        $counter = 1;
foreach ($query->result() as $row)
{
     $last_album = $row->id;
 ?>

 <?php }?>
<div class="slider">

<div>
   <?php $this->db->from('gallery');
    $this->db->where(array('album_id' =>$last_album));
    $this->db->order_by("id","DESC");
    $this->db->limit(2);  
    $query = $this->db->get();
        $counter = 1;
foreach ($query->result() as $row)
{
 ?>
<div class="col-sm-6">

<a class="post-item">

<figure class="">

<img src="<?php echo base_url().$row->path_big; ?>" alt="<?php echo $row->title; ?>">

<div class="link-icon"><i class="fa fa-photo"></i></div>

</figure>

<div class="caption">

<h4>

<?php echo $row->title; ?>


</h4>

</div>

</a>

</div>

<?php }?>

</div>

<div>
   <?php $this->db->from('gallery');
    $this->db->where(array('album_id' =>$last_album));
    $this->db->order_by("id","DESC");
    $this->db->limit(2,2);  
    $query = $this->db->get();
        $counter = 1;
foreach ($query->result() as $row)
{
 ?>
<div class="col-sm-6">

<a class="post-item">

<figure class="">

<img src="<?php echo base_url().$row->path_big; ?>" alt="<?php echo $row->title; ?>">

<div class="link-icon"><i class="fa fa-photo"></i></div>

</figure>

<div class="caption">

<h4>

<?php echo $row->title; ?>


</h4>

</div>

</a>

</div>

<?php }?>

</div>



</div>

</div> </div>

</div>

</div>

</div>

</div>







<div class="container p-b-20 br-bottom p-t-20">

<div class="row two-col-layout">

<div class="col-left br-right">





<div class="row  no-margin p-t-20 ">

<div class="col-sm-12">

<div class="section-title">

<h2> <?php echo category(10); ?> </h2>

</div>

</div>

<div class="col-md-6">
   <?php $this->db->from('posts');
    $this->db->where(array('post_type' =>'article','visibility' =>'1','lang_id' => '1','category_id' =>'10'));
    $this->db->order_by("id","DESC");
    $this->db->limit(1);  
    $query = $this->db->get();
        $counter = 1;
foreach ($query->result() as $row)
{
 ?>
<a class="post-item" href="<?php echo permalink($row->id); ?>">

<figure class="">

<img src="<?php echo base_url().$row->image_mid; ?>" alt="<?php echo $row->title; ?>">

</figure>

<div class="post-content no-padding">

<h2 class="post-title">
<?php echo $row->title; ?>

</h2>

<p>

<?php echo
    excerpt($row->content, 250);

 ?>

</p>

<div class="category-meta">

<p class="category"><?php echo category($row->category_id); ?></p>

</div>

</div>

</a>
<?php }?>

</div>

<div class="col-md-6">

<div class="row post-items">

   <?php $this->db->from('posts');
    $this->db->where(array('post_type' =>'article','visibility' =>'1','lang_id' => '1','category_id' =>'10'));
    $this->db->order_by("id","DESC");
    $this->db->limit(2,1);  
    $query = $this->db->get();
        $counter = 1;
foreach ($query->result() as $row)
{
 ?>
<div class="col-xs-6">

<a class="post-item" href="<?php echo permalink($row->id); ?>">

<figure class="">

<img src="<?php echo base_url().$row->image_small; ?>" alt="<?php echo $row->title; ?> ">

</figure>

<div class="post-content no-padding">

<h3 class="post-title">

<?php echo $row->title; ?>

</h3>

<div class="category-meta">

<p class="category"><?php echo category($row->category_id); ?></p>

</div>

</div>

</a>

</div>
<?php }?>

</div>

<div class="row post-items p-t-20">


 <?php $this->db->from('posts');
    $this->db->where(array('post_type' =>'article','visibility' =>'1','lang_id' => '1','category_id' =>'10'));
    $this->db->order_by("id","DESC");
    $this->db->limit(2,3);  
    $query = $this->db->get();
        $counter = 1;
foreach ($query->result() as $row)
{
 ?>
<div class="col-xs-6">

<a class="post-item" href="<?php echo permalink($row->id); ?>">

<figure class="">

<img src="<?php echo base_url().$row->image_small; ?>" alt="<?php echo $row->title; ?> ">

</figure>

<div class="post-content no-padding">

<h3 class="post-title">

<?php echo $row->title; ?>

</h3>

<div class="category-meta">

<p class="category"><?php echo category($row->category_id); ?></p>

</div>

</div>

</a>

</div>
<?php }?>


</div>

</div>

</div>

<div class="row p-t-20">



<div id='div-gpt-ad-1589088145749-0' style="width: 728px;margin: 0 auto;">

Add
</div>

</div>

</div>

<div class="col-right">

<div class="mobile-sq-5">

<h2 class="p-0"> <?php echo category(12); ?> </h2>

<div class="row ">

<div class="col-xs-12 p-t-10">
  <?php $this->db->from('posts');
    $this->db->where(array('post_type' =>'article','visibility' =>'1','lang_id' => '1','category_id' =>'12'));
    $this->db->order_by("id","DESC");
    $this->db->limit(1);  
    $query = $this->db->get();
        $counter = 1;
foreach ($query->result() as $row)
{
 ?>
<a class="post-item" href="<?php echo permalink($row->id); ?>">

<figure class="img-holder">

<img src="<?php echo base_url().$row->image_big; ?>" alt="<?php echo $row->title; ?>">

<div class="link-icon"><i class="fa fa-play"></i></div>

</figure>

<div class="p-b-10">

<div class="title-holder p-t-10">

<h3 class="post-title no-margin p-b-10"><?php echo $row->title; ?> </h3>

</div>

</div>

</a>
<?php }?>

</div>

</div> <div class="row small-font">
   <?php $this->db->from('posts');
    $this->db->where(array('post_type' =>'article','visibility' =>'1','lang_id' => '1','category_id' =>'12'));
    $this->db->order_by("id","DESC");
    $this->db->limit(2,2);  
    $query = $this->db->get();
        $counter = 1;
foreach ($query->result() as $row)
{
 ?>
<div class="col-xs-6">

<div class="row ">

<div class="col-xs-12 p-t-10">

<a class="post-item" href="<?php echo permalink($row->id); ?>">

<figure class="img-holder">

<img src="<?php echo base_url().$row->image_small; ?>">

<div class="link-icon"><i class="fa fa-play"></i></div>

</figure>

<div class="p-b-10">

<div class="title-holder p-t-10">

<h3 class="post-title no-margin p-b-10"><?php echo $row->title; ?></h3>

</div>

</div>

</a>

</div>

</div> </div>
<?php }?>


</div>

<div class="row small-font">

<?php $this->db->from('posts');
    $this->db->where(array('post_type' =>'article','visibility' =>'1','lang_id' => '1','category_id' =>'12'));
    $this->db->order_by("id","DESC");
    $this->db->limit(2,3);  
    $query = $this->db->get();
        $counter = 1;
foreach ($query->result() as $row)
{
 ?>
<div class="col-xs-6">

<div class="row ">

<div class="col-xs-12 p-t-10">

<a class="post-item" href="<?php echo permalink($row->id); ?>">

<figure class="img-holder">

<img src="<?php echo base_url().$row->image_small; ?>">

<div class="link-icon"><i class="fa fa-play"></i></div>

</figure>

<div class="p-b-10">

<div class="title-holder p-t-10">

<h3 class="post-title no-margin p-b-10"><?php echo $row->title; ?></h3>

</div>

</div>

</a>

</div>

</div> </div>
<?php }?>

</div>

</div> </div>

</div>

</div>

<div class="container p-t-20 p-b-20">

<div class="row">

<div class="col-xs-12 col-sm-3 br-right p-r-20">

<div class="section-title">

<a href="#">

<h4><?php echo category(13); ?></h4>

</a>

</div>

<div class="post-item-list br-bottom fixed-title-space">

<div class="row ">
  <?php $this->db->from('posts');
    $this->db->where(array('post_type' =>'article','visibility' =>'1','lang_id' => '1','category_id' =>'13'));
    $this->db->order_by("id","DESC");
    $this->db->limit(1);  
    $query = $this->db->get();
        $counter = 1;
foreach ($query->result() as $row)
{
 ?>
<div class="col-xs-12 p-t-10">

<a class="post-item" href="<?php echo permalink($row->id); ?>">

<figure class="img-holder">

<img src="<?php echo base_url().$row->image_mid; ?>" alt="<?php echo $row->title; ?>">

<div class="link-icon"><i class="fa fa-play"></i></div>

</figure>

<div class="p-b-10">

<div class="title-holder p-t-10">

<h3 class="post-title no-margin p-b-10"><?php echo $row->title; ?> </h3>

<p class="brief">
    <?php echo
    excerpt($row->content, 250);

 ?>
</p>

</div>

<div class="category-meta">

 <p class="category"><?php echo category($row->category_id); ?></p>

</div>

</div>

</a>

</div>
<?php }?>
</div> </div>

<div class="col-xs-12 p-t-20">

<div class="news-grid-2">

<div class="row">
  <?php $this->db->from('posts');
    $this->db->where(array('post_type' =>'article','visibility' =>'1','lang_id' => '1','category_id' =>'13'));
    $this->db->order_by("id","DESC");
    $this->db->limit(2,1);  
    $query = $this->db->get();
        $counter = 1;
foreach ($query->result() as $row)
{
 ?>
<div class="col-xs-6 col-sm-6 col-md-6 col-padding">

<div class="grid-item">

<div class="grid-item-img">

<a href="<?php echo permalink($row->id); ?>">

<img src="<?php echo base_url().$row->image_mid; ?>" alt="">

</a>

</div>

<h5><a href="<?php echo permalink($row->id); ?>" class="title"><?php echo $row->title; ?></a></h5>

</div>

</div>



<?php }?>

</div>

<div class="row">
  <?php $this->db->from('posts');
    $this->db->where(array('post_type' =>'article','visibility' =>'1','lang_id' => '1','category_id' =>'13'));
    $this->db->order_by("id","DESC");
    $this->db->limit(2,3);  
    $query = $this->db->get();
        $counter = 1;
foreach ($query->result() as $row)
{
 ?>
<div class="col-xs-6 col-sm-6 col-md-6 col-padding">

<div class="grid-item">

<div class="grid-item-img">

<a href="<?php echo permalink($row->id); ?>">

<img src="<?php echo base_url().$row->image_mid; ?>" alt="">

</a>

</div>

<h5><a href="<?php echo permalink($row->id); ?>" class="title"><?php echo $row->title; ?></a></h5>

</div>

</div>



<?php }?>

</div>

</div>

</div>

</div>

<div class="col-xs-12 col-sm-3 br-right p-l-20 p-r-20">

<div class="section-title">

<a href="#">

<h4><?php echo category(15); ?></h4>

</a>

</div>

<div class="post-item-list br-bottom fixed-title-space">

<div class="row ">
  <?php $this->db->from('posts');
    $this->db->where(array('post_type' =>'article','visibility' =>'1','lang_id' => '1','category_id' =>'15'));
    $this->db->order_by("id","DESC");
    $this->db->limit(1);  
    $query = $this->db->get();
        $counter = 1;
foreach ($query->result() as $row)
{
 ?>
<div class="col-xs-12 p-t-10">

<a class="post-item" href="<?php echo permalink($row->id); ?>">

<figure class="img-holder">

<img src="<?php echo base_url().$row->image_mid; ?>" alt="<?php echo $row->title; ?>">

<div class="link-icon"><i class="fa fa-play"></i></div>

</figure>

<div class="p-b-10">

<div class="title-holder p-t-10">

<h3 class="post-title no-margin p-b-10"><?php echo $row->title; ?> </h3>

<p class="brief">
    <?php echo
    excerpt($row->content, 250);

 ?>
</p>

</div>

<div class="category-meta">

 <p class="category"><?php echo category($row->category_id); ?></p>

</div>

</div>

</a>

</div>
<?php }?>
</div> </div>

<div class="col-xs-12 p-t-20">

<div class="news-grid-2">

<div class="row">
  <?php $this->db->from('posts');
    $this->db->where(array('post_type' =>'article','visibility' =>'1','lang_id' => '1','category_id' =>'15'));
    $this->db->order_by("id","DESC");
    $this->db->limit(2,1);  
    $query = $this->db->get();
        $counter = 1;
foreach ($query->result() as $row)
{
 ?>
<div class="col-xs-6 col-sm-6 col-md-6 col-padding">

<div class="grid-item">

<div class="grid-item-img">

<a href="<?php echo permalink($row->id); ?>">

<img src="<?php echo base_url().$row->image_mid; ?>" alt="">

</a>

</div>

<h5><a href="<?php echo permalink($row->id); ?>" class="title"><?php echo $row->title; ?></a></h5>

</div>

</div>



<?php }?>

</div>

<div class="row">
  <?php $this->db->from('posts');
    $this->db->where(array('post_type' =>'article','visibility' =>'1','lang_id' => '1','category_id' =>'15'));
    $this->db->order_by("id","DESC");
    $this->db->limit(2,3);  
    $query = $this->db->get();
        $counter = 1;
foreach ($query->result() as $row)
{
 ?>
<div class="col-xs-6 col-sm-6 col-md-6 col-padding">

<div class="grid-item">

<div class="grid-item-img">

<a href="<?php echo permalink($row->id); ?>">

<img src="<?php echo base_url().$row->image_mid; ?>" alt="">

</a>

</div>

<h5><a href="<?php echo permalink($row->id); ?>" class="title"><?php echo $row->title; ?></a></h5>

</div>

</div>



<?php }?>

</div>

</div>

</div>

</div>

<div class="col-xs-12 col-sm-3 br-right p-l-20 p-r-20">

<div class="section-title">

<a href="#">

<h4><?php echo category(8); ?></h4>

</a>

</div>

<div class="post-item-list br-bottom fixed-title-space">

<div class="row ">
  <?php $this->db->from('posts');
    $this->db->where(array('post_type' =>'article','visibility' =>'1','lang_id' => '1','category_id' =>'8'));
    $this->db->order_by("id","DESC");
    $this->db->limit(1);  
    $query = $this->db->get();
        $counter = 1;
foreach ($query->result() as $row)
{
 ?>
<div class="col-xs-12 p-t-10">

<a class="post-item" href="<?php echo permalink($row->id); ?>">

<figure class="img-holder">

<img src="<?php echo base_url().$row->image_mid; ?>" alt="<?php echo $row->title; ?>">

<div class="link-icon"><i class="fa fa-play"></i></div>

</figure>

<div class="p-b-10">

<div class="title-holder p-t-10">

<h3 class="post-title no-margin p-b-10"><?php echo $row->title; ?> </h3>

<p class="brief">
    <?php echo
    excerpt($row->content, 250);

 ?>
</p>

</div>

<div class="category-meta">

 <p class="category"><?php echo category($row->category_id); ?></p>

</div>

</div>

</a>

</div>
<?php }?>
</div> </div>

<div class="col-xs-12 p-t-20">

<div class="news-grid-2">

<div class="row">
  <?php $this->db->from('posts');
    $this->db->where(array('post_type' =>'article','visibility' =>'1','lang_id' => '1','category_id' =>'8'));
    $this->db->order_by("id","DESC");
    $this->db->limit(2,1);  
    $query = $this->db->get();
        $counter = 1;
foreach ($query->result() as $row)
{
 ?>
<div class="col-xs-6 col-sm-6 col-md-6 col-padding">

<div class="grid-item">

<div class="grid-item-img">

<a href="<?php echo permalink($row->id); ?>">

<img src="<?php echo base_url().$row->image_mid; ?>" alt="">

</a>

</div>

<h5><a href="<?php echo permalink($row->id); ?>" class="title"><?php echo $row->title; ?></a></h5>

</div>

</div>



<?php }?>

</div>

<div class="row">
  <?php $this->db->from('posts');
    $this->db->where(array('post_type' =>'article','visibility' =>'1','lang_id' => '1','category_id' =>'8'));
    $this->db->order_by("id","DESC");
    $this->db->limit(2,3);  
    $query = $this->db->get();
        $counter = 1;
foreach ($query->result() as $row)
{
 ?>
<div class="col-xs-6 col-sm-6 col-md-6 col-padding">

<div class="grid-item">

<div class="grid-item-img">

<a href="<?php echo permalink($row->id); ?>">

<img src="<?php echo base_url().$row->image_mid; ?>" alt="">

</a>

</div>

<h5><a href="<?php echo permalink($row->id); ?>" class="title"><?php echo $row->title; ?></a></h5>

</div>

</div>



<?php }?>

</div>

</div>

</div>

</div>

<div class="col-xs-12 col-sm-3 p-l-20">

<div class="section-title">

<a href="#">

<h4><?php echo category(11); ?></h4>

</a>

</div>

<div class="post-item-list br-bottom fixed-title-space">

<div class="row ">
  <?php $this->db->from('posts');
    $this->db->where(array('post_type' =>'article','visibility' =>'1','lang_id' => '1','category_id' =>'11'));
    $this->db->order_by("id","DESC");
    $this->db->limit(1);  
    $query = $this->db->get();
        $counter = 1;
foreach ($query->result() as $row)
{
 ?>
<div class="col-xs-12 p-t-10">

<a class="post-item" href="<?php echo permalink($row->id); ?>">

<figure class="img-holder">

<img src="<?php echo base_url().$row->image_mid; ?>" alt="<?php echo $row->title; ?>">

<div class="link-icon"><i class="fa fa-play"></i></div>

</figure>

<div class="p-b-10">

<div class="title-holder p-t-10">

<h3 class="post-title no-margin p-b-10"><?php echo $row->title; ?> </h3>

<p class="brief">
    <?php echo
    excerpt($row->content, 250);

 ?>
</p>

</div>

<div class="category-meta">

 <p class="category"><?php echo category($row->category_id); ?></p>

</div>

</div>

</a>

</div>
<?php }?>
</div> </div>

<div class="col-xs-12 p-t-20">

<div class="news-grid-2">

<div class="row">
  <?php $this->db->from('posts');
    $this->db->where(array('post_type' =>'article','visibility' =>'1','lang_id' => '1','category_id' =>'11'));
    $this->db->order_by("id","DESC");
    $this->db->limit(2,1);  
    $query = $this->db->get();
        $counter = 1;
foreach ($query->result() as $row)
{
 ?>
<div class="col-xs-6 col-sm-6 col-md-6 col-padding">

<div class="grid-item">

<div class="grid-item-img">

<a href="<?php echo permalink($row->id); ?>">

<img src="<?php echo base_url().$row->image_mid; ?>" alt="">

</a>

</div>

<h5><a href="<?php echo permalink($row->id); ?>" class="title"><?php echo $row->title; ?></a></h5>

</div>

</div>



<?php }?>

</div>

<div class="row">
  <?php $this->db->from('posts');
    $this->db->where(array('post_type' =>'article','visibility' =>'1','lang_id' => '1','category_id' =>'11'));
    $this->db->order_by("id","DESC");
    $this->db->limit(2,3);  
    $query = $this->db->get();
        $counter = 1;
foreach ($query->result() as $row)
{
 ?>
<div class="col-xs-6 col-sm-6 col-md-6 col-padding">

<div class="grid-item">

<div class="grid-item-img">

<a href="<?php echo permalink($row->id); ?>">

<img src="<?php echo base_url().$row->image_mid; ?>" alt="">

</a>

</div>

<h5><a href="<?php echo permalink($row->id); ?>" class="title"><?php echo $row->title; ?></a></h5>

</div>

</div>



<?php }?>

</div>

</div>

</div>
</div>

</div>

</div>





<div class="container">

<div class="row br-top br-bottom p-t-20 p-b-20">

<div class="col-sm-2 br-right">

<div class="section-title">

<a href="#">

<h4><?php echo category(7); ?></h4>

</a>

</div>

<div class="post-item-list">

<div class="row ">

<div class="col-xs-12 p-t-10">
   <?php $this->db->from('posts');
    $this->db->where(array('post_type' =>'article','visibility' =>'1','lang_id' => '1','category_id' =>'7'));
    $this->db->order_by("id","DESC");
    $this->db->limit(1);  
    $query = $this->db->get();
        $counter = 1;
foreach ($query->result() as $row)
{
 ?>
<a class="post-item" href="<?php echo permalink($row->id); ?>">

<figure class="img-holder">

<img src="<?php echo base_url().$row->image_small; ?>" alt="<?php echo $row->title; ?>">

<div class="link-icon"><i class="fa fa-play"></i></div>

</figure>

<div class="p-b-10">

<div class="title-holder p-t-10">

<h3 class="post-title no-margin p-b-10"><?php echo $row->title; ?></h3>

<p class="brief"><?php echo
    excerpt($row->content, 250);

 ?></p></p>

</div>

<div class="category-meta">

<p class="category"><?php echo category($row->category_id); ?></p>

</div>

</div>

</a>
<?php }?>

</div>

</div></div>

</div>

<div class="col-sm-2 br-right">

<div class="section-title">

<a href="#">

<h4><?php echo category(21); ?></h4>

 </a>

</div>

<div class="post-item-list">

<div class="row ">

<div class="col-xs-12 p-t-10">
 <?php $this->db->from('posts');
    $this->db->where(array('post_type' =>'article','visibility' =>'1','lang_id' => '1','category_id' =>'21'));
    $this->db->order_by("id","DESC");
    $this->db->limit(1);  
    $query = $this->db->get();
        $counter = 1;
foreach ($query->result() as $row)
{
 ?>
<a class="post-item" href="<?php echo permalink($row->id); ?>">

<figure class="img-holder">

<img src="<?php echo base_url().$row->image_small; ?>" alt="<?php echo $row->title; ?>">

<div class="link-icon"><i class="fa fa-play"></i></div>

</figure>

<div class="p-b-10">

<div class="title-holder p-t-10">

<h3 class="post-title no-margin p-b-10"><?php echo $row->title; ?></h3>

<p class="brief"><?php echo
    excerpt($row->content, 250);

 ?></p></p>

</div>

<div class="category-meta">

<p class="category"><?php echo category($row->category_id); ?></p>

</div>

</div>

</a>
<?php }?>

</div>

</div></div>

</div>

<div class="col-sm-2 br-right">

<div class="section-title">

<a href="#">

<h4>টেক</h4>

</a>

</div>

<div class="post-item-list">

<div class="row ">

<div class="col-xs-12 p-t-10">

<?php $this->db->from('posts');
    $this->db->where(array('post_type' =>'article','visibility' =>'1','lang_id' => '1','category_id' =>'25'));
    $this->db->order_by("id","DESC");
    $this->db->limit(1);  
    $query = $this->db->get();
        $counter = 1;
foreach ($query->result() as $row)
{
 ?>
<a class="post-item" href="<?php echo permalink($row->id); ?>">

<figure class="img-holder">

<img src="<?php echo base_url().$row->image_small; ?>" alt="<?php echo $row->title; ?>">

<div class="link-icon"><i class="fa fa-play"></i></div>

</figure>

<div class="p-b-10">

<div class="title-holder p-t-10">

<h3 class="post-title no-margin p-b-10"><?php echo $row->title; ?></h3>

<p class="brief"><?php echo
    excerpt($row->content, 250);

 ?></p></p>

</div>

<div class="category-meta">

<p class="category"><?php echo category($row->category_id); ?></p>

</div>

</div>

</a>
<?php }?>

</div>

</div></div>

</div>

<div class="col-sm-2 br-right">

<div class="section-title">

<a href="#">

<h4>ক্যাম্পাস</h4>

</a>

</div>

<div class="post-item-list">

<div class="row ">

<div class="col-xs-12 p-t-10">
<?php $this->db->from('posts');
    $this->db->where(array('post_type' =>'article','visibility' =>'1','lang_id' => '1','category_id' =>'18'));
    $this->db->order_by("id","DESC");
    $this->db->limit(1);  
    $query = $this->db->get();
        $counter = 1;
foreach ($query->result() as $row)
{
 ?>
<a class="post-item" href="<?php echo permalink($row->id); ?>">

<figure class="img-holder">

<img src="<?php echo base_url().$row->image_small; ?>" alt="<?php echo $row->title; ?>">

<div class="link-icon"><i class="fa fa-play"></i></div>

</figure>

<div class="p-b-10">

<div class="title-holder p-t-10">

<h3 class="post-title no-margin p-b-10"><?php echo $row->title; ?></h3>

<p class="brief"><?php echo
    excerpt($row->content, 250);

 ?></p></p>

</div>

<div class="category-meta">

<p class="category"><?php echo category($row->category_id); ?></p>

</div>

</div>

</a>
<?php }?>
</div>

</div></div>

</div>

<div class="col-sm-2 br-right">

<div class="section-title">

<a href="#">

<h4>ক্যারিয়ার</h4>

</a>

</div>

<div class="post-item-list">

<div class="row ">

<div class="col-xs-12 p-t-10">
<?php $this->db->from('posts');
    $this->db->where(array('post_type' =>'article','visibility' =>'1','lang_id' => '1','category_id' =>'35'));
    $this->db->order_by("id","DESC");
    $this->db->limit(1);  
    $query = $this->db->get();
        $counter = 1;
foreach ($query->result() as $row)
{
 ?>
<a class="post-item" href="<?php echo permalink($row->id); ?>">

<figure class="img-holder">

<img src="<?php echo base_url().$row->image_small; ?>" alt="<?php echo $row->title; ?>">

<div class="link-icon"><i class="fa fa-play"></i></div>

</figure>

<div class="p-b-10">

<div class="title-holder p-t-10">

<h3 class="post-title no-margin p-b-10"><?php echo $row->title; ?></h3>

<p class="brief"><?php echo
    excerpt($row->content, 250);

 ?></p></p>

</div>

<div class="category-meta">

<p class="category"><?php echo category($row->category_id); ?></p>

</div>

</div>

</a>
<?php }?>
</div>

</div></div>

</div>

<div class="col-sm-2">

<div class="section-title">

<a href="#">

<h4>সংসদ</h4>

</a>

</div>

<div class="post-item-list">

<div class="row ">

<div class="col-xs-12 p-t-10">
<?php $this->db->from('posts');
    $this->db->where(array('post_type' =>'article','visibility' =>'1','lang_id' => '1','category_id' =>'21'));
    $this->db->order_by("id","DESC");
    $this->db->limit(1);  
    $query = $this->db->get();
        $counter = 1;
foreach ($query->result() as $row)
{
 ?>
<a class="post-item" href="<?php echo permalink($row->id); ?>">

<figure class="img-holder">

<img src="<?php echo base_url().$row->image_small; ?>" alt="<?php echo $row->title; ?>">

<div class="link-icon"><i class="fa fa-play"></i></div>

</figure>

<div class="p-b-10">

<div class="title-holder p-t-10">

<h3 class="post-title no-margin p-b-10"><?php echo $row->title; ?></h3>

<p class="brief"><?php echo
    excerpt($row->content, 250);

 ?></p></p>

</div>

<div class="category-meta">

<p class="category"><?php echo category($row->category_id); ?></p>

</div>

</div>

</a>
<?php }?>

</div>

</div></div>

</div>

</div>

<div class="row  p-b-20 p-t-20">

<div class="col-sm-2 br-right">

<div class="section-title">

<a href="#">

<h4>ট্রাভেল</h4>

</a>

</div>

<div class="post-item-list">

<div class="row ">

<div class="col-xs-12 p-t-10">
<?php $this->db->from('posts');
    $this->db->where(array('post_type' =>'article','visibility' =>'1','lang_id' => '1','category_id' =>'32'));
    $this->db->order_by("id","DESC");
    $this->db->limit(1);  
    $query = $this->db->get();
        $counter = 1;
foreach ($query->result() as $row)
{
 ?>
<a class="post-item" href="<?php echo permalink($row->id); ?>">

<figure class="img-holder">

<img src="<?php echo base_url().$row->image_small; ?>" alt="<?php echo $row->title; ?>">

<div class="link-icon"><i class="fa fa-play"></i></div>

</figure>

<div class="p-b-10">

<div class="title-holder p-t-10">

<h3 class="post-title no-margin p-b-10"><?php echo $row->title; ?></h3>

<p class="brief"><?php echo
    excerpt($row->content, 250);

 ?></p></p>

</div>

<div class="category-meta">

<p class="category"><?php echo category($row->category_id); ?></p>

</div>

</div>

</a>
<?php }?>
</div>

</div></div>

</div>

<div class="col-sm-2 br-right">

<div class="section-title">

<a href="#">

<h4>নারীশক্তি</h4>

</a>

</div>

<div class="post-item-list">

<div class="row ">

<div class="col-xs-12 p-t-10">
<?php $this->db->from('posts');
    $this->db->where(array('post_type' =>'article','visibility' =>'1','lang_id' => '1','category_id' =>'29'));
    $this->db->order_by("id","DESC");
    $this->db->limit(1);  
    $query = $this->db->get();
        $counter = 1;
foreach ($query->result() as $row)
{
 ?>
<a class="post-item" href="<?php echo permalink($row->id); ?>">

<figure class="img-holder">

<img src="<?php echo base_url().$row->image_small; ?>" alt="<?php echo $row->title; ?>">

<div class="link-icon"><i class="fa fa-play"></i></div>

</figure>

<div class="p-b-10">

<div class="title-holder p-t-10">

<h3 class="post-title no-margin p-b-10"><?php echo $row->title; ?></h3>

<p class="brief"><?php echo
    excerpt($row->content, 250);

 ?></p></p>

</div>

<div class="category-meta">

<p class="category"><?php echo category($row->category_id); ?></p>

</div>

</div>

</a>
<?php }?>

</div>

</div></div>

</div>

<div class="col-sm-2 br-right">

<div class="section-title">

<a href="#">

<h4>কৃষি</h4>

</a>

</div>

<div class="post-item-list">

<div class="row ">

<div class="col-xs-12 p-t-10">
<?php $this->db->from('posts');
    $this->db->where(array('post_type' =>'article','visibility' =>'1','lang_id' => '1','category_id' =>'33'));
    $this->db->order_by("id","DESC");
    $this->db->limit(1);  
    $query = $this->db->get();
        $counter = 1;
foreach ($query->result() as $row)
{
 ?>
<a class="post-item" href="<?php echo permalink($row->id); ?>">

<figure class="img-holder">

<img src="<?php echo base_url().$row->image_small; ?>" alt="<?php echo $row->title; ?>">

<div class="link-icon"><i class="fa fa-play"></i></div>

</figure>

<div class="p-b-10">

<div class="title-holder p-t-10">

<h3 class="post-title no-margin p-b-10"><?php echo $row->title; ?></h3>

<p class="brief"><?php echo
    excerpt($row->content, 250);

 ?></p></p>

</div>

<div class="category-meta">

<p class="category"><?php echo category($row->category_id); ?></p>

</div>

</div>

</a>
<?php }?>

</div>

</div></div>

</div>

<div class="col-sm-2 br-right">

<div class="section-title">

<a href="#">

<h4>স্বাস্থ্য-বার্তা</h4>

</a>

</div>

<div class="post-item-list">

<div class="row ">

<div class="col-xs-12 p-t-10">
<?php $this->db->from('posts');
    $this->db->where(array('post_type' =>'article','visibility' =>'1','lang_id' => '1','category_id' =>'34'));
    $this->db->order_by("id","DESC");
    $this->db->limit(1);  
    $query = $this->db->get();
        $counter = 1;
foreach ($query->result() as $row)
{
 ?>
<a class="post-item" href="<?php echo permalink($row->id); ?>">

<figure class="img-holder">

<img src="<?php echo base_url().$row->image_small; ?>" alt="<?php echo $row->title; ?>">

<div class="link-icon"><i class="fa fa-play"></i></div>

</figure>

<div class="p-b-10">

<div class="title-holder p-t-10">

<h3 class="post-title no-margin p-b-10"><?php echo $row->title; ?></h3>

<p class="brief"><?php echo
    excerpt($row->content, 250);

 ?></p></p>

</div>

<div class="category-meta">

<p class="category"><?php echo category($row->category_id); ?></p>

</div>

</div>

</a>
<?php }?>

</div>

</div></div>

</div>

<div class="col-sm-2 br-right">

<div class="section-title">

<a href="#">

<h4>প্রবাসী</h4>

</a>

</div>

<div class="post-item-list">

<div class="row ">

<div class="col-xs-12 p-t-10">
<?php $this->db->from('posts');
    $this->db->where(array('post_type' =>'article','visibility' =>'1','lang_id' => '1','category_id' =>'23'));
    $this->db->order_by("id","DESC");
    $this->db->limit(1);  
    $query = $this->db->get();
        $counter = 1;
foreach ($query->result() as $row)
{
 ?>
<a class="post-item" href="<?php echo permalink($row->id); ?>">

<figure class="img-holder">

<img src="<?php echo base_url().$row->image_small; ?>" alt="<?php echo $row->title; ?>">

<div class="link-icon"><i class="fa fa-play"></i></div>

</figure>

<div class="p-b-10">

<div class="title-holder p-t-10">

<h3 class="post-title no-margin p-b-10"><?php echo $row->title; ?></h3>

<p class="brief"><?php echo
    excerpt($row->content, 250);

 ?></p></p>

</div>

<div class="category-meta">

<p class="category"><?php echo category($row->category_id); ?></p>

</div>

</div>

</a>
<?php }?>

</div>

</div></div>

</div>

<div class="col-sm-2">

<div class="section-title">

<a href="#">

<h4>আইন-আদালত</h4>

</a>

</div>

<div class="post-item-list">

<div class="row ">

<div class="col-xs-12 p-t-10">
<?php $this->db->from('posts');
    $this->db->where(array('post_type' =>'article','visibility' =>'1','lang_id' => '1','category_id' =>'26'));
    $this->db->order_by("id","DESC");
    $this->db->limit(1);  
    $query = $this->db->get();
        $counter = 1;
foreach ($query->result() as $row)
{
 ?>
<a class="post-item" href="<?php echo permalink($row->id); ?>">

<figure class="img-holder">

<img src="<?php echo base_url().$row->image_small; ?>" alt="<?php echo $row->title; ?>">

<div class="link-icon"><i class="fa fa-play"></i></div>

</figure>

<div class="p-b-10">

<div class="title-holder p-t-10">

<h3 class="post-title no-margin p-b-10"><?php echo $row->title; ?></h3>

<p class="brief"><?php echo
    excerpt($row->content, 250);

 ?></p></p>

</div>

<div class="category-meta">

<p class="category"><?php echo category($row->category_id); ?></p>

</div>

</div>

</a>
<?php }?>

</div>

</div></div>

</div>

</div>

</div>

</div>

<div class="container-fluid  p-b-20 p-t-20">

<div class="row bg-grey">

<div class="container">

<div class="row ghotona-probaho p-t-20">

<div class="section-title">

<h2>আলোচিত ঘটনাগুলো</h2>

</div>

<div class="post-items p-b-20 p-t-20 br-bottom">
<?php $this->db->from('posts');

    $this->db->where(array('post_type' =>'article','visibility' =>'1','lang_id' => '1','is_recommended' =>'1'));

    $this->db->order_by("id","DESC");

    $this->db->limit(4);  

    $query = $this->db->get();

        $counter = 1;

foreach ($query->result() as $row)

{

 ?>

<div class="post-item col-sm-3">

<a href="<?php echo permalink($row->id); ?>">

<figure>

<img src="<?php echo $row->image_mid; ?>" alt="<?php echo $row->title; ?>">

</figure>

<h3 class="post-title"><?php echo $row->title; ?></h3>

<!--<p></p>-->

</a>

</div>
<?php }?>


</div>

<div class="post-items p-b-20 p-t-20">

<?php $this->db->from('posts');

    $this->db->where(array('post_type' =>'article','visibility' =>'1','lang_id' => '1','is_recommended' =>'1'));

    $this->db->order_by("id","DESC");

    $this->db->limit(4,4);  

    $query = $this->db->get();

        $counter = 1;

foreach ($query->result() as $row)

{

 ?>

<div class="post-item col-sm-3">

<a href="<?php echo permalink($row->id); ?>">

<figure>

<img src="<?php echo $row->image_mid; ?>" alt="<?php echo $row->title; ?>">

</figure>

<h3 class="post-title"><?php echo $row->title; ?></h3>

<!--<p></p>-->

</a>

</div>
<?php }?>


</div>

</div>

</div>

</div>

</div>

</main>