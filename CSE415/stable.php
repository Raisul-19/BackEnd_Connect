<?php

    echo '<table><tr><td>Name</td><td>ID</td><td>Section</td><td>Batch</td>
            </tr>';

    while($row = mysqli_fetch_assoc($run)){
        echo '<tr><td>'.$row['name'].'</td><td>'.$row['sid'].'</td><td>'
                .$row['section'].'</td><td>'.$row['batch'].'</td></tr>';
    }
    echo '</table>';

?>