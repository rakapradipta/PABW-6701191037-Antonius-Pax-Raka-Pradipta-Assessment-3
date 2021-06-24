<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<section id="hero" class="d-flex align-items-center mt-5">
    <div class="container d-flex flex-column align-items-center justify-content-center" data-aos="fade-up">
        <h1>WELCOME TO GERALD WASH</h1>
        <img src="<?php echo base_url('assets/img/images.jpg'); ?>" class="img-fluid hero-img" alt="" data-aos="zoom-in" data-aos-delay="150">
    </div>
</section>
<?= $this->endSection(); ?>