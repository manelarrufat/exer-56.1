<?php
/**
 * breadcrumb.tpl.php
 */

$breadcrumb = $variables['breadcrumb'];
$breadcrumb_separator = $variables['breadcrumb_separator'];

?>

<?php if(!empty($breadcrumb)): ?>
  <div class="breadcrumb"><?php print implode(' ' . $breadcrumb_separator . ' ', $breadcrumb); ?>
  </div>
<?php endif; ?>
