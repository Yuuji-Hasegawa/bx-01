<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head
    prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# <?php echo get_ogp_type();?>: http://ogp.me/ns/<?php echo get_ogp_type();?>#">
    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.defer = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer',
            '<?php echo get_vars('site', 'gtm');?>'
        );
    </script>
    <!-- End Google Tag Manager -->
    <meta
        charset="<?php bloginfo('charset');?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover" />
    <?php wp_head();?>
</head>

<body <?php body_class();?>>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe
            src="https://www.googletagmanager.com/ns.html?id=<?php echo get_vars('site', 'gtm');?>"
            height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <header class="o-paste">
        <div class="o-container o-container:header">
            <div class="o-cluster o-cluster:headLogo">
                <a href="<?php echo home_url();?>"
                    class="o-cluster__headLogo"><?php echo get_vars('site', 'name');?></a>
                <span class="o-cluster__headLead">ビジネスをもっと青く</span>
            </div>
            <button class="c-menu-btn" type="button" aria-label="menu close" aria-controls="headMenu"
                aria-expanded="false">
                <span class="c-menu-btn__bars"></span>
            </button>
        </div>
        <nav class="c-head-nav" id="headMenu" aria-hidden="true">
            <ul class="c-gnav">
                <li class="c-gnav__item">
                    <a <?php if (is_front_page()) {
    echo 'class="c-gnav__link c-gnav__link:is-current"';
} else {
    echo 'class="c-gnav__link"';
}?>
                        href="<?php echo home_url();?>">
                        トップ
                    </a>
                </li>
                <li class="c-gnav__item">
                    <a <?php if (is_page('company')) {
    echo 'class="c-gnav__link c-gnav__link:is-current"';
} else {
    echo 'class="c-gnav__link"';
}?>
                        href="<?php echo home_url('/company');?>">
                        会社情報
                    </a>
                </li>
                <li class="c-gnav__item">
                    <a <?php if (is_archive() && !is_post_type_archive('news') || is_single() && 'news' != get_post_type()) {
    echo 'class="c-gnav__link c-gnav__link:is-current"';
} else {
    echo 'class="c-gnav__link"';
}?>class="c-gnav__link"
                        href="<?php echo home_url('/blog');?>">
                        ブログ
                    </a>
                </li>
                <li class="c-gnav__item">
                    <a <?php if (is_post_type_archive('news') || is_single() && 'news' == get_post_type()) {
    echo 'class="c-gnav__link c-gnav__link:is-current"';
} else {
    echo 'class="c-gnav__link"';
}
                        ?> class="c-gnav__link"
                        href="<?php echo home_url('/news');?>">
                        お知らせ
                    </a>
                </li>
                <li class="c-gnav__item">
                    <a <?php if (is_page('inquiry')) {
                            echo 'class="c-gnav__link c-gnav__link:is-current"';
                        } else {
                            echo 'class="c-gnav__link"';
                        }?>
                        href="<?php echo home_url('/inquiry');?>">お問い合わせ
                    </a>
                </li>
            </ul>
        </nav>
    </header>
    <main>
        <?php echo get_page_title();
        if (!is_front_page()) {
            echo get_breadcrumb();
        }
