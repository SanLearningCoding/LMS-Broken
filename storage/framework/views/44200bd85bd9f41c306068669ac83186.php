<?php if (isset($component)) { $__componentOriginal23a33f287873b564aaf305a1526eada4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal23a33f287873b564aaf305a1526eada4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layout','data' => ['title' => 'Tambah Pengguna']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Tambah Pengguna']); ?>
    <div class="bg-white p-6 rounded shadow max-w-lg mx-auto">
        <h1 class="text-2xl font-bold mb-4">Tambah Pengguna</h1>
        <form action="<?php echo e(route('users.store')); ?>" method="POST" class="space-y-4">
            <?php echo csrf_field(); ?>
            <div>
                <label class="block mb-1 font-medium">Nama</label>
                <input type="text" name="name" class="w-full border rounded p-2" required>
            </div>
            <div>
                <label class="block mb-1 font-medium">Email</label>
                <input type="email" name="email" class="w-full border rounded p-2" required>
            </div>
            <div>
                <label class="block mb-1 font-medium">Password</label>
                <input type="password" name="password" class="w-full border rounded p-2" required>
            </div>
            <div>
                <label class="block mb-1 font-medium">NIM / NIP</label>
                <input type="text" name="nim_nip" class="w-full border rounded p-2">
            </div>
            <div class="flex justify-end space-x-2">
                <a href="<?php echo e(route('users.index')); ?>" class="px-4 py-2 border rounded">Batal</a>
                <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Simpan</button>
            </div>
        </form>
    </div>
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
<?php /**PATH E:\SEMESTER 5\proweb\FIX-WEEK 3\LMS-Broken\resources\views/users/create.blade.php ENDPATH**/ ?>