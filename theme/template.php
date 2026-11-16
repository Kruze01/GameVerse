<!--
/**
 * @filename        template.php
 * @author          Kruze
 * @creationDate    November 24, 2025
 */
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title?></title>
    <link rel="stylesheet" type="text/css" href="<?php echo $cssDirectory ?>">
    <style>
        <?php echo $embeddedCSS ?>
    </style>
    <script>
        <?php echo $embeddedJs ?>
    </script>
</head>
<body>
    <?php echo $content ?>
</body>
</html>