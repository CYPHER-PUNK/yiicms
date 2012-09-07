<?php
/** @var $model Item */
$this->breadcrumbs = array(
	Yii::t('menu', 'Меню')        => array('default/admin'),
	Yii::t('menu', 'Пункты меню') => array('admin'),
	$model->title,
);
$this->menu        = array(
	//@formatter:off
	array('label' => Yii::t('menu', 'Меню')),
	array('icon' => 'list', 'label' => Yii::t('menu', 'Управление'), 'url' => array('default/admin')),
	array('icon' => 'file', 'label' => Yii::t('menu', 'Добавить'), 'url' => array('default/create')),

	array('label' => Yii::t('menu', 'Пункты меню')),
	array('icon' => 'list-alt', 'label' => Yii::t('menu', 'Управление'), 'url' => array('item/admin')),
	array('icon' => 'file', 'label' => Yii::t('menu', 'Добавить'), 'url' => array('item/create')),
	array(
		'icon' => 'trash', 'label' => Yii::t('menu', 'Удалить'), 'url' => '#', 'linkOptions' => array(
			'submit' => array('delete', 'id' => $model->id), 'confirm' => Yii::t('menu', 'Увереный?')
		),
	),
	//@formatter:on
);
$this->widget('bootstrap.widgets.TbDetailView', array(
	'data'    => $model, 'attributes' => array(
		'id',
		array(
			'name'  => 'parent_id',
			'value' => $model->parent,
		),
		array(
			'name'  => 'menu_id',
			'value' => $model->menu->name,
		),
		'title',
		'href',
		#'type',
		/*array(
			'name' => 'condition_name',
			'value' => $model->conditionName,
		),*/
		#'condition_denial',
		'sort', array(
			'name'  => 'status',
			'value' => $model->getStatus(),
		),
	),
)); ?>