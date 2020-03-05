<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/css/bootstrap.min.css" integrity="sha384-PDle/QlgIONtM1aqA2Qemk5gPOE7wFq8+Em+G/hmo5Iq0CCmYZLv3fVRDJ4MMwEA" crossorigin="anonymous">
    <title>Convert to Ecxel</title>
</head>
<body>
    <div class="container col-md-2"  style="margin-top: 30px;">
        <h3 align="center" style="margin-bottom: 20px;">Convert to Ecxel</h3>
        <form method="POST" action="lib/core.php">
            <div class="form-group "><label class="" for="datefrom">Data from:</label>
                <input type="date" name="datefrom" class="form-control" id="datefrom" required>
            </div>
            <div class="form-group">
				<div class="form-group "><label class="" for="dateto">Data to:</label>
                <input type="date" name="dateto" class="form-control" id="dateto" required>
            </div>

            <input type="submit" id="submit" 
                name="submit" class="btn btn-primary" value="Convert to XLS" />
        </form>
		<hr/>
		<p>База содержит записи с 01.02.2020 по 10.02.2020</p>
    </div>
</body>
</html>


