
	<?php $__env->startSection('konten2'); ?>
<br>
<h2>Data Produk</h2>
<a href="<?php echo e(route('toko.tambah')); ?>" title="Tambah Produk" 
class="btn btn-primary btn-sm mb-2">
<i class="fa fa-plus"></i> Tambah Produk</a>
<table class="table table-bordered table-hover" id="example"> 
    <thead class="thead-dark">
        <tr>
            <th>No</th>
            <th>Nama Toko</th>
            <th>Alamat</th>
            <th>Nomor Telepon</th>
            <th>Aksi</th>
        </tr>
    </thead>
<tbody>
        <?php $__currentLoopData = $toko; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
        <td><?php echo e($loop->iteration); ?></td>
        <td><?php echo e($d->nama_toko); ?></td>
        <td><?php echo e($d->alamat); ?></td>
        <td><?php echo e($d->nomor_telepon); ?></td>
        <td>
            <form onsubmit="return confirm('Yakin hapus data?');" method="POST" action="<?php echo e(route('toko.hapus', $d->id)); ?>">
                <?php echo csrf_field(); ?>
                <?php echo method_field('DELETE'); ?>
                <a href="<?php echo e(route('toko.edit', $d->id)); ?>" 
                    class="btn btn-success btn-sm mb-2" title="Edit Data">
                    <i class="fa fa-edit"></i> Edit</a>
                <button type="submit" class="btn btn-danger btn-sm mb-2" title="Hapus Data">
                    <i class="fa fa-trash"></i> Hapus</button>
            </form>
        </td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</tbody>
</table>
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


<?php if(session('status')): ?>
	<script>
		Swal.fire({
		title: "<?php echo e(session('status')['judul']); ?>",
		text: "<?php echo e(session('status')['pesan']); ?>",
		icon: "<?php echo e(session('status')['icon']); ?>"
		});
	</script>
	<?php endif; ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.menu2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\toko\resources\views/toko/tampil.blade.php ENDPATH**/ ?>