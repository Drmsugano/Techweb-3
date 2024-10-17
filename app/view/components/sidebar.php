<div class="sidebar close">
    <div class="logo-details">
        <i><a href="/Home"><img src="/img/Caixa.png" width="48px" height="48px"></a></i>
        <span class="logo_name"><i>Trabalho</i></span>
    </div>
    <ul class="nav-links">
        <li>
            <div class="iocn-link">
                <a href="#">
                    <i><img src="/img/caixa.png" width="30px" style="filter:invert(100%)"></i>
                    <span class="link_name">Produtos</span>
                </a>
                <i class='bx bxs-chevron-down arrow'></i>
            </div>
            <ul class="sub-menu">
                <li><a class="link_name" href="#">Produtos</a></li>
                <li><a href='/Produtos/create'>Cadastrar</a>
                <li><a href="/Produtos">Listar</a></li>
            </ul>
        </li>
        <li>
            <div class="profile-details">
                <div class="profile-content">
                    <img src="/img/ifpr.jfif" alt="profileImg">
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