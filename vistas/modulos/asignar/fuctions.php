<?php
        //global $cedula;
        $con = mysqli_connect('192.168.11.247', 'talentoh', 'talentoh', 'talentoh');

        function insertar_datos($id_B,$E1,$E2,$E3,$jefe)
        {
                global $con;

                $asignar_sql = "INSERT INTO e_e(id_B,E1,E2,E3,jefe) VALUES ('$id_B','$E1','$E2','$E3','$jefe')";
                $resul=mysqli_query($con, $asignar_sql);

                set_time_limit(500);
                return $resul;
        }
?>