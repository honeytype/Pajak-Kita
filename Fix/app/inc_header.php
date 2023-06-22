    <!--Navbar-->
    <div class="container-fluid col-10">
        <nav class="navbar navbar-expand-lg bg-white" id="navbar">
            <b class="bold"> Pajak Kita</b>
            <button class="navbar-toggler" type="button"
            data-bs-toggle="collapse" data-bs-target="#menu">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
              </svg>
            </button>
            <div class="collapse navbar-collapse" id="menu">
                <ul class="navbar-nav ms-auto mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="halaman.php" >Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="tentang.php">About</a>
                    </li>
                    
                    <li class="nav-item" >
                        <a class="nav-link" href="pilihpaket.php">Price</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pilihkonsultan.php">Consultant</a>
                    </li>
                    <li class="nav-item" >
                        <a class="nav-link" href="../index.php" onclick="return confirm('Apakah Anda yakin ingin keluar ?')">Logout</a>
                    </li>
                </ul>
            </div>
        </nav>
        <?php
    $page = isset($_GET['page']) ? $_GET['page'] : '';
    switch($page) {
        case 'login':
            session_destroy();
            header("location: index.php");
            break;
    }

    

