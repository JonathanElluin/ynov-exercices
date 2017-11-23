<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exercice 1</title>
</head>
<body>
<?php for ($i=1; $i<=20; $i++): ?>
    <img style="max-width: 500px" src="https://placem.at/people?txt=Image+<?php echo $i ?>" alt="<?php echo 'Image '.$i ?>">
<?php endfor ?>
</body>
</html>