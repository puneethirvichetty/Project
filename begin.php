<!DOCTYPE html>
<html>
<title>begin</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>

<div class="w3-container">
  <h2>Biography</h2>

  <div class="w3-card-4" style="width:50%">
    <header class="w3-container w3-light-grey">
      <h3>Puneeth</h3>
    </header>
    <div class="w3-container">
      <hr>
      <img src="andrew.png" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:60px">
      <p><B>Student at Sathyabama University Studying Bachelor of Degree CSE IIIrd Year </B></p><br>
    </div>
    <button id="Puneeth" class="w3-button w3-block w3-dark-grey" value="Puneeth">See</button> 

  </div>
</div>

<div class="w3-container">
  <h2>Biography</h2>

  <div class="w3-card-4" style="width:70%">
    <header class="w3-container w3-light-grey">
      <h3>Koushik</h3>
    </header>
    <div class="w3-container">
      <hr>
      <img src="kow.jpg" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:60px">
      <p>Student at Sathyabama University Studying Bachelor of Degree CSE IIIrd Year</p><br>
    </div>
    <button id="Koushik" class="w3-button w3-block w3-dark-grey" value="Koushik">See</button>
  </div>
</div>

</body>
</html>

</body>

<script type="text/javascript" src="js/jquery-3.2.1.js"></script>
<script>
	$(function(){
		$("#Koushik").click(function(){
			window.location="http://localhost:8086/project/Koushik.php";
		});
		$("#Puneeth").click(function(){
			window.location="http://localhost:8086/project/b.php";
		});
	});
</script>
</html>
