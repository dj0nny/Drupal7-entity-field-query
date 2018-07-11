<div class="page-container">
    <div class="page-title">
        <div class="row">
            <div class="columns medium-12">
                <h1><?php print $title; ?></h1>
            </div>
        </div>
    </div>

    <div class="page-body">
        <?php include('views/structures.php')?>
    </div>
    <?php
        $block = block_load('block', '2');
        $output = drupal_render(_block_get_renderable_array(_block_render_blocks(array($block))));
        print $output;
    ?>
    <div class="code">
        <?php include('views/code_section.php'); ?>
    </div>
</div>