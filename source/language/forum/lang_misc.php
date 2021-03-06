<?php

/**
 *      [Discuz!] (C)2001-2099 Comsenz Inc.
 *      This is NOT a freeware, use is subject to license terms
 *
 *      $Id: lang_misc.php 29624 2012-04-23 06:56:28Z monkey $
 *      Правка: Makray
 */

if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}

$lang = array
(

	'discuz_lang' => 'misc',
	'contact' => 'Контакты:',
	'anonymous' => 'Анонимы',
	'anonymoususer' => 'Анонимные пользователи',
	'guestuser' => 'Гости',
	'has_expired' => 'Срок данной информации истёк',
	'click_view' => 'Нажмите, чтобы посмотреть',
	'never_expired' => 'Срок действия неограничен',
	'sort_update' => 'Обновления',
	'sort_upload' => 'Загрузить',
  	'view_noperm' => 'Скрытое содержание',
	'post_hidden' => '**** Скрытое содержание ****',
	'post_banned' => '**** Автор заблокирован или удалён ****',
	'post_single_banned' => '**** Сообщение заблокировано ****',
	'message_ishidden_hiddenreplies' => 'Данное сообщение может видеть только автор темы',
	'post_reply_quote' => 'добавил {author} в {time}',
	'post_edit' => "[i=s] Отредактировано: {editor} в {edittime}  [/i]\n\n",
	'post_edit_regexp' => '/^\[i=s\] Отредактировано: .*? в .*?  \[\/i\]\n\n/s',
	'post_edithtml' => '[i=s] Отредактировано: {editor} в {edittime}  [/i]<br /><br />',
	'post_edithtml_regexp' => '/^\[i=s\] Отредактировано: .*? в .*?  \[\/i\]&lt;br \/&gt;&lt;br \/&gt;/s',
	'post_editnobbcode' => '[ Отредактировано: {editor} в {edittime}  ]\n\n',
	'post_editnobbcode_regexp' => '/^\[ Отредактировано: .*? в .*?  \]\n\n/s',
	'post_reply' => 'Ответить',
	'post_thread' => 'Сообщение',

	'price' => 'Цена',
	'pay_view' => 'Просмотр',
	'attachment_buy' => 'Купить',

	'post_trade_yuan' => 'руб.',
	'post_trade_seller' => 'Продавец',
	'post_trade_name' => 'Название товара',
	'post_trade_price' => 'Цена товара',
	'post_trade_quality' => 'Состояние товара',
	'post_trade_locus' => 'Местоположение',
	'post_trade_transport_type' => 'Способ доставки',
	'post_trade_transport_seller' => 'Продавец оплачивает доставку',
	'post_trade_transport_buyer' => 'Покупатель оплачивает доставку',
	'post_trade_transport_mail' => 'Доставка почтой',
	'post_trade_transport_express' => 'Экспресс доставка',
	'post_trade_transport_virtual' => 'Виртуальный товар',
	'post_trade_transport_physical' => 'Наложенный платеж',
	'post_trade_locus' => 'Расположение',
	'post_trade_description' => 'Описание',
	'post_trade_pm_subject' => '[Сделка]',
	'post_trade_pm_buynum' => 'Количество',
	'post_trade_pm_wishprice' => 'Желательная цена',
	'post_trade_pm_reason' => 'Причина',
	'postappend_content' => 'Добавить содержание',
	'payment_unit' => 'ед.',

	'attach' => 'Вложение',
	'attach_pay' => 'Купить вложение',
	'attach_credits_policy' => 'Просмотр политики интегралов',
	'attach_img' => 'Вложенные изображения',
	'attach_readperm' => 'Права',
	'attach_img_zoom' => 'Нажмите для просмотра полного изображения в новом окне\\nCTRL + колесо мыши для увеличения или уменьшения масштаба',
	'attach_img_thumb' => 'Нажмите для просмотра полного изображения в новом окне',
	'attach_downloads' => 'Загрузки',

	'post_trade_transport' => 'Почтовые расходы',
	'post_trade_transport_mail' => 'Обычная почта',
	'post_trade_quality' => 'Состояние товара',
	'post_trade_quality_new' => 'Новые',
	'post_trade_quality_secondhand' => 'Подержанные (б/у)',

	'trade_unstart' => '<font color="gray">Дата операции</font>',
	'trade_waitbuyerpay' => 'Ожидание оплаты от покупателя',
	'trade_waitsellerconfirm' => 'Сделка была отправлена, ожидайте подтверждения продавца',
	'trade_sysconfirmpay' => 'Подтверждение оплаты покупателя',
	'trade_waitsellersend' => 'Товар оплачен, покупатель ожидает доставки товара',
	'trade_waitbuyerconfirm' => '<font color="green">Товар отправлен. Ожидайте подтверждения доставки от покупателя.</font>',
	'trade_syspayseller' => 'Покупатель оплатил товар и подтвердил получение товара',
	'trade_finished' => '<font color="green">Завершено</font>',
	'trade_closed' => '<font color="gray">Не завершено</font>',
	'trade_waitselleragree'  => 'Возврат',
	'trade_sellerrefusebuyer' => 'Покупатель отклонил условия продавца после изменений условий сделки',
	'trade_waitbuyerreturn' => 'Продавец согласился возместить расход за возврат',
	'trade_waitsellerconfirmgoods' => 'В ожидании получения товара',
	'trade_waitalipayrefund' => 'Стороны договорились, ожидая возврата Alipay',
	'trade_alipaycheck' => 'Обработка Alipay',
	'trade_overedrefund' => 'Возврат завершен',
	'trade_refundsuccess' => '<font color="green">Возврат завершен</font>',
	'trade_refundclosed' => '<font color="green">Возврат закрыт</font>',

	'trade_offline_1' => 'Сделка вступила в силу',
	'trade_offline_4' => 'Оплатить и ожидать доставку товара',
	'trade_offline_5' => 'Отправить товар',
	'trade_offline_7' => 'Товар получен. Сделка завершена',
	'trade_offline_8' => 'Отмена сделки',
	'trade_offline_10' => 'Возврат товара. Ожидание согласия продавца на возмещение расходов',
	'trade_offline_11' => 'Отказ продавца на оплату расходов за возврат товара',
	'trade_offline_12' => 'Продавец согласился возместить расход за возврат товара',
	'trade_offline_13' => 'Товар отправлен, ожидается ответ о получении товара от продавца',
	'trade_offline_17' => 'Продавец получил возвращенный товар',

	'trade_message_4' => 'Введите способ оплаты, номер банковского счета и другую платежную информацию',
	'trade_message_5' => 'Введите компанию, которая будет доставлять товар',
	'trade_message_13' => 'Введите компанию, которая будет доставлять товар',

	'credit_payment' => 'Пополнение баланса',
	'credit_forum_payment' => 'Пополнение баланса',
	'credit_forum_royalty' => 'Комиссия',

	'credit_total' => 'Всего баллов',

	'invite_payment' => 'Купить код приглашения',
    'invite_forum_payment' => 'Купить код приглашения',
	'invite_forum_payment_unit' => ' ед. ',
	'invite_forum_royalty' => 'Комиссия',

	'formulaperm_regdate' => 'Регистрация',
	'formulaperm_regday' => 'Дней после регистрации',
	'formulaperm_regip' => 'IP при регистрации',
	'formulaperm_lastip' => 'Последний IP',
	'formulaperm_buyercredit' => 'Бонусный рейтинг покупателя',
	'formulaperm_sellercredit' => 'Бонусный рейтинг продавца',
	'formulaperm_digestposts' => 'Дайджестов',
	'formulaperm_posts' => 'Сообщений',
	'formulaperm_threads' => 'Тем',
	'formulaperm_oltime' => 'Время (часы)',
	'formulaperm_pageviews' => 'Предпросмотр',
	'formulaperm_and' => ' и ',
	'formulaperm_or' => ' или ',
	'formulaperm_extcredits' => 'Настройки и интеграции',

	'login_normal_mode' => 'Видим',
    'login_switch_invisible_mode' => 'Войти в тень',
    'login_switch_normal_mode' => 'Выйти из тени',
	'login_invisible_mode' => 'Скрыт',

	'eccredit_explain' => 'Разъяснения',

	'google_site_0' => 'Веб-поиск ',
	'google_site_1' => 'Поиск по сайту ',
	'google_sa' => 'Поиск',

	'modcp_logs_action_home' => 'Внутреннее сообщение',
	'modcp_logs_action_moderate' => 'Модерация',
	'modcp_logs_action_member' => 'Управление пользователями',
	'modcp_logs_action_forumaccess' => 'Разрешения пользователей',
	'modcp_logs_action_thread' => 'Менеджер тем',
	'modcp_logs_action_forum' => 'Форум',
	'modcp_logs_action_announcement' => 'Уведомления',
	'modcp_logs_action_log' => 'Управление отчетами',
	'modcp_logs_action_stat' => 'Статистика',

	'modcp_logs_action_login' => 'Вход',

	'uch_selectalbum' => 'Пожалуйста, выберите альбом',
	'uch_noalbum' => 'Вы не имеете альбомов,',
	'click_here' => 'Нажмите здесь',
	'uch_createalbum' => 'Создать свой личный альбом',

	'pm_from' => 'Отправитель',
	'pm_to' => 'Получатель',
	'pm_date' => 'Дата',

	'share_message' => 'Привет! я {$_G[setting][bbname]} увидел довольно интересное сообщение, рекомендую посмотреть!\\n\\n$thread[subject]\\nВот ссылка: [url={$threadurl}]{$threadurl}[/url]\\n\\nНадеюсь, что вам понравится! ',

	'week_0' => 'Вс',
	'week_1' => 'Пн',
	'week_2' => 'Вт',
	'week_3' => 'Ср',
	'week_4' => 'Чт',
	'week_5' => 'Пт',
	'week_6' => 'Сб',

	'notice_actor' => 'Другие $actorcount',

	'perms_allowvisit' => 'Доступ к форуму',
	'perms_readaccess' => 'Права',
	'perms_allowviewpro' => 'Просмотр профиля',
	'perms_allowinvisible' => 'Невидимка',
	'perms_allowsearch' => 'Поиск',
	'perms_allownickname' => 'Никнейм',
	'perms_allowcstatus' => 'Реальное имя',
	'perms_allowpost' => 'Тема',
	'perms_allowreply' => 'Ответы',
	'perms_allowpostpoll' => 'Опросы',
	'perms_allowvote' => 'Голосование',
	'perms_allowpostreward' => 'Награды',
	'perms_allowpostactivity' => 'События',
	'perms_allowpostdebate' => 'Поединки',
	'perms_allowposttrade' => 'Продажи',
	'perms_maxsigsize' => 'Длина подписи',
	'perms_allowsigbbcode' => 'BBcode в подписи',
	'perms_allowsigimgcode' => 'Тег [img]',
	'perms_maxbiosize' => 'Длина биографии',
	'perms_allowrecommend' => 'Оценка тем',
	'perms_allowbiobbcode' => 'BBcode в биографии',
	'perms_allowbioimgcode' => 'Тег [img] в биографии',
	'perms_allowgetattach' => 'Скачивание вложений',
	'perms_allowgetimage' => 'Просмотр изображений',
	'perms_allowpostattach' => 'Загрузка вложений',
	'perms_allowpostimage' => 'Загрузка фото',
	'perms_allowsetattachperm' => 'Права для вложений',
	'perms_maxspacesize' => 'Объем места',
	'perms_maxattachsize' => 'Объем',
	'perms_maxsizeperday' => 'Объем в сутки',
	'perms_maxattachnum' => 'Кол-во в сутки',
	'perms_allowbioimgcode' => 'Тег [img] в биографии',
	'perms_attachextensions' => 'Тип вложений',
	'perms_allowstickthread' => 'Важная тема',
	'perms_allowdigestthread' => 'Дайджест темы',
	'perms_allowstickthread_value' => 'Топ на главной',
	'perms_allowdigestthread_value' => 'Дайджест темы на главной',
	'perms_allowbumpthread' => 'Поднять тему',
	'perms_allowhighlightthread' => 'Выделить тему',
	'perms_allowrecommendthread' => 'Рекомендовать тему',
	'perms_allowstampthread' => 'Штамп в теме',
	'perms_allowclosethread' => 'Закрыть тему',
	'perms_allowmovethread' => 'Перемещение тем',
	'perms_allowedittypethread' => 'Редакт. категорий тем',
	'perms_allowcopythread' => 'Запрет копирования тем',
	'perms_allowmergethread' => 'Объединение тем',
	'perms_allowsplitthread' => 'Разделение тем',
	'perms_allowrepairthread' => 'Восстановление тем',
	'perms_allowrefund' => 'Обязательный возврат',
	'perms_alloweditpoll' => 'Изменение голосований',
	'perms_allowremovereward' => 'Удаление наград',
	'perms_alloweditactivity' => 'Управление событиями',
	'perms_allowedittrade' => 'Управление товарами',
	'perms_alloweditpost' => 'Изменение сообщений',
	'perms_allowwarnpost' => 'Сообщения с предупреждениями',
	'perms_allowbanpost' => 'Бан сообщений',
	'perms_allowdelpost' => 'Удаление сообщений',
	'perms_allowviewreport' => 'Просмотр отчетов пользователей',
	'perms_allowmodpost' => 'Модерация сообщений',
	'perms_allowmoduser' => 'Модерация пользователей',
	'perms_allowbanuser' => 'Бан пользователей',
	'perms_allowbanip' => 'Бан IP',
	'perms_allowedituser' => 'Редактирование пользователей',
	'perms_allowmassprune' => 'Массовое удаление сообщений',
	'perms_allowpostannounce' => 'Объявления',
	'perms_disablepostctrl' => 'Сообщения без лимита',
	'perms_allowviewip' => 'Просмотр IP',
	'perms_viewperm' => 'Просмотр форума',
	'perms_postperm' => 'Просмотр сообщений',
	'perms_replyperm' => 'Просмотр ответов',
	'perms_getattachperm' => 'Скачивание вложений',
	'perms_postattachperm' => 'Загрузка вложений',
	'perms_postimageperm' => 'Загрузка изображений',
	'perms_allowblog' => 'Создание блога',
	'perms_allowdoing' => 'Создание статуса',
	'perms_allowupload' => 'Закачивать',
	'perms_allowshare' => 'Добавление закладок',
	'perms_allowpoke' => 'Приветствие',
	'perms_allowfriend' => 'Друзья',
	'perms_allowclick' => 'Изменение позиций',
	'perms_allowmyop' => 'Приложения',
	'perms_allowcomment' => 'Комментарии',
	'perms_allowstatdata' => 'Просмотр статистики',
	'perms_allowstat' => 'Просмотр тенденций',
	'perms_allowpostarticle' => 'Публикация статей',
    'perms_raterange' => 'Участие в ставках',
	'perms_allowcommentpost' => 'Комментарии',
	'perms_allowat' => 'Использование "@name"',
	'perms_allowreplycredit' => 'Награда за ответ',
	'perms_allowposttag' => 'Использование тегов',
	'perms_allowcreatecollection' => 'Создание коллекции',
	'perms_allowsendpm' => 'Отправка ЛС',
	'perms_maximagesize' => 'Макс. размер фото',
	'perms_allowmediacode' => 'Медиакод',

	'join_topic' => ' для участия в теме',
	'join_poll' => ' для участия в голосовании',
	'buy_trade' => ' для участия в продаже',
	'join_reward' => ' для участия в награждении',
	'join_activity' => ' для участия в событии',
	'join_debate' => ' для участия в поединке',
	'at_invite' => '@ приглашение',

	'lower' => 'Меньше',
	'higher' => 'Больше',
	'report_msg_your' => ' Ваш ',
    'report_noreward' => 'Нет наград', 
	'activity_viewimg' => 'Нажмите для просмотра',

	'crime_postreason' => '{reason} &nbsp; <a href="forum.php?mod=redirect&goto=findpost&pid={pid}&ptid={tid}" target="_blank" class="xi2">Подробности</a>',
	'crime_reason' => '{reason}',

	'connectguest_message_search' => array('Вы не вошли', 'Войти'),
	'connectguest_message_replace' => array('пока нет <a href="member.php?mod=connect" class="xi2">Полная информация счет</a> Или <a href="member.php?mod=connect&ac=bind" class="xi2">Связывание существующий аккаунт</a> ', 'Первый <a href="member.php?mod=connect" class="xi2">Полная информация счет</a> Или <a href="member.php?mod=connect&ac=bind" class="xi2">Связывание существующий аккаунт</a> '),
	'connectguest_message_mobile_search' => array('Вы не вошли', 'Войти'),
	'connectguest_message_mobile_replace' => 'Введите информацию об учетной записи или привяжите существующую в компьютерной версии',

	'avatar' => 'Аватар',
	'signature' => 'Подпись',
	'custom_title' => 'Подпись над аватаром',

	'forum_guide' => 'Обзор',

	'patch_site_have' => 'На сайте',
	'patch_is_fixed' => 'Уязвимость, была исправлена',
	'patch_need_fix' => 'патч. надо установить',
	'patch_fixed_status' => 'ОК',
	'patch_unfix_status' => 'Уязвимо',
	'patch_fix_failed_status' => 'Обновление не удалось',
	'patch_fix_right_now' => 'Установить',
	'patch_view_fix_detail' => 'Подробности',
	'patch_name' => 'Уязвимость',
	'patch_dateline' => 'Дата',
	'patch_status' => 'Статус',
	'patch_close' => 'Закрыть',
	
	'seccode' => 'Капча',
	'secqaa' => 'Контрольный вопрос',
	'seccode_update' => 'Обновить',
	'seccode_player' => '<span style="padding:2px"><img border="0" style="vertical-align:middle" src="static/image/common/seccodeplayer.gif" /> <a href="javascript:;" onclick="window.document.seccodeplayer_{idhash}.SetVariable(\'isPlay\', 1)">播放验证码</a></span>',

	'plugin_title' => 'Напоминание об обновлении',
	'plugin_memo' => 'Имеется <span class="xi1">{number}</span> доступных обновления',
	'plugin_link' => 'Обновить',

);

?>
