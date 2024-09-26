





<?php
  include_once("header.php");
  include_once("../process/pizza.php");
?>


<div id="main-banner">
<h1>Faça seu pedido</h1>
</div>

<div id="main-container">
<div class="container">
<div class="row">
  <div class="col-md-12">
    <h2>Monte  a sua pizza como desejar:</h2>
    <form action="process/pizza.php" method="POST" id="pizza-form">

    <div class="form_group">
      <label for="borda">Borda:</label>
      <select name="borda" id="borda" class="form-control"></select>
      <option value="">Selecione a borda</option>
    </div>



    <!-- Os arrais [] permitirão seleção múltipla -->

    <div class="form_group">
      <label for="sabores">Sabores:(Máximo 3)</label>
      <select  multiple name="sabores[]" id="sabores" class="form-control"></select>  
    
    </div>

    <div class="form-gropu">

    <input type="submit" class="btn btn-primary" value="fazer pedido">
    </div>

    </form>
  </div>
</div>


</div>


</div>





<?php
  include_once("footer.php");
?>