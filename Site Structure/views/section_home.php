<div class="row">
<?php
    $i = 0;
    $query = new EntityFieldQuery();
    $query->entityCondition('entity_type', 'node')
        ->entityCondition('bundle', 'section')
        ->propertyCondition('status', 1, '=')
        ->fieldOrderBy('field_order', 'value', 'ASC');
    
    $result = $query->execute();
    foreach($result as $val) {
        $nids = array_keys($val);
        foreach($nids as $val2){
            $i++;
            $current_node = node_load($val2);
            $alias = drupal_get_path_alias('node/'.$val2);
            $title = strip_tags($current_node->title);
?>
            <div class="columns medium-4">
                <div class="section">
                    <div class="section-title">
                        <a href="<?php print $alias; ?>"><?php print $title ?></a>
                    </div>
                </div>
            </div>
<?php
        }
    }
?>
</div>