<div class="row">
    <?php
        $i = 0;
        $query = new EntityFieldQuery();
        $query->entityCondition('entity_type', 'node')
            ->entityCondition('bundle', 'section')
            ->propertyCondition('status', 1, '=');

        $results = $query->execute();
        foreach($results as $val) {
            $nids = array_keys($val);
            foreach($nids as $val2) {
                $i++;
                $current_node = node_load($val2);
                $code = $current_node->field_code['und'][0]['value'];
    ?>
                <div class="columns medium-12">
                    <?php print $code; ?>
                </div>
    <?php
            }
        }
    ?>
</div>