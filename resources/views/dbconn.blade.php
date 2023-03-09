<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, inital-scale=1.0">
        <title>Laravel & MYSQL DB Connection</title>
</head>
<body>
    <div>
        <?php
             if(DB::connection()->getPdo()){
                echo"Gratualcje polacznie do DB and DB name is".DB::connection()->getDatabase
             }
             ?>
             </div>
            </body>
            </html>