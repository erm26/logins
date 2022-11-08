<?php 

$menu = [
	[
		'label' => 'Yii framework',
		'url' => 'https://yiiframework.ru'
	],
	[
		'label' => 'More frameworks',
		'items' => [
			['label' => 'Laravel', 'url' => 'https://laravel.com/'],
			['label' => 'Slim' , 'url' => 'https://slimframework.com/']
		]
	],
	[
		'label' => 'Symfony',
		'url' => 'https://symfony.com'
	]
];

/*foreach ($menu as $arr) {
	foreach ($arr as $key => $value) {
		if ($key == 'label') {
			echo "<ul>" . $arr['label'];
		} elseif($key == 'url') {
			echo "<li><a href=\"\">". $arr['url'] . "</a></li>";
		} elseif (is_array($value)) {
			foreach ($value as $val) {
				foreach ($val as $k => $v) {
					if ($k == 'label') {
						echo "<ul>" . $val['label'];
					} elseif($k == 'url') {
						echo "<li><a href=\"\">". $val['url'] . "</a></li></ul></ul>";
					}
				}
			}
		}
	}
}*/
?>

<ul>
	
<?php 
foreach ($menu as $arr) {
	foreach ($arr as $key => $value) {
		if ($key == 'label') {
			echo $arr['label'];
		} elseif($key == 'url') {; ?>
			<li><a href="<?php echo $arr['url'] ?>"><?php echo $arr['url']; ?></a></li><br>
		<?php } elseif (is_array($value)) {
			foreach ($value as $val) {
				foreach ($val as $k => $v) {
					if ($k == 'label') {; ?>
						<ul><?php echo $val['label']; } elseif($k == 'url') {; ?>
						<li><a href="<?php echo $val['url'] ?>">"<?php echo $val['url'];?></a></li><br></ul>
					<?php }
				}
			}
		}
	}
} ?>

</ul>
