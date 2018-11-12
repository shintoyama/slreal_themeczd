<?php
    $cat = 'vod-2'; // category code
    $num = 100;
    global $post;

    $term_id = get_category_by_slug($cat)->term_id;
    $myposts = get_posts('numberposts=' .$num. '&category_name=' .$cat);
?>


			<section class="entry-content archive-box">
				<div class="toppost-list-box-simple">
					<div class="post-list-mag-sp1col">
<?php    if ($myposts) {
        foreach($myposts as $post):
			echo '<article class="post-list-item" itemscope itemtype="https://schema.org/BlogPosting">';
            setup_postdata($post);
            echo '<a id="nondec" class="post-list-link" rel="bookmark" href=' .get_permalink(). ' itemprop="mainEntityOfPage">';
			echo '<div class="post-list-inner">';
			echo '<div class="post-list-thumb" itemprop="image" itemscope itemtype="https://schema.org/ImageObject">';
            if ( has_post_thumbnail() ) {
                echo ''.get_the_post_thumbnail($page->ID, array( 640, 360 )). '';
            } else {
                echo '<i class="ico-camera-alt"></i>';
            }
            echo '</div><div class="post-list-meta vcard">';
            echo '<span class="post-list-title entry-title" itemprop="headline">'. the_title("","",false).'</span><span class="post-list-date date updated ef" itemprop="datePublished dateModified">' . get_the_date() . '</span></div>';
			echo '</div></a></article>';
         endforeach;
    } else {
    echo '<p>記事がありません。</p>';
    }

?>
						</div>
					</div>
				</section>
