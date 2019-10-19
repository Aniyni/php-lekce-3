<?php
<form method="GET">
   <input type="text"name="surname"><!-- vstupní pole -->
   <input type="submit"><!-- tlačítko pro odeslání formuláře -->
</form>
<?php
echo 'GET: ';
var_dump($_GET);
echo '<br>POST: ';
var_dump($_POST);
