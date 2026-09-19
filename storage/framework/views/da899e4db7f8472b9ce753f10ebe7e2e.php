<?php if (isset($component)) { $__componentOriginal23a33f287873b564aaf305a1526eada4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal23a33f287873b564aaf305a1526eada4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layout','data' => ['title' => 'Daftar Pengguna']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Daftar Pengguna']); ?>
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold">Daftar Pengguna</h1>
        <a href="<?php echo e(route('users.create')); ?>" class="bg-blue-600 text-white px-4 py-2 rounded">Tambah Pengguna</a>
    </div>

    <table class="w-full bg-white rounded shadow overflow-hidden">
        <thead class="bg-gray-200 text-left">
            <tr>
                <th class="p-3">Nama</th>
                <th class="p-3">Email</th>
                <th class="p-3">NIM/NIP</th>
                <th class="p-3">Role</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr class="border-b">
                <td class="p-3"><?php echo e($user->name); ?></td>
                <td class="p-3"><?php echo e($user->email); ?></td>
                <td class="p-3"><?php echo e($user->nim_nip ?? '-'); ?></td>
                <td class="p-3"><span class="px-2 py-1 bg-gray-200 rounded text-sm"><?php echo e($user->role); ?></span></td>
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
<?php /**PATH E:\SEMESTER 5\proweb\FIX-WEEK 3\LMS-Broken\resources\views/users/index.blade.php ENDPATH**/ ?>