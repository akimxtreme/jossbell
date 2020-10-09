<?php

// Obtiene la inforacion del json
$data = file_get_contents("http://kiux.com/archivos/prueba.json");

// Transforma la data en formato legible para PHP
$els = json_decode($data, true);


echo '<div class="row justify-content-center" style="margin-top:5%;">';
    echo '<div class="col-md-6 col-sm-12">';
        echo '<h1 class="text-center">Información extraida del Json</h1>';
    
    // Verifica que exista data en json historial_b
    if ( count($els['historial_b']) > 0 ) {
        
        /* 
        *  Imprime en un table todos los datos del Json y
        *  Recorre la info del historial
        */
        foreach ($els['historial_b'] as $e) {
            echo '<table class="table table-bordered table-sm">';
                echo '<thead>';
                    echo '<tr class="bg-primary text-center">';
                        echo '<th colspan="2">Historial</th>';
                    echo '</tr>';
                echo '</thead>';
                echo '<tbody>';
                    echo '<tr>';
                        echo '<th class="text-right">grupo</th>';
                        echo '<td>'.$e['grupo'].'</td>';
                    echo '</tr>';
                    echo '<tr>';
                        echo '<th class="text-right">proyecto</th>';
                        echo '<td>'.$e['proyecto'].'</td>';
                    echo '</tr>';
                    echo '<tr>';
                        echo '<th class="text-right">nombre_proyecto</th>';
                        echo '<td>'.$e['nombre_proyecto'].'</td>';
                    echo '</tr>';
                    echo '<tr>';
                        echo '<th class="text-right">idioma</th>';
                        echo '<td>'.$e['idioma'].'</td>';
                    echo '</tr>';
                    
                    // Registro
                    echo '<tr class="table-primary">';
                        echo '<th colspan="2" class="text-center">Registro</th>';
                    echo '</tr>';
                    foreach ($e['c_registros'] as $registro) {
                        echo '<tr>';
                            echo '<th class="text-right">tipo_registro</th>';
                            echo '<td>'.$registro['tipo_registro'].'</td>';
                        echo '</tr>';
                        echo '<tr>';
                            echo '<th class="text-right">orden_logico</th>';
                            echo '<td>'.$registro['orden_logico'].'</td>';
                        echo '</tr>';
                        echo '<tr>';
                            echo '<th class="text-right">registro</th>';
                            echo '<td>'.$registro['registro'].'</td>';
                        echo '</tr>';
                        echo '<tr>';
                            echo '<th class="text-right">c1</th>';
                            echo '<td>'.$registro['c1'].'</td>';
                        echo '</tr>';
                    } // end foreach (registro)
                echo '</tbody>'; 
            echo '</table>';
        } // end foreach
        
    } else {
        echo '<div class="alert alert-warning" role="alert">No hay Data Alguna</div>';
    } // end if
    
    echo '</div>';
    
echo '</div>'; // fin del bloque div


?>

