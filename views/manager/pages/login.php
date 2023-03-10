<?php $this->layout("manager::__treme", ['title' => $title]); ?>

<?php $this->start('login') ?>

    <div class="login">
        <div class="login-content">
            <div class="login-logo">
                <img src="https://dummyimage.com/350x350/FFF/000.png&text=LOGO" alt="Logo">
            </div>
            <div class="login-title">
                <h2>Bem Vindo Luis</h2>
                <h4>Faça seu Login</h4>
            </div>
            <div class="login-form">
                <form class="form">
                    <input class="input" type="email" name="email" placeholder="Seu E-mail">
                    <input class="input" type="password" name="pass" placeholder="Sua Senha">
                    <input class="btn" type="submit" name="login" value="Login">
                </form>
            </div>
            <div class="login-footer"></div>
        </div>
    </div>

<?php $this->stop() ?>