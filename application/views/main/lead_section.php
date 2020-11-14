<div class="row no-margin p-b-20 br-bottom p-t-20">
<div class="col-md-9 col-lg-9">
    <?php $this->db->from('posts');
    $this->db->where(array('post_type' =>'article','lang_id' => '1','is_slider'=>'1'));
    $this->db->order_by("id","DESC");
    $this->db->limit(1);  
    $query = $this->db->get();
        $counter = 1;
foreach ($query->result() as $row)
{
 ?>
<div class="row no-margin lead-news bg-violet">
<a href="<?php echo permalink($row->id); ?>">
<div class="col-md-5 p-10">
<div class="post-content">
<div class="post-metas">
<p class="category"><?php echo category($row->category_id); ?></p>
</div>
<div class="title-holder">
<h1 class="post-title no-margin"><?php echo $row->title; ?></h1>
</div>
<div class="post_desc p-t-10">
    <p><?php echo
    excerpt($row->content, 250);

 ?></p>
</div>
</div>

</div>
<div class="col-md-7 no-padding">
<div class="img-holder">
<img src="<?php echo base_url().$row->image_mid; ?>" alt="<?php echo $row->title; ?>">
</div>
</div>
</a>
</div>
<?php } ?>
</div>
<div class="col-md-3 col-lg-3 lead-news-2">
 <div class=" no-margin">
        <?php $this->db->from('posts');
    $this->db->where(array('post_type' =>'article','lang_id' => '1'));
    $this->db->order_by("id","DESC");
    $this->db->limit(1,1);  
    $query = $this->db->get();
        $counter = 1;
foreach ($query->result() as $row)
{
 ?>
<a class="post-item bg-grey" href="<?php echo permalink($row->id); ?>">
<figure class="img-holder">
<img src="<?php echo base_url().$row->image_mid; ?>" alt="<?php echo $row->title; ?>">
</figure>
<div class="post-content">
<div class="post-metas">
<p class="category"><?php echo category($row->category_id); ?></p>
</div>
<div class="title-holder">
<h3 class="post-title no-margin"><?php echo $row->title; ?></h3>
</div>
</div>
</a>
<?php } ?>



</div>
</div>
</div>
<div class="row no-margin br-bottom p-b-20 p-t-20">
<?php $this->db->from('posts');
    $this->db->where(array('post_type' =>'article','lang_id' => '1'));
    $this->db->order_by("id","DESC");
    $this->db->limit(4,1);  
    $query = $this->db->get();
        $counter = 1;
foreach ($query->result() as $row)
{
 ?>
<div class="col-xs-6 col-md-3 col-lg-3 p-b-20">
            
<a class="post-item bg-grey" href="<?php echo permalink($row->id); ?>">
<figure class="img-holder">
<img src="<?php echo base_url().$row->image_mid; ?>" alt="<?php echo $row->title; ?>">
</figure>
<div class="post-content">
<div class="post-metas">
<p class="category"><?php echo category($row->category_id); ?></p>
</div>
<div class="title-holder">
<h3 class="post-title no-margin"><?php echo $row->title; ?> </h3>
</div>
</div>
</a>
</div>
<?php } ?>
</div>
<div class="row banner-holder p-20">
<?php $this->load->view("partials/_ad_spaces", ["ad_space" => "index_top"]); ?>
</div>
