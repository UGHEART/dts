<?php

namespace wepchange
{
	function init()
	{
		eval(import_module('itemmain'));
		$itemspkinfo['j'] = '多重';
	}
	
	function weaponswap()
	{
		if (eval(__MAGIC__)) return $___RET_VALUE;
		eval(import_module('sys','player','logger'));
		
		if (strpos($wepsk,'j')===false)
		{
			$log.='你的武器不能变换。<br>';
			$mode = 'command';
			return;
		}
		
		$oldw=$wep;
		$file = __DIR__.'/config/wepchange.config.php';
		$wlist = openfile($file);
		$wnum = count($wlist)-1;
		for ($i=0;$i<=$wnum;$i++){
			list($on,$nn,$nk,$ne,$ns,$nsk) = explode(',',$wlist[$i]);
			if ($wep==$on){
				$wep=$nn;$wepk=$nk;$wepe=$ne;$weps=$ns;$wepsk=$nsk;
				$log.="<span class=\"yellow\">{$oldw}</span>变换成了<span class=\"yellow\">{$wep}</span>。<br>";
				return;
			}
		}
		$log.="<span class=\"yellow\">{$oldw}</span>由于改造或其他原因不能变换。<br>";
	}
	
	function act()	
	{
		if (eval(__MAGIC__)) return $___RET_VALUE;
		
		eval(import_module('sys','player','input'));
		
		if ($mode == 'command' && $command=='special' && $sp_cmd == 'sp_weapon')
		{
			weaponswap();
			$mode = 'command';
			return;
		}
		
		$chprocess();
	}
	
	function use_nail($itm, $itme)
	{
		if (eval(__MAGIC__)) return $___RET_VALUE;
		
		eval(import_module('player','logger'));
		if (strpos($wepsk,'j')!==false)
		{
			$log.='多重武器不能改造。<br>';
			return 0;
		}
		return $chprocess($itm,$itme);
	}
	
	function use_stone($itm, $itme)
	{
		if (eval(__MAGIC__)) return $___RET_VALUE;
		
		eval(import_module('player','logger'));
		if (strpos($wepsk,'j')!==false)
		{
			$log.='多重武器不能改造。<br>';
			return 0;
		}
		return $chprocess($itm,$itme);
	}
	
	function use_anya($itm)
	{
		if (eval(__MAGIC__)) return $___RET_VALUE;
		
		eval(import_module('player','logger'));
		if (strpos($wepsk,'j')!==false)
		{
			$log.='多重武器不能改造。<br>';
			return 0;
		}
		return $chprocess($itm);
	}
	
}

?>
