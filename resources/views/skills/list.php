<?= view('layout.header') ?>

        <?php if(session()->has('message')): ?>
            <div class="alert-strip">
                <div class="alert-msg"><?= session()->get('message') ?></div>
            </div>
        <?php endif; ?>

        <section class="w3-padding">

        <h2>Manage Skills</h2>

<table>
  <tr>
    <th></th>
    <th align="center">ID</th>
    <th align="left">Type</th>
    <th align="center">Sequence</th>
    <th></th>
    <th></th>
  </tr>
  <?php foreach($skills as $record): ?>
    <tr>
      <td class="fa-icon" align="center">
      <?php echo  $record['fontawesomeHTML'] ; ?>
        <!-- <img src="image.php?type=skill&id=<?php echo $record['id']; ?>&width=300&height=300&format=inside"> -->
      </td>
      <td align="center"><?php echo $record['id']; ?></td>
      <td align="left">
        <?php echo htmlentities( $record['type'] ); ?>
        <br>
        <small><?php echo $record['details']; ?></small>
      </td>
      <td align="center"><?php echo $record['sequence']; ?></td>
      
      <td align="center"><a href="/console/skills/edit/<?php echo $record['id']; ?>">Edit</i></a></td>
      <td align="center">
        <a href="/console/skills/delete/<?php echo $record['id']; ?>" onclick="javascript:confirm('Are you sure you want to delete this project?');">Delete</i></a>
      </td>
    </tr>
  <?php endforeach; ?>
</table>

            <!-- <a href="/console/types/add" class="w3-button w3-green">New Type</a> -->
            <p><a href="/console/skills/add"><i class="fas fa-plus-square"></i> Add Skill</a></p>

        </section>

    </body>
</html>