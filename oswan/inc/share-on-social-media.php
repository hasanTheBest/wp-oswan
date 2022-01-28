<?php
if(!function_exists('oswan_share_on_social_media')){
  function oswan_share_on_social_media($id)
  {
    $title = get_the_title($id);
    $permalink = get_the_permalink($id);
    $excerpt = get_the_excerpt();
    $site_title = get_bloginfo('name');

    $facebook = 'https://www.facebook.com/sharer.php?u=' . $permalink;
    $twitter = 'https://twitter.com/intent/tweet?url=' . $permalink . '&text=' . esc_html($title);
    $linkedIn = 'https://www.linkedin.com/shareArticle?mini=true&url='.$permalink.'&tittle='.esc_html($title). '&summary='.$excerpt. '&source='. $site_title;

    $social_media = '<ul>';
    $social_media .= '<li><a target="_blank" href="' . esc_url($facebook) . '"><i class="fa fa-facebook"></i></a></li>';
    $social_media .= '<li><a target="_blank" href="' . esc_url($twitter) . '"><i class="fa fa-twitter"></i></a></li>';
    $social_media .= '<li><a target="_blank" href="' . esc_url($linkedIn) . '"><i class="fa fa-linkedin"></i></a></li>';
    $social_media .= '</ul>';

    return $social_media;
  }
}


                                