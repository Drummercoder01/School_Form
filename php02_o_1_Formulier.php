<?php
/*****************
 * Initialisatie *
 *****************/

$_srv = $_SERVER['PHP_SELF'];

/*****************
 * Verwerking    *
 *****************/

if (!isset($_POST['submit']))
{
//********* Formlulier initialisatie **********
  $_output="
    <h1>Formulier</h1>
    <form method=post action=$_srv>
		
      <label>Programmeertaal</label>
        <select name=taal>
          <option value=1>JavaScript</option>
          <option value=2>PHP</option>
          <option value=3>HTML</option>
          <option value=4>CSS</option>
        </select>
      <br><br>

      <label>kennis</label>
        <input type=checkbox name=kennis value=ok checked>
      <br><br>
      <label>&eacute;&eacute;n</label>
        <input type=radio name=radiob value=1 checked>
      <label>twee</label> 
        <input type=radio name=radiob value=2>
      <label>drie</label>
        <input type=radio name=radiob value=3>
      <br><br>
      <label>Datum</label>
        <input type=date name=datum>
      <br><br>
      <label>Tekst gebied</label>
        <textarea name=tekst placeholder='dit is tekst'></textarea>
      <br><br>
      <label>Website</label>
        <input type=url name=website placeholder=website>
      <br><br><br>
        <input type=submit name=submit value=Verzenden >
    </form>";
}
else
{
//********* Formlulier verwerking **********  
  $_programeerSelectie = $_POST["taal"];

	$_kennisBox = isset($_POST["kennis"])?$_POST["kennis"]:"leeg";
	
  $_radioButton = $_POST["radiob"];
  
  $_datum = $_POST["datum"]!=""?$_POST["datum"]:"00-00-00";
  list($_jaar, $_maand, $_dag)=explode("-",$_datum,3);
	
  $_tekst = $_POST["tekst"];
	
  $_website = $_POST["website"];

//********* verwerking **********  
  $_output="
  <h1>Output</h1>
  <ul>
  <li>Geselecteerde programmeertaal : $_programeerSelectie</li>
  <li>Waarde kennis &quot;box&quot; : $_kennisBox</li>
  <li>Geselecteerde &quot;radio Button&quot; : $_radioButton </li>
  <li>Ingegeven datum : $_dag-$_maand-$_jaar</li>
  <li>Ingegeven tekst : $_tekst</li>
  <li>Ingegeven website : $_website</li>    
  </ul>";
  
}

/*****************
 *   output      *
 *****************/

 echo($_output);

?>
