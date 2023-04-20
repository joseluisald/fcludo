<?php $this->layout("site::__treme", ['title' => $title]); ?>

<div class="default">
    <main class="container">
        <div class="row title justify-content-center">
            <div class="col col-xxl-5">
                <h1>Faça seu login</h1>
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
                    <label for="pass" class="form-label">
                        Senha
                        <a href="" class="forget">
                            <u>Esqueci minha senha</u>
                        </a>
                    </label>
                    <input type="password" class="form-control" id="pass" placeholder="">
                </div>
                <div class="col col-xxl-12"></div>
                <div class="col col-xxl-5 mt-4 d-flex justify-content-between">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="Y" id="stay" checked>
                        <label class="form-check-label" for="stay">
                            Permanecer conectado
                        </label>
                    </div>
                    <button>entrar</button>
                </div>
            </div>
        </form>
    </main>
</div>