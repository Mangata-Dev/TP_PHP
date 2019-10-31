
<div class="container">
  <div class="row">
    <div class="col-4 offset-4">
      <h1>Calculatrice :</h1>
      <form id="my-form"  >
        <div class="form-group">
          <input type="number" name="value1" class="form-control" id="value1" placeholder="Nombre 1" required value="">
        </div>
        <div class="form-group">
          <input type="number" name="value2" class="form-control" id="value2" placeholder="Nombre 2" required value="">
        </div>
        <div class="form-group">
          <input type="text" name="operateur" class="form-control" id="operateur" placeholder="operateur" required value="">
        </div>
        <div class="form-group">
          <input type="submit" name="" id="btn-submit" value="Envoyer">
        </div>
      </form>
      <div id="calcul">

      </div>
    </div>
  </div>
</div>

<script
  src="https://code.jquery.com/jquery-3.4.1.js"
  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  crossorigin="anonymous"></script>
<script type="text/javascript" src="script.js"></script>
