<?
use yii\helpers\Html;

$this->title = $subject;
?>
<p>Пользователь <b><?= $feedback->name ?></b> оставил сообщение с помощью формы обратной связи.</p>
<p>Просмотреть его вы можете <?= Html::a('здесь', $link) ?>.</p>
<hr>
<p>Это автоматическое сообщение и на него не нужно отвечать</p>