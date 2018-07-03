<?php require_once('common/header.php'); ?>
<?php if ($tabs): ?><div class="tabs primary"><?php print render($tabs); ?></div><?php endif; ?>

<?php
    $nid = arg(1);
    $node = node_load($nid);
    $taxpage = $node->field_structure['und'][0]['tid'];
?>

<?php
    switch ($taxpage) {
        case '1':
            include("home.php");
            break;
        
        default:
            # code...
            break;
    }
?>
