<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $__env->yieldContent('title'); ?></title>
    <link rel="stylesheet" href="<?php echo e(asset('public/css/bootstrap.min.css')); ?>">
    <script src="<?php echo e(asset('public/js/bootstrap.bundle.js')); ?>" ></script>
</head>
<body>

<script src="<?php echo e(asset('public/js/vue.global.js')); ?>"> </script>
<?php echo $__env->make('layout.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->yieldContent('main'); ?>
</body>
</html>
<?php /**PATH C:\OSPanel\domains\ComicsMag\resources\views/layout/app.blade.php ENDPATH**/ ?>