<?= view('layout.header') ?>

<section class="w3-padding">

    <h2>Edit Social Media Link</h2>

    <form method="post" action="/console/socialmedias/edit/<?= $socialmedia->id ?>" novalidate>
    <?= csrf_field() ?>
<label for="logo">Logo (Font Awesome HTML Tag):</label>
  <input class="form-control" type="text" name="logo" id="sociallogo" value="<?= htmlentities(old('logo', $socialmedia->logo)) ?>">
  <span style="color:red;"><?= $errors->first('logo'); ?></span>
    
  <br>
  
  <label for="url">URL:</label>
  <input class="form-control" type="url" name="url" id="url" value="<?= old('url', $socialmedia->url) ?>">
  <span style="color:red;"><?= $errors->first('url'); ?></span>
    
  <br>
  
  <label for="sequence">Sequence:</label>
  <input class="form-control" type="number" name="sequence" id="sequence" value="<?= old('sequence', $socialmedia->sequence) ?>">
  <span style="color:red;"><?= $errors->first('sequence'); ?></span>
  
  <br>
  
  <input type="submit" value="Edit Social Media Link">
  
</form>

<p><a href="/console/socialmedias/list"><i class="fas fa-arrow-circle-left"></i> Return to Social Media Links</a></p>
    <!-- <p><a href="/console/skills/list"><i class="fas fa-arrow-circle-left"></i> Return to Skills List</a></p> -->

</section>

</body>

</html>