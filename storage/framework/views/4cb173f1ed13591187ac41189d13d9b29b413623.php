<?php $__env->startSection('page_title', 'Visualizza'); ?>

<?php $__env->startSection('content'); ?>
  <div class="container mt-5">
    <h1>Prodotto: <?php echo e($product->id); ?></h1>
    <ul>
      <li>Nome: <?php echo e($product->name); ?></li>
      <li>Descrizione: <?php echo e($product->description); ?></li>
      <li>Prezzo: <?php echo e($product->price); ?></li>
      <li>Prezzo scontato: <?php echo e($product->sale_price); ?></li>
      <li>Categoria: <?php echo e($product->category); ?></li>
    </ul>
    <a href="<?php echo e(route('products.index')); ?>" class="btn btn-primary">Torna alla Lista Prodotti</a>
  </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/Es_5_9_Luglio_products/resources/views/products/show.blade.php ENDPATH**/ ?>