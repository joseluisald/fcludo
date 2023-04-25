<?php $this->layout("manager::__treme", ['title' => $title]); ?>

<?php $this->start('login') ?>

    <div class="login">
        <div class="login-content">
            <div class="login-logo">
                <img src="https://dummyimage.com/350x350/FFF/000.png&text=LOGO" alt="Logo">
            </div>
            <div class="login-title">
                <h2>Bem Vindo</h2>
                <h4>Faça seu Login</h4>
            </div>
            <div class="login-form">
                <form action="<?=url("manager/auth")?>" class="form" method="post">
                    <div class="row-input">
                        <input class="input" type="email" name="email" placeholder="Seu E-mail">
                        <i class='bx bxs-user'></i>
                    </div>
                    <div class="row-input">
                        <input class="input" type="password" name="pass" placeholder="Sua Senha">
                        <i class='bx bx-key'></i>
                    </div>
                    <input class="btn" type="submit" name="login" value="Login">
                </form>
            </div>
            <div class="login-footer"></div>
        </div>
    </div>

<?php $this->stop() ?>