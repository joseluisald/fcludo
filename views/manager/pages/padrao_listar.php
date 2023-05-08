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
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            if($arrayDoControlador):
                                foreach($arrayDoControlador as $array):
                                ?>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td class="actions">
                                            <i class='bx bxs-edit' onclick="go('projetos/edit/ID')"></i>
                                            <i class='bx bxs-trash'></i>
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