<?php $this->layout("site::__treme", ['title' => $title]); ?>

<div class="default">
    <main class="container">
        <div class="row title justify-content-center">
            <div class="col col-xxl-5">
                <h1>Entre em contato</h1>
            </div>
        </div>
        <form>
            <div class="row justify-content-center">
                <div class="col col-xxl-5">
                    <label for="nome" class="form-label">Nome</label>
                    <input type="text" class="form-control" id="nome" placeholder="Nome">
                </div>
                <div class="col col-xxl-12"></div>
                <div class="col col-xxl-5">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="seu@email.com">
                </div>
                <div class="col col-xxl-12"></div>
                <div class="col col-xxl-5">
                    <label for="cotato" class="form-label">Contato</label>
                    <input type="tel" class="form-control" id="cotato" placeholder="(53) 1 1111-1111">
                </div>
                <div class="col col-xxl-12"></div>
                <div class="col col-xxl-5">
                    <label for="message" class="form-label">Menssagem</label>
                    <textarea rows="4" class="form-control" id="message" placeholder="Menssagem"></textarea>
                </div>
                <div class="col col-xxl-12"></div>
                <div class="col col-xxl-5 mt-4 d-flex justify-content-end">
                    <button>Enviar</button>
                </div>
            </div>
        </form>
    </main>
</div>