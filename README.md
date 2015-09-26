twig-global-variable-example
============================

Un proyecto Symfony para demostrar cómo crear una variable global de twig que apunte a una función de una clase.

> Para hacer esto, debemos definir una clase como servicio. Y este servicio definirlo como variable global.

### Pasos

1) Definir la clase a la que se quiere acceder.
```php
// src/AppBundle/Utils/Utils.php
class Utils
{
    static public function getHolaMundo()
    {
        return 'Hola Mundo';
    }
}
```

2) Definir el servicio.
```yml
# app/config/services.yml
services:
    app.utils:
        class: AppBundle\Utils\Utils
```

3) Definir la variable global.
```yml
# app/config/config.yml
twig:
    globals:
        utils: '@app.utils'
```

4) Resultado final:
```twig
# app/Resources/views/default/index.html.twig
{{ utils.getHolaMundo }}
```
