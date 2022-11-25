<?php $__env->startSection('title'); ?>
    Главная страница
<?php $__env->stopSection(); ?>
<?php $__env->startSection('main'); ?>
    <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="10000" style="background-size: cover; height: 90vh;">
                <img src="https://i.imgur.com/IgkYQyj.jpg" class="d-block w-100 img-fluid" alt="..." style="object-fit: cover">
                <div class="carousel-caption d-none d-md-block">
                    <h5>First slide label</h5>
                    <p>Some representative placeholder content for the first slide.</p>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="2000" style="background-size: cover; height: 90vh;">
                <img src="https://i.pinimg.com/originals/02/33/cb/0233cb3a45f765cc0910968ff006e827.png" class="d-block w-100 img-fluid" alt="..." style="object-fit: cover">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Second slide label</h5>
                    <p>Some representative placeholder content for the second slide.</p>
                </div>
            </div>
            <div class="carousel-item" style="background-size: cover; height: 90vh;">
                <img src="https://i.imgur.com/a0ycxxA.jpg" class="d-block w-100 h-100 img-fluid" class="d-block w-100 img-fluid" alt="..."  style="object-fit: cover">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Third slide label</h5>
                    <p>Some representative placeholder content for the third slide.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OSPanel\domains\ComicsMag\resources\views/welcome.blade.php ENDPATH**/ ?>