<?php
namespace app\controllers;

use Yii;
use app\models\User;
use yii\web\Controller;

class BackendController extends Controller
{
    public function actionSignup()
    {
        $user = new User();
        $user->role = "user";
        if ($user->load(Yii::$app->request->post()) && $user->validate()) {



            // Hash password sebelum disimpan
            $user->password_hash = Yii::$app->security->generatePasswordHash($user->password_hash);

            // Simpan ke database
            if ($user->save()) {
                Yii::$app->session->setFlash('success', 'Akun berhasil dibuat!');
                return $this->redirect(['site/index']);
            } else {
                Yii::$app->session->setFlash('error', 'Gagal menyimpan data.');
            }
        }

        return $this->goBack();
    }
}
