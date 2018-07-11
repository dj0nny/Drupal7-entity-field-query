<?php
    $i = 0;
    $query = new EntityFieldQuery(); 

    $query->entityCondition('entity_type', 'node') 
        ->entityCondition('bundle', 'structure') 
        ->propertyCondition('status', 1, '='); 
    $result = $query->execute(); 
    foreach($result as $val) { 
        $items_nids = array_keys($val);
        foreach($items_nids as $val2) { 
            $i++;
            $current_node = node_load($val2);
            $img_url = $current_node->field_focus_image['und'][0]['uri'];
            $img_url = image_style_url('large',$img_url);
            $focus_text = $current_node->field_focus_text['und'][0]['value'];

            if(($i % 2) == 0) {
?>
                <div class="row structure">
                    <div class="columns medium-6 text-center">
                        <img src="<?php print $img_url; ?>" />
                    </div>
                    <div class="columns medium-6 text-center">
                        <div class="focus-text">
                            <?php print $focus_text; ?>
                        </div>
                    </div>
                </div>
<?php
            } else {
?>
                <div class="row structure">
                    <div class="columns medium-6 text-center">
                        <div class="focus-text">
                            <?php print $focus_text; ?>
                        </div>
                    </div>
                    <div class="columns medium-6 text-center">
                        <img src="<?php print $img_url; ?>" />
                    </div>
                </div>
<?php
            }
?>
<?php
        }
    }
?>