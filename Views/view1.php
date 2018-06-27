<?php
    $query = new EntityFieldQuery(); // Create a new EntityFieldQuery object named "$query"

    $query->entityCondition('entity_type', 'node') // I want to extract a node
        ->entityCondition('bundle', 'basic_page') // The content type must be "basic_page"
        ->propretyCondition('status', 1, '='); // The element must be published

    $result = $query->execute(); // Execute the query
    foreach($result as $val) { // Looping for fetching the results
        $items_nids = array_keys($val); // fetch one result
        foreach($items_nids as $val2) { // lopping throught its fields
            $current_node = node_load($val2); // I load the node
            $bodyText = strip_tags($current_node->body['und'][0]['value']); // I fetch the body of the node
        }
    }
?>