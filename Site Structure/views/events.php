<div class="events">
    <div class="row">
        <?php
            $i = 0;
            $query = new EntityFieldQuery();

            $query->entityCondition('entity_type', 'node')
                ->entityCondition('bundle','event')
                ->propertyCondition('status', 1, '=');
            $result = $query->execute();
            foreach($result as $val) {
                $nids = array_keys($val);
                foreach($nids as $val2) {
                    $i++;
                    $node = node_load($val2);
                    $title = $node->title;
                    $body = $node->body['en'][0]['value'];
                    $startDate = $node->field_start_date['und'][0]['value'];
                    $endDate = $node->field_end_date['und'][0]['value'];
        ?>
        <div class="columns medium-4 event">
            <div class="event-title">
                <h3><?php print $title; ?></h3>
            </div>
            <div class="event-body">
                <p><?php print $body; ?></p>
            </div>
        </div>
        <?php
                }
            }
        ?>
    </div>
</div>