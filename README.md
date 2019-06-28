# sdk-php-core
SDK core on php. Can be used to embed in your favorite framework.


### Start

`composer require matryoshka-app/sdk-php-core`

### Run

You should call Matryoshka\Matryoshka->start() for start app. example:

```php
$matryoshka = new Matryoshka();
$response = $matryoshka->start();
echo $response;
```

### Handlers
Handlers extended Matryoshka\Handlers\Handler abstract class. 
You should set uri and handler for you handler. You can use uri system for easy understanding how to use the payload.
example:
```php
class MockHandler extends Handler {
    static function getURI() {
        return 'test/1';
    }

    function handler() {
        $menuItem = new MenuItem();
        $menuItem->title = new Text('test');
        
        $response = $this->getResponse();
        $response->menu->add($menuItem);
        $response->addWidget(new Text('testim'));
    }
}
```
On example below we created new handler and declared required methods getURI() and handler(). 
getURI() - should return uri string.
handler() - your logic and build response for reply.

Now you should add new handlers for you requests. Handlers need be registered on sdk. 

```php
$matryoshka->getHandlerManager()->addHandler(SomeHandler::class);
```

URI - contained payload parameter according http uri interface. you can use url and query string `/users/profile?id=2&full_profile=true` after '?' you can pass for you handler as http request. You can get it on you handler `$this->getRequest()->uri` and array query string `$this->getRequest()->query`. Or you can use full payload on `$this->getRequest()->payload`.
