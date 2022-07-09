<div class="sidebar">
    <div class="logo-details">

        <div class="logo_name">Alerj</div>
        <i class='bx bx-menu' id="btn" ></i>
    </div>
    <ul class="nav-list">
        <li>
            <i class='bx bx-search' ></i>
            <input type="text" placeholder="Procurar...">
            <span class="tooltip">Procurar</span>
        </li>
        <li>
            <a href="#">
                <i class='fas fa-tools'></i>
                <span class="links_name">Ferramentas</span>
            </a>
            <span class="tooltip">Ferramentas</span>
        </li>
        <li>
            <a href="#">
                <i class='fa fa-linux' ></i>
                <span class="links_name">Servidores Linux</span>
            </a>
            <span class="tooltip">Servidores Linux</span>
        </li>

        <li>
            <a href="#">
                <i class="fa-solid fa-temperature-arrow-down"></i>
                <span class="links_name">Ar condicionado</span>
            </a>
            <span class="tooltip">Ar condicionado</span>
        </li>

        <li>
            <a href="#">
                <i class="fa-solid fa-battery-half"></i>
                <span class="links_name">Nobreak</span>
            </a>
            <span class="tooltip">Nobreak</span>
        </li>

        <li>
            <a href="../spl/portmap.php">
                <i class="fa-solid fa-map-pin"></i>
                <span class="links_name">Port-map</span>
            </a>
            <span class="tooltip">Port Map</span>
        </li>




        <li class="profile">
            <div class="profile-details">
                <!--<img src="profile.jpg" alt="profileImg">-->
                <div class="name_job">
                    <div class="name">Felipe Salles</div>
                    <div class="job">DITI</div>
                </div>
            </div>
            <i class='bx bx-log-out' id="log_out" ></i>
        </li>
    </ul>
</div>

<script>
    let sidebar = document.querySelector(".sidebar");
    let closeBtn = document.querySelector("#btn");
    let searchBtn = document.querySelector(".bx-search");

    closeBtn.addEventListener("click", ()=>{
        sidebar.classList.toggle("open");
        menuBtnChange();//calling the function(optional)
    });

    searchBtn.addEventListener("click", ()=>{ // Sidebar open when you click on the search iocn
        sidebar.classList.toggle("open");
        menuBtnChange(); //calling the function(optional)
    });

    // following are the code to change sidebar button(optional)
    function menuBtnChange() {
        if(sidebar.classList.contains("open")){
            closeBtn.classList.replace("bx-menu", "bx-menu-alt-right");//replacing the iocns class
        }else {
            closeBtn.classList.replace("bx-menu-alt-right","bx-menu");//replacing the iocns class
        }
    }
</script>

<script src="https://kit.fontawesome.com/1122c695e1.js" crossorigin="anonymous"></script>
