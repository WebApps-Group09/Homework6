<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Profile</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato|Roboto+Slab" rel="stylesheet" type="text/css">

<style>
body {
    font-family: 'Lato', sans-serif;
}
h1 {
    font-family: 'Roboto Slab', serif;
    font-size: 30px;
}
h3 {
    font-family: 'Roboto Slab', serif;
    font-size: 18px;
}
</style>
</head>
<body>
    <div class="container">
        <h1>Profile</h1>
<?php
        setcookie("name", "Ann");
        echo '<h3>Full Name</h3>';
            echo '<p>'.$name.'</p>';
        echo '<h3>Address/Dorm</h3>';
            echo '<p>'.$address.' '.$dorm.'</p>';
        echo '<h3>City/State/Zip</h3>';
            echo '<p>'.$city.' '.$state.' '.$zip.'</p>';
        echo '<h3>Current Year</h3>';
            echo '<p>'.$year.'</p>';
        echo '<h3>Favorite Sports</h3>';
            foreach ($sport as &$sports) {
                echo ' '.$sport;
            }
        echo '<h3>Favorite Quote</h3>';
            echo '<p>'.$quote.'</p>';
?>
    </div>
</body>
</html>

