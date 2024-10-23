<div class="sidebar close">
    <div class="logo-details">
        <i><a href="/Home"><img src="/img/caixa.png" width="48px" height="48px" style="filter:invert(100%)"></a></i>
        <span class="logo_name"><i>Techweb-3</i></span>
    </div>
    <ul class="nav-links">
        <li>
            <div class="iocn-link">
                <a href="#">
                    <i class='bx bxs-store'></i>
                    <span class="link_name">Trabalho 2-Bimestre</span>
                </a>
                <i class='bx bxs-chevron-down arrow'></i>
            </div>
            <ul class="sub-menu">
                <li>
                    <div class="iocn-link">
                        <a href="/Produto">Produto</a>
                        <i class='bx bxs-chevron-down arrow-sub'></i>
                    </div>
                    <ul class="sub-sub-menu">
                        <li><a href='/Produto/create'>Cadastrar</a></li>
                        <li><a href="/Produto">Listar</a></li>
                    </ul>
                </li>
                <li>
                    <div class="iocn-link">
                        <a href="/Equipe">Equipe</a>
                        <i class='bx bxs-chevron-down arrow-sub'></i>
                    </div>
                    <ul class="sub-sub-menu">
                        <li><a href='/Equipe/create'>Cadastrar</a></li>
                        <li><a href="/Produto">Listar</a></li>
                    </ul>
                </li>
                <li>
                    <div class="iocn-link">
                        <a href="/Vendedor">Vendedor</a>
                        <i class='bx bxs-chevron-down arrow-sub'></i>
                    </div>
                    <ul class="sub-sub-menu">
                        <li><a href='/Vendedor/create'>Cadastrar</a></li>
                        <li><a href="/Vendedor">Listar</a></li>
                    </ul>
                </li>
            </ul>
        </li>
        <div class="profile-details">
            <div class="profile-content">
                <img src="/img/ifpr.png" alt="profileImg">
            </div>
            <div class="name-job">
                <div class='profile_name'> <?= $_SESSION['usuario_logado']["nome"] ?> </div>
                <div class='job'>
                    Online
                </div>
            </div>
            <div class="ps-3 ms-4"></div>
            <div class="vr" style="height:auto; color: white;"></div>
            <a href="/logout"><i class='bx bx-log-out pe-3'></i></a>
        </div>
        </li>
    </ul>
</div>