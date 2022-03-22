<!doctype html>
<html lang="fr">
<head>
    <meta charset='utf-8'>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
    <title>tabletest</title>
    <link rel="stylesheet" href="css2.css">
    <style>
    body{ margin-top: 5em; }
    .table {
        margin-top: 100px;
        margin-bottom: 100px;
}
</style>
</head>
<body>
<table class="table">
    <thead>
        <tr>
            <th scope="col">Nom</th>
            <th scope="col">Prenom</th>
            <th scope="col">Date de naissance</th>
            <th scope="col">Aime le cours Web</th>
            <th scope="col">Remarques</th>
            <th scope="col">CRUD</th>
        </tr>
    </thead>
<tbody id="studentsTableBody">
</tbody>
</table>
<form id="addStudentForm" action="" onsubmit="onFormSubmit();">
<div class="form-group row">
    <p>
    <label for="inputNom" class="col-sm-2 col-form-label">Nom*</label>
    </p>

 
    <div class="col-sm-3">
       <input type="text" class="form-control" id="inputNom" required="required">

        <p>
        <label for="inputPrenom" class="col-sm-2 col-form-label">Prenom</label>
        </p>

       <input type="text" class="form-control" id="inputPrenom" >
       <p></p>
        <span>
        <label for="inputNaissance" class="col-sm-2 col-form-label">Date de naissance</label>
        </span>
        <input type="text" class="form-control" id="inputNaissance" >
        <p></p>
        <span>
            <label for="inputCours" class="col-sm-2 col-form-label">Adore le cours</label>
        </span>
        <input type="checkbox" id="check" class="form-control" id="inputNaissance" >
        <p></p>
        <span>
            <label for="inputRemarques" class="col-sm-2 col-form-label">Remarques</label>
        </span>
        <input type="text" class="form-control" id="inputRemarques" >

    </div>


</div>
...
<div class="form-group row">
    <span class="col-sm-2"></span>
    <div class="col-sm-2">
        <button type="submit" class="btn btn-primary form-control">Submit</button>
    </div>
</div>
</form>



<script>


    function suppr(bouton) {
    
    var row = bouton.parentNode.parentNode;
    row.parentNode.removeChild(row)

    }

    function edit(bouton) {
    var row = bouton.parentNode.parentNode;
    
    }

    function onFormSubmit() {
// prevent the form to be sent to the server
        event.preventDefault();
        let nom = $("#inputNom").val();
        let nom1 = $("#inputPrenom").val();
        let nom2 = $("#inputNaissance").val();
        let nom4 = $("#inputRemarques").val();


        if (document.getElementById("check").checked == true)
	{
		
        let nom3 = "oui"
        $("#studentsTableBody").append(`<tr><td>${nom}</td><td>${nom1}</td><td>${nom2}</td><td>${nom3}</td><td>${nom4}</td><td><a button class=btn1  btn-primary onclick="return edit(this)">Edit</a> <a button class=btn2 btn-primary onclick="return suppr(this)">Delete</a></td><td></td></tr>`);

    }
        else   {

            let nom3 = "non"
            $("#studentsTableBody").append(`<tr><td>${nom}</td><td>${nom1}</td><td>${nom2}</td><td></td><td>${nom4}</td><td><a button class=btn1 btn-primary onclick="return edit(this)">Edit</a> <a button class=btn2 btn-primary onclick="return suppr(this)">Delete</a></td><td></td></tr>`);
            
        }





    
    }

 $.ajax({
    type: 'POST',          //La méthode cible (POST ou GET)
    url : 'addUser.php', //Script Cible
    asynch : false
 });
  

</script>



</body>
</html>

<?php 
 $servername = 'localhost';
 $username = 'root';
 $password = 'root';
 
 //On établit la connexion
 $conn = new mysqli($servername, $username, $password, "Bdd_tp3");
 
 //On vérifie la connexion
 if($conn->connect_error){
     die('Erreur : ' .$conn->connect_error);
 }
 cho 'Connexion réussie <br>';


?>

