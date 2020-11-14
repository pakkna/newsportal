<!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5d59a2f8f6d6376d"></script>
 <!-- Load Facebook SDK for JavaScript -->
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v8.0&appId=436552463847496&autoLogAppEvents=1" nonce="BnaVxSnw"></script>

<main class="page_main_wrapper">

<div class="container">
</div>
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="top-large-ad p-t-10 hidden-md-down">

<div id="div-gpt-ad-1580901128057-0" style="margin: 0 auto; width: 970px;" data-google-query-id="CKrorpGU3-wCFU4ItwAdz2cJPw">
</div>
</div>
</div>
</div>
</div>
</div>
<div class="container">
<ul class="breadcrumb">
<li class="breadcrumb-item"> <a href="<?php echo lang_base_url(); ?>"> <i class="fa fa-home"></i>&nbsp; </a></li>

    <?php $categories = get_parent_category_tree($post->category_id, $this->categories);
                    if (!empty($categories)):
                        foreach ($categories as $item):
                            if (!empty($item)):?>
                                <li class="breadcrumb-item">
                                    <a href="<?php echo generate_category_url($item); ?>"><?php echo html_escape($item->name); ?></a>
                                </li>
                            <?php endif;
                        endforeach;
                    endif; ?>
<li class="breadcrumb-item"> <a href="#"><?php echo $post->title;?></a> </li>
</ul>
</div>
<div class="container">
<div class="row three-col-layout p-b-20 no-margin">
<div class="col-left col-left hidden-xs hidden-sm p-t-20">
<div class="post-metas">
<div class="items bg-grey edited-item">
<div class="item">
 <time datetime="2020-10-31 19:23:48"> <?php echo mim_date(helper_date_format($post->created_at)); ?> | <?php echo mim_date(formatted_hour($post->created_at)); ?> </time>
 <br>


</div>
<div class="item">
<div class="author_name">
<?php if(!empty($post->rp_name)){
    echo $post->rp_name;
}else{
echo "ডেস্ক নিউজ";}?>
</div>
</div>
<div class="item">
<ul>
<li class="incFont"><img src="/newstoday/img/increase-font.jpg" alt="Font increase" title="Increase Font Size"></li>
<li class="decFont"><img src="/newstoday/img/decrease-font.jpg" alt="Font Decrease" title="Decrease Font Size"></li>
</ul>
</div>
<div class="item">
<div class="fb-save" data-uri="<?php echo permalink($post->id);?> data-size="large"></div>
</div>
<div class="item">

</div>
<div class="item">

               <!-- ShareThis BEGIN --><div class="sharethis-inline-share-buttons"></div><!-- ShareThis END -->
            
</div>
</div>
</div>
</div>
<div class="col-middle p-10">
<div class="single-post-content">
<div class="title-holder m-b-20">
<h1 class="title m-b-20"><?php echo html_escape($post->title); ?></h1>
</div>
<div class="m-top-meta">
<div class="col-sm-7 p-l-0">
<div class="item">
 <time datetime="2020-10-31 19:23:48"> <?php echo mim_date(helper_date_format($post->created_at)); ?> | <?php echo mim_date(formatted_hour($post->created_at)); ?> </time><br>

</div>
<div class="item">
<div class="author_name">
<?php if($post->rp_name){
    echo $post->rp_name;
}else{
echo "ডেস্ক নিউজ";}?>
</div>
</div>
</div>
<div class="col-sm-5 no-padding">
<div class="item addthis-share">
  <!-- ShareThis BEGIN --><div class="sharethis-inline-share-buttons"></div><!-- ShareThis END -->
</div>
</div>
</div>
<figure class="img-holder">
<img src="/<?php echo $post->image_big; ?>" alt="<?php echo $post->title; ?>">
<?php if ($post->image_description){?>
<p class="img-caption img-layer-thumb m-b-0"><?php echo $post->image_description;?></p>
<?php }?>
</figure>
<div class="m-bottom-meta">
<div class="item">
<ul>
<li class="incFont"><img src="/newstoday/img/increase-font.jpg" alt="Font increase" title="Increase Font Size"></li>
<li class="decFont"><img src="/newstoday/img/decrease-font.jpg" alt="Font Decrease" title="Decrease Font Size"></li>
</ul>
</div>


</div>
<div class="entry-content">
 <?php echo $post->content; ?>
</div>
 <?php if (!empty($post_tags)): ?>
<div class="post-tags-alt u-margin-t-20" style="display:block">
<div class="tags-wrap">
<i class="fa fa-tags" style="font-size:1.3em"></i>
 <?php foreach ($post_tags as $tag) : ?>
<a class="cat-world" href="<?php echo generate_tag_url($tag->tag_slug); ?>"><?php echo html_escape($tag->tag); ?></a
>
<?php endforeach; ?>
</a>
</div>
</div>
 <?php endif; ?>
  <section class="section section-related-posts">
      <?php  
    if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')   
         $url = "https://";   
    else  
         $url = "http://";   
    // Append the host(domain name, ip) to the URL.   
    $url.= $_SERVER['HTTP_HOST'];   
    
    // Append the requested resource location to the URL   
    $url.= $_SERVER['REQUEST_URI'];    
      
  ?>   
 <div class="hidden-print">
									<div style="border:1px solid #dadada">
										<h4 style="background: #4d4e8a;padding: 15px;color: #fff;margin:-1px -1px 0;">আপনার মতামত লিখুন :</h4>
								<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v4.0&appId=436552463847496&autoLogAppEvents=1"></script>
<div class="fb-comments" data-href="<?php echo $url;  ?>" data-width="" data-numposts="5"></div>
										
									</div>
								</div>
								    </section>
  <section class="section section-related-posts">
                    <div class="section-head">
                          <h4 class="title">আরও পড়ুনঃ-</h4>
                    </div>

                    <div class="section-content">
                        <div class="row">
                            <?php $i = 0; ?>
                            <?php foreach ($related_posts as $item): ?>

                                <?php if ($i > 0 && $i % 3 == 0): ?>
                                    <div class="col-sm-12"></div>
                                <?php endif; ?>

                                <!--include post item-->
                                <div class="col-sm-4 col-xs-12">
                                    <?php $this->load->view("post/_post_item_mid", ["post" => $item]); ?>
                                </div>

                                <?php $i++; ?>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </section>


</div>
</div>
<div class="col-right no-padding">
<div class="p-t-20">

<div id="div-gpt-ad-1557044636427-0" style=" margin:0 auto; height:250px; width:300px;" data-google-query-id="CKforpGU3-wCFU4ItwAdz2cJPw">
<a href="#"><img src="https://via.placeholder.com/300x250"></a>
</div>
</div>
</div>
</div>
</div>
<div class="container">
<div class="row">

<div id="div-gpt-ad-1574910440581-0" style="width: 728px; height: 90px; margin:0 auto;" data-google-query-id="CKzorpGU3-wCFU4ItwAdz2cJPw">
<a href="#"><img src="https://via.placeholder.com/780x80"></a>
</div>
</div>
</div>
</main>

<script>(function(d, s, id) {
var js, fjs = d.getElementsByTagName(s)[0];
if (d.getElementById(id)) return;
js = d.createElement(s); js.id = id;
js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.6&appId={your-app-id}";
fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>