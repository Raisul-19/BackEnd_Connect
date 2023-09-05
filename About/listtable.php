<?php

    echo '<table><tr><td>Name</td><td>Phone</td><td>District</td>
            </tr>';

    while($row = mysqli_fetch_assoc($run)){
        echo '<tr><td>'.$row['name'].'</td><td>'.$row['phone'].'</td><td>'.$row['district'].'</td></tr>';
    }

    echo '</table>';



?>