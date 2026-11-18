
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Profile</title>
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
  <header>
    <h1>Profile</h1>
    <nav>
      <a href="/dashboard">Home</a>
      <a href="/profile">Profile</a>
      <a href="/login">Logout</a>
    </nav>
  </header>

  <main class="profile-container">
    <div class="profile-avatar">A</div>
    <h2>Andi</h2>
    <p>Mahasiswa</p>

    <div class="profile-details">
      <p><strong>Email:</strong> andi@example.com</p>
      <p><strong>Alamat:</strong> Surabaya</p>
      <p><strong>Tentang:</strong> Halo, saya Andi!</p>
    </div>

    <a href="/dashboard">Kembali ke Dashboard</a>
  </main>
</body>
</html>
