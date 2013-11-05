<?php
/**
 * @var $model User
 * @var $form TbActiveForm
 * @var $this Controller
 */
$this->pageTitle   = Yii::app()->name . ' - ' . Yii::t('user', 'login');
//$this->breadcrumbs = array(Yii::t('user', 'login'));

?>
<div class="mywell">
<div class="prolinklogoplace lt">
   <img src="/images/prolinklogo.png" />
   <img src="/images/prolinklogotext.png" />
</div>
<div class="loginside lt">

<?php



$form = $this->beginWidget(
    'bootstrap.widgets.TbActiveForm',
    array(
        'id'                     => 'login-form',
        'htmlOptions'            => array('class' => ''),
        'enableClientValidation' => true,
        'focus'                  => array($model, 'username'),
        'clientOptions'          => array('validateOnSubmit' => true)
    )
); ?>
<div class="control row-fluid sign-in">
 Sign ins:
</div>
<div class="control row-fluid">
    <?php echo $form->textField($model, 'username', array('class' => '', 'placeholder' => $model->getAttributeLabel('username'))); ?>
    <?php echo $form->error($model, 'username'); ?>
</div>
<div class="control">
<div class="input-append">
    <?php echo $form->passwordField($model, 'password', array('class' => '', 'placeholder' => $model->getAttributeLabel('password'))); ?>
	<input type="image" class="add-on" src="/images/submit.png" style="border-left:none;"/>
</div>
<?php echo $form->error($model, 'password'); ?>
</div>
<div class="control row-fluid">
  <a href="#" class="sign-in">Need Access?</a>
</div>
<div class="control row-fluid">
  <a href="#" class="sign-in font12">Forgot email or password</a>
</div>
<?php 
$this->endWidget();

Yii::app()->clientScript->registerCss('login-form', '.auth-service {margin-right: 0.2em;font-size: 12px}');
?>
</div>
</div>
