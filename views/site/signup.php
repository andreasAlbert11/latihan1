<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */

/** @var app\models\LoginForm $model */

?>

<div class="container">

    <h1>SignUp</h1>

    <?= yii\helpers\Html::beginForm(['backend/signup'], 'post', ['enctype' => 'multipart/form-data']) ?>

        <div class="input mb-3">
            <input type="text" name="User[username]" id="username" class="form-control" placeholder="Username" required>
        </div>

        <div class="input mb-3">
            <input type="email" name="User[email]" id="email" class="form-control" placeholder="Email" required>
        </div>

        <div class="input mb-3">
            <input type="password" name="User[password_hash]" id="password" class="form-control" placeholder="Password" required>
        </div>

        <button type="submit" id="login-button" class="btn btn-primary w-100" disabled>SignUp</button>

    <?= yii\helpers\Html::endForm() ?>

</div>

<!-- Script untuk mengaktifkan tombol hanya jika semua kolom diisi -->
<script>
    const username = document.getElementById('username');
    const email = document.getElementById('email');
    const password = document.getElementById('password');
    const loginButton = document.getElementById('login-button');

    function toggleLoginButton() {
        loginButton.disabled = !(username.value.trim() && email.value.trim() && password.value.trim());
    }

    username.addEventListener('input', toggleLoginButton);
    email.addEventListener('input', toggleLoginButton);
    password.addEventListener('input', toggleLoginButton);
</script>

</div>