<!--
<div class="">
    <form action="" method="post">
        <input type="email" name="email" id="" required>
        <input type="password" name="password" id="" required>
        <button type="submit">Sumbit</button>
    </form>
</div> 
-->


<body>

    <!-- form section start -->
    <section class="mockup-form">
        <div class="container">
            <!-- /form -->
            <div class="workinghny-form-grid">
                <div class="main-mockup">
                    <div class="w3l_form align-self">
                    <div class="left_grid_info">
                            <img src="img/Login02.png" alt="">
                        </div>
                    </div>
                    <div class="content-form">
                    <h2>Login Now</h2>
                    <p>Sambut pengalaman berbelanja yang serba lebih cepat dan mudah. Masuklah sekarang untuk mulai belanja. </p>
                    <form action="<?= BASEURL ?>/login/user" method="post" onSubmit="return validasi">
                    <input type="text" class="email " name="email" placeholder="Enter Your Email"  required>
                    <input type="password" class="password" name="password" placeholder="Enter Your Password" style="margin-bottom: 2px;" required>
                    <p><a style="margin-bottom: 15px; display: block; text-align: right;">Forgot Password?</a></p>
                    <button name="submit" name="submit" class="btn" type="submit">Login</button>
            </form>
            <div class="social-icons">
                <p>Belum Punya Akun? <a href="<?= BASEURL ?>/register">Register Sekarang</a>.</p>
            </div>
        </div>
    </div>
</div>
      