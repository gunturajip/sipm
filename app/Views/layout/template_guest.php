<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sima | <?= $title; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="<?= base_url("css/styles.css"); ?>">
    <style>
        #indexBtnTop {
            display: none;
            position: fixed;
            bottom: 30px;
            right: 30px;
            z-index: 99;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <button class="btn btn-secondary" onclick="topFunction()" id="indexBtnTop" title="Go to top">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-up" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M7.646 4.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1-.708.708L8 5.707l-5.646 5.647a.5.5 0 0 1-.708-.708l6-6z" />
        </svg>
    </button>

    <nav class="navbar navbar-expand-lg bg-light sticky-top">
        <div class="container">
            <a class="navbar-brand" href="/">Sima</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
                <ul class="navbar-nav justify-content-center">
                    <li class="nav-item">
                        <a class="nav-link <?= $title === 'Home' ? 'active' : '' ?>" aria-current="page" href="<?= base_url("/"); ?>">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= $title === 'About' ? 'active' : '' ?>" href="<?= base_url("/about"); ?>">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= $title === 'Belajar' ? 'active' : '' ?>" href="<?= base_url("/belajar"); ?>">Belajar</a>
                    </li>
                    <li class="nav-item">
                        <a href="/login" class="btn btn-primary d-lg-none">Get Started</a>
                    </li>
                </ul>
            </div>
            <a href="/login" class="btn btn-primary d-none d-lg-block">Get Started</a>
        </div>
    </nav>

    <?= $this->renderSection('content'); ?>
    <script>
        var btn = document.getElementById("indexBtnTop");

        window.onscroll = function() {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                btn.style.display = "block";
            } else {
                btn.style.display = "none";
            }
        }

        function topFunction() {
            document.documentElement.scrollTop = 0;
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
</body>

</html>