<nav class="navbar navbar-default navbar-subcat hidden-sm hidden-xs">
<div class="container no-padding">
<div class="no-padding cat-menu" id="navbar-menu">
<ul class="nav navbar-nav navbar-left" data-in="" data-out="">
<li class="cat_name">
<a href="/national"><?php echo category($category->id);?></a>
</li>
<li class="">
<a href="/national/জেলা">জেলা</a>
</li>
<li class="">
<a href="/national/চট্টগ্রাম">চট্টগ্রাম</a>
</li>
<li class="">
<a href="/national/সিলেট">সিলেট</a>
</li>
<li class="">
<a href="/national/বরিশাল">বরিশাল</a>
</li>
<li class="">
<a href="/national/রংপুর">রংপুর</a>
</li>
<li class="dropdown">
<a href="#" class="dropdown-toggle" data-toggle="dropdown">আরও</a>
<ul class="dropdown-menu">
 <li><a href="/national/ময়মনসিংহ">ময়মনসিংহ</a></li>
<li><a href="/national/ঢাকা">ঢাকা</a></li>
<li><a href="/national/কুমিল্লা">কুমিল্লা</a></li>
<li><a href="/national/খুলনা">খুলনা</a></li>
<li><a href="/national/রাজশাহী">রাজশাহী</a></li>
<li><a href="/national/বিবিধ">বিবিধ</a></li>
</ul>
</li>
</ul>
</div>
</div>
</nav>
<main class="page_main_wrapper">

<div class="container">
</div>
<div class="container p-b-20 br-bottom">
<div class="row two-col-layout">
<div class="col-left br-right hide-section-title p-t-20 category-news">

<div class="row p-r-20 p-20">
<div class="col-xs-12 col-sm-6">
<div class="row ">
<div class="col-xs-12 p-t-10">
<?php
$this->db->from('posts');
    $this->db->where(array('post_type' =>'article','visibility' =>'1','lang_id' => '1','category_id' =>$category->id));
    $this->db->order_by("created_at","DESC");
    $this->db->limit(1);  
    $query = $this->db->get();
        $counter = 1;
foreach ($query->result() as $row)
{
 ?>
<a class="post-item" href="<?php echo permalink($row->id); ?>">
<figure class="img-holder">
<img src="<?php echo '/'.$row->image_small; ?>">
<div class="link-icon"><i class="fa fa-play"></i></div>
</figure>
<div class="p-b-10">
<div class="title-holder p-t-10">
<h3 class="post-title no-margin p-b-10"><?php echo $row->title; ?></h3>
<p class="brief"><?php echo
    excerpt($row->content, 300);

 ?></p>
</div>
<div class="category-meta">
<p class="category"><?php echo category($row->category_id); ?></p>
</div>
</div>
</a>


<?php }?>
</div>
</div> </div>
<div class="col-xs-12 col-sm-6">
<div class="row">
<?php $this->db->from('posts');
    $this->db->where(array('post_type' =>'article','visibility' =>'1','lang_id' => '1','category_id' =>$category->id));
    $this->db->order_by("created_at","DESC");
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
<img src="<?php echo base_url().$row->image_mid; ?>" alt="<?php echo $row->title; ?>">
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
</div> </div>

<?php }?>
</div>


<div class="row">
<?php $this->db->from('posts');
    $this->db->where(array('post_type' =>'article','visibility' =>'1','lang_id' => '1','category_id' =>$category->id));
    $this->db->order_by("created_at","DESC");
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
<img src="<?php echo base_url().$row->image_small; ?>" alt="<?php echo $row->title; ?>">
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
</div> </div>

<?php }?>
</div>
</div>
</div>
<div class="col-xs-12 br-top p-b-20">
<h2><?php echo category($category->id); ?> এর আরও খবর</h2>
</div>
<div class="col-xs-12">
<div class="row ">
    <?php foreach ($posts as $post): ?>  
<div class="col-xs-12  col-sm-6  p-t-10 p-b-10 br-bottom">
<a href="<?php echo permalink($post->id); ?>">
<div class="col-xs-5 no-padding">
<figure class="img-holder">
<?php $this->load->view("post/_post_image", ["post_item" => $post, "type" => "medium"]); ?>
</figure>
</div>
<div class="col-xs-7 p-l-10">
<div class="title-holder">
<h3 class="post-title no-margin"><?php echo $post->title; ?></h3>
</div>
<div class="category-meta">
<p class="category"><?php echo category($post->category_id); ?></p>
</div>
</div>
</a>
</div>
                    <?php endforeach; ?>

<!------------------------------------------>
 

</div>


</div>
<div class="col-xs-12">
<div class="pagination_links">
<?php echo $this->pagination->create_links(); ?>
</div> </div>
</div>

<div class="col-right no-padding">
<div class="col-xs-12">
<div class="section-title">
<h3>জাতীয় এর ভিডিও</h3>
</div>
<div class="br-bottom">
<div class="row  video ">
<div class="col-xs-12 p-t-10">
<a class="post-item" href="https://www.youtube.com/embed/XltDpyx04Y0">
<figure class="img-holder">
<img src="https://imaginary.barta24.com/crop?width=300&amp;height=170&amp;quality=75&amp;path=/uploads/video-thumbs/2020/Oct/26/1603721673850.jpg" alt="অনাবিল প্রশান্তির দুর্গাসাগর দীঘি">
<div class="link-icon"><i class="fa fa-play"></i></div>
</figure>
<div class="p-b-10">
<div class="title-holder p-t-10">
<h3 class="post-title no-margin p-b-10">অনাবিল প্রশান্তির দুর্গাসাগর দীঘি</h3>
</div>
<div class="category-meta">
<p class="category">জাতীয়</p>
</div>
</div>
</a>
</div>
</div> <div class="row  video ">
<div class="col-xs-12 p-t-10">
<a class="post-item" href="https://www.youtube.com/embed/LvZAPPzYGGU">
<figure class="img-holder">
<img src="https://imaginary.barta24.com/crop?width=300&amp;height=170&amp;quality=75&amp;path=/uploads/video-thumbs/2020/Oct/12/1602497384865.jpg" alt="পাপিয়া দম্পত্তির ২৭ বছর কারাদণ্ড">
<div class="link-icon"><i class="fa fa-play"></i></div>
</figure>
<div class="p-b-10">
<div class="title-holder p-t-10">
<h3 class="post-title no-margin p-b-10">পাপিয়া দম্পত্তির ২৭ বছর কারাদণ্ড</h3>
</div>
<div class="category-meta">
<p class="category">জাতীয়</p>
</div>
</div>
</a>
</div>
</div>
</div>
</div>
<div class="col-xs-12">

<div id="div-gpt-ad-1568790468549-0" style="width: 300px; height: 250px; margin: 5px auto;" data-google-query-id="CPTBuPTS5OwCFWQQtwAd4YEJCA">
<script>
            googletag.cmd.push(function() { googletag.display('div-gpt-ad-1568790468549-0'); });
        </script>
<div id="google_ads_iframe_/21791730259/desktop_detail_rs2_300x250_0__container__" style="border: 0pt none; width: 300px; height: 250px;"></div></div>
</div>
<div class="col-xs-12">
<div class="section-title">
<h3>জাতীয় এর জনপ্রিয়</h3>
</div>
<div class="br-bottom">
<div class="row ">
<div class="col-xs-12 p-t-10">
<a class="post-item" href="/details/national/106257/72-lakh-embezzled-from-college-account-principal-jailed">
<figure class="img-holder">
<img src="https://imaginary.barta24.com/crop?width=300&amp;height=170&amp;quality=75&amp;path=/uploads/news/2020/Oct/19/1603095211887.jpg" alt="কলেজের অ্যাকাউন্ট থেকে ৭২ লাখ টাকা আত্মসাৎ, অধ্যক্ষ জেলে">
<div class="link-icon"><i class="fa fa-play"></i></div>
</figure>
 <div class="p-b-10">
<div class="title-holder p-t-10">
<h3 class="post-title no-margin p-b-10">কলেজের অ্যাকাউন্ট থেকে ৭২ লাখ টাকা আত্মসাৎ, অধ্যক্ষ জেলে</h3>
<p class="brief">রাজশাহীর গোদাগাড়ী সরকারি কলেজের ব্যাংক হিসাব থেকে প্রায় সাড়ে ৭২ লাখ টাকা আত্মসাতের মামলায় কলেজটির অধ্যক্ষ আব্দুর রহমানকে কারাগারে পাঠিয়েছেন আদালত।</p>
</div>
<div class="category-meta">
<p class="category">জাতীয়</p>
</div>
</div>
</a>
</div>
</div> </div>
<div class="row mobile_list_simple ">
<div class="col-xs-12 p-t-10 p-b-10 br-bottom item">
<a href="/details/national/105743/young-man-stabbed-to-death">
<div class="title-holder">
<h3 class="post-title no-margin">বগুড়ায় কিশোর অপরাধীদের ছুরিকাঘাতে যুবক খুন</h3>
</div>
<div class="category-meta">
<p class="category">জাতীয়</p>
</div>
</a>
</div>
<div class="col-xs-12 p-t-10 p-b-10 br-bottom item">
<a href="/details/national/106947/terrorist-emperor-killed-in-bogra">
<div class="title-holder">
<h3 class="post-title no-margin">বগুড়ায় সন্ত্রাসী সম্রাট খুনের ঘটনায় এলাকায় স্বস্তি, মিষ্টি বিতরণ</h3>
</div>
<div class="category-meta">
<p class="category">জাতীয়</p>
</div>
</a>
</div>
<div class="col-xs-12 p-t-10 p-b-10 br-bottom item">
<a href="/details/national/105872/mymensingh-will-be-the-biggest-bksp-after-dhaka">
<div class="title-holder">
<h3 class="post-title no-margin">ঢাকার পরে সবচেয়ে বড় বিকেএসপি হবে ময়মনসিংহে: ক্রীড়া প্রতিমন্ত্রী</h3>
</div>
<div class="category-meta">
<p class="category">জাতীয়</p>
</div>
</a>
</div>
<div class="col-xs-12 p-t-10 p-b-10 br-bottom item">
<a href="/details/national/106247/expatriate-wife">
<div class="title-holder">
<h3 class="post-title no-margin">নিখোঁজের ১২ দিন পর ফিরে এলেন প্রবাসীর স্ত্রী</h3>
</div>
<div class="category-meta">
<p class="category">জাতীয়</p>
</div>
</a>
</div>
</div> </div>
</div>
</div>
</div>
</main>

