<?php if (isset($component)) { $__componentOriginal23a33f287873b564aaf305a1526eada4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal23a33f287873b564aaf305a1526eada4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layout','data' => ['title' => 'Daftar Mata Kuliah']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Daftar Mata Kuliah']); ?>
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold">Daftar Mata Kuliah</h1>
        <a href="<?php echo e(route('courses.create')); ?>" class="bg-blue-600 text-white px-4 py-2 rounded">Tambah Mata Kuliah</a>
    </div>

    <table class="w-full bg-white rounded shadow overflow-hidden">
        <thead class="bg-gray-200 text-left">
            <tr>
                <th class="p-3">Kode</th>
                <th class="p-3">Nama Mata Kuliah</th>
                <th class="p-3">SKS</th>
                <th class="p-3">Dosen</th>
                <th class="p-3">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr class="border-b">
                <td class="p-3"><?php echo e($course->code); ?></td>
                <td class="p-3">
                    <a href="<?php echo e(route('courses.show', $course->id)); ?>" class="text-blue-600 font-semibold hover:underline">
                        <?php echo e($course->name); ?>

                    </a>
                </td>
                <td class="p-3"><?php echo e($course->sks); ?></td>
                <td class="p-3"><?php echo e($course->lecturer->name ?? 'N/A'); ?></td>
                <td class="p-3 space-x-2 flex items-center">
                    <a href="<?php echo e(route('courses.show', $course->id)); ?>" class="text-gray-600 hover:underline">Detail</a>
                    <form action="<?php echo e(route('courses.destroy', $course->id)); ?>" method="POST" class="inline" onsubmit="return confirm('Hapus?')">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
                        <button type="submit" class="text-red-600 hover:underline">Hapus</button>
                    </form>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal23a33f287873b564aaf305a1526eada4)): ?>
<?php $attributes = $__attributesOriginal23a33f287873b564aaf305a1526eada4; ?>
<?php unset($__attributesOriginal23a33f287873b564aaf305a1526eada4); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal23a33f287873b564aaf305a1526eada4)): ?>
<?php $component = $__componentOriginal23a33f287873b564aaf305a1526eada4; ?>
<?php unset($__componentOriginal23a33f287873b564aaf305a1526eada4); ?>
<?php endif; ?>
<?php /**PATH E:\SEMESTER 5\proweb\FIX-WEEK 3\LMS-Broken\resources\views/courses/index.blade.php ENDPATH**/ ?>