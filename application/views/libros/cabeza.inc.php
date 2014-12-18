
<body>
     <header>
        <nav>
          <ul class="nav">
          <?php
            switch ($objeto) {
              case '1':{  //index
                echo "<li class='active'><a href='index.php' >Home</a></li>
                      <li><a href='#'>Temas</a>
                        <ul>
                          <li><a href='construccion.php'>Educación Fisica</a></li>
                          <li><a href='informatica.php'>Informatica</a></li>
                          <li><a href='construccion.php'>Higiene y seguridad</a></li>
                        </ul>
                      </li>
                      <li><a href='biblioteca.php'>Libros</a></li>
                      <li><a href='contacto.php'>Contacto</a></li>
                      <li><a href='foro.php'>Foro</a></li>";
                  break;
              }
              //Aca empieza el submenu
              case '2.1':{ //educacion fisica
                echo "<li><a href='index.php' >Home</a></li>
                      <li><a href='#'>Temas</a>
                        <ul>
                          <li class='active' ><a href='construccion.php'>Educación Fisica</a></li>
                          <li><a href='informatica.php'>Informatica</a></li>
                          <li><a href='construccion.php'>Higiene y seguridad</a></li>
                        </ul>
                      </li>
                      <li><a href='biblioteca.php'>Libros</a></li>
                      <li><a href='contacto.php'>Contacto</a></li>
                      <li><a href='construccion.php'>Entrar</a></li>";
                  break;
              }
              case '2.2':{ //informatica
                echo "<li><a href='index.php' >Home</a></li>
                      <li><a href='construccion.php'>Temas</a>
                        <ul>
                          <li><a href='construccion.php'>Educación Fisica</a></li>
                          <li class='active' ><a href='informatica.php'>Informatica</a></li>
                          <li><a href='construccion.php'>Higiene y seguridad</a></li>
                        </ul>
                      </li>
                      <li><a href='biblioteca.php'>Libros</a></li>
                      <li><a href='contacto.php'>Contacto</a></li>
                      <li><a href='construccion.php'>Entrar</a></li>";
                  break;
              }
              case '2.3':{ //computacion
                echo "<li><a href='index.php' >Home</a></li>
                      <li><a href='construccion.php'>Temas</a>
                        <ul>
                          <li><a href='construccion.php'>Educación Fisica</a></li>
                          <li><a href='informatica.php'>Informatica</a></li>
                          <li><a href='construccion.php'>Higiene y seguridad</a></li>
                        </ul>
                      </li>
                      <li><a href='biblioteca.php'>Libros</a></li>
                      <li><a href='contacto.php'>Contacto</a></li>
                      <li><a href='construccion.php'>Entrar</a></li>";
                  break;
              }
              case '2.4':{ //HigYSegu
                echo "<li><a href='index.php' >Home</a></li>
                      <li><a href='construccion.php'>Temas</a>
                        <ul>
                          <li><a href='construccion.php'>Educación Fisica</a></li>
                          <li><a href='informatica.php'>Informatica</a></li>
                          <li class='active' ><a href='construccion.php'>Higiene y seguridad</a></li>
                        </ul>
                      </li>
                      <li><a href='biblioteca.php'>Libros</a></li>
                      <li><a href='contacto.php'>Contacto</a></li>
                      <li><a href='construccion.php'>Entrar</a></li>";
                  break;
              }
              //Termino el submenu.
              case '3':{ 
                echo "<li><a href='index.php' >Home</a></li>
                      <li><a href='construccion.php'>Temas</a>
                        <ul>
                          <li><a href='construccion.php'>Educación Fisica</a></li>
                          <li><a href='informatica.php'>Informatica</a></li>
                          <li><a href='construccion.php'>Higiene y seguridad</a></li>
                        </ul>
                      </li>
                      <li><a href='biblioteca.php'>Libros</a></li>
                      <li class='active' ><a href='contacto.php'>Contacto</a></li>
                      <li><a href='construccion.php'>Entrar</a></li>";
                  break;
              }
              case '4':{ 
                echo "<li><a href='index.php' >Home</a></li>
                      <li><a href='#'>Temas</a>
                        <ul>
                          <li><a href='construccion.php'>Educación Fisica</a></li>
                          <li><a href='informatica.php'>Informatica</a></li>
                          <li><a href='construccion.php'>Higiene y seguridad</a></li>
                        </ul>
                      </li>
                      <li><a href='biblioteca.php'>Libros</a></li>
                      <li><a href='contacto.php'>Contacto</a></li>
                      <li class='active' ><a href='construccion.php'>Entrar</a></li>";
                  break;
              }
              case '5':{ 
                echo "<li><a href='index.php' >Home</a></li>
                      <li><a href='#'>Temas</a>
                        <ul>
                          <li><a href='construccion.php'>Educación Fisica</a></li>
                          <li><a href='informatica.php'>Informatica</a></li>
                          <li><a href='construccion.php'>Higiene y seguridad</a></li>
                        </ul>
                      </li>
                      <li class='active' ><a href='biblioteca.php'>Libros</a></li>
                      <li><a href='contacto.php'>Contacto</a></li>
                      <li><a href='construccion.php'>Entrar</a></li>";
                  break;
              }
              case 'error': {
                echo "<p style='text-align:center;font:3em;'>LO LAMENTAMOS TODAVIA NO ESTA DISPONIBLE</p>
                      <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
                      <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
                      <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>";
              }
      }
    ?>
      </ul>
    </nav>
    <img src="imagenes/logo.png">
    <h1>Aprender jugando.</h1>
</header>