

<?php if (isset($component)) { $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54 = $component; } ?>
<?php $component = App\View\Components\AppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\AppLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('header', null, []); ?> 
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            <?php echo e(__('Dashboard')); ?>

        </h2>
     <?php $__env->endSlot(); ?>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                                <tr>
                                    <th class="p-4">Full Name</th>
                                    <td class="p-4"><?php echo e($user->fullName); ?></td>
                                </tr>
                                <tr>
                                    <th class="p-4">Email</th>
                                    <td class="p-4"><?php echo e($user->email); ?></td>
                                </tr>
                                <tr>
                                    <th class="p-4">Username</th>
                                    <td class="p-4"><?php echo e($user->username); ?></td>
                                </tr>
                                <tr>
                                    <th class="p-4">Address</th>
                                    <td class="p-4"><?php echo e($user->address); ?></td>
                                </tr>
                                <tr>
                                    <th class="p-4">Phone Number</th>
                                    <td class="p-4"><?php echo e($user->phoneNumber); ?></td>
                                </tr>
                                <tr>
                                    <th class="p-4">Birthdate</th>
                                    <td class="p-4"><?php echo e($user->birthdate); ?></td>
                                </tr>
                                <tr>
                                    <th class="p-4">Agama</th>
                                    <td class="p-4"><?php echo e($user->agama); ?></td>
                                </tr>
                                <tr>
                                    <th class="p-4">Gender</th>
                                    <td class="p-4"> <?php if(   $user->jenisKelamin == 0 ): ?>
                                        <span>Pria</span>  
                                      <?php else: ?>
                                          <span>Wanita</span>
                                      <?php endif; ?></td>
                                </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $component = $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php /**PATH C:\Users\Lenovo\Documents\Pertemuan1\resources\views/user/infoPengguna.blade.php ENDPATH**/ ?>