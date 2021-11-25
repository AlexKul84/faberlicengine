<?php
	require_once "../lib/start.php";
	require_once "top.php";
	if (isAdmin()) { $orders = getOrders();
	if (isset($request["func"]) && $request["func"] == "edit") {
		$fd = getOrder($request["id"]);
	}
	else $fd = $request; ?>

<h1>Заказы</h1>
<?php if ($message) { ?><p class="message"><?=$message?></p><?php } ?>
<table>
	<tr>
		<td>ID</td>
<!--		<td>Цена</td>-->
<!--		<td>Телефон</td>-->
		<td>Дата заказа</td>
<!--		<td>Дата подтверждения</td>-->
<!--		<td>Дата оплаты</td>-->
<!--		<td>Дата аннулирования</td>-->
		<td>Кампания</td>
		<td>Функции</td>
	</tr>
	<?php foreach ($orders as $order) { ?>
		<tr>
			<td><?=$order["order_id"]?></td>
<!--			<td>--><?php //if ($order["price"]) { ?><!----><?//=$order["price"]?><!-- рублей--><?php //} else { ?><!--Нет--><?php //} ?><!--</td>-->
<!--			<td>--><?//=$order["phone"]?><!--</td>-->
			<td><?php if ($order["date_order"]) { ?><?=date(FORMAT_DATE, $order["date_order"])?><?php } else { ?>Нет<?php } ?></td>
<!--			<td>--><?php //if ($order["date_confirm"]) { ?><!----><?//=date(FORMAT_DATE, $order["date_confirm"])?><!----><?php //} else { ?><!--Нет--><?php //} ?><!--</td>-->
<!--			<td>--><?php //if ($order["date_pay"]) { ?><!----><?//=date(FORMAT_DATE, $order["date_pay"])?><!----><?php //} else { ?><!--Нет--><?php //} ?><!--</td>-->
<!--			<td>--><?php //if ($order["date_cancel"]) { ?><!----><?//=date(FORMAT_DATE, $order["date_cancel"])?><!----><?php //} else { ?><!--Нет--><?php //} ?><!--</td>-->
			<td>
				<p>UTM Source: <?=$order["utm_source"]?></p>
				<p>UTM Campaign: <?=$order["utm_campaign"]?></p>
				<p>UTM Content: <?=$order["utm_content"]?></p>
				<p>UTM Term: <?=$order["utm_term"]?></p>
                <p>Split: <?=$order["split"]?></p>
                <p>Регистрация/магазин: <?=$order["ref_id"]?></p>
			</td>
			<td>
				<a href="/admin/orders.php?func=delete&amp;id=<?=$order["order_id"]?>">Удалить</a>
			</td>
		</tr>
	<?php } ?>
</table>
<?php } else require_once "auth.php"; ?>
<?php
	require_once "footer.php";
?>