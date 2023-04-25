<?php $this->layout("manager::__treme", ['title' => $title]); ?>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header card-header-text card-header-primary">
                    <div class="card-text">
                        <h4 class="card-title">
                            <i class='bx bx-list-ul'></i> <?=$title?></h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <form class="row g-3">
                            <div class="col-md-6">
                                <label for="name" class="form-label">Nome</label>
                                <input type="text" class="form-control" name="name" id="name">
                            </div>
                            <div class="col-md-6">
                                <label for="email" class="form-label">E-mail</label>
                                <input type="email" class="form-control" name="email" id="email">
                            </div>
                            <div class="col-md-4">
                                <label for="phone" class="form-label">Telefone</label>
                                <input type="tel" class="form-control" name="phone" id="phone">
                            </div>
                            <div class="col-6">
                                <label for="address" class="form-label">Endereço</label>
                                <input type="text" class="form-control" name="address" id="address">
                            </div>
                            <div class="col-2">
                                <label for="number" class="form-label">Número</label>
                                <input type="text" class="form-control" name="number" id="number">
                            </div>
                            <div class="col-md-6">
                                <label for="city" class="form-label">Cidade</label>
                                <input type="text" class="form-control" name="city" id="city">
                            </div>
                            <div class="col-md-3">
                                <label for="state" class="form-label">Bairro</label>
                                <input type="text" class="form-control" name="state" id="state">
                            </div>

                            <div class="col-md-3">
                                <label for="zipcode" class="form-label">CEP</label>
                                <input type="text" class="form-control" name="zipcode" id="zipcode">
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">Cadastrar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>