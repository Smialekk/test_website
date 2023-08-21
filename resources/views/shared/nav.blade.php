<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <style>
        .navbar {
            padding: 1rem 9rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .navbar-brand {
            margin: 0;
            padding: 0;
            font-size: 25px;
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
        }

        .navbar-nav {
            display: flex;
            align-items: center;
        }

        .navbar-nav .nav-item {
            margin-left: 3rem;
        }

        .navbar-toggler {
            margin: 0;
            padding: 0;
        }

        .navbar-collapse {
            justify-content: flex-end;
        }

        .navbar-nav .nav-link {
            color: black;
            transition: color 0.3s;
            font-size: 16px;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }

        .navbar-nav .nav-link:hover {
            color: #c67922;
        }

        .dropdown-menu {
            border: none;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        }

        .dropdown-item {
            padding: 10px 20px;
            font-size: 14px;
        }

        .dropdown-item:hover {
            background-color: #f8f9fa;
        }

        .bi-search {
            font-size: 20px;
            cursor: pointer;
        }

        .search-form {
            display: none;
            position: absolute;
            top: 100%;
            right: 0;
            background-color: white;
            border: 1px solid #ccc;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            z-index: 1000;
        }

        .search-form.active {
            display: block;
        }

        .search-form input[type="text"] {
            width: 100%;
            border: none;
            padding: 10px;
        }

        .navbar-toggler-close {
    border: none;
    background: transparent;
    color: #555; /* Kolor ikony "X" */
    font-size: 24px;
    cursor: pointer;
    transition: color 0.3s;
}

.navbar-toggler-close:hover {
    color: #c67922; /* Kolor ikony "X" przy najechaniu myszką */
}

    </style>
    <title>Navbar Example</title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-white">
    <a class="navbar-brand" href="#"><b >giard</b>design </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto ">
            <li class="nav-item dropdown">
                <a class="nav-link  text-dark font-weight-bold" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Oferta <i class="fas fa-angle-down"></i>
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#">Produkt 1</a></li>
                    <li><a class="dropdown-item" href="#">Produkt 2</a></li>
                    <li><a class="dropdown-item" href="#">Produkt 3</a></li>
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark " href="#">O firmie</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark " href="#">Realizacje</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark " href="#">Kontakt</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark " href="#">
                    <i class="bi bi-search search-toggle"></i>
                    <div class="search-form" id="search-form">
                        <input type="text" placeholder="Wyszukaj...">
                    </div>
                </a>
            </li>
            <li class="nav-item">
                <button class="navbar-toggler-close btn btn-link" type="button" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </li>
        </ul>
    </div>

</nav>


<script>
    const searchToggle = document.querySelector('.search-toggle');
    const searchForm = document.querySelector('.search-form');
    const navbarToggler = document.querySelector('.navbar-toggler');
    const navbarCollapse = document.querySelector('.navbar-collapse');

    searchToggle.addEventListener('click', (event) => {
        event.preventDefault();
        searchForm.classList.toggle('active');
    });

    // navbarToggler.addEventListener('click', () => {
    //     if (searchForm.classList.contains('active')) {
    //         searchForm.classList.remove('active');
    //     }
    // });

    // navbarToggler.addEventListener('click', () => {
    //     if (navbarCollapse.classList.contains('active')) {
    //         navbarCollapse.classList.remove('active');
    //     }
    // });

    // navbarToggler.addEventListener('click', () => {
    //     navbarToggler.classList.toggle('active');
    //     if (navbarCollapse.classList.contains('show')) {
    //         navbarCollapse.classList.remove('show');
    //     }
    // });



</script>


    <script>
        document.addEventListener('DOMContentLoaded', function() {
    const navbarToggler = document.querySelector('.navbar-toggler');
    const navbarTogglerClose = document.querySelector('.navbar-toggler-close');
    const navbarCollapse = document.querySelector('.navbar-collapse');

    navbarToggler.addEventListener('click', function() {
        navbarCollapse.classList.toggle('show');
    });

    navbarTogglerClose.addEventListener('click', function() {
        navbarCollapse.classList.remove('show');
    });

    window.addEventListener('click', function(event) {
        if (!navbarToggler.contains(event.target) && !navbarCollapse.contains(event.target)) {
            navbarCollapse.classList.remove('show');
        }
    });
});


</script>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha384-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>

</body>
</html>
