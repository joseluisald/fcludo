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
                    <table class="table table-striped table-hover mt-3 pt-3">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nome</th>
                                <th>E-mail</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php for($i=0; $i <=10; $i++){ ?>
                            <tr>
                                <td>1</td>
                                <td>Luis Aldrighi</td>
                                <td>luis@create.art.br</td>
                                <td class="actions">
                                    <i class='bx bxs-edit'></i>
                                    <i class='bx bxs-trash'></i>
                                </td>
                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>