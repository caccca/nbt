<?php 
use yii\bootstrap\Html;
use yii\bootstrap\NavBar;
use yii\bootstrap\Nav;
use frontend\assets\AppAsset;
use dmstr\web\AdminLteAsset;

AppAsset::register($this);
// AdminLteAsset::register($this);
?>

<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="skin-black layout-top-nav">
    <?php $this->beginBody() ?>
    <div class="wrapper">
        <!-- 顶部导航条 -->
        <header class="main-header">
            <?php NavBar::begin([
                'brandUrl' => Yii::$app->homeUrl,
                'brandLabel' => Yii::$app->name,
                'options' => ['class' => 'navbar-static-top'],
            ]);
            
            $items = [
                ['label' => '文章', 'url' => '/article'],
                ['label' => '留言', 'url' => '/article'],
                ['label' => '关于', 'url' => '/article'],
                ['label' => '联系我', 'url' => '/article'],
            ];

            $userItems = [
                ['label' => '登陆', 'url' => '/article'],     
                ['label' => '注册', 'url' => '/article'], 
            ];

            echo Nav::widget([
                'options' => ['class' => 'navbar-nav'],
                'items' => $items,
                ]);
            
            echo Nav::widget([
                'options' => ['class' => 'navbar-nav navbar-right'],
                'items' => $userItems,
                ]);

            NavBar::end(); ?>
        </header>
        <!-- 顶部导航条 -->
        <div class="content-wrapper">
            <div class="container">
                <?= $content ?>
            </div>
        </div>
    </div>
    <?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>