<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="index.jsp">ESCUELA</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="../index.php">Inicio<span class="sr-only">(current)</span></a>
      </li>
      <!-- Area Estudiantes -->
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          ESTUDIANTES
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="views/consultarEstudiante.php">Ver Estudiantes</a>
          <a class="dropdown-item" href="views/crearEstudiante.php">Nuevo Estudiante</a>
        </div>
      </li>
      <!-- Area de Incripciones -->
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          INSCRIPCIONES
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="views/crearInscripcion.php">Nueva Inscripcion</a>
          <a class="dropdown-item" href="views/consultarInscripcion.php">Ver Inscripciones</a>
        </div>
      </li>
      <!-- Fin Inscripciones -->
      <!-- Inicio Notas -->
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          NOTAS
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="views/crearNota.php">Registrar Nueva Nota</a>
          <a class="dropdown-item" href="views/consultarNota.php">Consultar Notas</a>
        </div>
      </li>
      <!-- Fin Notas -->
      <!-- Inicio Profesores -->
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          PROFESORES
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="views/crearProfesor.php">Nuevo Profesor</a>
          <a class="dropdown-item" href="views/consultarProfesor.php">Ver Profesores</a>
        </div>
      </li>
      <!-- Fin Profesores -->
      <!-- Grados -->
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          GRADOS
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="views/consultarGrados.php">Consultar Grados</a>
        </div>
      </li>
      <!-- Fin Grados -->
      <!-- Cursos --> 
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          CURSOS
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
       <a class="dropdown-item" href="views/crearCurso.php">Nuevo Curso</a>
          <a class="dropdown-item" href="views/consultarCurso.php">Ver Cursos</a>
        </div>
      </li>
      <!-- Fin Cursos -->
    </ul>
  </div>
</nav>