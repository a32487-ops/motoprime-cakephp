<h1>Detalhes da Mota</h1>

<p><b>Marca:</b> <?= $mota->marca ?></p>

<p><b>Modelo:</b> <?= $mota->modelo ?></p>

<p><b>Preço:</b> <?= $mota->preco ?>€</p>

<p><b>Cilindrada:</b> <?= $mota->cilindrada ?>cc</p>

<p><b>Ano:</b> <?= $mota->ano ?></p>

<br>

<?= $this->Html->link('Voltar', ['action' => 'index']) ?>