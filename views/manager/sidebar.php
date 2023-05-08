<div class="sidebar">
    <div class="logo-details">
        <i class='bx bxl-c-plus-plus'></i>
        <span class="logo_name">Manager</span>
    </div>
    <ul class="nav-links">
        <li>
            <a href="<?=url('manager/dashboard')?>">
                <i class='bx bx-grid-alt' ></i>
                <span class="link_name">Dashboard</span>
            </a>
            <ul class="sub-menu">
                <li><a class="link_name" href="<?=url('manager/dashboard')?>">Dashboard</a></li>
            </ul>
        </li>
        <li>
            <div class="iocn-link">
                <a href="#">
                    <i class='bx bxs-user'></i>
                    <span class="link_name">Usuários</span>
                </a>
                <i class='bx bxs-chevron-down arrow'></i>
            </div>
            <ul class="sub-menu">
                <li><a class="link_name" href="#">Usuários</a></li>
                <li><a href="<?=url('manager/usuarios/cadastro')?>">Cadastro</a></li>
                <li><a href="<?=url('manager/usuarios')?>">Listar</a></li>
            </ul>
        </li>
        <li>
            <div class="iocn-link">
                <a href="#">
                    <i class='bx bxs-spreadsheet'></i>
                    <span class="link_name">Projetos</span>
                </a>
                <i class='bx bxs-chevron-down arrow'></i>
            </div>
            <ul class="sub-menu">
                <li><a class="link_name" href="#">Projetos</a></li>
                <li><a href="<?=url('manager/projetos/cadastro')?>">Cadastro</a></li>
                <li><a href="<?=url('manager/projetos')?>">Listar</a></li>
                <li><a href="<?=url('manager/projetos/apoios')?>">Apoios</a></li>
            </ul>
        </li>
        <li>
            <div class="iocn-link">
                <a href="#">
                        <i class='bx bx-question-mark'></i>
                        <span class="link_name">FAQ</span>
                </a>
                <i class='bx bxs-chevron-down arrow'></i>
            </div>
            <ul class="sub-menu">
                <li><a class="link_name" href="#">FAQ</a></li>
                <li><a href="<?=url('manager/faq/cadastro')?>">Cadastro</a></li>
                <li><a href="<?=url('manager/faq')?>">Listar</a></li>
            </ul>
        </li>
        <li>
            <a href="<?=url('manager/menssagens')?>">
                <i class='bx bx-chat'></i>
                <span class="link_name">Menssagens</span>
            </a>
            <ul class="sub-menu">
                <li><a class="link_name" href="<?=url('manager/menssagens')?>">Menssagens</a></li>
            </ul>
        </li>
        <li>
            <a href="<?=url('manager/dashboard')?>">
                <i class='bx bx-cog'></i>
                <span class="link_name">Configs</span>
            </a>
            <ul class="sub-menu">
                <li><a class="link_name" href="<?=url('manager/dashboard')?>">Configs</a></li>
            </ul>
        </li>
        <li>
            <div class="profile-details">
                <div class="profile-content">
                    <img src="<?=!empty($_SESSION['_user']->image) ? url($_SESSION['_user']->image) : url('assets/images/user-circle-regular-240.png')?>" alt="profileImg">
                </div>
                <div class="name-job">
                    <div class="profile_name"><?=$_SESSION['_user']->name?></div>
                    <div class="job"><?=Status::tryFrom($_SESSION['_user']->type)->name?></div>
                </div>
                <a href="<?=url('manager/logout')?>"><i class='bx bx-log-out'></i></a>
            </div>
        </li>
    </ul>
</div>
