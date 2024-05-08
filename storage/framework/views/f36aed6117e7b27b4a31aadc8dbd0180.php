
<?php $__env->startSection('pageTitle', isset($pageTitle) ? $pageTitle : 'page title here'); ?>
<?php $__env->startSection('content'); ?>
    content here...
<?php $__env->stopSection(); ?>
<?php echo $__env->make('back.layout.auth-layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\HP\bryan\resources\views/example-auth.blade.php ENDPATH**/ ?>