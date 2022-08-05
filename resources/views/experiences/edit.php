<?= view('layout.header') ?>

<section class="w3-padding">

<h2>Edit Experience</h2>

<form method="post" action="/console/experiences/edit/<?= $experience->id ?>" novalidate>
<?= csrf_field() ?>
  
  <label for="companyName">Company Name:</label>
  <input class="form-control" type="text" name="companyName" id="companyName" value="<?= old('companyName', $experience->companyName) ?>" required>
  <span style="color:red;"><?= $errors->first('companyName'); ?></span>
    
  <br>

  <label for="position">Position:</label>
  <input class="form-control" type="text" name="position" id="position" value="<?= old('position', $experience->position) ?>" required>
  <span style="color:red;"><?= $errors->first('position'); ?></span>
  
  <br>
  
  <label for="position">Responsibilities:</label>
  <textarea class="form-control" type="text" name="responsibilities" id="responsibilities" rows="10"><?= old('responsibilities', $experience->responsibilities) ?></textarea>
  <span style="color:red;"><?= $errors->first('responsibilities'); ?></span>
      
  <script>

  ClassicEditor
    .create( document.querySelector( '#responsibilities' ) )
    .then( editor => {
        console.log( editor );
    } )
    .catch( error => {
        console.error( error );
    } );
    
  </script>
  
  <br>
  
  <label for="startDate">Start Date:</label>
  <input class="form-control" type="date" name="startDate" id="startDate" value="<?= old('startDate', $experience->startDate) ?>" required>
  <span style="color:red;"><?= $errors->first('startDate'); ?></span>

  <br>
  
  <label for="endDate">End Date:</label>
  <input class="form-control" type="date" name="endDate" id="endDate" value="<?= old('endDate', $experience->endDate) ?>" required>
  <span style="color:red;"><?= $errors->first('endDate'); ?></span>
  
  <br>
  
  <input type="submit" value="Edit Experience">
  
</form>

<p><a href="/console/experiences/list"><i class="fas fa-arrow-circle-left"></i> Return to Experience List</a></p>
    <!-- <a href="/console/experiences/list">Back to Type List</a> -->

</section>

</body>

</html>