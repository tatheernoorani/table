<?php
    $_student_record = [
        array(
            'name' => 'Alex',
            'email' => 'alex@yopmail.com',
            'grade' => 'A'
        ),
        array(
            'name' => 'John',
            'email' => 'John@yopmail.com',
            'grade' => 'B'
 ),
        array(
            'name' => 'Sam',
            'email' => 'sam@yopmail.com',
            'grade' => 'A+'
        ),
        array(
            'name' => 'Alice',
            'email' => 'alice@yopmail.com',
            'grade' => 'C'
        ),
    ];
?>
<!DOCTYPE html>
<html>
    <head>
    
    </head>
    <body>
        <table>
            <tr>
                <th>NAME</th>
                <th>EMAIL</th>
                <th>GRADE</th>
            </tr>
            <?php
foreach($_student_record as $key => $value){
                    echo "<tr>";

                    foreach($value as $k => $v){
                        echo "<td>$v</td>"; // Get value.
                    }
                    
                    echo "</tr>";
                }
            ?>
        </table>
    </body>
</html>
