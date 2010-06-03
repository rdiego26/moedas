<?php
/**
 * views/pagar/index.php
 *
 * Esta é a view principal do contas à pagar.
 * Aqui é exibida uma lista das contas vencidas e vencendo.
 *
 * @author Evaldo Junior <junior@casoft.info>
 * @package moedas
 * @subpackage views
 */

$hoje = date('Y-m-d');
$this->load->helper('datas');

?>
<h1><?php echo $atividade; ?></h1>
<table class="lista_contas">
    <thead>
        <tr>
            <th>Descrição</th>
            <th>Vencimento</th>
            <th></th>
            <th class="coluna_valor">Valor</th>
            <th class="coluna_acoes">Ações</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($lista_contas as $conta) : ?>
            <tr>
                <td><?php echo $conta->descricao; ?></td>
                <td class="coluna_data"><?php echo date_to_brazil($conta->vencimento); ?></td>
                <td><?php echo ($conta->vencimento == $hoje) ? 'Hoje' : 'Vencida'; ?></td>
                <td class="coluna_valor"><?php echo $conta->valor; ?></td>
                <td class="coluna_acoes">Alterar | Baixar</td>
            <tr>
        <?php endforeach; ?>
    </tbody>
</table>