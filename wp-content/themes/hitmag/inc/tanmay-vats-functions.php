<?php
function googleAds($type = '') {
    if(!is_admin()) {
        switch ($type) {
            case 'In-Feed-Text':
                ?>
                <ins class="adsbygoogle"
                     style="display:block"
                     data-ad-format="fluid"
                     data-ad-layout-key="-f2-29+h-gs+sr"
                     data-ad-client="ca-pub-1809610871655685"
                     data-ad-slot="1120932522"></ins>
                <script>
                     (adsbygoogle = window.adsbygoogle || []).push({});
                </script>
                <?php
                break;
            default:
                ?>
                <!-- top-header-small -->
                <ins class="adsbygoogle"
                style="display:block"
                data-ad-client="ca-pub-1809610871655685"
                data-ad-slot="5704897562"
                data-ad-format="auto"
                data-full-width-responsive="true"></ins>
                <script>
                    (adsbygoogle = window.adsbygoogle || []).push({});
                </script>
                <?php
        }
    }
}
function tv_hitmag_before_site() {
    ?>
	<amp-auto-ads type="adsense"
			data-ad-client="ca-pub-1809610871655685">
	</amp-auto-ads>

    <div id="fb-root"></div>
    <script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.12';
    fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

    <div class="tv-container">
        <div class="rb-ads left-rb-ads">
            <?php googleAds(); ?>
        </div>
        <div class="tv-content">
    <?php
}
add_action( 'hitmag_before_site', 'tv_hitmag_before_site' );

function tv_hitmag_before_footer() {
    googleAds();
    ?>
    <br>
    <?php
}
add_action( 'hitmag_before_footer', 'tv_hitmag_before_footer' );

function tv_wp_footer() {
    ?>
    </div>
    <div class="rb-ads right-rb-ads">
        <?php googleAds(); ?>
    </div>
    <?php
}
add_action( 'wp_footer', 'tv_wp_footer' );

$tv_post_listing_ads = 0;
function tv_after_post_listing_google_ads() {
    GLOBAL $tv_post_listing_ads;
    $tv_post_listing_ads++;

    if($tv_post_listing_ads%2 == 0) {
        ?>
        <div class="archive-post-ads">
            <?php googleAds("In-Feed-Text"); ?>
        </div>
        <?php
    }
}

add_action( 'tv_after_post_listing', 'tv_after_post_listing_google_ads' );

add_filter( 'the_content', 'insert_ads_inside_post_content' );
 
function insert_ads_inside_post_content( $content ) {
    ob_start();
    googleAds();
    echo "<br />";
    $ad_code = ob_get_contents();
    ob_end_clean();
 
    if ( is_single() && ! is_admin() ) {
        return prefix_insert_after_paragraph( $ad_code, 2, $content );
    }
     
    return $content;
}

function prefix_insert_after_paragraph( $insertion, $paragraph_id, $content ) {
    $closing_p = '</p>';
    $paragraphs = explode( $closing_p, $content );
    foreach ($paragraphs as $index => $paragraph) {
 
        if ( trim( $paragraph ) ) {
            $paragraphs[$index] .= $closing_p;
        }
 
        if ( $paragraph_id == $index + 1 ) {
            $paragraphs[$index] .= $insertion;
        }
    }
     
    return implode( '', $paragraphs );
}
?>