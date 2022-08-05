<?= view('layout.header') ?>

        <?php if(session()->has('message')): ?>
            <div class="alert-strip">
                <div class="alert-msg"><?= session()->get('message') ?></div>
            </div>
        <?php endif; ?>

        <section class="w3-padding">

            <h2>Manage Projects</h2>

            <table>
  <tr>
    <th></th>
    <th align="center">ID</th>
    <th align="left">Project</th>
    <th align="center">Sequence</th>
    <th></th>
    <th></th>
    <th></th>
  </tr>
  <?php foreach($projects as $record): ?>
    <tr>
      <td align="center">
        <img width="200px" src="<?php echo $record['photo']; ?>">
      </td>
      <td align="center"><?php echo $record['id']; ?></td>
      <td align="left">
        <?php echo htmlentities( $record['title'] ); ?>
        <small style="display:block ;"><?php echo "<b>Description:</b>".$record['description']; ?></small>
        <small style="display:block ;"><?php echo "<b>Technologies:</b>".$record['technologies']; ?></small>
        <small style="display:block ;"><?php echo "<b>Git URL:</b>".$record['gitUrl']; ?></small>
        <small style="display:block ;"><?php echo "<b>Live URL:</b>".$record['liveUrl']; ?></small>
      </td>
      <td align="center"><?php echo $record['sequence']; ?></td>
      <td align="center"><a href="/console/projects/image/<?php echo $record['id']; ?>">Photo</i></a></td>
      <td align="center"><a href="/console/projects/edit/<?php echo $record['id']; ?>">Edit</i></a></td>
      <td align="center">
        <a href="/console/projects/delete/<?php echo $record['id']; ?>" onclick="javascript:confirm('Are you sure you want to delete this project?');">Delete</i></a>
      </td>
    </tr>
  <?php endforeach; ?>
</table>

            <!-- <a href="/console/projects/add" class="w3-button w3-green">New Project</a> -->
            <p><a href="/console/projects/add"><i class="fas fa-plus-square"></i> Add Project</a></p>

        </section>

    </body>
</html>