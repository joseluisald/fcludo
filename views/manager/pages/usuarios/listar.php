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
                        <div class="icons">  
                            <i class='bx bxs-plus-circle' onclick="go('usuarios/cadastro')"></i>                          
                            <i class='bx bx-right-arrow-alt' onclick="history.back()"></i>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-striped table-hover mt-3 pt-3">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nome</th>
                                <th>E-mail</th>
                                <th>Telefone</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            if($users):
                                foreach($users as $user): ?>
                                    <tr data-id="<?=$user->id?>">
                                        <td><?=$user->id?></td>
                                        <td><?=$user->name?></td>
                                        <td><?=$user->email?></td>
                                        <td><?=$user->phone?></td>
                                        <td class="actions">
                                            <i class='bx bxs-edit' onclick="go('usuarios/editar/<?=$user->id?>')"></i>
                                            <i class='bx bxs-trash' onclick="App.delete(<?=$user->id?>, 'usuarios')"></i>
                                        </td>
                                    </tr>
                            <?php
                                endforeach;
                            endif;
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>