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

                                        $this->db->where(array('post_type' => 'article', 'visibility' => '1', 'lang_id' => '1'));

                                        $this->db->order_by("id", "DESC");

                                        $this->db->limit(10);

                                        $query = $this->db->get();

                                        $counter = 1;

                                        foreach ($query->result() as $row) {

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

                                    </div>

                                </div>

                            </div>

                            <div role="tabpanel" class="tab-pane fade" id="popular">

                                <div class="most-viewed" id="most-today">

                                    <div class="row mobile_list_simple ">



                                        <?php $this->db->from('posts');

                                        $this->db->where(array('post_type' => 'article', 'visibility' => '1', 'lang_id' => '1'));

                                        $this->db->order_by("pageviews", "DESC");

                                        $this->db->limit(10);

                                        $query = $this->db->get();

                                        $counter = 1;

                                        foreach ($query->result() as $row) {

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





                                    </div>
                                </div>

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

                        <a href="topic/corona">
                            <h2>বাংলাদেশে করোনাভাইরাস</h2>
                        </a>

                    </div>

                    <div class="contents p-l-10">

                        <div class="row ">

                            <div class="col-xs-12 p-t-10">
                                <?php $this->db->from('posts');
                                $this->db->where(array('post_type' => 'article', 'visibility' => '1', 'lang_id' => '1'));
                                $this->db->order_by("id", "DESC");
                                $this->db->limit(1);
                                $query = $this->db->get();
                                $counter = 1;
                                foreach ($query->result() as $row) {
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
                                <?php } ?>

                            </div>

                        </div>
                        <div class="row ">
                            <div class="col-xs-12 p-t-10">
                                <?php $this->db->from('posts');
                                $this->db->where(array('post_type' => 'article', 'visibility' => '1', 'lang_id' => '1'));
                                $this->db->order_by("id", "DESC");
                                $this->db->limit(10);
                                $query = $this->db->get();
                                $counter = 1;
                                foreach ($query->result() as $row) {
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
                                <?php } ?>


                            </div>
                        </div>

                    </div>

                    <div class="advert" style="margin:5px 0;">



                        <div id='div-gpt-ad-1565185486322-0' style='width: 300px; height: 250px;'>

                            <a href="#"><img src="https://via.placeholder.com/300x250"></a>


                        </div>

                    </div>

                </div>

            </div>

        </div>


        <!--------------------------Tab section------------------------------------->

        <div class="container p-b-20 p-t-20">
            <div class="row two-col-layout">
                <div class="col-left br-right">

                    <div class="row no-margin">
                        <div class="col-sm-12">
                            <div class="wrapper division-tabs">
                                <div class="tabs">
                                    <div class="tab section-title">
                                        <label for="" class="tab-label">দেশের খবর</label>
                                    </div>
                                    <div class="tab">
                                        <input type="radio" name="css-tabs" id="tab-1" checked="" class="tab-switch">
                                        <label for="tab-1" class="tab-label">বরিশাল</label>
                                        <div class="tab-content">

                                            <div class="row  no-margin p-t-20 ">
                                                <div class="col-sm-12">
                                                </div>
                                                <div class="col-md-6">
                                                    <a class="post-item" href="/details/national/108515/dipali-festival-barisal-short-corona">
                                                        <figure class="">
                                                            <img src="https://imaginary.barta24.com/crop?width=300&amp;height=170&amp;quality=75&amp;path=/uploads/news/2020/Nov/13/1605249780187.jpg" alt="করোনায় সংক্ষিপ্ত হচ্ছে বরিশালের দিপালী উৎসব">
                                                        </figure>
                                                        <div class="post-content no-padding">
                                                            <h2 class="post-title">
                                                                করোনায় সংক্ষিপ্ত হচ্ছে বরিশালের দিপালী উৎসব
                                                            </h2>
                                                            <p>
                                                                প্রতি বছর মেলা, মহাশ্মশান ঘিরে তোরণ নির্মাণ এবং আলোকসজ্জাসহ নানা আয়োজনের মধ্য দিয়ে বরিশালে পালিত হয় উপমহাদেশের সর্ববৃহৎ
                                                            </p>
                                                            <div class="category-meta">
                                                                <p class="category">বরিশাল</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="row post-items">
                                                        <div class="col-xs-6">
                                                            <a class="post-item" href="/details/national/108482/anal-yaba-trafficking">
                                                                <figure class="">
                                                                    <img src="https://imaginary.barta24.com/crop?width=300&amp;height=170&amp;quality=75&amp;path=/uploads/news/2020/Nov/12/1605192662652.jpg" alt="পায়ুপথে ইয়াবা পাচার!">
                                                                </figure>
                                                                <div class="post-content no-padding">
                                                                    <h3 class="post-title">
                                                                        পায়ুপথে ইয়াবা পাচার!
                                                                    </h3>
                                                                    <div class="category-meta">
                                                                        <p class="category">পটুয়াখালী</p>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="col-xs-6">
                                                            <a class="post-item" href="/details/national/108418/island-lighting">
                                                                <figure class="">
                                                                    <img src="https://imaginary.barta24.com/crop?width=300&amp;height=170&amp;quality=75&amp;path=/uploads/news/2020/Nov/12/1605159577087.png" alt="আজ সেই ভয়াল ১২ নভেম্বর: প্রদ্বীপ প্রজ্বলনের মাধ্যমে নিহতদের স্মরণ">
                                                                </figure>
                                                                <div class="post-content no-padding">
                                                                    <h3 class="post-title">
                                                                        আজ সেই ভয়াল ১২ নভেম্বর: প্রদ্বীপ প্রজ্বলনের মাধ্যমে নিহতদের স্মরণ
                                                                    </h3>
                                                                    <div class="category-meta">
                                                                        <p class="category">পটুয়াখালী</p>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="row post-items p-t-20">
                                                        <div class="col-xs-6">
                                                            <a class="post-item" href="/details/national/108411/barisa-a-league">
                                                                <figure class="">
                                                                    <img src="https://imaginary.barta24.com/crop?width=300&amp;height=170&amp;quality=75&amp;path=/uploads/news/2020/Nov/12/1605146937932.jpg" alt="বরিশাল জেলা আ.লীগের সহ-সভাপতি মিন্টু আর নেই">
                                                                </figure>
                                                                <div class="post-content no-padding">
                                                                    <h3 class="post-title">
                                                                        বরিশাল জেলা আ.লীগের সহ-সভাপতি মিন্টু আর নেই
                                                                    </h3>
                                                                    <div class="category-meta">
                                                                        <p class="category">বরিশাল</p>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="col-xs-6">
                                                            <a class="post-item" href="/details/national/108392/patuakhali-masks">
                                                                <figure class="">
                                                                    <img src="https://imaginary.barta24.com/crop?width=300&amp;height=170&amp;quality=75&amp;path=/uploads/news/2020/Nov/11/1605101916716.jpg" alt="পটুয়াখালীতে মাস্ক না পরায় ৩০ ব্যক্তিকে জরিমানা">
                                                                </figure>
                                                                <div class="post-content no-padding">
                                                                    <h3 class="post-title">
                                                                        পটুয়াখালীতে মাস্ক না পরায় ৩০ ব্যক্তিকে জরিমানা
                                                                    </h3>
                                                                    <div class="category-meta">
                                                                        <p class="category">পটুয়াখালী</p>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab">
                                        <input type="radio" name="css-tabs" id="tab-2" checked="" class="tab-switch">
                                        <label for="tab-2" class="tab-label">চট্টগ্রাম</label>
                                        <div class="tab-content">

                                            <div class="row  no-margin p-t-20 ">
                                                <div class="col-sm-12">
                                                </div>
                                                <div class="col-md-6">
                                                    <a class="post-item" href="/details/national/108642/suicide">
                                                        <figure class="">
                                                            <img src="https://imaginary.barta24.com/crop?width=300&amp;height=170&amp;quality=75&amp;path=/uploads/news/2020/Nov/14/1605376157154.png" alt="চট্টগ্রামে দাম্পত্য কলহে দুই গৃহবধূর আত্মহত্যা">
                                                        </figure>
                                                        <div class="post-content no-padding">
                                                            <h2 class="post-title">
                                                                চট্টগ্রামে দাম্পত্য কলহে দুই গৃহবধূর আত্মহত্যা
                                                            </h2>
                                                            <p>
                                                                চট্টগ্রাম নগরীতে আত্মহত্যা করেছেন দুই গৃহবধূ। দাম্পত্য কলহ থেকে তারা আত্মহত্যা করে থাকতে পারেন বলে পুলিশের ধারণা।
                                                            </p>
                                                            <div class="category-meta">
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="row post-items">
                                                        <div class="col-xs-6">
                                                            <a class="post-item" href="/details/national/108628/civic-service">
                                                                <figure class="">
                                                                    <img src="https://imaginary.barta24.com/crop?width=300&amp;height=170&amp;quality=75&amp;path=/uploads/news/2020/Nov/14/1605356340248.png" alt="‘রাজস্ব আদায়ের সঙ্গে নাগরিক সেবাও বৃদ্ধি করতে হবে’">
                                                                </figure>
                                                                <div class="post-content no-padding">
                                                                    <h3 class="post-title">
                                                                        ‘রাজস্ব আদায়ের সঙ্গে নাগরিক সেবাও বৃদ্ধি করতে হবে’
                                                                    </h3>
                                                                    <div class="category-meta">
                                                                        <p class="category">কুমিল্লা</p>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="col-xs-6">
                                                            <a class="post-item" href="/details/national/108612/suffocation">
                                                                <figure class="">
                                                                    <img src="https://imaginary.barta24.com/crop?width=300&amp;height=170&amp;quality=75&amp;path=/uploads/news/2020/Nov/14/1605349442742.png" alt="বউয়ের লাশ মরিচ খেতে রেখে পালিয়েছে স্বামী!">
                                                                </figure>
                                                                <div class="post-content no-padding">
                                                                    <h3 class="post-title">
                                                                        বউয়ের লাশ মরিচ খেতে রেখে পালিয়েছে স্বামী!
                                                                    </h3>
                                                                    <div class="category-meta">
                                                                        <p class="category">কুমিল্লা</p>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="row post-items p-t-20">
                                                        <div class="col-xs-6">
                                                            <a class="post-item" href="/details/national/108610/child-rape">
                                                                <figure class="">
                                                                    <img src="https://imaginary.barta24.com/crop?width=300&amp;height=170&amp;quality=75&amp;path=/uploads/news/2020/Nov/14/1605348881595.png" alt="অভিশাপ-পাগল করে দেওয়ার ভয় দেখিয়ে শিশুদের বলাৎকার!">
                                                                </figure>
                                                                <div class="post-content no-padding">
                                                                    <h3 class="post-title">
                                                                        অভিশাপ-পাগল করে দেওয়ার ভয় দেখিয়ে শিশুদের বলাৎকার!
                                                                    </h3>
                                                                    <div class="category-meta">
                                                                        <p class="category">কুমিল্লা</p>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="col-xs-6">
                                                            <a class="post-item" href="/details/national/108597/businessman-killed-injured-in-cng-pickup-collision">
                                                                <figure class="">
                                                                    <img src="https://imaginary.barta24.com/crop?width=300&amp;height=170&amp;quality=75&amp;path=/uploads/news/2020/Nov/14/1605341586613.jpg" alt="সিএনজি-পিকআপের সংঘর্ষে ব্যবসায়ীর মৃত্যু, আহত ৩">
                                                                </figure>
                                                                <div class="post-content no-padding">
                                                                    <h3 class="post-title">
                                                                        সিএনজি-পিকআপের সংঘর্ষে ব্যবসায়ীর মৃত্যু, আহত ৩
                                                                    </h3>
                                                                    <div class="category-meta">
                                                                        <p class="category">নোয়াখালী</p>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab">
                                        <input type="radio" name="css-tabs" id="tab-3" checked="" class="tab-switch">
                                        <label for="tab-3" class="tab-label">ঢাকা</label>
                                        <div class="tab-content">

                                            <div class="row  no-margin p-t-20 ">
                                                <div class="col-sm-12">
                                                </div>
                                                <div class="col-md-6">
                                                    <a class="post-item" href="/details/national/108638/arrest">
                                                        <figure class="">
                                                            <img src="https://imaginary.barta24.com/crop?width=300&amp;height=170&amp;quality=75&amp;path=/uploads/news/2020/Nov/14/1605364531737.png" alt="ফরিদপুরে তিন মাদক ব্যবসায়ীকে আটক করেছে র‌্যাব">
                                                        </figure>
                                                        <div class="post-content no-padding">
                                                            <h2 class="post-title">
                                                                ফরিদপুরে তিন মাদক ব্যবসায়ীকে আটক করেছে র‌্যাব
                                                            </h2>
                                                            <p>
                                                                ফরিদপুরের কোতয়ালী থানার হাড়োকান্দি থেকে বিশেষ অভিযান চালিয়ে তিন মাদক ব্যবসায়িকে আটক করেছে র‌্যাব-৮, সিপিসি-২, ফরিদপুর ক্যাম্প।
                                                            </p>
                                                            <div class="category-meta">
                                                                <p class="category">ফরিদপুর</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="row post-items">
                                                        <div class="col-xs-6">
                                                            <a class="post-item" href="/details/national/108631/occupancy">
                                                                <figure class="">
                                                                    <img src="https://imaginary.barta24.com/crop?width=300&amp;height=170&amp;quality=75&amp;path=/uploads/news/2020/Nov/14/1605359195699.png" alt="ছেলের জন্য স্টেডিয়াম বানাতে ২০ বসতবাড়ি দখলের অভিযোগ">
                                                                </figure>
                                                                <div class="post-content no-padding">
                                                                    <h3 class="post-title">
                                                                        ছেলের জন্য স্টেডিয়াম বানাতে ২০ বসতবাড়ি দখলের অভিযোগ
                                                                    </h3>
                                                                    <div class="category-meta">
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="col-xs-6">
                                                            <a class="post-item" href="/details/national/108623/gopalganj-district">
                                                                <figure class="">
                                                                    <img src="https://imaginary.barta24.com/crop?width=300&amp;height=170&amp;quality=75&amp;path=/uploads/news/2020/Nov/14/1605354786992.jpg" alt="গোপালগঞ্জ জেলা ছাত্রলীগের কমিটি বিলুপ্ত">
                                                                </figure>
                                                                <div class="post-content no-padding">
                                                                    <h3 class="post-title">
                                                                        গোপালগঞ্জ জেলা ছাত্রলীগের কমিটি বিলুপ্ত
                                                                    </h3>
                                                                    <div class="category-meta">
                                                                        <p class="category">গোপালগঞ্জ</p>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="row post-items p-t-20">
                                                        <div class="col-xs-6">
                                                            <a class="post-item" href="/details/politics/108617/fire-terrorism">
                                                                <figure class="">
                                                                    <img src="https://imaginary.barta24.com/crop?width=300&amp;height=170&amp;quality=75&amp;path=/uploads/news/2020/Nov/14/1605352413355.jpg" alt="আগুন সন্ত্রাস মেনে নেয়া যায় না: জিএম কাদের">
                                                                </figure>
                                                                <div class="post-content no-padding">
                                                                    <h3 class="post-title">
                                                                        আগুন সন্ত্রাস মেনে নেয়া যায় না: জিএম কাদের
                                                                    </h3>
                                                                    <div class="category-meta">
                                                                        <p class="category">ঢাকা</p>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="col-xs-6">
                                                            <a class="post-item" href="/details/national/108609/second-step-is-to-make-sure-to-use-a-mask-to-prevent-corona-infection">
                                                                <figure class="">
                                                                    <img src="https://imaginary.barta24.com/crop?width=300&amp;height=170&amp;quality=75&amp;path=/uploads/news/2020/Nov/14/1605348790718.png" alt="‘লোকজন আগের মতো আর টেস্ট করাতে আসেন না’">
                                                                </figure>
                                                                <div class="post-content no-padding">
                                                                    <h3 class="post-title">
                                                                        ‘লোকজন আগের মতো আর টেস্ট করাতে আসেন না’
                                                                    </h3>
                                                                    <div class="category-meta">
                                                                        <p class="category">মানিকগঞ্জ</p>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab">
                                        <input type="radio" name="css-tabs" id="tab-4" checked="" class="tab-switch">
                                        <label for="tab-4" class="tab-label">খুলনা</label>
                                        <div class="tab-content">

                                            <div class="row  no-margin p-t-20 ">
                                                <div class="col-sm-12">
                                                </div>
                                                <div class="col-md-6">
                                                    <a class="post-item" href="/details/national/108615/cultivation">
                                                        <figure class="">
                                                            <img src="https://imaginary.barta24.com/crop?width=300&amp;height=170&amp;quality=75&amp;path=/uploads/news/2020/Nov/14/1605350475165.png" alt="ঢেঁড়স চাষ করে স্বাবলম্বী কুষ্টিয়ার সোহেল">
                                                        </figure>
                                                        <div class="post-content no-padding">
                                                            <h2 class="post-title">
                                                                ঢেঁড়স চাষ করে স্বাবলম্বী কুষ্টিয়ার সোহেল
                                                            </h2>
                                                            <p>
                                                                ঢেঁড়স চাষ করে বেকারত্ব ঘুঁচিয়েছেন শিক্ষিত যুবক সোহেল রানা।
                                                            </p>
                                                            <div class="category-meta">
                                                                <p class="category">কুষ্টিয়া</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="row post-items">
                                                        <div class="col-xs-6">
                                                            <a class="post-item" href="/details/national/108581/killed-injured-in-jessore-road-accident">
                                                                <figure class="">
                                                                    <img src="https://imaginary.barta24.com/crop?width=300&amp;height=170&amp;quality=75&amp;path=/uploads/news/2020/Nov/14/1605331989810.jpg" alt="যশোরে সড়ক দুর্ঘটনায় নিহত ১ আহত ৫ জন">
                                                                </figure>
                                                                <div class="post-content no-padding">
                                                                    <h3 class="post-title">
                                                                        যশোরে সড়ক দুর্ঘটনায় নিহত ১ আহত ৫ জন
                                                                    </h3>
                                                                    <div class="category-meta">
                                                                        <p class="category">যশোর</p>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="col-xs-6">
                                                            <a class="post-item" href="/details/national/108580/date-juice">
                                                                <figure class="">
                                                                    <img src="https://imaginary.barta24.com/crop?width=300&amp;height=170&amp;quality=75&amp;path=/uploads/news/2020/Nov/14/1605331853397.jpg" alt="খেজুর রস সংগ্রহে গাছ পরিচর্যায় ব্যস্ত গাছিরা">
                                                                </figure>
                                                                <div class="post-content no-padding">
                                                                    <h3 class="post-title">
                                                                        খেজুর রস সংগ্রহে গাছ পরিচর্যায় ব্যস্ত গাছিরা
                                                                    </h3>
                                                                    <div class="category-meta">
                                                                        <p class="category">মাগুরা</p>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="row post-items p-t-20">
                                                        <div class="col-xs-6">
                                                            <a class="post-item" href="/details/national/108556/transfer-to-benapole">
                                                                <figure class="">
                                                                    <img src="https://imaginary.barta24.com/crop?width=300&amp;height=170&amp;quality=75&amp;path=/uploads/news/2020/Nov/13/1605279944228.png" alt="ভারতে পাচারের শিকার ৩০ নারী-পুরষ-শিশুকে বেনাপোলে হস্তান্তর">
                                                                </figure>
                                                                <div class="post-content no-padding">
                                                                    <h3 class="post-title">
                                                                        ভারতে পাচারের শিকার ৩০ নারী-পুরষ-শিশুকে বেনাপোলে হস্তান্তর
                                                                    </h3>
                                                                    <div class="category-meta">
                                                                        <p class="category">যশোর</p>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="col-xs-6">
                                                            <a class="post-item" href="/details/national/108474/road-accident">
                                                                <figure class="">
                                                                    <img src="https://imaginary.barta24.com/crop?width=300&amp;height=170&amp;quality=75&amp;path=/uploads/news/2020/Nov/12/1605188043293.png" alt="ট্রাক চাপায় ডাক্তার হওয়ার স্বপ্ন শেষ শেফার">
                                                                </figure>
                                                                <div class="post-content no-padding">
                                                                    <h3 class="post-title">
                                                                        ট্রাক চাপায় ডাক্তার হওয়ার স্বপ্ন শেষ শেফার
                                                                    </h3>
                                                                    <div class="category-meta">
                                                                        <p class="category">যশোর</p>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab">
                                        <input type="radio" name="css-tabs" id="tab-5" checked="" class="tab-switch">
                                        <label for="tab-5" class="tab-label">রাজশাহী</label>
                                        <div class="tab-content">

                                            <div class="row  no-margin p-t-20 ">
                                                <div class="col-sm-12">
                                                </div>
                                                <div class="col-md-6">
                                                    <a class="post-item" href="/details/national/108630/rohingya-issue">
                                                        <figure class="">
                                                            <img src="https://imaginary.barta24.com/crop?width=300&amp;height=170&amp;quality=75&amp;path=/uploads/news/2020/Nov/14/1605357472410.png" alt="রোহিঙ্গাদের ফেরত নিয়ে এবার বদনাম ঘোচাবে সূচি: পররাষ্ট্রমন্ত্রী">
                                                        </figure>
                                                        <div class="post-content no-padding">
                                                            <h2 class="post-title">
                                                                রোহিঙ্গাদের ফেরত নিয়ে এবার বদনাম ঘোচাবে সূচি: পররাষ্ট্রমন্ত্রী
                                                            </h2>
                                                            <p>
                                                                সম্প্রতি মিয়ানমারের নির্বাচনের পর সূচি সরকারের হাতে যথেষ্ট সময় আছে, তাদের দেশের নাগরিকদের বাংলাদেশ থেকে ফেরত নিয়ে বদনাম ঘোচানোর।
                                                            </p>
                                                            <div class="category-meta">
                                                                <p class="category">রাজশাহী</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="row post-items">
                                                        <div class="col-xs-6">
                                                            <a class="post-item" href="/details/national/108616/diplomatic-economy">
                                                                <figure class="">
                                                                    <img src="https://imaginary.barta24.com/crop?width=300&amp;height=170&amp;quality=75&amp;path=/uploads/news/2020/Nov/14/1605350658295.jpg" alt="ডিপ্লোমেটিক ইকোনমিতে সর্বাধিক গুরুত্ব দিচ্ছে সরকার">
                                                                </figure>
                                                                <div class="post-content no-padding">
                                                                    <h3 class="post-title">
                                                                        ডিপ্লোমেটিক ইকোনমিতে সর্বাধিক গুরুত্ব দিচ্ছে সরকার
                                                                    </h3>
                                                                    <div class="category-meta">
                                                                        <p class="category">নাটোর</p>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="col-xs-6">
                                                            <a class="post-item" href="/details/national/108608/former-bnp-mp-dies-of-corona">
                                                                <figure class="">
                                                                    <img src="https://imaginary.barta24.com/crop?width=300&amp;height=170&amp;quality=75&amp;path=/uploads/news/2020/Nov/14/1605348438426.PNG" alt="করোনা আক্রান্ত হয়ে বিএনপির সাবেক এমপির মৃত্যু">
                                                                </figure>
                                                                <div class="post-content no-padding">
                                                                    <h3 class="post-title">
                                                                        করোনা আক্রান্ত হয়ে বিএনপির সাবেক এমপির মৃত্যু
                                                                    </h3>
                                                                    <div class="category-meta">
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="row post-items p-t-20">
                                                        <div class="col-xs-6">
                                                            <a class="post-item" href="/details/national/108544/vegetable-market">
                                                                <figure class="">
                                                                    <img src="https://imaginary.barta24.com/crop?width=300&amp;height=170&amp;quality=75&amp;path=/uploads/news/2020/Nov/13/1605267415435.png" alt="শীতের শুরুতে চাঁপাইনবাবগঞ্জে সবজি বাজারে আগুন">
                                                                </figure>
                                                                <div class="post-content no-padding">
                                                                    <h3 class="post-title">
                                                                        শীতের শুরুতে চাঁপাইনবাবগঞ্জে সবজি বাজারে আগুন
                                                                    </h3>
                                                                    <div class="category-meta">
                                                                        <p class="category">চাঁপাইনবাবগঞ্জ</p>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="col-xs-6">
                                                            <a class="post-item" href="/details/national/108525/infected-with-corona">
                                                                <figure class="">
                                                                    <img src="https://imaginary.barta24.com/crop?width=300&amp;height=170&amp;quality=75&amp;path=/uploads/news/2020/Nov/13/1605256718234.png" alt="হুইপ আল মাহমুদ স্বপন ও তার স্ত্রী করোনা পজিটিভ">
                                                                </figure>
                                                                <div class="post-content no-padding">
                                                                    <h3 class="post-title">
                                                                        হুইপ আল মাহমুদ স্বপন ও তার স্ত্রী করোনা পজিটিভ
                                                                    </h3>
                                                                    <div class="category-meta">
                                                                        <p class="category">জয়পুরহাট</p>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab">
                                        <input type="radio" name="css-tabs" id="tab-6" checked="" class="tab-switch">
                                        <label for="tab-6" class="tab-label">রংপুর</label>
                                        <div class="tab-content">

                                            <div class="row  no-margin p-t-20 ">
                                                <div class="col-sm-12">
                                                </div>
                                                <div class="col-md-6">
                                                    <a class="post-item" href="/details/national/108640/burned-to-death">
                                                        <figure class="">
                                                            <img src="https://imaginary.barta24.com/crop?width=300&amp;height=170&amp;quality=75&amp;path=/uploads/news/2020/Nov/14/1605372997804.png" alt="বুড়িমারীতে পুড়িয়ে হত্যা: স্বীকারোক্তিমূলক জবানবন্দি দিলেন প্রধান আসামি">
                                                        </figure>
                                                        <div class="post-content no-padding">
                                                            <h2 class="post-title">
                                                                বুড়িমারীতে পুড়িয়ে হত্যা: স্বীকারোক্তিমূলক জবানবন্দি দিলেন প্রধান আসামি
                                                            </h2>
                                                            <p>
                                                                আসামি আবুল হোসেন ওরফে হোসেন ডেকোরেটর (৪৫) রিমান্ড শেষে আদালতকে স্বীকারোক্তিমূলক জবানবন্দি দিয়েছেন।
                                                            </p>
                                                            <div class="category-meta">
                                                                <p class="category">লালমনিরহাট</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="row post-items">
                                                        <div class="col-xs-6">
                                                            <a class="post-item" href="/details/national/108636/railroad">
                                                                <figure class="">
                                                                    <img src="https://imaginary.barta24.com/crop?width=300&amp;height=170&amp;quality=75&amp;path=/uploads/news/2020/Nov/14/1605362630139.png" alt="বিজয় দিবসে চালু হচ্ছে চিলাহাটি-হলদিবাড়ী রেলপথ">
                                                                </figure>
                                                                <div class="post-content no-padding">
                                                                    <h3 class="post-title">
                                                                        বিজয় দিবসে চালু হচ্ছে চিলাহাটি-হলদিবাড়ী রেলপথ
                                                                    </h3>
                                                                    <div class="category-meta">
                                                                        <p class="category">নীলফামারী</p>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="col-xs-6">
                                                            <a class="post-item" href="/details/national/108622/arreest">
                                                                <figure class="">
                                                                    <img src="https://imaginary.barta24.com/crop?width=300&amp;height=170&amp;quality=75&amp;path=/uploads/news/2020/Nov/14/1605353879699.png" alt="পীরগাছায় ৬ মাসের সাজাপ্রাপ্ত পলাতক আসামি গ্রেফতার">
                                                                </figure>
                                                                <div class="post-content no-padding">
                                                                    <h3 class="post-title">
                                                                        পীরগাছায় ৬ মাসের সাজাপ্রাপ্ত পলাতক আসামি গ্রেফতার
                                                                    </h3>
                                                                    <div class="category-meta">
                                                                        <p class="category">রংপুর</p>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="row post-items p-t-20">
                                                        <div class="col-xs-6">
                                                            <a class="post-item" href="/details/national/108606/jute-products">
                                                                <figure class="">
                                                                    <img src="https://imaginary.barta24.com/crop?width=300&amp;height=170&amp;quality=75&amp;path=/uploads/news/2020/Nov/14/1605347573096.jpg" alt="দেশে পাট পণ্যের রপ্তানি বেড়েছে">
                                                                </figure>
                                                                <div class="post-content no-padding">
                                                                    <h3 class="post-title">
                                                                        দেশে পাট পণ্যের রপ্তানি বেড়েছে
                                                                    </h3>
                                                                    <div class="category-meta">
                                                                        <p class="category">রংপুর</p>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="col-xs-6">
                                                            <a class="post-item" href="/details/national/108558/electrocution-death">
                                                                <figure class="">
                                                                    <img src="https://imaginary.barta24.com/crop?width=300&amp;height=170&amp;quality=75&amp;path=/uploads/news/2020/Nov/13/1605284035703.png" alt="সুন্দরগঞ্জে বিদ্যুৎস্পৃষ্টে একই পরিবারের ৩ জনের মৃত্যু">

                                                                </figure>
                                                                <div class="post-content no-padding">
                                                                    <h3 class="post-title">
                                                                        সুন্দরগঞ্জে বিদ্যুৎস্পৃষ্টে একই পরিবারের ৩ জনের মৃত্যু
                                                                    </h3>
                                                                    <div class="category-meta">
                                                                        <p class="category">গাইবান্ধা</p>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab">
                                        <input type="radio" name="css-tabs" id="tab-7" checked="" class="tab-switch">
                                        <label for="tab-7" class="tab-label">সিলেট</label>
                                        <div class="tab-content">

                                            <div class="row  no-margin p-t-20 ">
                                                <div class="col-sm-12">
                                                </div>
                                                <div class="col-md-6">
                                                    <a class="post-item" href="/details/national/108278/raihan-murder">
                                                        <figure class="">
                                                            <img src="https://imaginary.barta24.com/crop?width=300&amp;height=170&amp;quality=75&amp;path=/uploads/news/2020/Nov/10/1604995522523.png" alt="এসআই আকবরের ৭ দিনের রিমান্ড মঞ্জুর">
                                                        </figure>
                                                        <div class="post-content no-padding">
                                                            <h2 class="post-title">
                                                                এসআই আকবরের ৭ দিনের রিমান্ড মঞ্জুর
                                                            </h2>
                                                            <p>
                                                                রায়হান হত্যা মামলায় এসআই আকবরের ৭ দিনের রিমান্ড মঞ্জুর করেছেন আদালত।
                                                            </p>
                                                            <div class="category-meta">
                                                                <p class="category">সিলেট</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="row post-items">
                                                        <div class="col-xs-6">
                                                            <a class="post-item" href="/details/national/108224/akbar-was-arrested-with-the-help-of-some-trusted-friends">
                                                                <figure class="">
                                                                    <img src="https://imaginary.barta24.com/crop?width=300&amp;height=170&amp;quality=75&amp;path=/uploads/news/2020/Nov/09/1604925914857.png" alt="বিশ্বস্ত বন্ধুদের সহযোগিতায় আকবরকে গ্রেফতার করা হয়">
                                                                </figure>
                                                                <div class="post-content no-padding">
                                                                    <h3 class="post-title">
                                                                        বিশ্বস্ত বন্ধুদের সহযোগিতায় আকবরকে গ্রেফতার করা হয়
                                                                    </h3>
                                                                    <div class="category-meta">
                                                                        <p class="category">সিলেট</p>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="col-xs-6">
                                                            <a class="post-item" href="/details/national/108222/raihan-murder">
                                                                <figure class="">
                                                                    <img src="https://imaginary.barta24.com/crop?width=300&amp;height=170&amp;quality=75&amp;path=/uploads/news/2020/Nov/09/1604924911772.png" alt="সিলেট পুলিশ সুপারের কার্যালয়ে আকবর">
                                                                </figure>
                                                                <div class="post-content no-padding">
                                                                    <h3 class="post-title">
                                                                        সিলেট পুলিশ সুপারের কার্যালয়ে আকবর
                                                                    </h3>
                                                                    <div class="category-meta">
                                                                        <p class="category">সিলেট</p>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="row post-items p-t-20">
                                                        <div class="col-xs-6">
                                                            <a class="post-item" href="/details/national/108215/demonstration-in-sylhet">
                                                                <figure class="">
                                                                    <img src="https://imaginary.barta24.com/crop?width=300&amp;height=170&amp;quality=75&amp;path=/uploads/news/2020/Nov/09/1604920020575.png" alt="সিলেটের বন্দরবাজার পুলিশ ফাঁড়ির সামনে বিক্ষোভ চলছে">
                                                                </figure>
                                                                <div class="post-content no-padding">
                                                                    <h3 class="post-title">
                                                                        সিলেটের বন্দরবাজার পুলিশ ফাঁড়ির সামনে বিক্ষোভ চলছে
                                                                    </h3>
                                                                    <div class="category-meta">
                                                                        <p class="category">সিলেট</p>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="col-xs-6">
                                                            <a class="post-item" href="/details/national/108060/train-connection">
                                                                <figure class="">
                                                                    <img src="https://imaginary.barta24.com/crop?width=300&amp;height=170&amp;quality=75&amp;path=/uploads/news/2020/Nov/07/1604758171749.png" alt="শ্রীমঙ্গলে ট্রেন লাইনচ্যুত: ৫ সদস্য তদন্ত কমিটি গঠন">
                                                                </figure>
                                                                <div class="post-content no-padding">
                                                                    <h3 class="post-title">
                                                                        শ্রীমঙ্গলে ট্রেন লাইনচ্যুত: ৫ সদস্য তদন্ত কমিটি গঠন
                                                                    </h3>
                                                                    <div class="category-meta">
                                                                        <p class="category">মৌলভীবাজার</p>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab">
                                        <input type="radio" name="css-tabs" id="tab-8" checked="" class="tab-switch">
                                        <label for="tab-8" class="tab-label">ময়মনসিংহ</label>
                                        <div class="tab-content">

                                            <div class="row  no-margin p-t-20 ">
                                                <div class="col-sm-12">
                                                </div>
                                                <div class="col-md-6">
                                                    <a class="post-item" href="/details/national/108627/snatch-panic">
                                                        <figure class="">
                                                            <img src="https://imaginary.barta24.com/crop?width=300&amp;height=170&amp;quality=75&amp;path=/uploads/news/2020/Nov/14/1605356281071.png" alt="ময়মনসিংহ নগরে হঠাৎ ছিনতাই আতঙ্ক">
                                                        </figure>
                                                        <div class="post-content no-padding">
                                                            <h2 class="post-title">
                                                                ময়মনসিংহ নগরে হঠাৎ ছিনতাই আতঙ্ক
                                                            </h2>
                                                            <p>
                                                                ময়মনসিংহ নগরীতে একটি বিস্কুট কোম্পানিতে চাকরি করে মিলন ও শিহাব।
                                                            </p>
                                                            <div class="category-meta">
                                                                <p class="category">ময়মনসিংহ</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="row post-items">
                                                        <div class="col-xs-6">
                                                            <a class="post-item" href="/details/national/108599/gazaria-beel">
                                                                <figure class="">
                                                                    <img src="https://imaginary.barta24.com/crop?width=300&amp;height=170&amp;quality=75&amp;path=/uploads/news/2020/Nov/14/1605343218758.jpg" alt="গজারিয়া বিলের অবৈধ বাঁধ কেটে পানি নিষ্কাশন ব্যবস্থার দাবি">
                                                                </figure>
                                                                <div class="post-content no-padding">
                                                                    <h3 class="post-title">
                                                                        গজারিয়া বিলের অবৈধ বাঁধ কেটে পানি নিষ্কাশন ব্যবস্থার দাবি
                                                                    </h3>
                                                                    <div class="category-meta">
                                                                        <p class="category">ময়মনসিংহ</p>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="col-xs-6">
                                                            <a class="post-item" href="/details/national/108536/fire">
                                                                <figure class="">
                                                                    <img src="https://imaginary.barta24.com/crop?width=300&amp;height=170&amp;quality=75&amp;path=/uploads/news/2020/Nov/13/1605263674380.png" alt="ইসলামপুরে আগুনে পুড়লো ৪ দরিদ্র পরিবারের শেষ সম্বল">
                                                                </figure>
                                                                <div class="post-content no-padding">
                                                                    <h3 class="post-title">
                                                                        ইসলামপুরে আগুনে পুড়লো ৪ দরিদ্র পরিবারের শেষ সম্বল
                                                                    </h3>
                                                                    <div class="category-meta">
                                                                        <p class="category">জামালপুর</p>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="row post-items p-t-20">
                                                        <div class="col-xs-6">
                                                            <a class="post-item" href="/details/national/108518/fans-demand-three-points-to-protect-humayun-s-memory-at-gauripur-junction">
                                                                <figure class="">
                                                                    <img src="https://imaginary.barta24.com/crop?width=300&amp;height=170&amp;quality=75&amp;path=/uploads/news/2020/Nov/13/1605252455001.png" alt="গৌরীপুর জংশনে হুমায়ূনের স্মৃতি রক্ষায় ভক্তদের তিন দফা দাবি">
                                                                </figure>
                                                                <div class="post-content no-padding">
                                                                    <h3 class="post-title">
                                                                        গৌরীপুর জংশনে হুমায়ূনের স্মৃতি রক্ষায় ভক্তদের তিন দফা দাবি
                                                                    </h3>
                                                                    <div class="category-meta">
                                                                        <p class="category">ময়মনসিংহ</p>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="col-xs-6">
                                                            <a class="post-item" href="/details/national/108513/mahendra-pushed-standing-covered-van-killing-2">
                                                                <figure class="">
                                                                    <img src="https://imaginary.barta24.com/crop?width=300&amp;height=170&amp;quality=75&amp;path=/uploads/news/2020/Nov/13/1605245760983.jpg" alt="দাঁড়িয়ে থাকা কাভার্ড ভ্যানে মাহেন্দ্রর ধাক্কা, নিহত ২">
                                                                </figure>
                                                                <div class="post-content no-padding">
                                                                    <h3 class="post-title">
                                                                        দাঁড়িয়ে থাকা কাভার্ড ভ্যানে মাহেন্দ্রর ধাক্কা, নিহত ২
                                                                    </h3>
                                                                    <div class="category-meta">
                                                                        <p class="category">ময়মনসিংহ</p>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab">
                                        <input type="radio" name="css-tabs" id="tab-0" checked="" class="tab-switch">
                                        <label for="tab-0" class="tab-label">জাতীয়</label>
                                        <div class="tab-content">

                                            <div class="row  no-margin p-t-20 ">
                                                <div class="col-sm-12">
                                                </div>
                                                <div class="col-md-6">
                                                    <a class="post-item" href="/details/national/108637/coronas-violence-is-increasing-again">
                                                        <figure class="">
                                                            <img src="https://imaginary.barta24.com/crop?width=300&amp;height=170&amp;quality=75&amp;path=/uploads/news/2020/Nov/14/1605363528781.png" alt="আবার বাড়ছে করোনার তাণ্ডব">
                                                        </figure>
                                                        <div class="post-content no-padding">
                                                            <h2 class="post-title">
                                                                আবার বাড়ছে করোনার তাণ্ডব
                                                            </h2>
                                                            <p>
                                                                মাঝে কিছুটা স্তিমিত হয়ে আবার ধেয়ে আসছে করোনাভাইরাসের ঢেউ। কেউ বলছে দ্বিতীয় ঢেউ। আবার কারো মতে তৃতীয় ঢেউ। ডিসেম্বর ২০১৯ সালে চীনের উহানে উদ্ভূত হয়ে করোনা পুরো ২০২০ সালটিকে বৈশ্বিক মহামারির করাল গ্রাসে ত্রস্ত করে তুলেছে।
                                                            </p>
                                                            <div class="category-meta">
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="row post-items">
                                                        <div class="col-xs-6">
                                                            <a class="post-item" href="/details/national/108633/demand-for-speedy-trial-of-the-killers-of-asp-anisul-karim">
                                                                <figure class="">
                                                                    <img src="https://imaginary.barta24.com/crop?width=300&amp;height=170&amp;quality=75&amp;path=/uploads/news/2020/Nov/14/1605360550006.png" alt="এএসপি আনিসুল করিমের হত্যাকারীদের দ্রুত বিচারের দাবি">
                                                                </figure>
                                                                <div class="post-content no-padding">
                                                                    <h3 class="post-title">
                                                                        এএসপি আনিসুল করিমের হত্যাকারীদের দ্রুত বিচারের দাবি
                                                                    </h3>
                                                                    <div class="category-meta">
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="col-xs-6">
                                                            <a class="post-item" href="/details/national/108642/suicide">
                                                                <figure class="">
                                                                    <img src="https://imaginary.barta24.com/crop?width=300&amp;height=170&amp;quality=75&amp;path=/uploads/news/2020/Nov/14/1605376157154.png" alt="চট্টগ্রামে দাম্পত্য কলহে দুই গৃহবধূর আত্মহত্যা">
                                                                </figure>
                                                                <div class="post-content no-padding">
                                                                    <h3 class="post-title">
                                                                        চট্টগ্রামে দাম্পত্য কলহে দুই গৃহবধূর আত্মহত্যা
                                                                    </h3>
                                                                    <div class="category-meta">
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="row post-items p-t-20">
                                                        <div class="col-xs-6">
                                                            <a class="post-item" href="/details/national/108640/burned-to-death">
                                                                <figure class="">
                                                                    <img src="https://imaginary.barta24.com/crop?width=300&amp;height=170&amp;quality=75&amp;path=/uploads/news/2020/Nov/14/1605372997804.png" alt="বুড়িমারীতে পুড়িয়ে হত্যা: স্বীকারোক্তিমূলক জবানবন্দি দিলেন প্রধান আসামি">
                                                                </figure>
                                                                <div class="post-content no-padding">
                                                                    <h3 class="post-title">
                                                                        বুড়িমারীতে পুড়িয়ে হত্যা: স্বীকারোক্তিমূলক জবানবন্দি দিলেন প্রধান আসামি
                                                                    </h3>
                                                                    <div class="category-meta">
                                                                        <p class="category">জাতীয়</p>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="col-xs-6">
                                                            <a class="post-item" href="/details/national/108638/arrest">
                                                                <figure class="">
                                                                    <img src="https://imaginary.barta24.com/crop?width=300&amp;height=170&amp;quality=75&amp;path=/uploads/news/2020/Nov/14/1605364531737.png" alt="ফরিদপুরে তিন মাদক ব্যবসায়ীকে আটক করেছে র‌্যাব">
                                                                </figure>
                                                                <div class="post-content no-padding">
                                                                    <h3 class="post-title">
                                                                        ফরিদপুরে তিন মাদক ব্যবসায়ীকে আটক করেছে র‌্যাব
                                                                    </h3>
                                                                    <div class="category-meta">
                                                                        <p class="category">জাতীয়</p>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-right">
                    <div class="mobile-sq-5">
                        <h2 class="p-0"> যুক্তিতর্ক </h2>
                        <div class="row ">
                            <div class="col-xs-12 p-t-10">
                                <a class="post-item" href="/details/debates/108546/incentive-package-announced-by-the-government-played-a-role-in-the-economy">
                                    <figure class="img-holder">
                                        <img src="https://imaginary.barta24.com/crop?width=300&amp;height=170&amp;quality=75&amp;path=/uploads/news/2020/Nov/13/1605274913784.jpg" alt="সরকার ঘোষিত প্রণোদনা প্যাকেজ কি অর্থনীতিতে ভূমিকা রেখেছে?">
                                        <div class="link-icon"><i class="fa fa-play"></i></div>
                                    </figure>
                                    <div class="p-b-10">
                                        <div class="title-holder p-t-10">
                                            <h3 class="post-title no-margin p-b-10">সরকার ঘোষিত প্রণোদনা প্যাকেজ কি অর্থনীতিতে ভূমিকা রেখেছে?</h3>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="row small-font">
                            <div class="col-xs-6">
                                <div class="row ">
                                    <div class="col-xs-12 p-t-10">
                                        <a class="post-item" href="/details/debates/108461/sheikh-hasina-amit-is-a-brave-world-leader">
                                            <figure class="img-holder">
                                                <img src="https://imaginary.barta24.com/crop?width=300&amp;height=170&amp;quality=75&amp;path=/uploads/news/2020/Nov/12/1605183885211.jpg" alt="শেখ হাসিনা: অমিত সাহসী এক বিশ্বনেত্রী">
                                                <div class="link-icon"><i class="fa fa-play"></i></div>
                                            </figure>
                                            <div class="p-b-10">
                                                <div class="title-holder p-t-10">
                                                    <h3 class="post-title no-margin p-b-10">শেখ হাসিনা: অমিত সাহসী এক বিশ্বনেত্রী</h3>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-6">
                                <div class="row ">
                                    <div class="col-xs-12 p-t-10">
                                        <a class="post-item" href="/details/debates/108204/mike-pence">
                                            <figure class="img-holder">
                                                <img src="https://imaginary.barta24.com/crop?width=300&amp;height=170&amp;quality=75&amp;path=/uploads/news/2020/Nov/09/1604916462652.png" alt="মাইক পেন্স কি যুক্তরাষ্ট্রের পরবর্তী প্রেসিডেন্ট?">
                                                <div class="link-icon"><i class="fa fa-play"></i></div>
                                            </figure>
                                            <div class="p-b-10">
                                                <div class="title-holder p-t-10">
                                                    <h3 class="post-title no-margin p-b-10">মাইক পেন্স কি যুক্তরাষ্ট্রের পরবর্তী প্রেসিডেন্ট?</h3>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row small-font">
                            <div class="col-xs-6">
                                <div class="row ">
                                    <div class="col-xs-12 p-t-10">
                                        <a class="post-item" href="/details/debates/108158/biden-kamala-on-the-way-to-new-challenges">
                                            <figure class="img-holder">
                                                <img src="https://imaginary.barta24.com/crop?width=300&amp;height=170&amp;quality=75&amp;path=/uploads/news/2020/Nov/08/1604852082938.PNG" alt="নতুন চ্যালেঞ্জের পথে বাইডেন-কমলা">
                                                <div class="link-icon"><i class="fa fa-play"></i></div>
                                            </figure>
                                            <div class="p-b-10">
                                                <div class="title-holder p-t-10">
                                                    <h3 class="post-title no-margin p-b-10">নতুন চ্যালেঞ্জের পথে বাইডেন-কমলা</h3>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-6">
                                <div class="row ">
                                    <div class="col-xs-12 p-t-10">
                                        <a class="post-item" href="/details/debates/108055/bright-prospects-for-agent-banking-in-corona">
                                            <figure class="img-holder">
                                                <img src="https://imaginary.barta24.com/crop?width=300&amp;height=170&amp;quality=75&amp;path=/uploads/news/2020/Nov/07/1604755222735.jpg" alt="করোনাকালে এজেন্ট ব্যাংকিংয়ের উজ্জ্বল সম্ভাবনা">
                                                <div class="link-icon"><i class="fa fa-play"></i></div>
                                            </figure>
                                            <div class="p-b-10">
                                                <div class="title-holder p-t-10">
                                                    <h3 class="post-title no-margin p-b-10">করোনাকালে এজেন্ট ব্যাংকিংয়ের উজ্জ্বল সম্ভাবনা</h3>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
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
                                            $this->db->where(array('post_type' => 'article', 'visibility' => '1', 'lang_id' => '1', 'category_id' => '5'));
                                            $this->db->order_by("id", "DESC");
                                            $this->db->limit(2);
                                            $query = $this->db->get();
                                            $counter = 1;
                                            foreach ($query->result() as $row) {
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

                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-5">
                                        <div class="top-news-3 p-l-20 p-r-20">

                                            <?php $this->db->from('posts');
                                            $this->db->where(array('post_type' => 'article', 'visibility' => '1', 'lang_id' => '1', 'category_id' => '5'));
                                            $this->db->order_by("id", "DESC");
                                            $this->db->limit(3, 2);
                                            $query = $this->db->get();
                                            $counter = 1;
                                            foreach ($query->result() as $row) {
                                                ?>
                                                <div class="post-item br-bottom m-b-20">
                                                    <a href="<?php echo permalink($row->id); ?>">
                                                        <div class="post-content">
                                                            <div class="title-holder">
                                                                <h3 class="no-margin no-padding"> <?php echo $row->title; ?></h3>
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

                                            <?php } ?>


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
                    </div>
                </div>
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

                            <h2> <?php echo category(6); ?> </h2>

                        </div>

                    </div>

                    <div class="col-xs-12 col-md-5">



                        <div class="row">

                            <div class="col-xs-12">
                                <?php $this->db->from('posts');
                                $this->db->where(array('post_type' => 'article', 'visibility' => '1', 'lang_id' => '1', 'category_id' => '6'));
                                $this->db->order_by("id", "DESC");
                                $this->db->limit(1);
                                $query = $this->db->get();
                                $counter = 1;
                                foreach ($query->result() as $row) {
                                    ?>
                                    <div class="post-item br-bottom">

                                        <a href="<?php echo permalink($row->id); ?>">

                                            <figure>

                                                <img src="<?php echo $row->image_mid; ?>" height="242" width="345" alt="<?php echo $row->title; ?>  " class="img-responsive">

                                            </figure>

                                            <div class="post-info">

                                                <h2 class="post-title"><?php echo $row->title; ?> </h2>

                                                <p><?php echo
                                                            excerpt($row->content, 250);

                                                        ?></p>

                                                <div class="category-meta">

                                                    <p><?php echo category($row->category_id); ?></p>

                                                </div>

                                            </div>

                                        </a>

                                    </div>
                                <?php } ?>

                            </div>

                            <div class="row p-r-20 p-l-20 br-bottom">
                                <?php $this->db->from('posts');
                                $this->db->where(array('post_type' => 'article', 'visibility' => '1', 'lang_id' => '1', 'category_id' => '6'));
                                $this->db->order_by("id", "DESC");
                                $this->db->limit(2, 1);
                                $query = $this->db->get();
                                $counter = 1;
                                foreach ($query->result() as $row) {
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

                                <?php } ?>

                            </div>

                            <div class="row p-r-20 p-l-20">

                                <?php $this->db->from('posts');
                                $this->db->where(array('post_type' => 'article', 'visibility' => '1', 'lang_id' => '1', 'category_id' => '6'));
                                $this->db->order_by("id", "DESC");
                                $this->db->limit(2, 3);
                                $query = $this->db->get();
                                $counter = 1;
                                foreach ($query->result() as $row) {
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

                                <?php } ?>


                            </div>

                        </div>

                    </div>

                    <div class="col-sm-7 col-xs-12 bg-black">

                        <div class="row p-l-20 p-r-20">

                            <h2 class="pull-right p-b-10">বিনোদন মাল্টিমিডিয়া </h2>
                            <?php $this->db->from('posts');
                            $this->db->where(array('post_type' => 'video', 'lang_id' => '1', 'category_id' => '6'));
                            $this->db->order_by("id", "DESC");
                            $this->db->limit(1);
                            $query = $this->db->get();
                            $counter = 1;
                            foreach ($query->result() as $row) {
                                ?>
                                <iframe class="br-bottom p-b-20" width="100%" height="380px" src="<?php echo $row->video_embed_code; ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            <?php } ?>

                        </div>

                        <div class="row p-t-10">

                            <div class="row no-margin p-b-20 br-bottom album-photo-slider" id="binodon-slider">

                                <div class="col-xs-7">

                                    <div class="section-title">

                                        <h3 style="color: #fff">

                                            <?php // echo $row->title; 
                                            ?>

                                        </h3>

                                    </div>

                                </div>

                                <div class="col-xs-2 pull-right slider-nav p-b-10 p-t-20">

                                    <img class="left" src="assets/icons/slider/left-arrow.png" alt="Nav next">

                                    <img class="right" src="assets/icons/slider/right-arrow.png" alt="Nav next">

                                </div>
                                <?php $this->db->from('gallery_albums');
                                // $this->db->where(array('gallery_albums' =>'1'));
                                $this->db->order_by("id", "DESC");
                                $this->db->limit(1);
                                $query = $this->db->get();
                                $counter = 1;
                                foreach ($query->result() as $row) {
                                    $last_album = $row->id;
                                    ?>

                                <?php } ?>
                                <div class="slider">

                                    <div>
                                        <?php $this->db->from('gallery');
                                        $this->db->where(array('album_id' => $last_album));
                                        $this->db->order_by("id", "DESC");
                                        $this->db->limit(2);
                                        $query = $this->db->get();
                                        $counter = 1;
                                        foreach ($query->result() as $row) {
                                            ?>
                                            <div class="col-sm-6">

                                                <a class="post-item">

                                                    <figure class="">

                                                        <img src="<?php echo base_url() . $row->path_big; ?>" alt="<?php echo $row->title; ?>">

                                                        <div class="link-icon"><i class="fa fa-photo"></i></div>

                                                    </figure>

                                                    <div class="caption">

                                                        <h4>

                                                            <?php echo $row->title; ?>


                                                        </h4>

                                                    </div>

                                                </a>

                                            </div>

                                        <?php } ?>

                                    </div>

                                    <div>
                                        <?php $this->db->from('gallery');
                                        $this->db->where(array('album_id' => $last_album));
                                        $this->db->order_by("id", "DESC");
                                        $this->db->limit(2, 2);
                                        $query = $this->db->get();
                                        $counter = 1;
                                        foreach ($query->result() as $row) {
                                            ?>
                                            <div class="col-sm-6">

                                                <a class="post-item">

                                                    <figure class="">

                                                        <img src="<?php echo base_url() . $row->path_big; ?>" alt="<?php echo $row->title; ?>">

                                                        <div class="link-icon"><i class="fa fa-photo"></i></div>

                                                    </figure>

                                                    <div class="caption">

                                                        <h4>

                                                            <?php echo $row->title; ?>


                                                        </h4>

                                                    </div>

                                                </a>

                                            </div>

                                        <?php } ?>

                                    </div>



                                </div>

                            </div>
                        </div>

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
                            $this->db->where(array('post_type' => 'article', 'visibility' => '1', 'lang_id' => '1', 'category_id' => '10'));
                            $this->db->order_by("id", "DESC");
                            $this->db->limit(1);
                            $query = $this->db->get();
                            $counter = 1;
                            foreach ($query->result() as $row) {
                                ?>
                                <a class="post-item" href="<?php echo permalink($row->id); ?>">

                                    <figure class="">

                                        <img src="<?php echo base_url() . $row->image_mid; ?>" alt="<?php echo $row->title; ?>">

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
                            <?php } ?>

                        </div>

                        <div class="col-md-6">

                            <div class="row post-items">

                                <?php $this->db->from('posts');
                                $this->db->where(array('post_type' => 'article', 'visibility' => '1', 'lang_id' => '1', 'category_id' => '10'));
                                $this->db->order_by("id", "DESC");
                                $this->db->limit(2, 1);
                                $query = $this->db->get();
                                $counter = 1;
                                foreach ($query->result() as $row) {
                                    ?>
                                    <div class="col-xs-6">

                                        <a class="post-item" href="<?php echo permalink($row->id); ?>">

                                            <figure class="">

                                                <img src="<?php echo base_url() . $row->image_small; ?>" alt="<?php echo $row->title; ?> ">

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
                                <?php } ?>

                            </div>

                            <div class="row post-items p-t-20">


                                <?php $this->db->from('posts');
                                $this->db->where(array('post_type' => 'article', 'visibility' => '1', 'lang_id' => '1', 'category_id' => '10'));
                                $this->db->order_by("id", "DESC");
                                $this->db->limit(2, 3);
                                $query = $this->db->get();
                                $counter = 1;
                                foreach ($query->result() as $row) {
                                    ?>
                                    <div class="col-xs-6">

                                        <a class="post-item" href="<?php echo permalink($row->id); ?>">

                                            <figure class="">

                                                <img src="<?php echo base_url() . $row->image_small; ?>" alt="<?php echo $row->title; ?> ">

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
                                <?php } ?>


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
                                $this->db->where(array('post_type' => 'article', 'visibility' => '1', 'lang_id' => '1', 'category_id' => '12'));
                                $this->db->order_by("id", "DESC");
                                $this->db->limit(1);
                                $query = $this->db->get();
                                $counter = 1;
                                foreach ($query->result() as $row) {
                                    ?>
                                    <a class="post-item" href="<?php echo permalink($row->id); ?>">

                                        <figure class="img-holder">

                                            <img src="<?php echo base_url() . $row->image_big; ?>" alt="<?php echo $row->title; ?>">

                                            <div class="link-icon"><i class="fa fa-play"></i></div>

                                        </figure>

                                        <div class="p-b-10">

                                            <div class="title-holder p-t-10">

                                                <h3 class="post-title no-margin p-b-10"><?php echo $row->title; ?> </h3>

                                            </div>

                                        </div>

                                    </a>
                                <?php } ?>

                            </div>

                        </div>
                        <div class="row small-font">
                            <?php $this->db->from('posts');
                            $this->db->where(array('post_type' => 'article', 'visibility' => '1', 'lang_id' => '1', 'category_id' => '12'));
                            $this->db->order_by("id", "DESC");
                            $this->db->limit(2, 2);
                            $query = $this->db->get();
                            $counter = 1;
                            foreach ($query->result() as $row) {
                                ?>
                                <div class="col-xs-6">

                                    <div class="row ">

                                        <div class="col-xs-12 p-t-10">

                                            <a class="post-item" href="<?php echo permalink($row->id); ?>">

                                                <figure class="img-holder">

                                                    <img src="<?php echo base_url() . $row->image_small; ?>">

                                                    <div class="link-icon"><i class="fa fa-play"></i></div>

                                                </figure>

                                                <div class="p-b-10">

                                                    <div class="title-holder p-t-10">

                                                        <h3 class="post-title no-margin p-b-10"><?php echo $row->title; ?></h3>

                                                    </div>

                                                </div>

                                            </a>

                                        </div>

                                    </div>
                                </div>
                            <?php } ?>


                        </div>

                        <div class="row small-font">

                            <?php $this->db->from('posts');
                            $this->db->where(array('post_type' => 'article', 'visibility' => '1', 'lang_id' => '1', 'category_id' => '12'));
                            $this->db->order_by("id", "DESC");
                            $this->db->limit(2, 3);
                            $query = $this->db->get();
                            $counter = 1;
                            foreach ($query->result() as $row) {
                                ?>
                                <div class="col-xs-6">

                                    <div class="row ">

                                        <div class="col-xs-12 p-t-10">

                                            <a class="post-item" href="<?php echo permalink($row->id); ?>">

                                                <figure class="img-holder">

                                                    <img src="<?php echo base_url() . $row->image_small; ?>">

                                                    <div class="link-icon"><i class="fa fa-play"></i></div>

                                                </figure>

                                                <div class="p-b-10">

                                                    <div class="title-holder p-t-10">

                                                        <h3 class="post-title no-margin p-b-10"><?php echo $row->title; ?></h3>

                                                    </div>

                                                </div>

                                            </a>

                                        </div>

                                    </div>
                                </div>
                            <?php } ?>

                        </div>

                    </div>
                </div>

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
                            $this->db->where(array('post_type' => 'article', 'visibility' => '1', 'lang_id' => '1', 'category_id' => '13'));
                            $this->db->order_by("id", "DESC");
                            $this->db->limit(1);
                            $query = $this->db->get();
                            $counter = 1;
                            foreach ($query->result() as $row) {
                                ?>
                                <div class="col-xs-12 p-t-10">

                                    <a class="post-item" href="<?php echo permalink($row->id); ?>">

                                        <figure class="img-holder">

                                            <img src="<?php echo base_url() . $row->image_mid; ?>" alt="<?php echo $row->title; ?>">

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
                            <?php } ?>
                        </div>
                    </div>

                    <div class="col-xs-12 p-t-20">

                        <div class="news-grid-2">

                            <div class="row">
                                <?php $this->db->from('posts');
                                $this->db->where(array('post_type' => 'article', 'visibility' => '1', 'lang_id' => '1', 'category_id' => '13'));
                                $this->db->order_by("id", "DESC");
                                $this->db->limit(2, 1);
                                $query = $this->db->get();
                                $counter = 1;
                                foreach ($query->result() as $row) {
                                    ?>
                                    <div class="col-xs-6 col-sm-6 col-md-6 col-padding">

                                        <div class="grid-item">

                                            <div class="grid-item-img">

                                                <a href="<?php echo permalink($row->id); ?>">

                                                    <img src="<?php echo base_url() . $row->image_mid; ?>" alt="">

                                                </a>

                                            </div>

                                            <h5><a href="<?php echo permalink($row->id); ?>" class="title"><?php echo $row->title; ?></a></h5>

                                        </div>

                                    </div>



                                <?php } ?>

                            </div>

                            <div class="row">
                                <?php $this->db->from('posts');
                                $this->db->where(array('post_type' => 'article', 'visibility' => '1', 'lang_id' => '1', 'category_id' => '13'));
                                $this->db->order_by("id", "DESC");
                                $this->db->limit(2, 3);
                                $query = $this->db->get();
                                $counter = 1;
                                foreach ($query->result() as $row) {
                                    ?>
                                    <div class="col-xs-6 col-sm-6 col-md-6 col-padding">

                                        <div class="grid-item">

                                            <div class="grid-item-img">

                                                <a href="<?php echo permalink($row->id); ?>">

                                                    <img src="<?php echo base_url() . $row->image_mid; ?>" alt="">

                                                </a>

                                            </div>

                                            <h5><a href="<?php echo permalink($row->id); ?>" class="title"><?php echo $row->title; ?></a></h5>

                                        </div>

                                    </div>



                                <?php } ?>

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
                            $this->db->where(array('post_type' => 'article', 'visibility' => '1', 'lang_id' => '1', 'category_id' => '15'));
                            $this->db->order_by("id", "DESC");
                            $this->db->limit(1);
                            $query = $this->db->get();
                            $counter = 1;
                            foreach ($query->result() as $row) {
                                ?>
                                <div class="col-xs-12 p-t-10">

                                    <a class="post-item" href="<?php echo permalink($row->id); ?>">

                                        <figure class="img-holder">

                                            <img src="<?php echo base_url() . $row->image_mid; ?>" alt="<?php echo $row->title; ?>">

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
                            <?php } ?>
                        </div>
                    </div>

                    <div class="col-xs-12 p-t-20">

                        <div class="news-grid-2">

                            <div class="row">
                                <?php $this->db->from('posts');
                                $this->db->where(array('post_type' => 'article', 'visibility' => '1', 'lang_id' => '1', 'category_id' => '15'));
                                $this->db->order_by("id", "DESC");
                                $this->db->limit(2, 1);
                                $query = $this->db->get();
                                $counter = 1;
                                foreach ($query->result() as $row) {
                                    ?>
                                    <div class="col-xs-6 col-sm-6 col-md-6 col-padding">

                                        <div class="grid-item">

                                            <div class="grid-item-img">

                                                <a href="<?php echo permalink($row->id); ?>">

                                                    <img src="<?php echo base_url() . $row->image_mid; ?>" alt="">

                                                </a>

                                            </div>

                                            <h5><a href="<?php echo permalink($row->id); ?>" class="title"><?php echo $row->title; ?></a></h5>

                                        </div>

                                    </div>



                                <?php } ?>

                            </div>

                            <div class="row">
                                <?php $this->db->from('posts');
                                $this->db->where(array('post_type' => 'article', 'visibility' => '1', 'lang_id' => '1', 'category_id' => '15'));
                                $this->db->order_by("id", "DESC");
                                $this->db->limit(2, 3);
                                $query = $this->db->get();
                                $counter = 1;
                                foreach ($query->result() as $row) {
                                    ?>
                                    <div class="col-xs-6 col-sm-6 col-md-6 col-padding">

                                        <div class="grid-item">

                                            <div class="grid-item-img">

                                                <a href="<?php echo permalink($row->id); ?>">

                                                    <img src="<?php echo base_url() . $row->image_mid; ?>" alt="">

                                                </a>

                                            </div>

                                            <h5><a href="<?php echo permalink($row->id); ?>" class="title"><?php echo $row->title; ?></a></h5>

                                        </div>

                                    </div>



                                <?php } ?>

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
                            $this->db->where(array('post_type' => 'article', 'visibility' => '1', 'lang_id' => '1', 'category_id' => '8'));
                            $this->db->order_by("id", "DESC");
                            $this->db->limit(1);
                            $query = $this->db->get();
                            $counter = 1;
                            foreach ($query->result() as $row) {
                                ?>
                                <div class="col-xs-12 p-t-10">

                                    <a class="post-item" href="<?php echo permalink($row->id); ?>">

                                        <figure class="img-holder">

                                            <img src="<?php echo base_url() . $row->image_mid; ?>" alt="<?php echo $row->title; ?>">

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
                            <?php } ?>
                        </div>
                    </div>

                    <div class="col-xs-12 p-t-20">

                        <div class="news-grid-2">

                            <div class="row">
                                <?php $this->db->from('posts');
                                $this->db->where(array('post_type' => 'article', 'visibility' => '1', 'lang_id' => '1', 'category_id' => '8'));
                                $this->db->order_by("id", "DESC");
                                $this->db->limit(2, 1);
                                $query = $this->db->get();
                                $counter = 1;
                                foreach ($query->result() as $row) {
                                    ?>
                                    <div class="col-xs-6 col-sm-6 col-md-6 col-padding">

                                        <div class="grid-item">

                                            <div class="grid-item-img">

                                                <a href="<?php echo permalink($row->id); ?>">

                                                    <img src="<?php echo base_url() . $row->image_mid; ?>" alt="">

                                                </a>

                                            </div>

                                            <h5><a href="<?php echo permalink($row->id); ?>" class="title"><?php echo $row->title; ?></a></h5>

                                        </div>

                                    </div>



                                <?php } ?>

                            </div>

                            <div class="row">
                                <?php $this->db->from('posts');
                                $this->db->where(array('post_type' => 'article', 'visibility' => '1', 'lang_id' => '1', 'category_id' => '8'));
                                $this->db->order_by("id", "DESC");
                                $this->db->limit(2, 3);
                                $query = $this->db->get();
                                $counter = 1;
                                foreach ($query->result() as $row) {
                                    ?>
                                    <div class="col-xs-6 col-sm-6 col-md-6 col-padding">

                                        <div class="grid-item">

                                            <div class="grid-item-img">

                                                <a href="<?php echo permalink($row->id); ?>">

                                                    <img src="<?php echo base_url() . $row->image_mid; ?>" alt="">

                                                </a>

                                            </div>

                                            <h5><a href="<?php echo permalink($row->id); ?>" class="title"><?php echo $row->title; ?></a></h5>

                                        </div>

                                    </div>



                                <?php } ?>

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
                            $this->db->where(array('post_type' => 'article', 'visibility' => '1', 'lang_id' => '1', 'category_id' => '11'));
                            $this->db->order_by("id", "DESC");
                            $this->db->limit(1);
                            $query = $this->db->get();
                            $counter = 1;
                            foreach ($query->result() as $row) {
                                ?>
                                <div class="col-xs-12 p-t-10">

                                    <a class="post-item" href="<?php echo permalink($row->id); ?>">

                                        <figure class="img-holder">

                                            <img src="<?php echo base_url() . $row->image_mid; ?>" alt="<?php echo $row->title; ?>">

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
                            <?php } ?>
                        </div>
                    </div>

                    <div class="col-xs-12 p-t-20">

                        <div class="news-grid-2">

                            <div class="row">
                                <?php $this->db->from('posts');
                                $this->db->where(array('post_type' => 'article', 'visibility' => '1', 'lang_id' => '1', 'category_id' => '11'));
                                $this->db->order_by("id", "DESC");
                                $this->db->limit(2, 1);
                                $query = $this->db->get();
                                $counter = 1;
                                foreach ($query->result() as $row) {
                                    ?>
                                    <div class="col-xs-6 col-sm-6 col-md-6 col-padding">

                                        <div class="grid-item">

                                            <div class="grid-item-img">

                                                <a href="<?php echo permalink($row->id); ?>">

                                                    <img src="<?php echo base_url() . $row->image_mid; ?>" alt="">

                                                </a>

                                            </div>

                                            <h5><a href="<?php echo permalink($row->id); ?>" class="title"><?php echo $row->title; ?></a></h5>

                                        </div>

                                    </div>



                                <?php } ?>

                            </div>

                            <div class="row">
                                <?php $this->db->from('posts');
                                $this->db->where(array('post_type' => 'article', 'visibility' => '1', 'lang_id' => '1', 'category_id' => '11'));
                                $this->db->order_by("id", "DESC");
                                $this->db->limit(2, 3);
                                $query = $this->db->get();
                                $counter = 1;
                                foreach ($query->result() as $row) {
                                    ?>
                                    <div class="col-xs-6 col-sm-6 col-md-6 col-padding">

                                        <div class="grid-item">

                                            <div class="grid-item-img">

                                                <a href="<?php echo permalink($row->id); ?>">

                                                    <img src="<?php echo base_url() . $row->image_mid; ?>" alt="">

                                                </a>

                                            </div>

                                            <h5><a href="<?php echo permalink($row->id); ?>" class="title"><?php echo $row->title; ?></a></h5>

                                        </div>

                                    </div>



                                <?php } ?>

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
                                $this->db->where(array('post_type' => 'article', 'visibility' => '1', 'lang_id' => '1', 'category_id' => '7'));
                                $this->db->order_by("id", "DESC");
                                $this->db->limit(1);
                                $query = $this->db->get();
                                $counter = 1;
                                foreach ($query->result() as $row) {
                                    ?>
                                    <a class="post-item" href="<?php echo permalink($row->id); ?>">

                                        <figure class="img-holder">

                                            <img src="<?php echo base_url() . $row->image_small; ?>" alt="<?php echo $row->title; ?>">

                                            <div class="link-icon"><i class="fa fa-play"></i></div>

                                        </figure>

                                        <div class="p-b-10">

                                            <div class="title-holder p-t-10">

                                                <h3 class="post-title no-margin p-b-10"><?php echo $row->title; ?></h3>

                                                <p class="brief"><?php echo
                                                                            excerpt($row->content, 250);

                                                                        ?></p>
                                                </p>

                                            </div>

                                            <div class="category-meta">

                                                <p class="category"><?php echo category($row->category_id); ?></p>

                                            </div>

                                        </div>

                                    </a>
                                <?php } ?>

                            </div>

                        </div>
                    </div>

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
                                $this->db->where(array('post_type' => 'article', 'visibility' => '1', 'lang_id' => '1', 'category_id' => '21'));
                                $this->db->order_by("id", "DESC");
                                $this->db->limit(1);
                                $query = $this->db->get();
                                $counter = 1;
                                foreach ($query->result() as $row) {
                                    ?>
                                    <a class="post-item" href="<?php echo permalink($row->id); ?>">

                                        <figure class="img-holder">

                                            <img src="<?php echo base_url() . $row->image_small; ?>" alt="<?php echo $row->title; ?>">

                                            <div class="link-icon"><i class="fa fa-play"></i></div>

                                        </figure>

                                        <div class="p-b-10">

                                            <div class="title-holder p-t-10">

                                                <h3 class="post-title no-margin p-b-10"><?php echo $row->title; ?></h3>

                                                <p class="brief"><?php echo
                                                                            excerpt($row->content, 250);

                                                                        ?></p>
                                                </p>

                                            </div>

                                            <div class="category-meta">

                                                <p class="category"><?php echo category($row->category_id); ?></p>

                                            </div>

                                        </div>

                                    </a>
                                <?php } ?>

                            </div>

                        </div>
                    </div>

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
                                $this->db->where(array('post_type' => 'article', 'visibility' => '1', 'lang_id' => '1', 'category_id' => '25'));
                                $this->db->order_by("id", "DESC");
                                $this->db->limit(1);
                                $query = $this->db->get();
                                $counter = 1;
                                foreach ($query->result() as $row) {
                                    ?>
                                    <a class="post-item" href="<?php echo permalink($row->id); ?>">

                                        <figure class="img-holder">

                                            <img src="<?php echo base_url() . $row->image_small; ?>" alt="<?php echo $row->title; ?>">

                                            <div class="link-icon"><i class="fa fa-play"></i></div>

                                        </figure>

                                        <div class="p-b-10">

                                            <div class="title-holder p-t-10">

                                                <h3 class="post-title no-margin p-b-10"><?php echo $row->title; ?></h3>

                                                <p class="brief"><?php echo
                                                                            excerpt($row->content, 250);

                                                                        ?></p>
                                                </p>

                                            </div>

                                            <div class="category-meta">

                                                <p class="category"><?php echo category($row->category_id); ?></p>

                                            </div>

                                        </div>

                                    </a>
                                <?php } ?>

                            </div>

                        </div>
                    </div>

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
                                $this->db->where(array('post_type' => 'article', 'visibility' => '1', 'lang_id' => '1', 'category_id' => '18'));
                                $this->db->order_by("id", "DESC");
                                $this->db->limit(1);
                                $query = $this->db->get();
                                $counter = 1;
                                foreach ($query->result() as $row) {
                                    ?>
                                    <a class="post-item" href="<?php echo permalink($row->id); ?>">

                                        <figure class="img-holder">

                                            <img src="<?php echo base_url() . $row->image_small; ?>" alt="<?php echo $row->title; ?>">

                                            <div class="link-icon"><i class="fa fa-play"></i></div>

                                        </figure>

                                        <div class="p-b-10">

                                            <div class="title-holder p-t-10">

                                                <h3 class="post-title no-margin p-b-10"><?php echo $row->title; ?></h3>

                                                <p class="brief"><?php echo
                                                                            excerpt($row->content, 250);

                                                                        ?></p>
                                                </p>

                                            </div>

                                            <div class="category-meta">

                                                <p class="category"><?php echo category($row->category_id); ?></p>

                                            </div>

                                        </div>

                                    </a>
                                <?php } ?>
                            </div>

                        </div>
                    </div>

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
                                $this->db->where(array('post_type' => 'article', 'visibility' => '1', 'lang_id' => '1', 'category_id' => '35'));
                                $this->db->order_by("id", "DESC");
                                $this->db->limit(1);
                                $query = $this->db->get();
                                $counter = 1;
                                foreach ($query->result() as $row) {
                                    ?>
                                    <a class="post-item" href="<?php echo permalink($row->id); ?>">

                                        <figure class="img-holder">

                                            <img src="<?php echo base_url() . $row->image_small; ?>" alt="<?php echo $row->title; ?>">

                                            <div class="link-icon"><i class="fa fa-play"></i></div>

                                        </figure>

                                        <div class="p-b-10">

                                            <div class="title-holder p-t-10">

                                                <h3 class="post-title no-margin p-b-10"><?php echo $row->title; ?></h3>

                                                <p class="brief"><?php echo
                                                                            excerpt($row->content, 250);

                                                                        ?></p>
                                                </p>

                                            </div>

                                            <div class="category-meta">

                                                <p class="category"><?php echo category($row->category_id); ?></p>

                                            </div>

                                        </div>

                                    </a>
                                <?php } ?>
                            </div>

                        </div>
                    </div>

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
                                $this->db->where(array('post_type' => 'article', 'visibility' => '1', 'lang_id' => '1', 'category_id' => '21'));
                                $this->db->order_by("id", "DESC");
                                $this->db->limit(1);
                                $query = $this->db->get();
                                $counter = 1;
                                foreach ($query->result() as $row) {
                                    ?>
                                    <a class="post-item" href="<?php echo permalink($row->id); ?>">

                                        <figure class="img-holder">

                                            <img src="<?php echo base_url() . $row->image_small; ?>" alt="<?php echo $row->title; ?>">

                                            <div class="link-icon"><i class="fa fa-play"></i></div>

                                        </figure>

                                        <div class="p-b-10">

                                            <div class="title-holder p-t-10">

                                                <h3 class="post-title no-margin p-b-10"><?php echo $row->title; ?></h3>

                                                <p class="brief"><?php echo
                                                                            excerpt($row->content, 250);

                                                                        ?></p>
                                                </p>

                                            </div>

                                            <div class="category-meta">

                                                <p class="category"><?php echo category($row->category_id); ?></p>

                                            </div>

                                        </div>

                                    </a>
                                <?php } ?>

                            </div>

                        </div>
                    </div>

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
                                $this->db->where(array('post_type' => 'article', 'visibility' => '1', 'lang_id' => '1', 'category_id' => '32'));
                                $this->db->order_by("id", "DESC");
                                $this->db->limit(1);
                                $query = $this->db->get();
                                $counter = 1;
                                foreach ($query->result() as $row) {
                                    ?>
                                    <a class="post-item" href="<?php echo permalink($row->id); ?>">

                                        <figure class="img-holder">

                                            <img src="<?php echo base_url() . $row->image_small; ?>" alt="<?php echo $row->title; ?>">

                                            <div class="link-icon"><i class="fa fa-play"></i></div>

                                        </figure>

                                        <div class="p-b-10">

                                            <div class="title-holder p-t-10">

                                                <h3 class="post-title no-margin p-b-10"><?php echo $row->title; ?></h3>

                                                <p class="brief"><?php echo
                                                                            excerpt($row->content, 250);

                                                                        ?></p>
                                                </p>

                                            </div>

                                            <div class="category-meta">

                                                <p class="category"><?php echo category($row->category_id); ?></p>

                                            </div>

                                        </div>

                                    </a>
                                <?php } ?>
                            </div>

                        </div>
                    </div>

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
                                $this->db->where(array('post_type' => 'article', 'visibility' => '1', 'lang_id' => '1', 'category_id' => '29'));
                                $this->db->order_by("id", "DESC");
                                $this->db->limit(1);
                                $query = $this->db->get();
                                $counter = 1;
                                foreach ($query->result() as $row) {
                                    ?>
                                    <a class="post-item" href="<?php echo permalink($row->id); ?>">

                                        <figure class="img-holder">

                                            <img src="<?php echo base_url() . $row->image_small; ?>" alt="<?php echo $row->title; ?>">

                                            <div class="link-icon"><i class="fa fa-play"></i></div>

                                        </figure>

                                        <div class="p-b-10">

                                            <div class="title-holder p-t-10">

                                                <h3 class="post-title no-margin p-b-10"><?php echo $row->title; ?></h3>

                                                <p class="brief"><?php echo
                                                                            excerpt($row->content, 250);

                                                                        ?></p>
                                                </p>

                                            </div>

                                            <div class="category-meta">

                                                <p class="category"><?php echo category($row->category_id); ?></p>

                                            </div>

                                        </div>

                                    </a>
                                <?php } ?>

                            </div>

                        </div>
                    </div>

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
                                $this->db->where(array('post_type' => 'article', 'visibility' => '1', 'lang_id' => '1', 'category_id' => '33'));
                                $this->db->order_by("id", "DESC");
                                $this->db->limit(1);
                                $query = $this->db->get();
                                $counter = 1;
                                foreach ($query->result() as $row) {
                                    ?>
                                    <a class="post-item" href="<?php echo permalink($row->id); ?>">

                                        <figure class="img-holder">

                                            <img src="<?php echo base_url() . $row->image_small; ?>" alt="<?php echo $row->title; ?>">

                                            <div class="link-icon"><i class="fa fa-play"></i></div>

                                        </figure>

                                        <div class="p-b-10">

                                            <div class="title-holder p-t-10">

                                                <h3 class="post-title no-margin p-b-10"><?php echo $row->title; ?></h3>

                                                <p class="brief"><?php echo
                                                                            excerpt($row->content, 250);

                                                                        ?></p>
                                                </p>

                                            </div>

                                            <div class="category-meta">

                                                <p class="category"><?php echo category($row->category_id); ?></p>

                                            </div>

                                        </div>

                                    </a>
                                <?php } ?>

                            </div>

                        </div>
                    </div>

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
                                $this->db->where(array('post_type' => 'article', 'visibility' => '1', 'lang_id' => '1', 'category_id' => '34'));
                                $this->db->order_by("id", "DESC");
                                $this->db->limit(1);
                                $query = $this->db->get();
                                $counter = 1;
                                foreach ($query->result() as $row) {
                                    ?>
                                    <a class="post-item" href="<?php echo permalink($row->id); ?>">

                                        <figure class="img-holder">

                                            <img src="<?php echo base_url() . $row->image_small; ?>" alt="<?php echo $row->title; ?>">

                                            <div class="link-icon"><i class="fa fa-play"></i></div>

                                        </figure>

                                        <div class="p-b-10">

                                            <div class="title-holder p-t-10">

                                                <h3 class="post-title no-margin p-b-10"><?php echo $row->title; ?></h3>

                                                <p class="brief"><?php echo
                                                                            excerpt($row->content, 250);

                                                                        ?></p>
                                                </p>

                                            </div>

                                            <div class="category-meta">

                                                <p class="category"><?php echo category($row->category_id); ?></p>

                                            </div>

                                        </div>

                                    </a>
                                <?php } ?>

                            </div>

                        </div>
                    </div>

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
                                $this->db->where(array('post_type' => 'article', 'visibility' => '1', 'lang_id' => '1', 'category_id' => '23'));
                                $this->db->order_by("id", "DESC");
                                $this->db->limit(1);
                                $query = $this->db->get();
                                $counter = 1;
                                foreach ($query->result() as $row) {
                                    ?>
                                    <a class="post-item" href="<?php echo permalink($row->id); ?>">

                                        <figure class="img-holder">

                                            <img src="<?php echo base_url() . $row->image_small; ?>" alt="<?php echo $row->title; ?>">

                                            <div class="link-icon"><i class="fa fa-play"></i></div>

                                        </figure>

                                        <div class="p-b-10">

                                            <div class="title-holder p-t-10">

                                                <h3 class="post-title no-margin p-b-10"><?php echo $row->title; ?></h3>

                                                <p class="brief"><?php echo
                                                                            excerpt($row->content, 250);

                                                                        ?></p>
                                                </p>

                                            </div>

                                            <div class="category-meta">

                                                <p class="category"><?php echo category($row->category_id); ?></p>

                                            </div>

                                        </div>

                                    </a>
                                <?php } ?>

                            </div>

                        </div>
                    </div>

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
                                $this->db->where(array('post_type' => 'article', 'visibility' => '1', 'lang_id' => '1', 'category_id' => '26'));
                                $this->db->order_by("id", "DESC");
                                $this->db->limit(1);
                                $query = $this->db->get();
                                $counter = 1;
                                foreach ($query->result() as $row) {
                                    ?>
                                    <a class="post-item" href="<?php echo permalink($row->id); ?>">

                                        <figure class="img-holder">

                                            <img src="<?php echo base_url() . $row->image_small; ?>" alt="<?php echo $row->title; ?>">

                                            <div class="link-icon"><i class="fa fa-play"></i></div>

                                        </figure>

                                        <div class="p-b-10">

                                            <div class="title-holder p-t-10">

                                                <h3 class="post-title no-margin p-b-10"><?php echo $row->title; ?></h3>

                                                <p class="brief"><?php echo
                                                                            excerpt($row->content, 250);

                                                                        ?></p>
                                                </p>

                                            </div>

                                            <div class="category-meta">

                                                <p class="category"><?php echo category($row->category_id); ?></p>

                                            </div>

                                        </div>

                                    </a>
                                <?php } ?>

                            </div>

                        </div>
                    </div>

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

                        $this->db->where(array('post_type' => 'article', 'visibility' => '1', 'lang_id' => '1', 'is_recommended' => '1'));

                        $this->db->order_by("id", "DESC");

                        $this->db->limit(4);

                        $query = $this->db->get();

                        $counter = 1;

                        foreach ($query->result() as $row) {

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
                        <?php } ?>


                    </div>

                    <div class="post-items p-b-20 p-t-20">

                        <?php $this->db->from('posts');

                        $this->db->where(array('post_type' => 'article', 'visibility' => '1', 'lang_id' => '1', 'is_recommended' => '1'));

                        $this->db->order_by("id", "DESC");

                        $this->db->limit(4, 4);

                        $query = $this->db->get();

                        $counter = 1;

                        foreach ($query->result() as $row) {

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
                        <?php } ?>


                    </div>

                </div>

            </div>

        </div>

    </div>

</main>