<?php

namespace sys
{

	/*Game resources*/

	//■ 空手武器 ■
	$nowep = '拳头';

	//■ 无防具 ■
	$noarb = '内衣';
	//■ 无道具 ■
	$noitm = '--';
	//■ 无限耐久度 ■
	$nosta = '∞';
	//■ 无属性 ■
	$nospk = '--';
	//■ 多种类武器 ■
	$mltwk = '泛用兵器';
	//■ 多重属性 ■
	//$mltspk = '多重属性';


	//游戏状态描述
	$gstate = Array(0 => '<font color="grey">已结束</font>',10 => '即将开始',20 => '开放激活',30 => '人数已满',40=> '<font color="yellow">连斗中</font>',50=>'<font color="red">死斗中</font>');
	$gwin = Array(0 => '程序故障', 1 => '全部死亡',2 => '最后幸存',3 => '锁定解除',4 => '无人参加',5 => '核爆全灭',6 => 'GM中止',7=>'幻境解离',8=>'挑战结束');
	$gtinfo=array(0=>'常规局',1=>'<span class="clan">除错挑战</span>',2=>'<span class="orange">周五活动</span>',3=>'<span class="lime">宝石乱斗</span>',10=>'SOLO模式',11=>'二队模式',12=>'三队模式',13=>'四队模式',14=>'五队模式',15=>'<span class="yellow">伐木挑战</span>',16=>'<span class="green">解离模式</span>',17=>'教程模式');
	$week = Array('日','一','二','三','四','五','六');
	
	//状态描述和死亡语登记处，全部写在这里，不要写在模块里，不然数字编号冲突就不好了
	$stateinfo = Array(
		0=>'正常存活',
		1=>'睡眠状态',
		2=>'治疗状态',
		3=>'静养状态',
		5=>'最后幸存',
		6=>'解除禁区',
		10 => '莫名身亡',
		11 => '禁区停留',
		12 => '毒发身亡', 
		13 => '意外死亡',
		14 => '入侵失败', 
		15 => '黑幕抹杀', 
		16 => '尸骨无存', 
		17 => '遭遇天灾',
		18 => '烧伤不治', 
		20 => '玩家杀害', 
		21 => '玩家杀害', 
		22 => '玩家杀害', 
		23 => '玩家杀害', 
		24 => '玩家杀害', 
		25 => '玩家杀害', 
		26 => '误食毒物', 
		27 => '误触陷阱', 
		28 => '死亡笔记',
		29 => '玩家杀害', 
		30 => '误触机关', 
		31 => 'L5病发', 
		32 => '挂机受罚', 
		33 => '天降软妹，无福消受', 
		34 => '溶剂作用', 
		35 => '救济',
		36 => '惨遭腰斩', 
		37 => '身首异处', 
		38 => '业火灼烧',
		39 => '反噬身亡',
		40 => '自爆身亡',
		41 => '自杀袭击'
	);
	
	$dinfo = Array(
		10 => '不知道什么原因，你死去了。<br>这应该是一个BUG，请通知管理员。<br>',
		11 => '“滴滴滴——”<br>这是……手机闹铃的提示音？<br>“糟糕！还没确认这次的禁区情况——”<br>还没等你有所反应，死神一般的空间裂缝已经把你吞没了。<br>等待你的只有死亡……<br>',
		12 => '“呜……到此为止了吗……”<br>毒素造成的痛苦让你无法再坚持下去了。<br>你吐出嘴里最后一点深黑的血液，仰面倒了下去。<br>',
		13 => '“不好！”<br>也许在平时的你看来，这只是小菜一碟……<br>但对于此刻遍体鳞伤的你来说，<br>眼前的突发状况无异于压垮骆驼的最后一根稻草。<br>你不甘心地倒下了，再也没有起来。<br>',
		14 => '“也许咱应该断定你上网成瘾？”<br>这是……林无月的声音！<br>从哪里传来的？<br>她怎么会知道我试图入侵虚拟世界的控制系统？<br>还没等你反应过来，你就两眼一黑，什么都不知道了。<br>',
		15 => '“我很抱歉，不过这是林无月的意思。”<br>面前突然出现的，是一个陌生男子。<br>这人说些什么怪话呢？<br>你正要上前问个究竟，只见男子手中白光一闪，你的意识就此烟消云散。<br>',
		16 => '“……竟然一点有用的东西都不剩下了吗？！”，又是一个失望的声音。<br>死人是无法主宰自我的，一个又一个参战者经过你的尸体，搜刮走了所有有用的东西。<br>你所有曾经在这个世界上留下的痕迹都被抹平了。<br>',
		17 => '“呜……到此为止了吗……”<br>身体已被冰雹砸得千疮百孔，伤痛让你无法再坚持下去了。<br>你脚下一软，向前栽倒，失去了意识。<br>',
		18 => '“呜……到此为止了吗……”<br>烧伤导致的伤痛让你无法再坚持下去了。<br>你脚下一软，向前栽倒，失去了意识。<br>',
		20 => '一切……都结束了吧……<br>你无力地倒在地上，<br>眼睁睁地看着血液从致命的伤口喷涌而出。<br>一个挥舞双拳的身影，在你失神的瞳孔中逐渐淡去……<br>',
		21 => '一切……都结束了吧……<br>你无力地倒在地上，<br>眼睁睁地看着血液从致命的伤口喷涌而出。<br>一个紧握钝器的身影，在你失神的瞳孔中逐渐淡去……<br>',
		22 => '一切……都结束了吧……<br>你无力地倒在地上，<br>眼睁睁地看着血液从致命的伤口喷涌而出。<br>一个腰佩刀剑的身影，在你失神的瞳孔中逐渐淡去……<br>',
		23 => '一切……都结束了吧……<br>你无力地倒在地上，<br>眼睁睁地看着血液从致命的伤口喷涌而出。<br>一个扛着枪械的身影，在你失神的瞳孔中逐渐淡去……<br>',
		24 => '一切……都结束了吧……<br>你无力地倒在地上，<br>眼睁睁地看着血液从致命的伤口喷涌而出。<br>一个手持投掷武器的身影，在你失神的瞳孔中逐渐淡去……<br>',
		25 => '一切……都结束了吧……<br>你无力地倒在地上，<br>眼睁睁地看着血液从致命的伤口喷涌而出。<br>一个手持爆炸物的身影，在你失神的瞳孔中逐渐淡去……<br>',
		26 => '“这味道……不对！”<br>饥渴难耐的你才咬了一口手中的补给品，就觉得不对劲。<br>然而，你发现得太晚了……<br>剧毒在几秒钟之内就夺去了你的生命。<br>',
		27 => '“什么！这里竟然……”<br>没能留意到陷阱的你，只能眼睁睁看着轰然启动的陷阱无情地撕碎你的身躯。<br>“啊啊……这是……哪个混蛋……”<br>你的双眼被鲜血永远地掩盖了。<br>',
		28 => '你被很奇怪的事情夺去了生命。<br>也许这跟一个名叫夜什么月的人有一星半点的关系。<br>具体情况请参见游戏状况。<br>',
		29 => '一切……都结束了吧……<br>你无力地倒在地上，<br>眼睁睁地看着血液从致命的伤口喷涌而出。<br>一个攥着符札的身影，在你失神的瞳孔中逐渐淡去……<br>',
		30 => '好奇心果然杀死猫啊……<br>你勉强支起破碎的身躯，<br>看着那个你刚才按下的带按钮的小盒子无奈地笑着。<br>这真是残酷的恶作剧啊。<br>你的意识逐渐模糊了……<br>',
		31 => '注射器里的药液才打进一半，你就觉得身体有异样。<br>“脖子……好痒……”<br>你疯狂地抠着脖子上的淋巴腺，<br>很快就倒在动脉破裂而流出的血泊中……<br>',
		32 => '“就躲在这里，让那些人自相残杀去吧。”<br>你正打着自己的小算盘，却被一声怒喝打断了。<br>“来人，这里有个挂机党！”<br>你惊愕地看着不知从哪里冒出来的玩家们把你团团围住。<br>“浪费时间，快去死吧！”<br>之后的事情，就太猎奇了……<br>',
		33 => '“对不起、对不起！能让我迫降一下吗？”<br>勉强躲过弹幕的你，忽然听到头上传来这样焦急的道歉声。<br>少女的迫降……？莫非是指……<br>少女娇柔的话音让你放松了警惕。<br>还没等你反应过来，少女——以及她乘坐的、几十吨重的机体——便把你的整个世界压得粉碎……<br>',
		34 => '将手中的溶剂一饮而尽之后，你感到全身就像燃烧起来一样。<br>“没错，我需要的就是这种力量！”<br>然而，当你看到自己像奶油般融化了的手掌在地上扑腾的时候，你才发现这场豪赌押错了边。<br>“那么，你就燃烧殆尽吧。”在意识崩解前，传来了一个女声的叹息。<br>',
		35 => '在你失去意识之前，你仿佛听到了一个冰冷的声音。<br>“像你这样的Homo-Speculator……”<br>“……真是最差劲的个体了”<br>然后，你看着你的身体和意识在一道圣光中溶解了。<br>',
		36 => '你徒劳地想挣脱丝带的束缚，<br>但是从丝带上传来的巨大压力，简简单单地将你一分两半。<br>真是杂鱼一样的死法……<br>',
		37 => '你徒劳地想躲避丝带，<br>但是说时迟那时快，你发现你的头正在骨碌碌地往山脚下滚去。<br>真是杂鱼一样的死法……<br>',
		38 => '你成功地躲避了丝带，<br>没想到从丝带中竟然喷出了岩浆！<br>你的意识在烈火中消失了。<br>',
		39 => '“这…… 这不科学！”<br>在最后残存的意识里，你还在努力分辨着那个像U却不是U的字母究竟是什么。',
		40 => '你被对方暴风骤雨般的攻击打得毫无还手之力。对方欺身向前，准备了结你的性命。你不甘就这么死去，振臂高呼到：<br><span class="clan">“安拉胡阿克巴！”</span><br>对方这才发现你腰间绑着一排明晃晃的炸药。<br>你用尽最后的力气拉响了引线，猛地扑了上去。剧烈的爆炸一瞬间就夺去了你的生命。',
		41 => '你暴风骤雨般的攻击将对方打得毫无还手之力，正当你欺身向前，准备了结对方的性命时，对方忽然振臂高呼：<br><span class="clan">“安拉胡阿克巴！”</span><br>你这才发现对方腰间绑着一排明晃晃的炸药，但他已猛地扑了上来。剧烈的爆炸一瞬间就夺去了你的生命。'
	);
	
	$sexinfo = Array(0=> '未定', 'm' => '男生', 'f' => '女生');
	
	$chatinfo = Array(0 => '全员', 1 => '队伍', 2 => '密语', 3 => '遗言', 4 => '公告', 5 => '系统');

	/*Infomations*/
	$_INFO = Array(
		'reg_success' => '注册成功！请返回首页登陆游戏。',
		'pass_success' => '修改密码成功。',
		'pass_failure' => '未修改密码。',
		'data_success' => '接受对帐户资料的修改。',
		'data_failure' => '未修改帐户资料。'
	);

	/*Error settings*/
	$_ERROR = Array(
		'db_failure' => '数据库读写异常，请重试或通知管理员',
		'name_not_set' => '用户名不能为空，请检查用户名输入',
		'name_too_long' => '用户名过长，请检查用户名输入',
		'name_invalid' => '用户名含有非法字符，请检查用户名输入',
		'name_banned' => '用户名含有违禁用语，请检查用户名输入',
		'name_exists' => '用户名已被注册，请更换用户名',
		'pass_not_set' => '密码不能为空，请检查密码输入',
		'pass_not_match' => '两次输入的密码不一致，请检查密码输入',
		'pass_too_short' => '密码过短，请检查密码输入',
		'pass_too_long' => '密码过长，请检查密码输入',
		'ip_banned' => '此IP已被封禁，请与管理员联系',
		'logged_in' => '用户已登录，请先退出登陆再注册',
		'user_not_exists' => '用户不存在，请检查用户名输入',
		
		'no_login' => '用户未登陆，请从首页登录后再进入游戏',
		'login_check' => '用户信息验证失败，请清空缓存后进入游戏',
		'login_time' => '登录间隔时间过长，请重新登录后进入游戏',
		'login_info' => '用户信息不正确，请清空缓存和Cookie后进入游戏',
		'player_limit' => '本局游戏参加人数已达上限，无法进入，请下局再来',
		'wrong_pw' => '用户名或密码错误，请检查输入',
		'player_exist' => '角色已经存在，请不要重复激活',
		'no_start' => '游戏尚未开始，请稍后再登录',
		'valid_stop' => '本游戏已经停止激活，无法进入，请下局再来',
		'user_ban' => '此账号禁止进入游戏，请与管理员联系',
		'no_admin' => '你不是管理员，不能使用此功能',
		'ip_limit' => '本局此IP激活人数已满，请下局再来',
		'no_power' => '你的管理权限不够，不能进行此操作',
		'wrong_adcmd' => '指令错误，请重新输入',
		//'invalid_name' => '用户名含有非法字符，请重新输入',
		//'banned_name' => '用户名含有违禁用语，请更改用户名',
		//'banned_ip' => '此IP已被封禁，请与管理员联系',
		//'long_name' => '用户名过长，请重新输入用户名'
		'kuji_failure'=>'切糕不足，或输入了错误的抽卡参数',
	);
	
}

?>