<?php

class Login extends Controller{

    public function index()
    {
        $data['judul'] = 'login';
        $this->views('template/header',$data);
        $this->views('login/index',$data);
        $this->views('template/footer');
    
    }

    public function user()
    {
        $username = $_POST('username');
        $password = $_POST('passwrod');


        if( !empty($username) || !empty($password)){
            
            if( $this->model('login_model')->cekUserTrue($username) > 0 ){
                $data = $this->model('login_model')->ambilDataUser($username);
                $passwordDB = $data['password'];
                
                if( password_verify($password, $passwordDB) ){
                    $_SESSION['userLogin'] = 'userLogin';
                    header('Location: '. BASEURL .'/home');

                }else{
                    echo 'password salah';
                }
            }else{
                echo 'Gagal menemukan User';
            }
        }else{
            echo ' Masukan data terlebih dahulu';
        }

    }



}


?>