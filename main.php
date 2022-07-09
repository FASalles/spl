<!DOCTYPE html>
<!-- Created by CodingLab |www.youtube.com/CodingLabYT-->
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <!--<title> Responsive Sidebar Menu  | CodingLab </title>-->
    <link rel="stylesheet" href="style.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link href='css/main.css' rel='stylesheet'>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>



<body>

    <?php
    session_start();
    if(!isset($_SESSION['logado'])) {
        header('Location: ../spl/inscreverse.php');
        exit();
    }
    $titulo = 'Principal'; include("../spl/views/inicio-html.php") ?>

    <div class="bg">

        <?php include("../spl/views/header.php") ?>


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

        <?php include("../spl/views/fim-html.php") ?>
        <script src="https://kit.fontawesome.com/1122c695e1.js" crossorigin="anonymous"></script>


</body>

</html>

