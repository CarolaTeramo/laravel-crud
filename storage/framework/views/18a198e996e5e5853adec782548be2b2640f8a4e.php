<?php $__env->startSection('page_title', 'crea'); ?>


<?php $__env->startSection('content'); ?>
  <div class="container mt-5">

    <h1>Modifica le caratteristiche del prodotto</h1>
    
    

    <form method="post" action="<?php echo e(route('products.update', $product->id)); ?>">
      
      <?php echo method_field('PUT'); ?>
      
      <?php echo csrf_field(); ?>
    <div class="form-group">
      <label for="name">Nome prodotto</label>
      <input type="text" class="form-control" name="name" placeholder="Inserisci il nome" value="<?php echo e(old('name', $product->name)); ?>">
      <?php if ($errors->has('name')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('name'); ?>
        <div class="alert alert-danger"><?php echo e($message); ?></div>
      <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
    </div>
    <div class="form-group">
      <label for="description">Descrizione prodotto</label>
      <textarea name="description" class="form-control" placeholder="Inserisci la descrizione" rows="8" cols="80"><?php echo e(old('description', $product->description)); ?></textarea>
      <?php if ($errors->has('description')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('description'); ?>
        <div class="alert alert-danger"><?php echo e($message); ?></div>
      <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
    </div>
    <div class="form-group">
      <label for="price">Prezzo prodotto</label>
      <input type="text" class="form-control" name="price" placeholder="Inserisci il prezzo" value="<?php echo e(old('price', $product->price)); ?>">
      <?php if ($errors->has('price')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('price'); ?>
        <div class="alert alert-danger"><?php echo e($message); ?></div>
      <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
    </div>
    <div class="form-group">
      <label for="sale_price">Prezzo scontato</label>
      <input type="text" class="form-control" name="sale_price" placeholder="Inserisci il prezzo scontato" value="<?php echo e(old('sale_price', $product->sale_price)); ?>">
      <?php if ($errors->has('sale_price')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('sale_price'); ?>
        <div class="alert alert-danger"><?php echo e($message); ?></div>
      <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
    </div>
    <div class="form-group">
      <label for="sale_price">Categoria</label>
      <input type="text" class="form-control" name="category" placeholder="Inserisci la categoria" value="<?php echo e(old('category', $product->category)); ?>">
      <?php if ($errors->has('category')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('category'); ?>
        <div class="alert alert-danger"><?php echo e($message); ?></div>
      <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
  </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/Es_5_9_Luglio_products/resources/views/products/edit.blade.php ENDPATH**/ ?>