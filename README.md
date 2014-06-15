Dziennik_ucznia
===============
User admin: 

login: admin  
pass: admin

Hasło do serwera MySql:
===============
page -> protected -> config -> main.php ->

		'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=dziennik_ucznia',
			'emulatePrepare' => true,
			'username' => 'root',
	  	'password' => *'ENTER YOUR PASSWORD HERE'*, 
			'charset' => 'utf8',
			'tablePrefix' => 'tbl_',
		),

Linia 59.
