<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    

        <?php 
        
            require_once('Students.php');
            $stu = new Students();
            $result = $stu->list_of_students();

            var_dump($result);

            foreach($result as $row){

                for($i = 0; $i < count($row); $i++ ){
                    echo $row[$i] . '<br>';
                }

                /*
                echo $row[0] . '<br>';
                echo $row[1] . '<br>';
                echo $row[2] . '<br>';
                echo $row[3] . '<br>';
                */
            }
        
        
        ?>




</body>
</html>