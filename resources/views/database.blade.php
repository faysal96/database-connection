<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel & DB connection</title>
</head>
<body>
    <?php 
        if(DB::connection()->getPdo()){
            echo "successfully connected to DB and name is ".DB::connection()->getDatabaseName();
        };
    ?>
</body>
</html>