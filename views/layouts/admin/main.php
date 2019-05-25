<?php   
use yii\helpers\Url; 
use app\assets\AppAsset;
use yii\bootstrap4\ActiveForm;
use yii\helpers\Html;

AppAsset::register($this);

?>

<?php $this->beginPage() ?>
<!DOCTYPE html>
<html>
<head>
	<?php $this->head() ?>   
</head>
<body>
	<div class="container">

		<div class="jumbotron jumbotron-fluid">
			<div class="container">
				<h1 class="display-4">Редактор сайта</h1>
				<p class="lead"><a href="/admin">Dashboard</a></p>
			</div>
		</div>
		<?= $content ?>
	</div>
	<?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage() ?>