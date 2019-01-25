<?php
session_start();

echo "<form method='post'>
<laber for='name'>Entrez votre prénom :</label>
<input type='text id='name' name='name'>
<input type='submit' name='submit' value='Valider'/>
</form>";

if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    echo $name;
}
