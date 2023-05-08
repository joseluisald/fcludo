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
                        <form class="row g-3 form" enctype="multipart/form-data" action="<?=url('manager/faq/add')?>" method="post">
                            <div class="col-md-12 col-xl-12">
                                <label for="ask" class="form-label">Pergunta</label>
                                <input type="text" class="form-control" name="ask" id="ask">
                            </div>
                            <div class="col-md-12 col-xl-12">
                                <label for="answer" class="form-label">Resposta</label>
                                <textarea rows="4" class="form-control" name="answer" id="answer"></textarea>
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