<table>
    <thead>
        <th>id</th>
        <th>name</th>
    </thead>
    <tbody>
    <?php foreach(parent::all() as $user):  ?>
        <tr>
            <td><?= $user->id ?></td>
            <td><?= $user->name ?></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>

