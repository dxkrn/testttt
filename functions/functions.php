<?php

function getTotalSiswa($conn) {
    $sql = 'SELECT COUNT(id_user) AS total_siswa FROM tb_user WHERE role="siswa"';
    $result = mysqli_query($conn, $sql);
    if ($result->num_rows > 0){
        $row = mysqli_fetch_assoc($result);
        return $row['total_siswa'];
    }

}

?>