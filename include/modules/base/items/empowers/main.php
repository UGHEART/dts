<?php

namespace empowers
{
	function init() {}
	
	function use_nail($itm, $itme)
	{
		if (eval(__MAGIC__)) return $___RET_VALUE;
		
		eval(import_module('sys','player','itemmain','logger'));
		
		if (( strpos ( $wep, '棍棒' ) !== false) && ($wepk == 'WP')) 
		{	
			$dice = rand ( 0, 100 );
			if ($dice >= 10) 
			{
				$wepe += $itme;
				$log .= "使用了<span class=\"yellow\">$itm</span>，<span class=\"yellow\">$wep</span>的攻击力变成了<span class=\"yellow\">$wepe</span>。<br>";
				if (strpos ( $wep, '钉' ) === false) {
					$wep = str_replace ( '棍棒', '钉棍棒', $wep );
				}
			} 
			else 
			{
				$wepe -= ceil ( $itme / 2 );
				if ($wepe <= 0) {
					$log .= "<span class=\"red\">$itm</span>使用失败，<span class=\"red\">$wep</span>损坏了！<br>";
					$wep = $wepk = $wepsk = '';
					$wepe = $weps = 0;
				} else {
					$log .= "<span class=\"red\">$itm</span>使用失败，<span class=\"red\">$wep</span>的攻击力变成了<span class=\"red\">$wepe</span>。<br>";
				}
			}
			return 1;
		} else {
			$log .= '你没装备棍棒，不能安装钉子。<br>';
			return 0;
		}
	}
	
	function use_stone($itm, $itme)
	{
		if (eval(__MAGIC__)) return $___RET_VALUE;
		
		eval(import_module('sys','player','itemmain','logger'));
		
		if (strpos ( $wepk, 'K' ) == 1 && strpos ( $wepsk, 'Z' ) === false) 
		{
			$dice = rand ( 0, 100 );
			if ($dice >= 15) 
			{
				$wepe += $itme;					
				$log .= "使用了<span class=\"yellow\">$itm</span>，<span class=\"yellow\">$wep</span>的攻击力变成了<span class=\"yellow\">$wepe</span>。<br>";
				if (strpos ( $wep, '锋利的' ) === false) {
					$wep = '锋利的'.$wep;
				}
			} 
			else 
			{
				$wepe -= ceil ( $itme / 2 );
				if ($wepe <= 0) {
					$log .= "<span class=\"red\">$itm</span>使用失败，<span class=\"red\">$wep</span>损坏了！<br>";
					$wep = $wepk = $wepsk = '';
					$wepe = $weps = 0;
				} else {
					$log .= "<span class=\"red\">$itm</span>使用失败，<span class=\"red\">$wep</span>的攻击力变成了<span class=\"red\">$wepe</span>。<br>";
				}
			}
			return 1;
		} else {
			$log .= '你没装备锐器，不能使用磨刀石。<br>';
			return 0;
		}
	}
	
	function use_anya($itm)
	{
		if (eval(__MAGIC__)) return $___RET_VALUE;
		
		eval(import_module('sys','player','itemmain','logger'));
		
		if (! $weps || ! $wepe) {
			$log .= '请先装备武器。<br>';
			return 0;
		}
		
		$dice = rand ( 0, 99 );
		$dice2 = rand ( 0, 99 );
		$skill = array ('WP' => $wp, 'WK' => $wk, 'WG' => $wg, 'WC' => $wc, 'WD' => $wd, 'WF' => $wf );
		arsort ( $skill );
		$skill_keys = array_keys ( $skill );
		$nowsk = substr ( $wepk, 0, 2 );
		$maxsk = $skill_keys [0];
		if (($skill [$nowsk] != $skill [$maxsk]) && ($dice < 30)) {
			$wepk = $maxsk;
			$kind = "更改了{$wep}的<span class=\"yellow\">类别</span>！";
		} elseif (($weps != $nosta) && ($dice2 < 70)) {
			$weps += ceil ( $wepe / 2 );
			$kind = "增强了{$wep}的<span class=\"yellow\">耐久</span>！";
		} else {
			$wepe += ceil ( $wepe / 2 );
			$kind = "提高了{$wep}的<span class=\"yellow\">攻击力</span>！";
		}
		$log .= "你使用了<span class=\"yellow\">$itm</span>，{$kind}";
		addnews ( $now, 'newwep', $name, $itm, $wep );
		if (strpos ( $wep, '-改' ) === false) {
			$wep = $wep . '-改';
		}
		return 1;
	}
	
	function itemuse(&$theitem) 
	{
		if (eval(__MAGIC__)) return $___RET_VALUE;
		
		eval(import_module('sys','player','itemmain','armor','logger'));
		
		$itm=&$theitem['itm']; $itmk=&$theitem['itmk'];
		$itme=&$theitem['itme']; $itms=&$theitem['itms']; $itmsk=&$theitem['itmsk'];
		
		if (strpos ( $itmk, 'Y' ) === 0 || strpos ( $itmk, 'Z' ) === 0) 
		{
			if (strpos ( $itm, '磨刀石' ) !== false) 
			{
				if (use_stone($itm,$itme)) \itemmain\itms_reduce($theitem);
				return;
			} 
			else  if (preg_match ( "/钉$/", $itm ) || preg_match ( "/钉\[/", $itm )) 
			{
				if (use_nail($itm,$itme)) \itemmain\itms_reduce($theitem);
				return;
			} 
			else  if ($itm == '针线包') 
			{
				if (($arb == $noarb) || ! $arb) {
					$log .= '你没有装备防具，不能使用针线包。<br>';
				} elseif(strpos($arbsk,'Z')!==false){
					$log .= '<span class="yellow">该防具太单薄以至于不能使用针线包。</span><br>你感到一阵蛋疼菊紧，你的蛋疼度增加了<span class="yellow">233</span>点。<br>';
				}else {
					$arbe += (rand ( 0, 2 ) + $itme);
					$log .= "用<span class=\"yellow\">$itm</span>给防具打了补丁，<span class=\"yellow\">$arb</span>的防御力变成了<span class=\"yellow\">$arbe</span>。<br>";
					\itemmain\itms_reduce($theitem);
				}
				return;
			}
			elseif ($itm == '武器师安雅的奖赏') 
			{
				if (use_anya($itm)) \itemmain\itms_reduce($theitem);
				return;
			}
		}
		$chprocess($theitem);
	}
	
	function parse_news($news, $hour, $min, $sec, $a, $b, $c, $d, $e, $exarr = array())
	{
		if (eval(__MAGIC__)) return $___RET_VALUE;
		eval(import_module('sys','player'));
		
		if($news == 'newwep') 
			return "<li>{$hour}时{$min}分{$sec}秒，<span class=\"lime\">{$a}使用了{$b}，改造了<span class=\"yellow\">$c</span>！</span><br>\n";
		
		return $chprocess($news, $hour, $min, $sec, $a, $b, $c, $d, $e, $exarr);
	}
}

?>
