<?= view('layout.header') ?>

        <?php if(session()->has('message')): ?>
            <div class="alert-strip">
                <div class="alert-msg"><?= session()->get('message') ?></div>
            </div>
        <?php endif; ?>

        <section class="w3-padding">

        <h2>Manage Experiences</h2>

<table>
  <tr>
    <th align="center">ID</th>
    <th align="left">Comapny Name</th>
    <th align="center">Position</th>
    <th align="center">Duration</th>
    <th></th>
    <th></th>
  </tr>
  <?php foreach($experiences as $record): ?>
    <tr>
      <td align="center"><?php echo $record['id']; ?></td>
      <td align="center" style="white-space: nowrap;"><?php echo htmlentities( $record['companyName'] ); ?></td>
      <td align="left">
        <?php echo htmlentities( $record['position'] ); ?>
        <small><?php echo $record['responsibilities']; ?></small>
      </td>
      <td align="center"><?php
      $startDate=date_create($record['startDate']);
      $endDate=date_create($record['endDate']);
       echo date_format($startDate,'M Y').' - '.date_format($endDate,'M Y'); 
       ?></td>
      <td align="center"><a href="/console/experiences/edit/<?php echo $record['id']; ?>">Edit</i></a></td>
      <td align="center">
        <a href="/console/experiences/delete/<?php echo $record['id']; ?>" onclick="javascript:confirm('Are you sure you want to delete this experience?');">Delete</i></a>
      </td>
    </tr>
  <?php endforeach; ?>
</table>

<p><a href="/console/experiences/add"><i class="fas fa-plus-square"></i> Add Experience</a></p>

        </section>

    </body>
</html>