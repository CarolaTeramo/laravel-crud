<?php $__env->startSection('page_title', 'Visualizza'); ?>

<?php $__env->startSection('content'); ?>
  <div class="container mt-5">
    <h1>Prodotto: <?php echo e($product->id); ?></h1>
  </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/Es_5_9_Luglio_products/resources/views/show.blade.php ENDPATH**/ ?>