<?php $__env->startSection('content'); ?>
  <div class="container mt-5">
    <h1>Tutti i prodotti</h1>
    <a href="<?php echo e(route('create')); ?>" class="btn btn-success">Aggiungi un nuovo prodotto</a>
    <table class="table">
  <thead>
    <tr>
      <th >id</th>
      <th >Nome</th>
      <th >Descrizione</th>
      <th >Prezzo</th>
      <th >Prezzo scontato</th>
      <th >Categoria</th>
    </tr>
  </thead>
  <tbody>
    <?php $__empty_1 = true; $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
      <tr>
        <th ><?php echo e($product->id); ?></th>
        <td><?php echo e($product->name); ?></td>
        <td><?php echo e($product->description); ?></td>
        <td><?php echo e($product->price); ?></td>
        <td><?php echo e($product->sale_price); ?></td>
        <td><?php echo e($product->category); ?></td>
      </tr>

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
      <p>Non ci sono prodotti</p>
    <?php endif; ?>

  </tbody>
</table>

  </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/Es_5_9_Luglio_products/resources/views/index.blade.php ENDPATH**/ ?>