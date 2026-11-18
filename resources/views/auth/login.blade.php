
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
  <main class="login-container">
    <h1>Welcome Back!</h1>
    <p>Silakan masuk ke akunmu.</p>

    <form>
      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" id="email" placeholder="Masukkan email">
      </div>

      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" id="password" placeholder="Masukkan password">
      </div>

      <button type="submit">Login</button>
    </form>
  </main>
</body>
</html>
