<h1>Adicionar Mota</h1>

<?= $this->Form->create($mota) ?>

<?= $this->Form->control('marca') ?>

<?= $this->Form->control('modelo') ?>

<?= $this->Form->control('preco') ?>

<?= $this->Form->control('cilindrada') ?>

<?= $this->Form->control('ano') ?>

<?= $this->Form->button('Guardar') ?>

<?= $this->Form->end() ?>

<br>

<?= $this->Html->link('Voltar', ['action' => 'index']) ?>