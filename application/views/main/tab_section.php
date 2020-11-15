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
                                        <?php $this->db->from('posts');
                                        $this->db->where(array('post_type' => 'article', 'lang_id' => '1', 'category_id' => '44'));
                                        $this->db->order_by("id", "DESC");
                                        $this->db->limit(1); 
                                        $query = $this->db->get();
                                        $row = $query->result();
                                            ?>
                                            <div class="col-md-6">
                                                <a class="post-item" href="<?php echo permalink($row[0]->id); ?>">
                                                    <figure class="">
                                                        <img src="<?php echo base_url() . $row[0]->image_mid; ?>" alt="<?php echo $row[0]->title; ?>">
                                                    </figure>
                                                    <div class="post-content no-padding">
                                                        <h2 class="post-title">
                                                        <?php echo $row[0]->title; ?>
                                                        </h2>
                                                        <p>
                                                        <?php echo
                                                                excerpt($row[0]->content, 400);

                                                            ?>&hellip;
                                                        </p>
                                                        <div class="category-meta">
                                                            <p class="category"><?php echo category($row[0]->category_id); ?></p>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        <div class="col-md-6">
                                            <div class="row">
                                            <?php $this->db->from('posts');
                                                    $this->db->where(array('post_type' => 'article', 'lang_id' => '1', 'category_id' => '44'));
                                                    $this->db->order_by("id","DESC");
                                                    $this->db->limit(4,0);  
                                                    $query = $this->db->get();
                                                        $counter = 1;
                                                foreach ($query->result() as $row)
                                                {
                                                ?>
                                                <div class="col-xs-6">
                                                    <a class="post-item" href="<?php echo permalink($row->id); ?>">
                                                        <figure class="">
                                                            <img src="<?php echo base_url() . $row->image_mid; ?>" alt="<?php echo $row->title; ?>">
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
                                </div>
                            </div>
                            <div class="tab">
                                <input type="radio" name="css-tabs" id="tab-2" checked="" class="tab-switch">
                                <label for="tab-2" class="tab-label">চট্টগ্রাম</label>
                                <div class="tab-content">

                                    <div class="row  no-margin p-t-20 ">
                                        <div class="col-sm-12">
                                        </div>
                                        <?php $this->db->from('posts');
                                        $this->db->where(array('post_type' => 'article', 'lang_id' => '1', 'category_id' => '43'));
                                        $this->db->order_by("id", "DESC");
                                        $this->db->limit(1); 
                                        $query = $this->db->get();
                                        $row = $query->result();
                                            ?>
                                            <div class="col-md-6">
                                                <a class="post-item" href="<?php echo permalink($row[0]->id); ?>">
                                                    <figure class="">
                                                        <img src="<?php echo base_url() . $row[0]->image_mid; ?>" alt="<?php echo $row[0]->title; ?>">
                                                    </figure>
                                                    <div class="post-content no-padding">
                                                        <h2 class="post-title">
                                                        <?php echo $row[0]->title; ?>
                                                        </h2>
                                                        <p>
                                                        <?php echo
                                                                excerpt($row[0]->content, 400);

                                                            ?>&hellip;
                                                        </p>
                                                        <div class="category-meta">
                                                            <p class="category"><?php echo category($row[0]->category_id); ?></p>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        <div class="col-md-6">
                                            <div class="row">
                                            <?php $this->db->from('posts');
                                                    $this->db->where(array('post_type' => 'article', 'lang_id' => '1', 'category_id' => '43'));
                                                    $this->db->order_by("id","DESC");
                                                    $this->db->limit(4,0);  
                                                    $query = $this->db->get();
                                                        $counter = 1;
                                                foreach ($query->result() as $row)
                                                {
                                                ?>
                                                <div class="col-xs-6">
                                                    <a class="post-item" href="<?php echo permalink($row->id); ?>">
                                                        <figure class="">
                                                            <img src="<?php echo base_url() . $row->image_mid; ?>" alt="<?php echo $row->title; ?>">
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
                                </div>
                            </div>
                            <div class="tab">
                                <input type="radio" name="css-tabs" id="tab-3" checked="" class="tab-switch">
                                <label for="tab-3" class="tab-label">ঢাকা</label>
                                <div class="tab-content">

                                    <div class="row  no-margin p-t-20 ">
                                        <div class="col-sm-12">
                                        </div>
                                        <?php $this->db->from('posts');
                                        $this->db->where(array('post_type' => 'article', 'lang_id' => '1', 'category_id' => '42'));
                                        $this->db->order_by("id", "DESC");
                                        $this->db->limit(1); 
                                        $query = $this->db->get();
                                        $row = $query->result();
                                            ?>
                                            <div class="col-md-6">
                                                <a class="post-item" href="<?php echo permalink($row[0]->id); ?>">
                                                    <figure class="">
                                                        <img src="<?php echo base_url() . $row[0]->image_mid; ?>" alt="<?php echo $row[0]->title; ?>">
                                                    </figure>
                                                    <div class="post-content no-padding">
                                                        <h2 class="post-title">
                                                        <?php echo $row[0]->title; ?>
                                                        </h2>
                                                        <p>
                                                        <?php echo
                                                                excerpt($row[0]->content, 400);

                                                            ?>&hellip;
                                                        </p>
                                                        <div class="category-meta">
                                                            <p class="category"><?php echo category($row[0]->category_id); ?></p>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        <div class="col-md-6">
                                            <div class="row">
                                            <?php $this->db->from('posts');
                                                    $this->db->where(array('post_type' => 'article', 'lang_id' => '1', 'category_id' => '42'));
                                                    $this->db->order_by("id","DESC");
                                                    $this->db->limit(4,0);  
                                                    $query = $this->db->get();
                                                        $counter = 1;
                                                foreach ($query->result() as $row)
                                                {
                                                ?>
                                                <div class="col-xs-6">
                                                    <a class="post-item" href="<?php echo permalink($row->id); ?>">
                                                        <figure class="">
                                                            <img src="<?php echo base_url() . $row->image_mid; ?>" alt="<?php echo $row->title; ?>">
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
                                </div>
                            </div>
                            <div class="tab">
                                <input type="radio" name="css-tabs" id="tab-4" checked="" class="tab-switch">
                                <label for="tab-4" class="tab-label">খুলনা</label>
                                <div class="tab-content">

                                    <div class="row  no-margin p-t-20 ">
                                        <div class="col-sm-12">
                                        </div>
                                        <?php $this->db->from('posts');
                                        $this->db->where(array('post_type' => 'article', 'lang_id' => '1', 'category_id' => '41'));
                                        $this->db->order_by("id", "DESC");
                                        $this->db->limit(1); 
                                        $query = $this->db->get();
                                        $row = $query->result();
                                            ?>
                                            <div class="col-md-6">
                                                <a class="post-item" href="<?php echo permalink($row[0]->id); ?>">
                                                    <figure class="">
                                                        <img src="<?php echo base_url() . $row[0]->image_mid; ?>" alt="<?php echo $row[0]->title; ?>">
                                                    </figure>
                                                    <div class="post-content no-padding">
                                                        <h2 class="post-title">
                                                        <?php echo $row[0]->title; ?>
                                                        </h2>
                                                        <p>
                                                        <?php echo
                                                                excerpt($row[0]->content, 400);

                                                            ?>&hellip;
                                                        </p>
                                                        <div class="category-meta">
                                                            <p class="category"><?php echo category($row[0]->category_id); ?></p>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        <div class="col-md-6">
                                            <div class="row">
                                            <?php $this->db->from('posts');
                                                    $this->db->where(array('post_type' => 'article', 'lang_id' => '1', 'category_id' => '41'));
                                                    $this->db->order_by("id","DESC");
                                                    $this->db->limit(4,0);  
                                                    $query = $this->db->get();
                                                        $counter = 1;
                                                foreach ($query->result() as $row)
                                                {
                                                ?>
                                                <div class="col-xs-6">
                                                    <a class="post-item" href="<?php echo permalink($row->id); ?>">
                                                        <figure class="">
                                                            <img src="<?php echo base_url() . $row->image_mid; ?>" alt="<?php echo $row->title; ?>">
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
                                </div>
                            </div>
                            <div class="tab">
                                <input type="radio" name="css-tabs" id="tab-5" checked="" class="tab-switch">
                                <label for="tab-5" class="tab-label">রাজশাহী</label>
                                <div class="tab-content">

                                    <div class="row  no-margin p-t-20 ">
                                        <div class="col-sm-12">
                                        </div>
                                        <?php $this->db->from('posts');
                                        $this->db->where(array('post_type' => 'article', 'lang_id' => '1', 'category_id' => '40'));
                                        $this->db->order_by("id", "DESC");
                                        $this->db->limit(1); 
                                        $query = $this->db->get();
                                        $row = $query->result();
                                            ?>
                                            <div class="col-md-6">
                                                <a class="post-item" href="<?php echo permalink($row[0]->id); ?>">
                                                    <figure class="">
                                                        <img src="<?php echo base_url() . $row[0]->image_mid; ?>" alt="<?php echo $row[0]->title; ?>">
                                                    </figure>
                                                    <div class="post-content no-padding">
                                                        <h2 class="post-title">
                                                        <?php echo $row[0]->title; ?>
                                                        </h2>
                                                        <p>
                                                        <?php echo
                                                                excerpt($row[0]->content, 400);

                                                            ?>&hellip;
                                                        </p>
                                                        <div class="category-meta">
                                                            <p class="category"><?php echo category($row[0]->category_id); ?></p>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        <div class="col-md-6">
                                            <div class="row">
                                            <?php $this->db->from('posts');
                                                    $this->db->where(array('post_type' => 'article', 'lang_id' => '1', 'category_id' => '40'));
                                                    $this->db->order_by("id","DESC");
                                                    $this->db->limit(4,0);  
                                                    $query = $this->db->get();
                                                        $counter = 1;
                                                foreach ($query->result() as $row)
                                                {
                                                ?>
                                                <div class="col-xs-6">
                                                    <a class="post-item" href="<?php echo permalink($row->id); ?>">
                                                        <figure class="">
                                                            <img src="<?php echo base_url() . $row->image_mid; ?>" alt="<?php echo $row->title; ?>">
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
                                </div>
                            </div>
                            <div class="tab">
                                <input type="radio" name="css-tabs" id="tab-6" checked="" class="tab-switch">
                                <label for="tab-6" class="tab-label">রংপুর</label>
                                <div class="tab-content">

                                <div class="row  no-margin p-t-20 ">
                                        <div class="col-sm-12">
                                        </div>
                                        <?php $this->db->from('posts');
                                        $this->db->where(array('post_type' => 'article', 'lang_id' => '1', 'category_id' => '39'));
                                        $this->db->order_by("id", "DESC");
                                        $this->db->limit(1); 
                                        $query = $this->db->get();
                                        $row = $query->result();
                                            ?>
                                            <div class="col-md-6">
                                                <a class="post-item" href="<?php echo permalink($row[0]->id); ?>">
                                                    <figure class="">
                                                        <img src="<?php echo base_url() . $row[0]->image_mid; ?>" alt="<?php echo $row[0]->title; ?>">
                                                    </figure>
                                                    <div class="post-content no-padding">
                                                        <h2 class="post-title">
                                                        <?php echo $row[0]->title; ?>
                                                        </h2>
                                                        <p>
                                                        <?php echo
                                                                excerpt($row[0]->content, 400);

                                                            ?>&hellip;
                                                        </p>
                                                        <div class="category-meta">
                                                            <p class="category"><?php echo category($row[0]->category_id); ?></p>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        <div class="col-md-6">
                                            <div class="row">
                                            <?php $this->db->from('posts');
                                                    $this->db->where(array('post_type' => 'article', 'lang_id' => '1', 'category_id' => '39'));
                                                    $this->db->order_by("id","DESC");
                                                    $this->db->limit(4,0);  
                                                    $query = $this->db->get();
                                                        $counter = 1;
                                                foreach ($query->result() as $row)
                                                {
                                                ?>
                                                <div class="col-xs-6">
                                                    <a class="post-item" href="<?php echo permalink($row->id); ?>">
                                                        <figure class="">
                                                            <img src="<?php echo base_url() . $row->image_mid; ?>" alt="<?php echo $row->title; ?>">
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
                                </div>
                            </div>
                            <div class="tab">
                                <input type="radio" name="css-tabs" id="tab-7" checked="" class="tab-switch">
                                <label for="tab-7" class="tab-label">সিলেট</label>
                                <div class="tab-content">

                                <div class="row  no-margin p-t-20 ">
                                        <div class="col-sm-12">
                                        </div>
                                        <?php $this->db->from('posts');
                                        $this->db->where(array('post_type' => 'article', 'lang_id' => '1', 'category_id' => '38'));
                                        $this->db->order_by("id", "DESC");
                                        $this->db->limit(1); 
                                        $query = $this->db->get();
                                        $row = $query->result();
                                            ?>
                                            <div class="col-md-6">
                                                <a class="post-item" href="<?php echo permalink($row[0]->id); ?>">
                                                    <figure class="">
                                                        <img src="<?php echo base_url() . $row[0]->image_mid; ?>" alt="<?php echo $row[0]->title; ?>">
                                                    </figure>
                                                    <div class="post-content no-padding">
                                                        <h2 class="post-title">
                                                        <?php echo $row[0]->title; ?>
                                                        </h2>
                                                        <p>
                                                        <?php echo
                                                                excerpt($row[0]->content, 400);

                                                            ?>&hellip;
                                                        </p>
                                                        <div class="category-meta">
                                                            <p class="category"><?php echo category($row[0]->category_id); ?></p>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        <div class="col-md-6">
                                            <div class="row">
                                            <?php $this->db->from('posts');
                                                    $this->db->where(array('post_type' => 'article', 'lang_id' => '1', 'category_id' => '38'));
                                                    $this->db->order_by("id","DESC");
                                                    $this->db->limit(4,0);  
                                                    $query = $this->db->get();
                                                        $counter = 1;
                                                foreach ($query->result() as $row)
                                                {
                                                ?>
                                                <div class="col-xs-6">
                                                    <a class="post-item" href="<?php echo permalink($row->id); ?>">
                                                        <figure class="">
                                                            <img src="<?php echo base_url() . $row->image_mid; ?>" alt="<?php echo $row->title; ?>">
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
                                </div>
                            </div>
                            <div class="tab">
                                <input type="radio" name="css-tabs" id="tab-8" checked="" class="tab-switch">
                                <label for="tab-8" class="tab-label">ময়মনসিংহ</label>
                                <div class="tab-content">

                                    <div class="row  no-margin p-t-20 ">
                                        <div class="col-sm-12">
                                        </div>
                                        <?php $this->db->from('posts');
                                        $this->db->where(array('post_type' => 'article', 'lang_id' => '1', 'category_id' => '37'));
                                        $this->db->order_by("id", "DESC");
                                        $this->db->limit(1); 
                                        $query = $this->db->get();
                                        $row = $query->result();
                                            ?>
                                            <div class="col-md-6">
                                                <a class="post-item" href="<?php echo permalink($row[0]->id); ?>">
                                                    <figure class="">
                                                        <img src="<?php echo base_url() . $row[0]->image_mid; ?>" alt="<?php echo $row[0]->title; ?>">
                                                    </figure>
                                                    <div class="post-content no-padding">
                                                        <h2 class="post-title">
                                                        <?php echo $row[0]->title; ?>
                                                        </h2>
                                                        <p>
                                                        <?php echo
                                                                excerpt($row[0]->content, 400);

                                                            ?>&hellip;
                                                        </p>
                                                        <div class="category-meta">
                                                            <p class="category"><?php echo category($row[0]->category_id); ?></p>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        <div class="col-md-6">
                                            <div class="row">
                                            <?php $this->db->from('posts');
                                                    $this->db->where(array('post_type' => 'article', 'lang_id' => '1', 'category_id' => '37'));
                                                    $this->db->order_by("id","DESC");
                                                    $this->db->limit(4,0);  
                                                    $query = $this->db->get();
                                                        $counter = 1;
                                                foreach ($query->result() as $row)
                                                {
                                                ?>
                                                <div class="col-xs-6">
                                                    <a class="post-item" href="<?php echo permalink($row->id); ?>">
                                                        <figure class="">
                                                            <img src="<?php echo base_url() . $row->image_mid; ?>" alt="<?php echo $row->title; ?>">
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
                                </div>
                            </div>
                            <div class="tab">
                                <input type="radio" name="css-tabs" id="tab-0" checked="" class="tab-switch">
                                <label for="tab-0" class="tab-label">জাতীয়</label>
                                <div class="tab-content">

                                    <div class="row  no-margin p-t-20 ">
                                        <div class="col-sm-12">
                                        </div>
                                        <?php $this->db->from('posts');
                                        $this->db->where(array('post_type' => 'article', 'lang_id' => '1', 'category_id' => '30'));
                                        $this->db->order_by("id", "DESC");
                                        $this->db->limit(1); 
                                        $query = $this->db->get();
                                        $row = $query->result();
                                            ?>
                                            <div class="col-md-6">
                                                <a class="post-item" href="<?php echo permalink($row[0]->id); ?>">
                                                    <figure class="">
                                                        <img src="<?php echo base_url() . $row[0]->image_mid; ?>" alt="<?php echo $row[0]->title; ?>">
                                                    </figure>
                                                    <div class="post-content no-padding">
                                                        <h2 class="post-title">
                                                        <?php echo $row[0]->title; ?>
                                                        </h2>
                                                        <p>
                                                        <?php echo
                                                                excerpt($row[0]->content, 400);

                                                            ?>&hellip;
                                                        </p>
                                                        <div class="category-meta">
                                                            <p class="category"><?php echo category($row[0]->category_id); ?></p>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        <div class="col-md-6">
                                            <div class="row">
                                            <?php $this->db->from('posts');
                                                    $this->db->where(array('post_type' => 'article', 'lang_id' => '1', 'category_id' => '30'));
                                                    $this->db->order_by("id","DESC");
                                                    $this->db->limit(4,0);  
                                                    $query = $this->db->get();
                                                        $counter = 1;
                                                foreach ($query->result() as $row)
                                                {
                                                ?>
                                                <div class="col-xs-6">
                                                    <a class="post-item" href="<?php echo permalink($row->id); ?>">
                                                        <figure class="">
                                                            <img src="<?php echo base_url() . $row->image_mid; ?>" alt="<?php echo $row->title; ?>">
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