

<?php if (isset($component)) { $__componentOriginal1f9e5f64f242295036c059d9dc1c375c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal1f9e5f64f242295036c059d9dc1c375c = $attributes; } ?>
<?php $component = App\View\Components\Layout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Layout::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <div class="container mt-5">
        <div class="card">
            <h3 class="card-header">Halaman Tiket</h3>
            <div class="card-body">
                <div class="col-sm-7">
                    <a href="/tiket" class="btn btn-primary">Tambah tiket</a>
                </div>
                <table class="table table-bordered table-striped table-hover" id="myTable">
                    <thead>
                        <tr>
                            <th>Nama Penumpang</th>
                            <th>Tanggal Keberangkatan</th>
                            <th>Asal</th>
                            <th>Tujuan</th>
                            <th>Nomor Kursi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="text-center">
                            <?php $__currentLoopData = $tiket; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $penumpang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($penumpang->user->name); ?></td>
                                <td><?php echo e(\Carbon\Carbon::parse($penumpang['tanggal_keberangkatan'])->format('d M Y H:i')); ?></td>
                                <td><?php echo e($penumpang['asal']); ?></td>
                                <td><?php echo e($penumpang['tujuan']); ?></td>
                                <td><?php echo e($penumpang['no_kursi']); ?></td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal1f9e5f64f242295036c059d9dc1c375c)): ?>
<?php $attributes = $__attributesOriginal1f9e5f64f242295036c059d9dc1c375c; ?>
<?php unset($__attributesOriginal1f9e5f64f242295036c059d9dc1c375c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal1f9e5f64f242295036c059d9dc1c375c)): ?>
<?php $component = $__componentOriginal1f9e5f64f242295036c059d9dc1c375c; ?>
<?php unset($__componentOriginal1f9e5f64f242295036c059d9dc1c375c); ?>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\pbw2-semester3\resources\views/result_tiket.blade.php ENDPATH**/ ?>