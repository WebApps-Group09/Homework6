<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Edit Profile</title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <div class="row">
                <form method="post">
                    <fieldset>
                        <div class="form-group">
                            <label class="col-xs-2 control-label" for="inputName">Full Name</label>
                            <div class="col-xs-10">
                                <input class="form-control" id="inputName" type="text">
                            </div>
                        </div>
                        <br><br>
                        <div class="form-group">
                            <label class="col-xs-2 control-label" for="inputAddr">Address/Dorm</label>
                            <div class="col-xs-10">
                                <input class="form-control" id="inputAddr" type="text">
                            </div>
                        </div>
                        <br><br>
                        <div class="form-group">
                            <label class="col-xs-2 control-label" for="inputLoc">City/State/Zip</label>
                            <div class="col-xs-10">
                                <input class="form-control" id="inputLoc" type="text">
                            </div>
                        </div>
                        <br><br>
                        <div class="form-group">
                            <label class="col-xs-2 control-label" for="inputYear">Current Year</label>
                            <div class="col-xs-10">
                                <input class="form-control" id="inputYear" type="text">
                            </div>
                        </div>
                        <br><br>
                        <div class="form-group">
                            <label class="col-xs-2 control-label" for="inputSports">Favorite Sports</label>
                            <div class="col-xs-10" id="inputSports">
                               <input type="checkbox" name="sports" value="iceskating"> Ice Skating<br>
                               <input type="checkbox" name="sports" value="gymnastics"> Gymnastics<br>
                               <input type="checkbox" name="sports" value="ballet"> Ballet<br>
                               <input type="checkbox" name="sports" value="golf"> Golf<br>
                               <input type="checkbox" name="sports" value="tennis"> Tennis<br>
                               <input type="checkbox" name="sports" value="curling"> Curling<br>
                               <input type="checkbox" name="sports" value="basketball"> Basketball<br>
                            </div>
                        </div>
                        <br><br>
                        <div class="form-group">
                            <label class="col-xs-2 control-label" for="inputQuote">Favorite Quote</label>
                            <div class="col-xs-10">
                                <input class="form-control" id="inputQuote" type="text">
                            </div>
                        </div>
                        <br><br>
                    </fieldset>
                </form>
            </div>
        </div>
    </body>
</html>
