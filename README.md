# Prise en main du micro ORM Paris & Idiorm

### Configuration
```php
// le fichier config.inc.php
//la base de données
require_once 'idiorm.inc.php';
require_once 'paris.inc.php';
ORM::configure('mysql:host=localhost;dbname=rmbz0603_passeports');
ORM::configure('username', 'root');
ORM::configure('password', '');
```

```php
require_once './inc/config.inc.php';
require_once './inc/class/personne.class.php';
```

### Relier l'Entity Personne à la table SQL personne
```php
class Personne  extends Model{
	// la jointure de la class BO Businnes Object( ou Entity)  
    // et la table personne
	public static $_table = "personne"; // la table personne Mysql
}
```

### les imports :
```php
require_once './inc/config.inc.php';
require_once './inc/class/personne.class.php';
```

