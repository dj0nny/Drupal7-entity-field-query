<div class="row">
    <div id="gallery">
        <?php
            $cnode = node_load(arg(1));
            $x = 0;
            foreach($cnode->field_gallery['und'] as $val) {
                $url = $cnode->field_gallery['und'][$x]['uri'];
                $img_medium = image_style_url('medium', $url);
                $img_large = image_style_url('large', $url);
        ?>
                <div class="columns medium-4 text-center" style="margin-bottom:25px;">
                    <a href="<?php print $img_large; ?>">
                        <img src="<?php print $img_medium; ?>" >
                    </a>
                </div>
        <?php
                $x++;
            }
        ?>
    </div>
</div>