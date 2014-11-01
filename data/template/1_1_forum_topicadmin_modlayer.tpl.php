<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); ?>
<div id="mdly" style="display: none;<?php if($_G['forum']['picstyle']) { ?> margin-top: 20px;<?php } ?>">
<input type="hidden" name="optgroup" />
<input type="hidden" name="operation" />
<a class="cp" href="javascript:;" title="Уменьшить" onclick="$('mdly').className='cpd'">Уменьшить</a>
<label><input type="checkbox" name="chkall" class="pc" onclick="if(!($('mdct').innerHTML = modclickcount = checkall(this.form, 'moderate'))) {$('mdly').style.display = 'none';}" />Все</label>
<h6><span>Выбрано тем/сообщений: </span><strong onclick="$('mdly').className='';" onmouseover="this.title='Увеличить'" id="mdct"></strong><span></span></h6>
<p>
<?php if($_G['group']['allowdelpost']) { ?>
<strong><a href="javascript:;" onclick="tmodthreads(3, 'delete');return false;">Удалить</a></strong>
<span class="pipe">|</span>
<?php } if($_G['group']['allowmovethread'] && $_G['forum']['status'] != 3) { ?>
<strong><a href="javascript:;" onclick="tmodthreads(2, 'move');return false;">Переместить</a></strong>
<span class="pipe">|</span>
<?php } if($_G['group']['allowedittypethread']) { ?>
<strong><a href="javascript:;" onclick="tmodthreads(2, 'type');return false;">Категории</a></strong>
<?php } if($_G['forum']['status'] == 3 && in_array($_G['adminid'], array('1','2'))) { ?>
<span class="pipe">|</span>
<strong><a href="javascript:;" onclick="tmodthreads(5, 'recommend_group');return false;">Рекомендовать форум</a></strong>
<?php } if(CURMODULE == 'forumdisplay') { ?>
<?php if(!empty($_G['setting']['pluginhooks']['forumdisplay_modlayer'])) echo $_G['setting']['pluginhooks']['forumdisplay_modlayer'];?>
<?php } elseif(CURMODULE == 'modcp') { ?>
<?php if(!empty($_G['setting']['pluginhooks']['modcp_modlayer'])) echo $_G['setting']['pluginhooks']['modcp_modlayer'];?>
<?php } ?>
</p>
<p>
<?php if($_G['group']['allowstickthread']) { ?>
<a href="javascript:;" onclick="tmodthreads(1, 'stick');return false;">Топ</a>
<?php } if($_G['group']['allowdigestthread']) { ?>
<a href="javascript:;" onclick="tmodthreads(1, 'digest');return false;">Дайджест</a>
<?php } if($_G['group']['allowhighlightthread']) { ?>
<a href="javascript:;" onclick="tmodthreads(1, 'highlight');return false;">Выделить</a>
<?php } if($_G['group']['allowrecommendthread'] && $_G['forum']['modrecommend']['open'] && $_G['forum']['modrecommend']['sort'] != 1) { ?>
<a href="javascript:;" onclick="tmodthreads(1, 'recommend');return false;">Рекомендуемые</a>
<?php } if($_G['group']['allowbumpthread'] || $_G['group']['allowclosethread']) { ?>
<span class="pipe">|</span>
<?php } if($_G['group']['allowbumpthread']) { ?>
<a href="javascript:;" onclick="tmodthreads(3, 'bump');return false;">Позиция</a>
<?php } if($_G['forum']['status'] != 3 && $_G['group']['allowclosethread']) { ?>
<a href="javascript:;" onclick="tmodthreads(4);return false;">Закрыть-открыть тему</a>
<?php } ?>
</p>
</div>
