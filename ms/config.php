<?php
return [
	//全局账号相关配置
	'accounts'=>[
		[
			'name'=>'A1-bongaonhighschool',
			'client_id'=>'1c52823d-5d87-4571-9956-43cff50d5bc2',
			'tenant_id'=>'697b676a-977f-43ca-a4c1-078f913af226',
			'client_secret'=>'b7SbkI_x~5wSs~.3i8Kc4~~QWt.766sekR',
			'sku_ids'=>[
				'a1学生'=>'314c4481-f395-4525-be8b-2ec4bb1e9d91',
				'a1教职工'=>'94763226-9b3c-4e75-a931-5c89701abe66'
			],
		],
		[
			'name'=>'A1新加坡无限订阅',
			'client_id'=>'18bf17cc-xxxx-xxxx-xxxx-5ee172bfa1e5',
			'tenant_id'=>'8e6fda94-xxxx-xxxx-xxxx-8df28ac1df0e',
			'client_secret'=>'bpMBqTIwRFE_xxxxxxxxxxxxx_5uw163.~',
			'sku_ids'=>[
				'a1教职工'=>'94763226-9b3c-4e75-a931-5c89701abe66'
			],
		],
	],
	
	
	
	'locations'=>[//自己配置，写了几个我常用的
		'中国'=>'CN',
		'台湾'=>'TW',
		'香港'=>'HK',
		'日本'=>'JP',
		'美国'=>'US',
		'新加坡'=>'SG',
		'英国'=>'GB'
	],
	
	//后台相关配置
	'admin'=>[
		'username'=>'admin',
		'password'=>'4f382a4ffabce9227a783b071956472a',//自行输入密码 https://md5jiami.51240.com/  将32位 小写结果填入
		'invitation_code_num'=>'8',//随机生成的邀请码位数
	],

];