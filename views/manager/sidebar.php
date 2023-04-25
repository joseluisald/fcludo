<div class="sidebar">
    <div class="logo-details">
        <i class='bx bxl-c-plus-plus'></i>
        <span class="logo_name">Dashboard</span>
    </div>
    <ul class="nav-links">
        <li>
            <a href="#">
                <i class='bx bx-grid-alt' ></i>
                <span class="link_name">Dashboard</span>
            </a>
            <ul class="sub-menu">
                <li><a class="link_name" href="#">Dashboard</a></li>
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
                <li><a href="<?=url('manager/usuarios/listar')?>">Listar</a></li>
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
                <li><a href="<?=url('manager/projetos/listar')?>">Listar</a></li>
            </ul>
        </li>

        <li>
            <div class="profile-details">
                <div class="profile-content">
                    <img src="<?=url('assets/images/user-circle-regular-240.png')?>" alt="profileImg">
                </div>
                <div class="name-job">
                    <div class="profile_name">Luis</div>
                    <div class="job">Admin</div>
                </div>
                <a href="<?=url('manager/logout')?>"><i class='bx bx-log-out'></i></a>
            </div>
        </li>
    </ul>
</div>
