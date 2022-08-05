<?= view('layout.header') ?>

<?php if (session()->has('message')) : ?>
    <div class="alert-strip">
        <div class="alert-msg"><?= session()->get('message') ?></div>
    </div>
<?php endif; ?>

<section class="w3-padding">

    <h2>Manage Contact Forms</h2>

    <table>
        <tr>
            <th align="center">ID</th>
            <th align="left">Name</th>
            <th align="center">Email</th>
            <th align="center">Message</th>
            <th></th>
        </tr>
        <?php foreach($contactforms as $record): ?>
            <tr>
                <td align="center"><?php echo $record['id']; ?></td>
                <td align="left">
                    <?php echo $record['name']; ?>
                </td>
                <td align="center"><?php echo $record['email']; ?></td>
                <td align="center" style=""><?php echo $record['message']; ?></td>
                <td align="center">
                    <a href="/console/contactforms/delete/<?php echo $record['id']; ?>" onclick="javascript:confirm('Are you sure you want to delete this project?');">Delete</i></a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>

    <!-- <a href="/console/types/add" class="w3-button w3-green">New Type</a> -->
    <!-- <p><a href="/console/textcontents/add"><i class="fas fa-plus-square"></i> Add Text Content</a></p> -->

</section>

</body>

</html>