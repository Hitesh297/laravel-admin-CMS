<?= view('layout.header') ?>

        <section class="w3-padding">

            <h2>Add Text Content</h2>

            <form method="post" action="/console/textcontents/edit/<?= $textcontent->id ?>" novalidate>
            <?= csrf_field() ?>
  <label for="content">Content:</label>
  <textarea class="form-control" type="text" name="content" id="content" rows="10"><?= old('content', $textcontent->content) ?></textarea>
  <span style="color:red;"><?= $errors->first('content'); ?></span>
  <script>

  ClassicEditor
    .create( document.querySelector( '#content' ) )
    .then( editor => {
        console.log( editor );
    } )
    .catch( error => {
        console.error( error );
    } );
    
  </script>
  
  <br>
  
  <label for="type">Type:</label>
  <?php
  
  $values = array( 'Hero','AboutMe', 'Contact' );
  
  echo '<select class="form-control" name="type" id="type">';
  foreach( $values as $key => $value )
  {
    echo '<option value="'.$value.'"';
    if( $value == $textcontent->type ) echo ' selected="selected"';
    echo '>'.$value.'</option>';
  }
  echo '</select>';
  
  ?>
  <span style="color:red;"><?= $errors->first('type'); ?></span>
  <br>
  
  <input type="submit" value="Edit Content">
  
</form>

            <!-- <a href="/console/types/list">Back to Type List</a> -->
            <p><a href="/console/textcontents/list"><i class="fas fa-arrow-circle-left"></i> Return to Content List</a></p>

        </section>

    </body>
</html>