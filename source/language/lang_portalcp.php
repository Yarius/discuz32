<?php

/**
 *      [Discuz!] (C)2001-2099 Comsenz Inc.
 *      This is NOT a freeware, use is subject to license terms
 *
 *      $Id: lang_portalcp.php 30107 2012-05-11 02:10:58Z svn_project_zhangjie $
 */

if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}

$lang = array(
	'block_diy_nopreview' => '<p>Этот модуль содержит JS код и предварительный просмотр доступен не сразу. Необходимо сначала Сохранить, а затем просматривать</p>',
	'block_diy_summary_html_tag' => 'Ошибка пользовательского контента HTML тег: ',
	'block_diy_summary_not_closed' => ' Несоответствие',
	'block_all_category' => 'Все категории',
	'block_first_category' => 'Топ категории',
	'block_all_forum' => 'Все форумы',
	'block_all_group' => 'Все группы',
	'block_all_type' => 'Все категории',
	'file_size_limit' => 'Файл не может быть больше {size} kb, измените!',
	'set_to_conver' => 'Обложка',
	'small_image' => 'Маленькое фото',
	'insert_small_image' => 'Вставить маленькое фото',
	'insert_large_image' => 'Вставить большое фото',
	'insert_file' => 'Вставить файл',
	'delete' => 'Удалить',
	'upload_error' => 'Загрузка не удалась',
	'upload_remote_failed' => 'Удаленная загрузка не удалась',
	'article_noexist' => 'Указанной статьи не существует',
	'article_noallowed' => 'У вас нет разрешения для работы с указанной статьей',
	'article_publish_noallowed' => 'У вас нет разрешения на публикацию статьи ',
	'article_category_empty' => 'К сожалению, категория не может быть пустой',
	'article_edit_nopermission' => 'Извините, у вас нет разрешения на проведение операций со статьями',
	'article_publish' => 'Публикация статьи',
	'article_manage' => 'Управление статьями',
	'article_tag' => 'Теги',
	'select_category' => 'Выберите категорию',
	'blockstyle_diy' => 'Настройка шаблона',

	'article_pushplus_info' => '<p><center><i><a href="{url}" class="xg1 xs1">Данный контент, предоставляет {author}</a></i><center></p>',

	'diytemplate_name_null' => '[Не заполнено ]',
	'portal_view_name' => ' на страницу',
	'forum_viewthread_name' => ' на страницу',
	'portal/index' => 'Портал',
	'portal/list' => 'Список публичных статей',
	'portal/view' => 'Обзор портала',
	'portal/comment' => 'Ответы портала',
	'forum/discuz' => 'Форум',
	'forum/viewthread' => 'Публичные сообщения форума',
	'forum/forumdisplay' => 'Обзор форума',
	'group/index' => $_G['setting']['navs'][3]['navname'].' группы',
	'group/group_my' => 'Мои'.$_G['setting']['navs'][3]['navname'].'группы',
	'group/group' => $_G['setting']['navs'][3]['navname'].' Обзор групп',
	'home/space_home' => 'Моя главная',
	'home/space_trade' => 'Моя торговля',
	'home/space_top' => 'Список мест',
	'home/space_thread' => 'Сообщение на моей странице',
	'home/space_reward' => 'Мои награды',
	'home/space_share_list' => 'Список моих закладок',
	'home/space_share_view' => 'Обзор закладок',
	'space_share_view' => 'Просмотр страницы закладок',
	'home/space_poll' => 'Голосование',
	'home/space_pm' => 'ЛС',
	'home/space_notice' => 'Заметки',
	'home/space_group' => 'Страницы '.$_G['setting']['navs'][3]['navname'].' групп',
	'home/space_friend' => 'Друзья',
	'home/space_favorite' => 'Избранное',
	'home/space_doing' => 'Статус',
	'home/space_debate' => 'Поединки',
	'home/space_blog_view' => 'Обзор блога',
	'home/space_blog_list' => 'Список блогов',
	'home/space_album_view' => 'Обзор альбомов',
	'home/space_album_pic' => 'Просмотр фотографий',
	'home/space_album_list' => 'Список альбомов',
	'home/space_activity' => 'События',
	'ranklist/ranklist' => 'Список рейтинга',
	'ranklist/blog' => 'Блоги',
	'ranklist/poll' => 'Голосования',
	'ranklist/activity' => 'События',
	'ranklist/forum' => 'Форумы',
	'ranklist/picture' => 'Фотографии',
	'ranklist/group' => 'Группы',
	'ranklist/thread' => 'Темы',
	'ranklist/member' => 'Пользователи',
	'other_page' => 'Номер для ВИЗО модуля',
	'upload' => 'Загрузить',
	'remote' => 'Удаленный',
	'portal_index' => 'Портал',
	'portal_topic_blue' => 'Голубой',
	'portal_topic_green' => 'Зеленый',
	'portal_topic_grey' => 'Серый',
	'portal_topic_red' => 'Красный',

	'itemtypename0' => 'Автоматически',
	'itemtypename1' => '<span style="color: #FF0000">Исправлено</span>',
	'itemtypename2' => '<span style="color: #00BFFF">Редактор</span>',
	'itemtypename3' => '<span style="color: #0000FF">Вставить</span>',

);