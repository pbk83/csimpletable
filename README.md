pbk83/csimpletable
=========
Install
------
SimpleTable can be installed together with Anax - MVC through Composer. Add the following line to composer.json (under require ):

```json
"pbk83/csimpletable": "dev-master"
```
SimpleTable can then be added as a service in Anax - MVC:

```php
$di->set('SimpleTable', function() use ($di) {
    $table = new pbk83\SimpleTable\CSimpleTable();    
    return $table;
});
```

SimpleTable can also be used without Anax - MVC.

Use
------
Use the method addHeadings($head) to create a header.
Example:
````php
addHeadings([’Name’, ’Age’]);
````
Use the method addRow($row) to add rows to the table.
Example:
````php
addRow([’Joe’, ’43’]);
addRow([’Jane’, ’45’]);
````
Use the method createTable() to get the generated html - code.

| Name          | Age           |
| ------------- |:-------------:|
| Joe           | 43            |
| Jane          | 45            |
