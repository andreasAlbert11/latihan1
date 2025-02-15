<?php

/** @var yii\web\View $this */

// $this->title = 'My Yii Application';

use yii\helpers\Url;

?>

<style>


    /* Hero section */
    .hero {
        text-align: center;
        color: white;
        height: 300px;
        background: url('https://asset.kompas.com/crops/g0rS3FOsAHSYUs7U87EI_ir4HTY=/0x0:1350x900/750x500/data/photo/2021/11/29/61a4b74700ac7.jpeg') center/cover no-repeat;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .hero h1,
    .hero h4 {
        text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);
    }

    /* Gaya tombol dan input */
    .btn-warning,
    .btn-danger {
        margin: 0 5px;
    }

    .form-control {
        width: 80%;
        margin: 0 10px;
    }

    .img-fluid {
        border-radius: 8px;
        margin-bottom: 10px;
    }
</style>

<div class="hero">
    <div style="padding: 30px;">
        <h1 class="mb-3">Selamat Datang di Nero Star</h1>
        <h4 class="mb-4">Gaya Boleh Sama, Kualitas Tetap Berbeda.</h4>

        <div class="d-flex justify-content-center">

            <a href="<?= Url::to(['site/signup']) ?>" class="btn btn-warning">Login/SignUp</a>



            <input type="text" class="form-control" placeholder="Cari kategori pakaian...">
            <button class="btn btn-warning">Cari</button>
        </div>
    </div>
</div>

<div class="container my-5">
    <h2 class="text-center mb-4">Promo Minggu Ini</h2>
    <div class="row text-center">
        <div class="col-md-4">
            <img src="https://hariomstailor.com/wp-content/uploads/2024/04/Jas-Pria-terang-berwarna-putih-abu-abu.png" class="img-fluid">
            <p>Jas</p>
        </div>
        <div class="col-md-4">
            <img src="https://hariomstailor.com/wp-content/uploads/2024/04/Jas-Pria-terang-berwarna-putih-abu-abu.png" class="img-fluid">
            <p>Jas</p>
        </div>
        <div class="col-md-4">
            <img src="https://hariomstailor.com/wp-content/uploads/2024/04/Jas-Pria-terang-berwarna-putih-abu-abu.png" class="img-fluid">
            <p>Jas</p>
        </div>
    </div>
</div>

<?php
$successMessage = Yii::$app->session->getFlash('success');
if ($successMessage): ?>
    <script>
        Swal.fire({
            title: 'Berhasil!',
            text: '<?= $successMessage ?>',
            icon: 'success',
            confirmButtonColor: '#3085d6',
            confirmButtonText: 'OK',
            timer: 3000,
            timerProgressBar: true
        }).then(() => {
            <?php Yii::$app->session->remove('success'); ?>
        });
    </script>
<?php endif; ?>