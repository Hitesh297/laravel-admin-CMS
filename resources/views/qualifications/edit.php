<?= view('layout.header') ?>

        <section class="w3-padding">

        <h2>Edit Qualification</h2>

<form method="post" action="/console/qualifications/edit/<?= $qualification->id ?>" novalidate>
<?= csrf_field() ?>
  <label for="credential">Credential:</label>
  <input class="form-control" type="text" name="credential" id="credential" value="<?= old('credential', $qualification->credential) ?>">
  <span style="color:red;"><?= $errors->first('credential'); ?></span>
    
  <br>
  
  <label for="details">Details:</label>
  <textarea class="form-control" type="text" name="details" id="details" rows="10"><?= old('details', $qualification->details) ?></textarea>
  <span style="color:red;"><?= $errors->first('details'); ?></span>
      
  <script>

  ClassicEditor
    .create( document.querySelector( '#details' ) )
    .then( editor => {
        console.log( editor );
    } )
    .catch( error => {
        console.error( error );
    } );
    
  </script>
  
  <br>
  
  <label for="yearCompleted">Year Completed:</label>
  <input class="form-control" type="number" min="1900" max="2099" name="yearCompleted" id="yearCompleted" value="<?= old('yearCompleted', $qualification->yearCompleted) ?>">
  <span style="color:red;"><?= $errors->first('yearCompleted'); ?></span>
  
  <br>
  
  <input type="submit" value="Edit Qualification">
  
</form>

<p><a href="/console/qualifications/list"><i class="fas fa-arrow-circle-left"></i> Return to Qualifications List</a></p>
            <!-- <a href="/console/projects/list">Back to Project List</a> -->

        </section>

    </body>
</html>