<?= view('layout.header') ?>

        <?php if(session()->has('message')): ?>
            <div class="alert-strip">
                <div class="alert-msg"><?= session()->get('message') ?></div>
            </div>
        <?php endif; ?>

        <section class="w3-padding">

            <h2>Manage Text Contents</h2>

            <table>
  <tr>
    <th align="center">ID</th>
    <th align="left">Content</th>
    <th align="center">Type</th>
    <th></th>
    <th></th>
  </tr>
  <?php foreach($textcontents as $record): ?>
    <tr>
      <td align="center"><?php echo $record['id']; ?></td>
      <td align="left">
        <?php echo $record['content']; ?>
      </td>
      <td align="center"><?php echo $record['type']; ?></td>
      <td align="center"><a href="/console/textcontents/edit/<?php echo $record['id']; ?>">Edit</i></a></td>
      <td align="center">
        <a href="/console/textcontents/delete/<?php echo $record['id']; ?>" onclick="javascript:confirm('Are you sure you want to delete this project?');">Delete</i></a>
      </td>
    </tr>
  <?php endforeach; ?>
</table>

            <!-- <a href="/console/types/add" class="w3-button w3-green">New Type</a> -->
            <p><a href="/console/textcontents/add"><i class="fas fa-plus-square"></i> Add Text Content</a></p>

        </section>

    </body>
</html>