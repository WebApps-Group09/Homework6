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
if (!empty($_POST['fname'])) {
    $fname = $_POST['fname'];
} else if (isset($_COOKIE['fname'])) {
    $fname = $_COOKIE['fname'];
}

if (!empty($_POST['lname'])) {
    $lname = $_POST['lname'];
} else if (isset($_COOKIE['lname'])) {
    $lname = $_COOKIE['lname'];
}

if (!empty($_POST['address'])) {
    $address = $_POST['address'];
} else if (isset($_COOKIE['address'])) {
    $address = $_COOKIE['address'];
}

if (!empty($_POST['dorm'])) {
    $dorm = $_POST['dorm'];
} else if (isset($_COOKIE['dorm'])) {
    $dorm = $_COOKIE['dorm'];
}

if (!empty($_POST['city'])) {
    $city = $_POST['city'];
} else if (isset($_COOKIE['city'])) {
    $city = $_COOKIE['city'];
}

if (!empty($_POST['state'])) {
    $state = $_POST['state'];
} else if (isset($_COOKIE['state'])) {
    $state = $_COOKIE['state'];
}

if (!empty($_POST['zip'])) {
    $zip = $_POST['zip'];
} else if (isset($_COOKIE['zip'])) {
    $zip = $_COOKIE['zip'];
}

if (!empty($_POST['year'])) {
    $year = $_POST['year'];
} else if (isset($_COOKIE['year'])) {
    $year = $_COOKIE['year'];
}

if (!empty($_POST['sports'])) {
    $sports = $_POST['sports'];
} else if (isset($_COOKIE['sports'])) {
    $sports = unserialize($_COOKIE['sports']);
}

if (!empty($_POST['quote'])) {
    $quote = $_POST['quote'];
} else if (isset($_COOKIE['quote'])) {
    $quote = $_COOKIE['quote'];
}

setcookie('fname', $fname);
setcookie('lname', $lname);
setcookie('address', $address);
setcookie('dorm', $dorm);
setcookie('city', $city);
setcookie('state', $state);
setcookie('zip', $zip);
setcookie('year', $year);
setcookie('sports', serialize($sports));
setcookie('quote', $quote);

        echo '<h3>Full Name</h3>';
            echo '<p>'.$fname.' '.$lname.'</p>';
        echo '<h3>Address/Dorm</h3>';
            echo '<p>'.$address.' '.$dorm.'</p>';
        echo '<h3>City/State/Zip</h3>';
            echo '<p>'.$city.' '.$state.' '.$zip.'</p>';
        echo '<h3>Current Year</h3>';
            echo '<p>'.$year.'</p>';
        echo '<h3>Favorite Sports</h3>';
            foreach ($sports as $sport) {
                echo ' '.$sport;
            }
        echo '<h3>Favorite Quote</h3>';
            echo '<p>'.$quote.'</p>';

	$handle = fopen('page_counts.txt','r+');
	$line = fgets($handle);
	$counts = explode(',',$line);
	$newIndexCount = intval($counts[2]) + 1;
	$newLine = $counts[0].','.$counts[1].','.strval($newIndexCount);
	file_put_contents('page_counts.txt',$newLine);
	fclose($handle);
?>
    <br>
    <p><a href="profile-edit.php">Edit Profile</a></p>
    <p><a href="index.php">Return to Home</a></p>
    </div>
</body>
</html>

