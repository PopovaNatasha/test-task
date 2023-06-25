<?php
/**
 * @var array $arResult;
 */

$headers = array_shift($arResult);
?>

<table class="table">
	<thead>
	<tr>
		<?php foreach ($headers as $header): ?>
		<th scope="col"><?=$header?></th>
		<?php endforeach; ?>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($arResult as $values): ?>
	<tr>
		<?php foreach ($values as $value): ?>
		<td><?=$value?></td>
		<?php endforeach; ?>
	</tr>
	<?php endforeach; ?>
	</tbody>
</table>