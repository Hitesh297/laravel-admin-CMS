<?= view('layout.header') ?>

        <?php if(session()->has('message')): ?>
            <div class="alert-strip">
                <div class="alert-msg"><?= session()->get('message') ?></div>
            </div>
        <?php endif; ?>

        <section class="w3-padding">

        <h2>Manage Qualifications</h2>

<table>
  <tr>
    <th align="center">ID</th>
    <th align="left">Credential</th>
    <th align="center">Year Completed</th>
    <th></th>
    <th></th>
  </tr>
  <?php foreach($qualifications as $record): ?>
    <tr>
      <td align="center"><?php echo $record['id']; ?></td>
      <td align="left">
        <?php echo htmlentities( $record['credential'] ); ?>
        <br>
        <small><?php echo $record['details']; ?></small>
      </td>
      <td align="center"><?php echo $record['yearCompleted']; ?></td>
      <td align="center"><a href="/console/qualifications/edit/<?php echo $record['id']; ?>">Edit</i></a></td>
      <td align="center">
        <a href="/console/qualifications/delete/<?php echo $record['id']; ?>" onclick="javascript:confirm('Are you sure you want to delete this project?');">Delete</i></a>
      </td>
    </tr>
  <?php endforeach; ?>
</table>

<p><a href="/console/qualifications/add"><i class="fas fa-plus-square"></i> Add Qualification</a></p>
            <!-- <p><a href="/console/projects/add"><i class="fas fa-plus-square"></i> Add Project</a></p> -->

        </section>

    </body>
</html>