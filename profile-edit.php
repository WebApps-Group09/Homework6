<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Edit Profile</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Lato|Roboto+Slab" rel="stylesheet" type="text/css">
<style>
body {
    font-family: 'Lato', sans-serif;
}
h1, h3, label {
    font-family: 'Roboto Slab', serif;
}
h1 {
    font-size: 30px;
}
h3 {
    font-size: 18px;
}
</style>
</head>
<body>
<?php
$handle = fopen('page_counts.txt','r+');
$line = fgets($handle);
$counts = explode(',',$line);
$newIndexCount = intval($counts[1]) + 1;
$newLine = $counts[0].','.strval($newIndexCount).','.$counts[2];
file_put_contents('page_counts.txt',$newLine);
fclose($handle);
?>
    <div class="container">
        <h1>Edit Profile</h1>
        <form method="post" action="profile.php">
            <fieldset>
                <div class="row form-group">
                    <label class="col-sm-2 control-label" for="inputName">Full Name</label>
                    <div class="col-sm-5">
                        <input class="form-control" name="fname" id="inputFirstName" placeholder="First" type="text" value="<?php if(isset($_COOKIE['fname']) && !empty($_COOKIE['fname'])){echo $_COOKIE['fname'];}?>" required/>
                    </div>
                    <div class="col-sm-5">
                        <input class="form-control" name="lname" id="inputLastName" placeholder="Last" type="text" value="<?php if(isset($_COOKIE['lname']) && !empty($_COOKIE['lname'])){echo $_COOKIE['lname'];}?>" required/>
                    </div>
                </div>
                <div class="row form-group">
                    <label class="col-sm-2 control-label" for="inputAddr">Address/Dorm</label>
                    <div class="col-sm-6">
                        <input class="form-control" name="address" id="inputAddr" placeholder="Address" type="text" value="<?php if(isset($_COOKIE['address']) && !empty($_COOKIE['address'])){echo $_COOKIE['address'];} ?>" required/>
                    </div>
                    <div class="col-sm-4">
                        <input class="form-control" name="dorm" id="inputDorm" placeholder="Dorm" type="text" value="<?php if(isset($_COOKIE['dorm']) && !empty($_COOKIE['dorm'])){echo $_COOKIE['dorm'];} ?>" required/>
                    </div>
                </div>
                <div class="row form-group">
                    <label class="col-sm-2 control-label" for="inputLoc">City/State/Zip</label>
                    <div class="col-sm-4">
                        <input class="form-control" name="city" id="inputCity" placeholder="City" type="text" value="<?php if(isset($_COOKIE['city']) && !empty($_COOKIE['dorm'])){echo $_COOKIE['city'];} ?>" required/>
                    </div>
                    <div class="col-sm-3">
                        <input class="form-control" name="state" id="inputState" placeholder="State" type="text" value="<?php if(isset($_COOKIE['state']) && !empty($_COOKIE['state'])){echo $_COOKIE['state'];} ?>" required/>
                    </div>
                    <div class="col-sm-3">
                        <input class="form-control" name="zip" id="inputZip" placeholder="Zip" type="text" value="<?php if(isset($_COOKIE['zip']) && !empty($_COOKIE['zip'])){echo $_COOKIE['zip'];} ?>" required/>
                    </div>
                </div>
                <div class="row form-group">
                    <label class="col-sm-2 control-label" for="inputYear">Current Year</label>
                    <div class="col-sm-10">
                        <input class="form-control" name="year" id="inputYear" placeholder="ex: Senior" type="text" value="<?php if(isset($_COOKIE['year']) && !empty($_COOKIE['year'])){echo $_COOKIE['year'];} else {echo "";} ?>">
                    </div>
                </div>
                <div class="row form-group">
                    <label class="col-sm-2 control-label" for="inputSports">Favorite Sports</label>
                    <div class="col-sm-10" id="inputSports">
                        <input type="checkbox" name="sports[]" <?php if ((!empty(unserialize($_COOKIE["sports"])) && in_array("iceskating", unserialize($_COOKIE["sports"])))) {echo "checked";} ?> value="iceskating"> Ice Skating<br>
                        <input type="checkbox" name="sports[]" <?php if ((!empty(unserialize($_COOKIE["sports"])) && in_array("curling", unserialize($_COOKIE["sports"])))) {echo "checked";} ?> value="curling"> Curling<br>
                        <input type="checkbox" name="sports[]" <?php if ((!empty(unserialize($_COOKIE["sports"])) && in_array("ballet", unserialize($_COOKIE["sports"])))) {echo "checked";} ?> value="ballet"> Ballet<br>
                        <input type="checkbox" name="sports[]" <?php if ((!empty(unserialize($_COOKIE["sports"])) && in_array("tennis", unserialize($_COOKIE["sports"])))) {echo "checked";} ?> value="tennis"> Tennis<br>
                        <input type="checkbox" name="sports[]" <?php if ((!empty(unserialize($_COOKIE["sports"])) && in_array("golf", unserialize($_COOKIE["sports"])))) {echo "checked";} ?> value="golf"> Golf<br>
                        <input type="checkbox" name="sports[]" <?php if ((!empty(unserialize($_COOKIE["sports"])) && in_array("basketball", unserialize($_COOKIE["sports"])))) {echo "checked";} ?> value="basketball"> Basketball<br>
                        <input type="checkbox" name="sports[]" <?php if ((!empty(unserialize($_COOKIE["sports"])) && in_array("gymnastics", unserialize($_COOKIE["sports"])))) {echo "checked";} ?> value="gymnastics"> Gymnastics<br>
                        <br>
                    </div>
                </div>
                <div class="row form-group">
                    <label class="col-sm-2 control-label" for="inputQuote">Favorite Quote</label>
                    <div class="col-sm-10">
                        <input class="form-control" name="quote" id="inputQuote" placeholder="ex: Don't cry because it's over, smile because it happened." type="text" value="<?php if(isset($_COOKIE['quote']) && !empty($_COOKIE['quote'])){echo $_COOKIE['quote'];} ?>">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-secondary">Submit</button>
                    </div>
                </div>
            </fieldset>
        </form>
    </div>
    </body>
</html>
