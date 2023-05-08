<nav class="container-fluid">
    <div class="row">
        <div class="col">
            <a href=""><img src="<?=url('assets/images/logo-horizontal.svg')?>"></a>
        </div>
        <div class="col d-flex align-items-center justify-content-end">
            <?php if(isset($_SESSION['_customer'])): ?>
                <h3><?=$_SESSION['_customer']->name?></h3>
                <a href="<?=url('logout')?>"><button class="signin">Sair</button></a>
            <?php else: ?>
                <a href="" class="golink">Seja avisado de novos projetos</a>
                <a href="<?=url('cadastro')?>"><button class="signup">Criar Conta</button></a>
                <a href="<?=url('login')?>"><button class="signin">Entrar</button></a>
            <?php endif; ?>
        </div>
    </div>
</nav>