<!DOCTYPE html>
<html lang="en">
<head>
    <base href="{BASE_URL}">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">

    <title>Mesas de Juegos</title>
</head>

<body>
    <header clasclass="d-flex">
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="mr-auto p-2">

                <a class="navbar-brand" href="">Mesas de Juegos de Mesa</a>
            </div>
            {if ($usernameExists == true)}
                <div class="p-2">
                    <a class="navbar-brand" href="showLogin">Ingresar</a>
                </div>
                <div class="p-2">
                    <a class="navbar-brand" href="showRegister">Registrarse</a>
                </div>
            {else}  
                <div class="p-2">
                    <a class="navbar-brand" href="logout">Logout</a>
                </div>
            {/if}
        </nav>
    </header>