<div class="row no-margin br-bottom p-b-20 p-t-20 p-r-20 br-top">
<div class="col-xs-12 p-l-10 p-b-20">
    <img class="p-l-20" src="assets/shadboichitro.png" style="width: 100px;">
    </div>
    <div class="col-xs-12 col-md-6">
        <div class="bg-black p-t-20 p-l-20 p-r-20">
            <div class="row  video ">
                <?php $this->db->from('posts');
                $this->db->where(array('post_type' => 'video', 'lang_id' => '1', 'is_breaking' => '1', 'category_id' => '4'));
                $this->db->order_by("id", "DESC");
                $this->db->limit(1);
                $query = $this->db->get();
                $counter = 1;
                foreach ($query->result() as $row) {
                    ?>
                    <div class="col-xs-12 p-t-10">
                        <a class="post-item" href="<?php echo $row->video_embed_code; ?>">
                            <figure class="img-holder">
                                <img src="<?php echo base_url() . $row->image_mid; ?>" alt="<?php echo $row->title; ?>" alt="<?php echo $row->title; ?>">
                                <div class="link-icon"><i class="fa fa-play"></i></div>
                            </figure>
                            <div class="p-b-10">
                                <div class="title-holder p-t-10">
                                    <h3 class="post-title no-margin p-b-10"><?php echo $row->title; ?></h3>
                                    <p class="brief">
                                        <p><span class="style-scope yt-formatted-string" dir="auto"><?php echo
                                                                                                            excerpt($row->content, 400);

                                                                                                        ?>&hellip;</p>
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
    <div class="col-xs-6 p-r-0 p-l-10 hidden-xs">
        <div class="row p-0 video">

            <?php $this->db->from('posts');
            $this->db->where(array('post_type' => 'video', 'lang_id' => '1', 'is_breaking' => '1', 'category_id' => '6'));
            $this->db->order_by("id", "DESC");
            $this->db->limit(2, 1);
            $query = $this->db->get();
            $counter = 1;
            foreach ($query->result() as $row) {
                ?>
                <div class="col-xs-6">

                    <a class="post-item bg-black" href="<?php echo $row->video_embed_code; ?>">
                        <figure class="img-holder">
                            <img src="<?php echo base_url() . $row->image_mid; ?>" alt="">
                            <div class="link-icon"><i class="fa fa-play"></i></div>
                        </figure>
                        <div class="post-content">
                            <div class="post-metas">
                                <p class="category"> <?php echo category($row->category_id); ?></p>
                            </div>
                            <div class="title-holder">
                                <h3 class="post-title no-margin"><?php echo $row->title; ?> </h3>
                            </div>
                        </div>
                    </a>
                </div>
            <?php } ?>
        </div>
        <div class="row m-t-20 p-0 video">

            <?php $this->db->from('posts');
            $this->db->where(array('post_type' => 'video', 'lang_id' => '1', 'is_breaking' => '1', 'category_id' => '4'));
            $this->db->order_by("id", "DESC");
            $this->db->limit(2, 3);
            $query = $this->db->get();
            $counter = 1;
            foreach ($query->result() as $row) {
                ?>
                <div class="col-xs-6">

                    <a class="post-item bg-black" href="<?php echo $row->video_embed_code; ?>">
                        <figure class="img-holder">
                            <img src="<?php echo base_url() . $row->image_mid; ?>" alt="">
                            <div class="link-icon"><i class="fa fa-play"></i></div>
                        </figure>
                        <div class="post-content">
                            <div class="post-metas">
                                <p class="category"> <?php echo category($row->category_id); ?></p>
                            </div>
                            <div class="title-holder">
                                <h3 class="post-title no-margin"><?php echo $row->title; ?> </h3>
                            </div>
                        </div>
                    </a>
                </div>
            <?php } ?>
        </div>
        <div class="row m-t-20 p-0 video">

            <?php $this->db->from('posts');
            $this->db->where(array('post_type' => 'video', 'lang_id' => '1', 'is_breaking' => '1', 'category_id' => '4'));
            $this->db->order_by("id", "DESC");
            $this->db->limit(2, 3);
            $query = $this->db->get();
            $counter = 1;
            foreach ($query->result() as $row) {
                ?>
                <div class="col-xs-6">

                    <a class="post-item bg-black" href="<?php echo $row->video_embed_code; ?>">
                        <figure class="img-holder">
                            <img src="<?php echo base_url() . $row->image_mid; ?>" alt="">
                            <div class="link-icon"><i class="fa fa-play"></i></div>
                        </figure>
                        <div class="post-content">
                            <div class="post-metas">
                                <p class="category"> <?php echo category($row->category_id); ?></p>
                            </div>
                            <div class="title-holder">
                                <h3 class="post-title no-margin"><?php echo $row->title; ?> </h3>
                            </div>
                        </div>
                    </a>
                </div>
            <?php } ?>
        </div>
    </div>
</div>