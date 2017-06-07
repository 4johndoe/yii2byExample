<table>
	<tr>
		<th>Title</th>
		<th>Date</th>
	</tr>
	<?php foreach ($newsList as $item) { ?>
	<tr>
		<th>
			<a href="<?php echo Yii::$app->urlManager->createUrl(
				['news/item-detail', 'title' => $item['title']]
			)?>"><?php echo $item['title'] ?></a></th>
		<th><?php echo $item['date'] ?></th>
	</tr>
	<?php } ?>
</table>