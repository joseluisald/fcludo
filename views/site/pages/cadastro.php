<?php $this->layout("site::__treme", ['title' => $title]); ?>

<div class="default">
    <main class="container">
        <div class="row title justify-content-center">
            <div class="col col-xxl-5">
                <h1>Faça seu cadastro</h1>
            </div>
        </div>
        <form class="form" enctype="multipart/form-data" action="<?=url('register')?>" method="post">
            <div class="row justify-content-center">
                <div class="col-12 col-md-5">
                    <div class="row">
                        <div class="col-12">
                            <label for="name" class="form-label">Nome</label>
                            <input type="text" class="form-control" name="name" id="name">
                        </div>
                        <div class="col-12">
                            <label for="email" class="form-label">E-mail</label>
                            <input type="email" class="form-control" name="email" id="email">
                        </div>
                        <div class="col-12">
                            <label for="pass" class="form-label">Senha</label>
                            <input type="password" class="form-control" name="pass" id="pass">
                        </div>
                        <div class="col-12">
                            <label for="phone" class="form-label">Telefone</label>
                            <input type="tel" class="form-control" name="phone" id="phone">
                        </div>
                        <div class="col-12 mt-4 d-flex justify-content-end">
                            <button>criar conta</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </main>
</div>