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
        $email = $_POST['email'];
        $password = $_POST['password'];
        
        if( !empty($email) || !empty($password)){
            
            if( $this->model('login_model')->cekUserTrue($email) > 0 ){
                $data = $this->model('login_model')->ambilDataUser($email);
                $passwordDB = $data['password'];
               // var_dump($email,$password, $passwordDB);
                
                if( $password === $passwordDB) {
                    $_SESSION['password'] = $passwordDB;
                    // $_SESSION['userLogin'] = 'userLogin';
                    // header('Location: '. BASEURL .'/about');
                    
                    $_SESSION['akses'] = $data['akses'];
                    if($_SESSION['akses'] == 'admin'){
                        
                        header('Location: '. BASEURL .'/barang');
                        
                    }else{
                        
                        header('Location: '. BASEURL .'/about');
                    }
                    
                }else{
                    echo 'password salah';
                }
            }else{
                header('Location: '. BASEURL .'/login');
                echo 'Gagal menemukan User';
                
            }
        }else{
            echo ' Masukan data terlebih dahulu';
        }
    }

}


?>