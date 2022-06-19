<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sima | <?= $title; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="<?= base_url("css/styles.css"); ?>">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-light sticky-top">
        <div class="container justify-content-between">
            <a class="navbar-brand" href="/">Sima</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div>
                <i class="bi bi-bell me-4"></i>
                <i class="bi bi-gear me-4"></i>
                <a href="/login" class="text-decoration-none text-black"><i class=" bi bi-person-circle"></i> <i class="bi bi-chevron-down"></i></a>
            </div>
        </div>
    </nav>

    <div class="container-fluid">
        <div class="row">
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                <div class="pt-3">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="<?= base_url("admin"); ?>">
                                <i class="bi bi-house-heart fs-3"></i> Dashboard
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url("user"); ?>">
                                <i class="bi bi-people-fill fs-3"></i> User
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url("bab"); ?>">
                                <i class="bi bi-journals fs-3"></i> Bab
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url("materi"); ?>">
                                <i class="bi bi-journal-text fs-3"></i> Materi
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url("soal"); ?>">
                                <i class="bi bi-list-task fs-3"></i> Soal
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url("rekam_belajar"); ?>">
                                <i class="bi bi-card-checklist fs-3"></i> Rekam Belajar
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <?= $this->renderSection('content'); ?>
            </main>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
</body>

</html>