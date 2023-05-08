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
                            <i class='bx bxs-plus-circle' onclick="go('projetos/cadastro')"></i>                          
                            <i class='bx bx-right-arrow-alt' onclick="history.back()"></i>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-striped table-hover mt-3 pt-3">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Titulo</th>
                                <th>Meta</th>
                                <th>Meta Alcançada</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            if($projects):
                                foreach($projects as $project):
                                    $fmt = new NumberFormatter( 'pt_BR', NumberFormatter::CURRENCY );
                                    ?>
                                    <tr>
                                        <td><?=$project->id?></td>
                                        <td><?=$project->title?></td>
                                        <td>R$ <?=number_format(floatval($project->goal), 2, ",", ".")?></td>
                                        <td>R$ <?=number_format(floatval($project->reached), 2, ",", ".")?></td>
                                        <td class="actions">
                                            <i class='bx bxs-edit' onclick="go('projetos/edit/<?=$project->id?>')"></i>
                                            <i class='bx bxs-trash' onclick="App.deleteUser(<?=$project->id?>)"></i>
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