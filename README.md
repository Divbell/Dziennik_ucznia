MyDaily
===============
User admin: 

login: admin  
pass: admin

Hasło do serwera MySql:
===============
page -> protected -> config -> main.php ->

		'db'=>array(
			'connectionString' => *'mysql:host=HOST;dbname=NAME_OF_DB'*,
			'emulatePrepare' => true,
			'username' => *'ENTER YOUR USERNAME HERE'*,
	  	'password' => *'ENTER YOUR PASSWORD HERE'*, 
			'charset' => 'utf8',
			'tablePrefix' => 'tbl_',
		),

Linia 59.
