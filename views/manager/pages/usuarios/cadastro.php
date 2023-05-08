<?php $this->layout("manager::__treme", ['title' => $title]); ?>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header card-header-text card-header-primary">
                    <div class="card-text">
                        <h4 class="card-title">
                            <i class='bx bx-list-ul'></i> <?=$title?>
                        </h4>
                        <i class='bx bx-right-arrow-alt' onclick="history.back()"></i>
                    </div>
                    </div>
                    <div class="card-body">
                        <form class="row g-3 form" enctype="multipart/form-data" action="<?=url('manager/usuarios/add')?>" method="post">
                            <div class="col-md-12 col-xl-6">
                                <label for="name" class="form-label">Nome</label>
                                <input type="text" class="form-control" name="name" id="name">
                            </div>
                            <div class="col-md-12 col-xl-6">
                                <label for="email" class="form-label">E-mail</label>
                                <input type="email" class="form-control" name="email" id="email">
                            </div>
                            <div class="col-md-12 col-xl-4">
                                <label for="pass" class="form-label">Senha</label>
                                <input type="password" class="form-control" name="pass" id="pass">
                            </div>
                            <div class="col-md-12 col-xl-4">
                                <label for="phone" class="form-label">Telefone</label>
                                <input type="tel" class="form-control" name="phone" id="phone">
                            </div>
                            <div class="col-md-12 col-xl-4">
                                <label for="image" class="form-label">Foto</label>
                                <input type="file" class="form-control" name="image" id="image">
                            </div>
                            <div class="col-12 d-flex justify-content-end">
                                <button type="submit" class="btn btn-primary">Cadastrar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>