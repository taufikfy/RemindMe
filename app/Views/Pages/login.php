<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>
<body>
    <nav class="row container">
        <div class="col-2">
            <img src="<?=base_url("assets/images/logo.jpg") ?>" class="img-fluid">
        </div>
    </nav>
    <div class="container d-flex justify-content-center align-item-center">
        <div class="col-10 col-sm-6 col-md-3 text-center " style="margin-top: 5vh;">
            <h1 style="color: #71A430;" class="fw-bold">Sign In</h1>
            <form action="/auth/loginUser" method="post" style="margin-top: 10vh;" class="d-flex gap-4 row">
                <input class="rounded p-2" type="email" name="email" placeholder="Email">
                <input class="rounded p-2" type="password" name="password" placeholder="Password">
                <button class="rounded p-2 shadow text-white fw-bold" style="background-color: #71A430;">Login</button>
                <p class="fw-bold">Belum Punya Akun ? <a href="/register" class="fw-bold text-primary">Sign Up</a></p>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    
</body>
</html>