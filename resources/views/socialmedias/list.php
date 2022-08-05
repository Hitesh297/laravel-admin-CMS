<?= view('layout.header') ?>

<?php if (session()->has('message')) : ?>
    <div class="alert-strip">
        <div class="alert-msg"><?= session()->get('message') ?></div>
    </div>
<?php endif; ?>

<section class="w3-padding">

    <h2>Manage Social Media Links</h2>

    <table>
        <tr>
            <th></th>
            <th align="center">ID</th>
            <th align="left">URL</th>
            <th align="center">Sequence</th>
            <th></th>
            <th></th>
        </tr>
        <?php foreach($socialmedias as $record): ?>
            <tr>
                <td class="fa-icon" align="center">
                    <?php echo $record['logo']; ?>
                </td>
                <td align="center"><?php echo $record['id']; ?></td>
                <td align="left">
                    <?php echo htmlentities($record['url']); ?>
                </td>
                <td align="center"><?php echo $record['sequence']; ?></td>
                <td align="center"><a href="/console/socialmedias/edit/<?php echo $record['id']; ?>">Edit</i></a></td>
                <td align="center">
                    <a href="/console/socialmedias/delete/<?php echo $record['id']; ?>" onclick="javascript:confirm('Are you sure you want to delete this social media link?');">Delete</i></a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>

    <p><a href="/console/socialmedias/add"><i class="fas fa-plus-square"></i> Add Social Media Link</a></p>

    <!-- <p><a href="/console/skills/add"><i class="fas fa-plus-square"></i> Add Skill</a></p> -->

</section>

</body>

</html>