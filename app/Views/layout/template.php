<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sima | <?= $title; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url("css/styles.css"); ?>">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-light sticky-top">
        <div class="container">
            <a class="navbar-brand" href="/">Sima</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
                <ul class="navbar-nav justify-content-center">
                    <li class="nav-item">
                        <a class="nav-link <?= $title === 'Home' ? 'active' : '' ?>" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= $title === 'About' ? 'active' : '' ?>" href="/about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= $title === 'User' ? 'active' : '' ?>" href="/user">User</a>
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

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
</body>

</html>