 
<?php $__env->startSection('content'); ?>
<!-- contentAwal -->
 
<div class="row m-l-5">
     
 <?php $__currentLoopData = $keranjang; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="card mb-3 m-10" style="max-width: 596px;">
        <div class="row no-gutters">
            <div class="col-md-4">
                <img src="<?php echo e(asset('storage/img-produk/' . $row->produk->foto)); ?>" class="card-img" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title"><?php echo e($row->produk->nama_produk); ?></h5>
                    <p class="card-text"><?php echo e(strip_tags($row->produk->detail)); ?></p>
                    <p class="card-text">
                        <small class="text-danger"> Rp. <?php echo e(number_format($row->produk->harga, 0, ',', '.')); ?></small>
                        <div>
                            <button type="button" class="btn btn-primary m-10 m-l-20">Beli</button>
                        <form method="POST" action="<?php echo e(route('backend.keranjang.destroy', $row->id)); ?>" style="display: inline-block;">
                                        <?php echo method_field('delete'); ?>
                                        <?php echo csrf_field(); ?>
                                        <button type="submit" class="btn btn-danger show_confirm" data-konf-delete="<?php echo e($row->produk->nama_produk); ?>" title='Hapus Data'>
                                            <i class="fas fa-trash"></i> Hapus</button>
                                    </form>
                        </div>
                        
                    </p>
                </div>
            </div>
        </div>
    </div>
     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>


<!-- contentAkhir -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.v_layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\TokoKendaraanProject\resources\views/backend/v_keranjang/index.blade.php ENDPATH**/ ?>