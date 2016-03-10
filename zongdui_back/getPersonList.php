<?php
	require_once('database.php');
	$personList = 
	array('秘书处'=>array(
		array('id'=>'1','name'=>'张章','phone'=>'15988826470','phone_duan'=>'656470','wechat'=>'zz1491'),
		array('id'=>'2','name'=>'丛珊','phone'=>'15988811834','phone_duan'=>'613119','wechat'=>'Bran7622296'),
		),
		'组织部'=>(
		array('id'=>'3','name'=>'胡文霞','phone'=>'15988826470','phone_duan'=>'656470','wechat'=>'zz1491')
		)
	);
	echo json_encode($personList);