<?php $__env->startSection('page_title', 'crea'); ?>


<?php $__env->startSection('content'); ?>
  <div class="container mt-5">

    <h1>Inserisci un nuovo prodotto</h1>
    <form method="post" action="<?php echo e(route('products.update', $product->id)); ?>">
      
      <?php echo method_field('PUT'); ?>
      
      <?php echo csrf_field(); ?>
    <div class="form-group">
      <label for="name">Nome prodotto</label>
      <input type="text" class="form-control" name="name" placeholder="Inserisci il nome" value="<?php echo e($product->name); ?>">
    </div>
    <div class="form-group">
      <label for="description">Descrizione prodotto</label>
      <textarea name="description" class="form-control" placeholder="Inserisci la descrizione" rows="8" cols="80"><?php echo e($product->description); ?></textarea>
    </div>
    <div class="form-group">
      <label for="price">Prezzo prodotto</label>
      <input type="text" class="form-control" name="price" placeholder="Inserisci il prezzo" value="<?php echo e($product->price); ?>">
    </div>
    <div class="form-group">
      <label for="sale_price">Prezzo scontato</label>
      <input type="text" class="form-control" name="sale_price" placeholder="Inserisci il prezzo scontato" value="<?php echo e($product->sale_price); ?>">
    </div>
    <div class="form-group">
      <label for="sale_price">Categoria</label>
      <input type="text" class="form-control" name="category" placeholder="Inserisci la categoria" value="<?php echo e($product->category); ?>">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
  </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/Es_5_9_Luglio_products/resources/views/edit.blade.php ENDPATH**/ ?>