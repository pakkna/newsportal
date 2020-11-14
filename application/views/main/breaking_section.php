<div class="row no-margin br-bottom p-b-20 p-t-20 p-r-20 br-top">
<div class="col-xs-12 col-md-6">
<div class="bg-white p-t-20 p-r-10">
<div class="row no-margin">
<div class="col-sm-12 hidden-xs">
<div class="p-b-10">
    <?php
    $string = file_get_contents("/home/prokoush/public_html/corona.json");
    // echo $string;
     $out = json_decode($string, true);
    ?>
<a href="corona-virus" class="">
<h3 class="topic-style"><i class="fa fa-bolt"></i>&nbsp; বাংলাদেশে করোনা </h3>
</a>
</div>
<div class=" p-t-5">
<p style="font-size:24px;"> সর্বশেষ আপডেট: <span style="color: red"> আক্রান্ত
<?php echo mim_date($out["positive"]["last24"])?></span>, মৃত্যু
<?php echo mim_date($out["death"]["last24"])?>
</p>
</div>
<div class=" p-t-5">
<p style="font-size:24px;"> সর্বমোট: <span style="color: red"> আক্রান্ত
<?php echo mim_date($out["positive"]["total"])?>
</span>, মৃত্যু 
<?php echo mim_date($out["death"]["total"])?>
<span style="color: #32CD32">
সুস্থ 
<?php echo mim_date($out["recovered"]["total"])?>
</span></p>
</div>
</div>

<div class="col-xs-12 hidden-sm hidden-lg">
<div class="section-title">
<a href="corona-virus.html" class="">
<h3 class="topic-style"><i class="fa fa-bolt"></i>&nbsp; বাংলাদেশে করোনা </h3>
</a>
</div>
<p style="font-size:24px;"> সর্বশেষ আপডেট: <span style="color: red"> আক্রান্ত
<?php echo mim_date($out["positive"]["last24"])?></span>, মৃত্যু
<?php echo mim_date($out["death"]["last24"])?>
</p>
<p style="font-size:24px;"> সর্বমোট: <span style="color: red"> আক্রান্ত
<?php echo mim_date($out["positive"]["total"])?>
</span>, মৃত্যু 
<?php echo mim_date($out["death"]["total"])?>
<span style="color: #32CD32">
সুস্থ 
<?php echo mim_date($out["recovered"]["total"])?>
</span></p>
</div>
</div>
</div>
</div>
 <div class="col-xs-12 col-md-6 p-l-20">
<div class="row">
<div class="col-xs-12 col-md-6">
<div class="row mobile_list_simple  bg-white min-height ">
    <?php $this->db->from('posts');
    $this->db->where(array('post_type' =>'article','lang_id' => '1','is_breaking' =>'1'));
    $this->db->order_by("id","DESC");
    $this->db->limit(2);  
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
<?php } ?>
</div> </div>


<div class="col-xs-12 col-md-6">
<div class="row mobile_list_simple  bg-white min-height ">
    <?php $this->db->from('posts');
    $this->db->where(array('post_type' =>'article','lang_id' => '1','is_breaking' =>'1'));
    $this->db->order_by("id","DESC");
    $this->db->limit(2,2);  
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
<?php } ?>
</div> </div>
</div>
</div>
<div class="col-xs-12 p-r-0 p-t-10">
<!--<img src="assets/shadboichitro.jpg">-->
</div>
</div>
