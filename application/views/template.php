<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html>
<head>
    <title><?php echo $this->template->title->default("Default title"); ?></title>
    <meta charset="utf-8">
    <meta name="description" content="<?php echo $this->template->description; ?>">
    <meta name="author" content="REKRUT">
    <?php echo $this->template->meta; ?>
    <link rel="stylesheet" href="assets/semantic/semantic.min.css">
    <?php echo $this->template->stylesheet; ?>
</head>
<body>

  <?php
    // This is the main content partial
    echo $this->template->content;
  ?>


<script src="assets/js/jquery-3.2.1.min.js"></script>
<script src="assets/semantic/semantic.min.js"></script>
<?php echo $this->template->javascript; ?>

</body>
</html>