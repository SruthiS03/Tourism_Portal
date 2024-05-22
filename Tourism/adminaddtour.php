<?php include("admin.php") ?>
<head>
<style>
	label{display: inline-block;
	width: 100px;
	text-align:left;
	}
</style>
<body>
<div class="register">
<form action="addtour.php" method="post">
<br>

<label for="Tourcode">Tourcode:</label>
<input type="text" size="50" placeholder="Enter Tour Code:" name="Tourcode" required/>
<br><br>

<label for="Tourname">Tourname:</label>
<input type="text" name="Tourname" />
<br><br>

<label for="Duration">Duration:</label>
<input type="Text" name="Duration" />
<br><br>

<label for="Placescovered">Placescovered:</label>
<input type="text"  name="Placescovered"/>
<br><br>

<label for="Costperperson">Costperperson:</label>
<input type="number" name="Costperperson"/>
<br><br>

<label for="Boardingpoint">Boardingpoint:</label>
<input type="text" name="Boardingpoint"/>
<br><br>

<label for="Transport">Transport:</label>
<input type="text" name="Transport"/>
<br><br>

<label for="Accommodation">Accommodation:</label>
<input type="text" name="Accommodation" />
<br><br>

<label for="Food">Food:</label>
<input type="text" name="Food"/>
<br><br>

<label for="Status">Status:</label>
<input type="radio" name="Status" value="Active"/>Active
<input type="radio" name="Status" value="Inactive"/>Inactive
<br><br>

<input type="submit" value="SUBMIT"/>
<input type="reset" value="RESET"/>


</form>
</div>
</body>
</head>