<?php $this->layout("site::__treme", ['title' => $title]); ?>

<div class="default">
    <main class="container">
        <div class="row title justify-content-center">
            <div class="col col-xxl-5">
                <h1>Faça seu cadastro</h1>
            </div>
        </div>
        <form>
            <div class="row justify-content-center">
                <div class="col col-xxl-5">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="seu@email.com">
                </div>
                <div class="col col-xxl-12"></div>
                <div class="col col-xxl-5">
                    <label for="pass" class="form-label">Senha</label>
                    <input type="password" class="form-control" id="pass" placeholder="">
                </div>
                <div class="col col-xxl-12"></div>
                <div class="col col-xxl-5 mt-4 d-flex justify-content-end">
                    <button>criar conta</button>
                </div>
            </div>
        </form>
    </main>
</div>