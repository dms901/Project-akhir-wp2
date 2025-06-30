<style>
    table {
        border-collapse: collapse;
        width: 100%;
        border: 1px solid #ccc;
    }

    table tr td {
        padding: 6px;
        font-weight: normal;
        border: 1px solid #ccc;
    }

    table th {
        border: 1px solid #ccc;
    }
</style>
<table>
    <!-- <tr>
        <td align="center">
            <img src="<?php echo e(asset('images/header.png')); ?>" width="50%">
        </td>
    </tr> -->
    <tr>
        <td align="left">
            Perihal : <?php echo e($judul); ?> <br>
            Tanggal Awal: <?php echo e($tanggalAwal); ?> s/d Tanggal Akhir: <?php echo e($tanggalAkhir); ?>

        </td>
    </tr>
</table>
<p></p>
<table>
    <thead>
        <tr>
            <th>No</th>
            <th>Email</th>
            <th>Nama</th>
            <th>Role</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $cetak; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td> <?php echo e($loop->iteration); ?> </td>
            <td> <?php echo e($row->nama); ?> </td>
            <td> <?php echo e($row->email); ?> </td>
            <td>
                <?php if($row->role == 1): ?>
                Super Admin
                <?php elseif($row->role == 0): ?>
                Admin
                <?php endif; ?>
            </td>
            <td>
                <?php if($row->status ==1): ?>
                Aktif
                <?php elseif($row->status ==0): ?>
                NonAktif
                <?php endif; ?>
            </td>
        </tr>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </tbody>
</table>

<script>
    window.onload = function() {
        printStruk();
    }

    function printStruk() {
        window.print();
    }
</script><?php /**PATH C:\laragon\www\TokoOnlineProject\resources\views/backend/v_user/cetak.blade.php ENDPATH**/ ?>