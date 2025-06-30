
<?php $__env->startSection('content'); ?>
<!-- contentAwal -->

<!-- <h3> <?php echo e($judul); ?></h3>
<p>
    Selamat Datang, <b><?php echo e(Auth::user()->nama); ?></b> pada aplikasi Toko Online dengan hak akses yang anda miliki sebagai
    <b>
        <?php if(Auth::user()->role ==1): ?>
        Super Admin
        <?php elseif(Auth::user()->role ==0): ?>
        Admin
        <?php endif; ?>
    </b>
    ini adalah halaman utama dari aplikasi ini.
</p> -->

<h3> <?php echo e($judul); ?> </h3>
<p>
    Selamat Datang, <b>Nama_User</b> pada aplikasi Toko Online dengan hak akses yang anda miliki sebagai <b>Role_User</b> ini adalah halaman utama dari aplikasi ini.


    <!-- <div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title"> <?php echo e($judul); ?> </h5>

                Selamat Datang, <b><?php echo e(Auth::user()->nama); ?></b> pada aplikasi Toko Online dengan hak akses yang anda miliki sebagai
                <b>
                    <?php if(Auth::user()->role ==1): ?>
                    Super Admin
                    <?php elseif(Auth::user()->role ==0): ?>
                    Admin
                    <?php endif; ?>
                </b>
                ini adalah halaman utama dari aplikasi ini.
            </div>
        </div>
    </div>
</div> -->

    <!-- contentAkhir -->
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.v_layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laravel-10\TokoOnline\resources\views/backend/v_beranda/index.blade.php ENDPATH**/ ?>