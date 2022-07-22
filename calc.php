<?php
<script type="text/javascript">
function Show1() {
obj=document.getElementById("mydiv1"); obj.style.display="block";
obj=document.getElementById("mydiv2"); obj.style.display="none";
}
function Show2() {
obj=document.getElementById("mydiv2"); obj.style.display="block";
obj=document.getElementById("mydiv1"); obj.style.display="none";
}
</script>

<input type="radio" name="1" onClick="Show1();">1-е блюдо  <input type="radio" name="1" onClick="Show2();">2-е блюдо
 
$GLOBALS['dropdown1'] = file('1bludo_UTF8.txt');
$GLOBALS['dropdown2'] = file('2bludo_UTF8.txt');
<div id="mydiv1" style="display:none;">
<table class="table-3">
    <tr>
      <td>
<form method="POST" id="Form1" name="Form1">
 <table class="table-3">
   <thead>
    <tr>
      <th>Выбор</th>
    </tr>
  </thead>
  <tbody>
          <tr>
              <td data-label="Выбор">
<div class="slct">
<!--<div style="display:inline-block">-->
<select name="Select1" id="Select1" OnChange='Size()' >

foreach ($GLOBALS['dropdown1'] as $n => $stroka) {
 list($name, $calory, $carbon, $fat, $protein) = explode("/", $stroka);
$bludo = str_replace("|"," ",$name);
$ttt = $calory."|".$carbon."|".$fat."|".$protein;
  echo '<option value='.$ttt.'>'.$bludo.'</option>'; } 

</select>
</div>
              </td>
           </tr>
          </tbody>
        </table>
</form>
     </td>
	</tr>
<!--Подвал-->
<tr>
      <td>
      <form oninput="result1.value=(num.value*test[0]).toFixed(0)"> 
        <table  class="table-3">
   <thead>
    <tr>
      <th>Количество</th>
      <th>Калорийность</th>
    </tr>
  </thead>
  <tbody>
          <tr>
              <td data-label="Количество"><div class="inp"><input type="number" name="num" autofocus min="0" value="0"></input></div></td>
              <td data-label="Калорийность"><output name="result1">0</output></td>
           </tr>
          </tbody>
        </table>
       </form>  
</td>
    </tr>
  </tbody>
</table>
</div>

<div id="mydiv2" style="display:none;">
<table class="table-3">
    <tr>
      <td>
<form method="POST" id="Form2" name="Form2">
 <table class="table-3">
   <thead>
    <tr>
      <th>Выбор</th>
    </tr>
  </thead>
  <tbody>
          <tr>
              <td data-label="Выбор">
<div class="slct">
<!--<div style="display:inline-block">-->
<select name="Select1" id="Select1" OnChange='Size()' >

foreach ($GLOBALS['dropdown2'] as $n => $stroka) {
 list($name, $calory, $carbon, $fat, $protein) = explode("/", $stroka);
$bludo = str_replace("|"," ",$name);
$ttt = $calory."|".$carbon."|".$fat."|".$protein;
  echo '<option value='.$ttt.'>'.$bludo.'</option>'; } 

</select>
</div>
              </td>
           </tr>
          </tbody>
        </table>
</form>
     </td>
	</tr>
<!--Подвал-->
<tr>
      <td>
      <form oninput="result1.value=(num.value*test[0]).toFixed(0)"> 
        <table  class="table-3">
   <thead>
    <tr>
      <th>Количество</th>
      <th>Калорийность</th>
    </tr>
  </thead>
  <tbody>
          <tr>
              <td data-label="Количество"><div class="inp"><input type="number" name="num" autofocus min="0" value="0"></input></div></td>
              <td data-label="Калорийность"><output name="result1">0</output></td>
           </tr>
          </tbody>
        </table>
       </form>  
</td>
    </tr>
  </tbody>
</table>
</div>

 <script type="text/javascript">
 SelectDefault1();
 </script>
 <script type="text/javascript">
function SelectDefault1() { // порядковый индекс под которым идёт элемент с value=0
document.getElementById("Select1").options[0].selected=true;
}
function Size() {
  var selind = document.getElementById("Select1").options.selectedIndex;
   var txt= document.getElementById("Select1").options[selind].text;
   var val= document.getElementById("Select1").options[selind].value;
test = val.split('|');
outputArea.innerHTML = txt; 
document.getElementById('placeForText1').innerHTML="Калорийность = "+test[0]+" ккал. "+"Углеводы = "+test[1]+" г. "+"Жиры = "+test[2]+" г. "+"Белки = "+test[3]+" г.";
  }
  </script>
<div id="outputArea" style="text-transform: uppercase"; padding: 5px; margin: 10px 0"></div><div id="placeForText1"></div>
?>
