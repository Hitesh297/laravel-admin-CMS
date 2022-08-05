<?= view('layout.header') ?>

<section class="w3-padding">

    <h2>Add Text Content</h2>

    <form method="post" action="/console/skills/add" novalidate>
        <?= csrf_field() ?>

        <label for="fontawesomeHTML">Font Awesome HTML:</label>
        <input class="form-control" type="text" name="fontawesomeHTML" id="fontawesomeHTML" value="<?= htmlentities(old('fontawesomeHTML')) ?>">
        <span style="color:red;"><?= $errors->first('fontawesomeHTML'); ?></span>

        <br>

        <label for="type">Type:</label>
        <input class="form-control" type="text" name="type" id="type" value="<?= old('type') ?>">
        <span style="color:red;"><?= $errors->first('type'); ?></span>

        <br>

        <label for="details">Details:</label>
        <textarea class="form-control" type="text" name="details" id="details" rows="100"><?= old('details') ?></textarea>
        <span style="color:red;"><?= $errors->first('details'); ?></span>

        <script>
            ClassicEditor
                .create(document.querySelector('#details'))
                .then(editor => {
                    console.log(editor);
                })
                .catch(error => {
                    console.error(error);
                });
        </script>

        <br>

        <label for="sequence">Sequence:</label>
        <input class="form-control" type="number" name="sequence" id="sequence" value="<?= old('sequence') ?>">
        <span style="color:red;"><?= $errors->first('sequence'); ?></span>

        <br>

        <input type="submit" value="Add Skill">

    </form>

    <!-- <a href="/console/types/list">Back to Type List</a> -->
    <p><a href="/console/skills/list"><i class="fas fa-arrow-circle-left"></i> Return to Skills List</a></p>

</section>

</body>

</html>