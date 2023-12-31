<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css' integrity='sha512-b2QcS5SsA8tZodcDtGRELiGv5SaKSk1vDHDaQRda0htPYWZ6046lr3kJ5bAAQdpV2mmA/4v0wQF9MyU6/pDIAg==' crossorigin='anonymous'/>

    <title>Home</title>
</head>
<body>
    <header>

        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active fw-bold disabled" aria-current="page" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fw-bold" href="/family">Family</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

    </header>
    <main>
        <div class="container text-center">

            <h1 class="my-5 fw-bold">{{ strtoupper($title) }}</h1>

            <p>Scopri i componenti della mia <a href="/family">Family</a></p>

        </div>

    </main>
</body>
</html>
