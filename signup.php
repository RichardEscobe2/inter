<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>©FindLab Academy~Signup</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="asstes/estilo.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body class="bg-login">

<div id="navbar"></div>

<main class="auth-page d-flex align-items-center justify-content-center">

    <div class="col-md-8 col-lg-6 col-xl-5">
        <div class="card">
            <div class="card-header text-center">
                <img src="asstes/logo.png" style="height: 40px;" alt="Logo FindLab"><br>
                Crear Cuenta
            </div>
            <div class="card-body">
                <form>
                    <div class="form-group">
                        <label for="name">Nombre Completo</label>
                        <input type="text" class="form-control" id="name" placeholder="Ingresa tu nombre completo">
                    </div>
                    <div class="form-group">
                        <label for="email">Correo Electrónico</label>
                        <input type="email" class="form-control" id="email" placeholder="Ingresa tu correo">
                    </div>
                    <div class="form-group">
                        <label for="password">Contraseña</label>
                        <input type="password" class="form-control" id="password" placeholder="Crea una contraseña">
                    </div>
                    <div class="form-group">
                        <label for="confirm-password">Confirmar Contraseña</label>
                        <input type="password" class="form-control" id="confirm-password" placeholder="Confirma tu contraseña">
                    </div>
                    <div class="form-group">
                        <label>¿Ya tienes cuenta? <a href="login.php">¡Inicia sesión!</a></label>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Crear Cuenta</button>
                </form>
            </div>
        </div>
    </div>
</main>

<div id="foot"></div>

<!-- Scripts -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="assets/script.js"></script>

<script>
    fetch('poo/navbar.php')
        .then(res => res.text())
        .then(data => document.getElementById('navbar').innerHTML = data);
</script>

<script>
    fetch('poo/footer.php')
        .then(res => res.text())
        .then(data => document.getElementById('foot').innerHTML = data);
</script>

</body>
</html>
