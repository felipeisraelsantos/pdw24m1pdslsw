<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bootstrap 5.3.3 Scroll Suave</title>
  
  <!-- Bootstrap 5.3.3 CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>

  <!-- Barra de navegação fixa -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <a class="navbar-brand" href="#">Logo</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="#section1">Seção 1</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#section2">Seção 2</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#section3">Seção 3</a>
        </li>
      </ul>
    </div>
  </nav>

  <!-- Seções -->
  <section id="section1" class="bg-primary text-white text-center">
    <h1>Seção 1</h1>
  </section>

  <section id="section2" class="bg-secondary text-white text-center">
    <h1>Seção 2</h1>
  </section>

  <section id="section3" class="bg-success text-white text-center">
    <h1>Seção 3</h1>
  </section>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
