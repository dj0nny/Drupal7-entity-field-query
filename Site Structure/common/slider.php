<div id="slider" class="owl-carousel">
    <?php
       $length = sizeof($node->field_slider['und']);
        for($i = 0; $i < $length; $i++) {
            $url = $node->field_slider['und'][$i]['uri'];
            $url = image_style_url('slide', $url);
    ?>
        <div class="slide">
            <img src="<?php print $url; ?>" />
            <div class="text-slide-container">
                <div class="text-slide">
                    <?php print $node->field_slider['und'][$i]['title']?>
                </div>
            </div>    
        </div>
    <?php
        }
    ?>
</div>

