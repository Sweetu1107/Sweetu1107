<html>
<head>
<meta charset="utf-8">
<title>Simple Age Calculator in PHP</title>
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
<div class="container">
<h1 class="page-header text-center">How to Create Simple Age Calculator in PHP</h1>
<div class="row">
<div class="col-sm-4 col-sm-offset-4">
<div class="form-group">
<label>Birthday:</label>
</div>
<button type="submit" name="calculate" class="btn btn-primary">Calculate</button>
</form>
 
<?php
if(isset($_POST['calculate'])){
$bday = $_POST['birthday'];
$today = date('Y-m-d');
$diff = date_diff(date_create($bday), date_create($today));
?>
<div class="alert alert-info text-center" style="margin-top:20px">
'.$diff->format('%y').''; ?>
</div>
<?php
}
?>
</div>
</div>
</div>
</body>
</html></div></div></div>