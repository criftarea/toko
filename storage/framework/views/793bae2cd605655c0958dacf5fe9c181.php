
	<?php $__env->startSection('konten2'); ?>
  <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Tambah Produk</title>
  <style>
    .btn-custom-save {
      background-color: green;
      color: white;
      width: 100%;
      margin-bottom: 10px;
    }
    .btn-custom-reset {
      background-color: blue;
      color: white;
      width: 100%;
    }
    .btn-back {
      position: absolute;
      top: 20px;
      right: 20px;
      background-color: gray;
      color: white;
      border: none;
      padding: 5px 10px;
      border-radius: 50%;
    }
    .btn-back i {
      font-size: 16px;
    }
  </style>
</head>
<body>
  <div class="container mt-5 position-relative">
    <h2>Edit Data Produk</h2>
   
<form method="POST" action="<?php echo e(route('toko.simpan_edit', $toko->id)); ?>">
    <?php echo csrf_field(); ?> 
    <?php echo method_field('PUT'); ?>
    
    <div class="form-group">
      <label for="nama_toko">Nama Toko</label>
    <input type="text" name="nama_toko" class="form-control" required value="<?php echo e(old('nama_toko', $toko->nama_toko)); ?>">
    </div>
    <div class="form-group">
      <label for="alamat">Alamat Toko</label>
    <textarea name="alamat" class="form-control"><?php echo e(old('alamat', $toko->alamat)); ?></textarea>
    </div>
    <div class="form-group">
        <label for="nomor_telepon">Nomor Telepon</label>
      <textarea name="nomor_telepon" class="form-control"><?php echo e(old('nomor_telepon', $toko->nomor_telepon)); ?></textarea>
      </div>
  <br><br>
  <button type="submit" 
  class="btn btn-success btn-sm mb-2" title="Simpan Data">
  <i class="fa fa-check"></i> Simpan</button>
  <a href="<?php echo e(route('toko.tampil')); ?>" class="btn btn-primary btn-sm mb-2" title="Kembali">
    <i class="fa fa-arrow-left"></i> Kembali</a>
</form>
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.menu2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\toko\resources\views/toko/edit.blade.php ENDPATH**/ ?>