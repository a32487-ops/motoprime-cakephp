<html>
    <h1>Lista de Motas - Motoprime</h1>

    <?= $this->Html->link('Adicionar Mota', ['action' => 'add']) ?>

    <table border="1">
        <tr>
            <th>ID</th>
            <th>Marca</th>
            <th>Modelo</th>
            <th>Preço</th>
            <th>Cilindrada</th>
            <th>Ano</th>
            <th>Ações</th>
        </tr>

        <?php foreach ($motas as $mota): ?>
            <tr>
                <td><?= $mota->id ?></td>
                <td><?= $mota->marca ?></td>
                <td><?= $mota->modelo ?></td>
                <td><?= $mota->preco ?>€</td>
                <td><?= $mota->cilindrada ?>cc</td>
                <td><?= $mota->ano ?></td>

                <td>
                    <?= $this->Html->link('Ver', ['action' => 'view', $mota->id]) ?>

                    <?= $this->Html->link('Editar', ['action' => 'edit', $mota->id]) ?>

                    <?= $this->Form->postLink('Apagar',
                    ['action' => 'delete', $mota->id],
                    ['confirm' => 'Tens a certeza?']) ?>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</html>