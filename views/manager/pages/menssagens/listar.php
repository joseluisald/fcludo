<?php $this->layout("manager::__treme", ['title' => $title]); ?>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header card-header-text card-header-primary">
                    <div class="card-text">
                        <h4 class="card-title">
                            <i class='bx bx-list-ul'></i> <?=$title?>
                        </h4>
                        <div class="icons">
                            <i class='bx bxs-plus-circle' onclick="go('menssagens/cadastro')"></i>
                            <i class='bx bx-right-arrow-alt' onclick="history.back()"></i>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <h3 class="paginationHead">Página <span class="span_page"></span> de <span class="span_pages"></span> de <span class="span_count"></span> resultados</h3>
                    <table class="table table-striped table-hover mt-3 pt-3">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nome</th>
                                <th>E-mail</th>
                            </tr>
                        </thead>
                        <tbody class="showMessages"></tbody>
                    </table>
                    <div class="div_paginator"></div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header card-header-text card-header-primary">
                    <div class="card-text">
                        <h4 class="card-title">
                            <i class='bx bx-chat'></i> Menssagem
                        </h4>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table mt-3 pt-3">
                                    <thead>
                                        <tr>
                                            <th>Nome</th>
                                            <th>E-mail</th>
                                            <th>Telefone</th>
                                            <th>Data</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><span id="messageName"></span></td>
                                            <td><span id="messageEmail"></span></td>
                                            <td><span id="messagePhone"></span></td>
                                            <td><span id="messageData"></span></td>
                                        </tr>
                                        <tr>
                                            <td colspan="4"><span id="messageMessage"></span></td>
                                        </tr>
                                    </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
