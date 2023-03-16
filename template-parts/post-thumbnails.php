<?php
$postid = get_the_ID();
$title = get_the_title();
$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'medium', true );
$link = get_permalink( $postid );
//$summary = wp_trim_words( get_the_content(), 20, '...' );
$date_post =  get_the_date('m/j/y');
$categories = get_the_category();
?>

<div class="content_single_last_p">
    <a href="<?php echo $link; ?>">
        <div class="br__single_last_p">
            <div class="img_content_last_p">
                <img src="<?php echo $image[0]; ?>">
            </div>
            <div class="text_content_last_p">
                <?php if($categories[0]->name != 'Uncategorize'){ ?>
                    <p><?php echo $categories[0]->name ?></p>
                <?php } ?>
                <div class="date_last_p">
                    <p class="date-cs"><?php echo $date_post; ?></p>
                </div>
                <h2><?php echo $title; ?></h2>
            </div>
        </div>
    </a>
</div>