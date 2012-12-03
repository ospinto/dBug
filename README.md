# dBug
- Updated for PSR-0 copmliance
- created composer package


## Usage

Install via Composer.
Class will be autoloaded.


### usage 
``` php

   new \Ospinto\Dbug($myVariable);

```

### Class arguments:

    __construct ($var,$forceType="",$bCollapsed=false, $var_name='')

    $var - variable to dump,
    $bCollapsed - view collapsed
    $var_name - name of variable - displayed in dump header



More examples at http://dbug.ospinto.com/examples.php

## Features

PHP version of ColdFusion’s cfdump.

Outputs colored and structured tabular variable information.

Variable types supported are: Arrays, Classes/Objects, Database and XML Resources.

Ability to force certain types of output. Example: You can force an
object variable to be outputted as an array type variable.

Stylesheet can be easily edited.

Table cells can be expanded and collapsed.

It’s FREE!!!
