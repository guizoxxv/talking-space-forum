<?php require('core/init.php'); ?>

<?php

  // Get template & assign vars
  $template = new Template('templates/frontpage.php');

  // Assign vars
  $template->heading = 'This is the template heading';

  // Display template
  echo $template;

?>
