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
                        <form class="row g-3 form" enctype="multipart/form-data" action="<?=url('manager/projetos/add')?>" method="post">
                            <div class="col-md-12 col-xl-12">
                                <label for="title" class="form-label">Titulo</label>
                                <input type="text" class="form-control" name="title" id="title">
                            </div>
                            <div class="col-md-12 col-xl-12">
                                <label for="sub_title" class="form-label">Sub Titulo</label>
                                <input type="text" class="form-control" name="sub_title" id="sub_title">
                            </div>
                            <div class="col-md-12 col-xl-4">
                                <label for="goal" class="form-label">Meta</label>
                                <input type="tel" class="form-control" name="goal" id="goal">
                            </div>
                            <div class="col-md-12 col-xl-4">
                                <label for="reached" class="form-label">Meta Alcançada</label>
                                <input type="tel" class="form-control" name="reached" id="reached">
                            </div>
                            <div class="col-md-12 col-xl-4">
                                <label for="goal_date" class="form-label">Data do Término</label>
                                <input type="date" class="form-control" name="goal_date" id="goal_date">
                            </div>
                            <div class="col-md-12 col-xl-8">
                                <label for="image" class="form-label">Foto</label>
                                <input type="file" class="form-control" name="image" id="image">
                            </div>
                            <div class="col-md-12 col-xl-4">
                                <label for="campaign_type" class="form-label">Tipo de Campanha</label>
                                <input type="text" class="form-control" name="campaign_type" id="campaign_type">
                            </div>
                            <div class="col-md-12 col-xl-12">
                                <label for="description" class="form-label">Descrição</label>
                                <textarea rows="5" class="form-control" id="description" name="description"></textarea>
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