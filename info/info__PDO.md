# **PDO** *Class*
![logo](https://rapidpurple.com/v2/wp-content/uploads/2014/08/php-pdo.png)
##  Preparare le SQL
### EXEC [for details](http://php.net/manual/en/pdo.exec.php)
>è utilizzato per creare tabelle ( Create Table )<br> 
_non ritorna niente_
```php
$conn->exec($sql);
echo "Tabella Users creata con successo";
```

---

### PREPARE [for details](http://php.net/manual/en/pdo.prepare.php)
>è utilizzato per aggiornare le tabelle ( UPDATE )<br> 
_ritorna un oggetto_
```php
$stmt = $conn->prepare($sql);
$stmt->execute();
echo $stmt->rowCount() . " record UPDATED con successo";
```
---

### QUERY [for details](http://php.net/manual/en/pdo.query.php)
>è utilizzato per fare selezionare i dati delle tabelle ( SELECT )
_ritorna un oggetto_
```php
$sql = "SELECT id, firstname, lastname FROM MyGuests";
$result = $conn->query($sql);
```

---

### for more info:
* [exec-vs-execute-vs-query](https://stackoverflow.com/questions/49641775/when-to-use-pdo-exec-vs-execute-vs-query)
* [diagramma exec-execute-query](https://i.stack.imgur.com/QoYkc.png)

---
![CRUD](https://3.bp.blogspot.com/-z5VTy2Qxrkw/V_IKiYtuG7I/AAAAAAAAAMM/fsiIok7_4f4zcjL4g8Zw8zftx_Mi4FKkQCLcB/s1600/mongodb-crud-operations1.png)