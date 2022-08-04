<?= view('layout.header') ?>

        <section class="w3-padding">

            <h2>Add Project</h2>

            <form method="post" action="/console/projects/edit/<?= $project->id ?>" novalidate>
            <?= csrf_field() ?>
  <label for="title">Title:</label>
  <input type="text" name="title" id="title" value="<?= old('title', $project->title) ?>">
  <span style="color:red;"><?= $errors->first('title'); ?></span>
  <br>
  
  <label for="description">Description:</label>
  <textarea type="text" name="description" id="description" rows="10"><?= old('description', $project->description) ?></textarea>
  <span style="color:red;"><?= $errors->first('description'); ?></span>
      
  <script>

  ClassicEditor
    .create( document.querySelector( '#description' ) )
    .then( editor => {
        console.log( editor );
    } )
    .catch( error => {
        console.error( error );
    } );
    
  </script>
  
  <br>
  
  <label for="technologies">Technologies:</label>
  <input class="form-control" type="text" name="technologies" id="technologies" value="<?= old('technologies', $project->technologies) ?>">
  <span style="color:red;"><?= $errors->first('technologies'); ?></span>

  <br>
  
  <label for="gitUrl">Git URL:</label>
  <input class="form-control" type="url" name="gitUrl" id="gitUrl" value="<?= old('gitUrl', $project->gitUrl) ?>">
  <span style="color:red;"><?= $errors->first('gitUrl'); ?></span>

  <br>
  
  <label for="liveUrl">Live URL:</label>
  <input class="form-control" type="url" name="liveUrl" id="liveUrl" value="<?= old('liveUrl', $project->liveUrl) ?>">
  <span style="color:red;"><?= $errors->first('liveUrl'); ?></span>

  <br>
  
  <label for="sequence">Sequence:</label>
  <input class="form-control" type="number" name="sequence" id="sequence" value="<?= old('sequence', $project->sequence) ?>">
    
  <br>
  
  <input type="submit" value="Edit Project">
  
</form>

            <!-- <a href="/console/projects/list">Back to Project List</a> -->
            <p><a href="/console/projects/list"><i class="fas fa-arrow-circle-left"></i> Return to Project List</a></p>

        </section>

    </body>
</html>