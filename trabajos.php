<?php
require_once ("vendor/autoload.php");


use App\Models\{Proyectos, interfaz1, Trabajos};

//guardar los valores

//instancias de trabajos exp. Laboreales
// $exp1=new Trabajos('Desarrollador','esta es la descripcion del trabajo de desarrollador',13);
// $exp2=new Trabajos('Desarrollador Junior','Esta es la descripcion del trabajo de desarrolladro Junior', 15);
// $exp3=new Trabajos('Auxiliar de programación','Esta es la descripcion del trabajo de auxiliar de programación' , 8 );
$trabajos=Trabajos::all(); 





//instancias de los proyectos
$proy1=new Proyectos('Proyecto A','En este proyectos se realizaban tareas del proyecto A', 19);
$proy2=new Proyectos('Proyecto B','En este proyectos se realizaban tareas del proyecto B',27);
$proy3=new Proyectos('Proyecto C','En este proyectos se realizaban tareas del proyecto C',24);
$proy4=new Proyectos('Proyecto D','En este proyectos se realizaban tareas del proyecto D',12);



//primera parte del archivo declaracion de variables y el vector
  $nom='YENNIFER STEFFI';
  $ape='VELANDIA SOTO';
  $nombre = "$nom $ape ";
  $mail= 'steffi.velandia@gmail.com';
  $telefono=3137206955;
  $linkedIn='https://linkedin.com';
  $twitter='@TWITTERDESARROLLADOR';
 
    // vectores con almacenamiento de informaciòn.
   //$experience=[$exp1,$exp2,$exp3,$exp1,$exp2,$exp3];
   $proyectos=[$proy1,$proy2,$proy3,$proy4] ;

//Segunda parte y es la funcion visualizar



//mostramos valores

        function imprimirTrabajos ($trabajos){
            echo '<li class="work-position">';      
            echo "<h5>".$trabajos->nombreT."</h5>";
            echo "<p>".$trabajos->descripcionT."</p>";
            echo "<strong>Achievements:</strong>";
            echo "<ul>";
                echo "<li>".$trabajos->meses."</li>";
                echo "<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>";
                echo "<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>";
            echo "</ul>";
            echo "</li>";

        }
        function imprimirProyectos (interfaz1 $vectorExperiencias){
            echo'<h5>'.$vectorExperiencias->mostrarNombre().'</h5>';
            echo '<div class="row">';
            echo '<div class="col-3">';
                    echo'<img id="profile-picture" src="https://ui-avatars.com/api/?name=John+Doe&size=255" alt="">';
                    echo '</div>';
                    echo '<div class="col">';
                    echo '<p>'.$vectorExperiencias->mostrarDescripcion().'</p>';
                    echo '<p>'.$vectorExperiencias->tiempo().'</p>';
                        echo'<strong>Technologies used:</strong>';
                        echo'<span class="badge badge-secondary">PHP</span>';
                        echo'<span class="badge badge-secondary">HTML</span>';
                        echo'<span class="badge badge-secondary">CSS</span>';
                      echo'</div>';
                echo'</div>';
        }
            



?>