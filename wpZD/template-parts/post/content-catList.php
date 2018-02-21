<?php
/**
 * Template part for displaying list of category`s posts
 *
 * Used in Search Results and for Recent Posts in Front Page panels.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>

    <?php $bgImg = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full') ?>
    <div class="serviceSinglePageItem col-xs-12 col-md-4">
        <a href="<?php echo get_permalink(); ?>" class="pItem pItemImg" style="display: block; background-image: url('<?php echo $bgImg[0] ?>')">
            <div class="info">
                <div class="header">
                    <?php the_title(); ?>
                </div>
                Клиент:
                <div class="customer">
                    <?php echo the_field('customer'); ?>
                </div>
                Цель:
                <div class="goal">
                    <?php echo the_field('goal'); ?>
                </div>
                <div class="viewsLikes">
                            <span class="views">
                                <i class="fa fa-eye"></i> &mdash;
                                <span class="viewsNr">5587</span>
                            </span>
                            <span class="likes">
                                <i class="fa fa-thumbs-o-up"></i> &mdash;
                                <span class="likesNr">13441</span>
                            </span>
                </div>
            </div>
        </a>
    </div>
