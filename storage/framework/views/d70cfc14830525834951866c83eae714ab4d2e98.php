<?php $__env->startSection('page_title', 'crea'); ?>


<?php $__env->startSection('content'); ?>
  <div class="container mt-5">

    <h1>Inserisci un nuovo prodotto</h1>
    <form method="post" action="<?php echo e(route('store')); ?>">
    <div class="form-group">
      <label for="name">Nome prodotto</label>
      <input type="text" class="form-control" placeholder="Inserisci il nome">
    </div>
    <div class="form-group">
      <label for="description">Descrizione prodotto</label>
      <textarea name="description" class="form-control" placeholder="Inserisci la descrizione" rows="8" cols="80"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
  </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/Es_5_9_Luglio_products/resources/views/create.blade.php ENDPATH**/ ?>