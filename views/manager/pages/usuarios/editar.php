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
                        <div class="row">
                            <div class="col-md-12 col-xl-3">
                                <img class="avatarUser" src="<?=!empty($user['images']) ? url($user['images']->image) : url('assets/images/user-circle-regular-240-black.png') ?>" style="width: 100%; height: 100%; object-fit: cover;">
                            </div>
                            <div class="col-md-12 col-xl-9 mt-md-4">
                                <form class="row g-3 form" enctype="multipart/form-data" action="<?=url('manager/usuarios/edit')?>" method="post">
                                    <div class="col-md-12 col-lg-6 col-xl-6">
                                        <label for="name" class="form-label">Nome</label>
                                        <input type="text" class="form-control" name="name" id="name" value="<?=$user['user']->name?>">
                                    </div>
                                    <div class="col-md-12 col-lg-6 col-xl-6">
                                        <label for="email" class="form-label">E-mail</label>
                                        <input type="email" class="form-control" name="email" id="email" value="<?=$user['user']->email?>">
                                    </div>
                                    <div class="col-md-12 col-lg-4 col-xl-6">
                                        <label for="new_pass" class="form-label">Nova Senha</label>
                                        <input type="password" class="form-control" name="new_pass" id="new_pass">
                                        <input type="hidden" class="form-control" name="pass" id="pass" value="<?=$user['user']->pass?>">
                                    </div>
                                    <div class="col-md-12 col-lg-4 col-xl-6">
                                        <label for="phone" class="form-label">Telefone</label>
                                        <input type="tel" class="form-control" name="phone" id="phone" value="<?=$user['user']->phone?>">
                                    </div>
                                    <div class="col-md-12 col-lg-4 col-xl-12">
                                        <label for="image" class="form-label">Foto</label>
                                        <input type="file" class="form-control" name="image" id="image">
                                    </div>
                                    <div class="col-12 d-flex justify-content-end">

                                        <input type="hidden" name="id" value="<?=$user['user']->id?>">
                                        <input type="hidden" name="image_id" value="<?=!empty($user['images']) ? $user['images']->id : ''?>">

                                        <button type="submit" class="btn btn-primary">Editar</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>