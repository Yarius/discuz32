<?php

/**
 *      [Discuz!] (C)2001-2099 Comsenz Inc.
 *      This is NOT a freeware, use is subject to license terms
 *
 *      $Id: lang_gift.php 27449 2012-02-01 05:32:35Z zhangguosheng $
 */

if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}

$lang = array
(
	'gift_name' => 'Генератор подарков',
	'gift_desc' => 'Раздача бонусов (баллов) посетителям домашней страницы.',
	'gift_info' => 'Вы можете задать максимальную сумму баллов в Вашем призовам фонде.<br />Каждый посетитель сможет получить определённую Вами долю призового фонда.',
	'gift_succeed' => 'Подарок успешно отправлен!',
	'gift_bad_credits_input' => 'Неверная сумма призового фонда!',
	'gift_bad_percredit_input' => 'Неверная сумма, выделяемая каждому посетителю!',
	'gift_bad_credittype_input' => 'Неверный тип кредита!',
	'gift_credits_out_of_own' => 'Указанная сумма превышает имеющуюся у Вас в наличии!',
	'gift_gc' => 'Вернуть подарок',
	'gift_use' => 'Использовать подарок',

	'gift_receive_gift' => 'Получено: {percredit} подарков типа: {credittype}',
);

?>