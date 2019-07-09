<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title><?php echo $__env->yieldContent('page_title', 'Mia Crud'); ?></title>
    <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">
  </head>

  <body>

    <?php echo $__env->make('includes.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->yieldContent('content'); ?>


    <script src="<?php echo e(asset('js/app.js')); ?>"></script>

  </body>
</html>
<?php /**PATH /Applications/MAMP/htdocs/Es_5_9_Luglio_products/resources/views/layouts/base.blade.php ENDPATH**/ ?>