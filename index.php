<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>BookWise - Descubre un mundo de conocimiento</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Estilos personalizados -->
  <link href="index.css" rel="stylesheet">
</head>

<body>
  <!-- Navbar -->
  <?php include 'barra_de_navegacion.php'; ?>

  <!-- Hero -->
  <section class="hero my-4">
    <div class="container">
      <h1>Descubre un mundo de conocimiento</h1>
      <p class="lead mb-4">Accede a una vasta colección de libros y cursos en línea. Regístrate hoy y comienza tu viaje.</p>
      <button id="explorarBtn" class="btn btn-primary btn-lg">Explorar la biblioteca</button>
    </div>
  </section>

  <!-- Libros de tendencia -->
  <section id="biblioteca" class="container my-5">
    <h3 class="section-title">Libros de tendencia</h3>
    <div class="row g-4">
      <div class="col-6 col-md-4 col-lg-2 book-card">
        <img src="https://images.unsplash.com/photo-1512820790803-83ca734da794?w=400&q=80" alt="El Reino Perdido">
        <h6 class="mt-2">El Reino Perdido</h6>
        <p class="text-muted small">Autor: Elara Blackwood</p>
      </div>
      <div class="col-6 col-md-4 col-lg-2 book-card">
        <img src="https://images.unsplash.com/photo-1524995997946-a1c2e315a42f?w=400&q=80" alt="Estrellas Fugaces">
        <h6 class="mt-2">Estrellas Fugaces</h6>
        <p class="text-muted small">Autor: Orion Nova</p>
      </div>
      <div class="col-6 col-md-4 col-lg-2 book-card">
        <img src="https://images.unsplash.com/photo-1519681393784-d120267933ba?w=400&q=80" alt="El Enigma del Reloj">
        <h6 class="mt-2">El Enigma del Reloj</h6>
        <p class="text-muted small">Autor: Agatha Grey</p>
      </div>
      <div class="col-6 col-md-4 col-lg-2 book-card">
        <img src="https://images.unsplash.com/photo-1473187983305-f615310e7daa?w=400&q=80" alt="Sombras del Pasado">
        <h6 class="mt-2">Sombras del Pasado</h6>
        <p class="text-muted small">Autor: Thomas Thorne</p>
      </div>
      <div class="col-6 col-md-4 col-lg-2 book-card">
        <img src="https://images.unsplash.com/photo-1528209392022-802e7c748e0d?w=400&q=80" alt="Un Amor Inesperado">
        <h6 class="mt-2">Un Amor Inesperado</h6>
        <p class="text-muted small">Autor: Isabella Rose</p>
      </div>
    </div>
  </section>

  <!-- Cursos populares -->
  <section id="cursos" class="container my-5">
    <h3 class="section-title">Cursos populares</h3>
    <div class="row g-4">
      <div class="col-6 col-md-4 col-lg-2 course-card">
        <img src="https://images.unsplash.com/photo-1504208434309-cb69f4fe52b0?w=400&q=80" alt="Arte Digital para Principiantes">
        <h6 class="mt-2">Arte Digital para Principiantes</h6>
        <p class="text-muted small">Instructor: Anya Petrova</p>
      </div>
      <div class="col-6 col-md-4 col-lg-2 course-card">
        <img src="https://images.unsplash.com/photo-1581090700227-1e37b190418e?w=400&q=80" alt="Fundamentos de Negocios">
        <h6 class="mt-2">Fundamentos de Negocios</h6>
        <p class="text-muted small">Instructor: David Chen</p>
      </div>
      <div class="col-6 col-md-4 col-lg-2 course-card">
        <img src="https://images.unsplash.com/photo-1507525428034-b723cf961d3e?w=400&q=80" alt="Fotografía Profesional">
        <h6 class="mt-2">Fotografía Profesional</h6>
        <p class="text-muted small">Instructor: Sophia Rossi</p>
      </div>
      <div class="col-6 col-md-4 col-lg-2 course-card">
        <img src="https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?w=400&q=80" alt="Cocina Internacional">
        <h6 class="mt-2">Cocina Internacional</h6>
        <p class="text-muted small">Instructor: Marco Bianchi</p>
      </div>
      <div class="col-6 col-md-4 col-lg-2 course-card">
        <img src="https://images.unsplash.com/photo-1511379938547-c1f69419868d?w=400&q=80" alt="Teoría Musical">
        <h6 class="mt-2">Teoría Musical</h6>
        <p class="text-muted small">Instructor: Liam Walker</p>
      </div>
    </div>
  </section>

  <!-- Registro -->
  <section id="registro" class="text-center my-5">
    <h2 class="fw-bold mb-3 text-light">Comienza a aprender hoy</h2>
    <p class="text-muted">Regístrate para acceder a nuestra biblioteca completa de libros y cursos.</p>
    <button id="registroBtn" class="btn btn-primary btn-lg">Regístrate ahora</button>
  </section>

  <!-- Footer -->
  <footer>
    <div class="container">
      <div class="d-flex justify-content-center gap-4 mb-3">
        <a href="#">Acerca de</a>
        <a href="#">Contacto</a>
        <a href="#">Términos de servicio</a>
        <a href="#">Política de privacidad</a>
      </div>
      <div class="social-icons mb-3">
        <a href="#"><i class="bi bi-twitter"></i></a>
        <a href="#"><i class="bi bi-facebook"></i></a>
        <a href="#"><i class="bi bi-instagram"></i></a>
      </div>
      <p>© 2024 BookWise. Todos los derechos reservados.</p>
    </div>
  </footer>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Bootstrap Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

  <!-- JavaScript -->
  <script>
    document.getElementById("explorarBtn").addEventListener("click", function () {
      document.getElementById("biblioteca").scrollIntoView({ behavior: "smooth" });
    });

    document.getElementById("registroBtn").addEventListener("click", function () {
      document.getElementById("registro").scrollIntoView({ behavior: "smooth" });
    });
  </script>
</body>
</html>
