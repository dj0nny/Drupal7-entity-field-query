<header role="banner" class="l-header">
    <div class="navigation">
        <div class="row">
            <div class="columns medium-3">
            <?php if ($logo): ?>
            <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home">
                <img id="logo" src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
            </a>
            <?php endif; ?>    
            </div>
            <div class="columns medium-9">
                <div class="navigation-menu">
                    <?php 
                        $main_menu_tree = menu_tree(variable_get('menu_main_link_source', 'main-menu'));
                        print drupal_render($main_menu_tree);
                    ?>
                </div>
            </div>
        </div>  
    </div>
</header>
<?php include('slider.php'); ?>