---
title: API Reference

language_tabs:
- bash
- javascript

includes:

search: true

toc_footers:
- <a href='http://github.com/mpociot/documentarian'>Documentation Powered by Documentarian</a>
---
<!-- START_INFO -->
# Info

Welcome to the generated API reference.
[Get Postman Collection](http://localhost/docs/collection.json)

<!-- END_INFO -->

#general
<!-- START_c6782d99ee8a3b8284a40dd5963b281d -->
## /api/status/ping
> Example request:

```bash
curl -X GET -G "http://localhost/api/status/ping" 
```

```javascript
const url = new URL("http://localhost/api/status/ping");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "message": "",
    "data": null,
    "status_code": 200
}
```

### HTTP Request
`GET /api/status/ping`


<!-- END_c6782d99ee8a3b8284a40dd5963b281d -->

<!-- START_bc42578cdf9b64994335abfd8eb8d0ce -->
## /api/status/version
> Example request:

```bash
curl -X GET -G "http://localhost/api/status/version" 
```

```javascript
const url = new URL("http://localhost/api/status/version");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "message": "",
    "data": "1.3.5",
    "status_code": 200
}
```

### HTTP Request
`GET /api/status/version`


<!-- END_bc42578cdf9b64994335abfd8eb8d0ce -->

<!-- START_ab8fae5a5a7e9d9fd9719629c9897bc3 -->
## /api/weather/city/{city}/current
> Example request:

```bash
curl -X GET -G "http://localhost/api/weather/city/{city}/current" 
```

```javascript
const url = new URL("http://localhost/api/weather/city/{city}/current");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (404):

```json
{
    "message": "Unknown city",
    "status_code": 404,
    "debug": {
        "line": 14,
        "file": "C:\\wamp64\\www\\dingo_tutorial\\app\\Http\\Controllers\\QueryController.php",
        "class": "Symfony\\Component\\HttpKernel\\Exception\\NotFoundHttpException",
        "trace": [
            "#0 [internal function]: App\\Http\\Controllers\\QueryController->current(NULL)",
            "#1 C:\\wamp64\\www\\dingo_tutorial\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Controller.php(54): call_user_func_array(Array, Array)",
            "#2 C:\\wamp64\\www\\dingo_tutorial\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\ControllerDispatcher.php(45): Illuminate\\Routing\\Controller->callAction('current', Array)",
            "#3 C:\\wamp64\\www\\dingo_tutorial\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Route.php(212): Illuminate\\Routing\\ControllerDispatcher->dispatch(Object(Illuminate\\Routing\\Route), Object(App\\Http\\Controllers\\QueryController), 'current')",
            "#4 C:\\wamp64\\www\\dingo_tutorial\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Route.php(169): Illuminate\\Routing\\Route->runController()",
            "#5 C:\\wamp64\\www\\dingo_tutorial\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(658): Illuminate\\Routing\\Route->run()",
            "#6 C:\\wamp64\\www\\dingo_tutorial\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php(30): Illuminate\\Routing\\Router->Illuminate\\Routing\\{closure}(Object(Dingo\\Api\\Http\\Request))",
            "#7 C:\\wamp64\\www\\dingo_tutorial\\vendor\\dingo\\api\\src\\Http\\Middleware\\PrepareController.php(45): Illuminate\\Routing\\Pipeline->Illuminate\\Routing\\{closure}(Object(Dingo\\Api\\Http\\Request))",
            "#8 C:\\wamp64\\www\\dingo_tutorial\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(149): Dingo\\Api\\Http\\Middleware\\PrepareController->handle(Object(Dingo\\Api\\Http\\Request), Object(Closure))",
            "#9 C:\\wamp64\\www\\dingo_tutorial\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php(53): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Dingo\\Api\\Http\\Request))",
            "#10 C:\\wamp64\\www\\dingo_tutorial\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(102): Illuminate\\Routing\\Pipeline->Illuminate\\Routing\\{closure}(Object(Dingo\\Api\\Http\\Request))",
            "#11 C:\\wamp64\\www\\dingo_tutorial\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(660): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))",
            "#12 C:\\wamp64\\www\\dingo_tutorial\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(635): Illuminate\\Routing\\Router->runRouteWithinStack(Object(Illuminate\\Routing\\Route), Object(Dingo\\Api\\Http\\Request))",
            "#13 C:\\wamp64\\www\\dingo_tutorial\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(601): Illuminate\\Routing\\Router->runRoute(Object(Dingo\\Api\\Http\\Request), Object(Illuminate\\Routing\\Route))",
            "#14 C:\\wamp64\\www\\dingo_tutorial\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(590): Illuminate\\Routing\\Router->dispatchToRoute(Object(Dingo\\Api\\Http\\Request))",
            "#15 C:\\wamp64\\www\\dingo_tutorial\\vendor\\dingo\\api\\src\\Routing\\Adapter\\Laravel.php(88): Illuminate\\Routing\\Router->dispatch(Object(Dingo\\Api\\Http\\Request))",
            "#16 C:\\wamp64\\www\\dingo_tutorial\\vendor\\dingo\\api\\src\\Routing\\Router.php(514): Dingo\\Api\\Routing\\Adapter\\Laravel->dispatch(Object(Dingo\\Api\\Http\\Request), 'v1')",
            "#17 C:\\wamp64\\www\\dingo_tutorial\\vendor\\dingo\\api\\src\\Http\\Middleware\\Request.php(126): Dingo\\Api\\Routing\\Router->dispatch(Object(Dingo\\Api\\Http\\Request))",
            "#18 C:\\wamp64\\www\\dingo_tutorial\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(114): Dingo\\Api\\Http\\Middleware\\Request->Dingo\\Api\\Http\\Middleware\\{closure}(Object(Dingo\\Api\\Http\\Request))",
            "#19 C:\\wamp64\\www\\dingo_tutorial\\vendor\\fideloper\\proxy\\src\\TrustProxies.php(56): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Dingo\\Api\\Http\\Request))",
            "#20 C:\\wamp64\\www\\dingo_tutorial\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(149): Fideloper\\Proxy\\TrustProxies->handle(Object(Dingo\\Api\\Http\\Request), Object(Closure))",
            "#21 C:\\wamp64\\www\\dingo_tutorial\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php(30): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Dingo\\Api\\Http\\Request))",
            "#22 C:\\wamp64\\www\\dingo_tutorial\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(149): Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest->handle(Object(Dingo\\Api\\Http\\Request), Object(Closure))",
            "#23 C:\\wamp64\\www\\dingo_tutorial\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php(30): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Dingo\\Api\\Http\\Request))",
            "#24 C:\\wamp64\\www\\dingo_tutorial\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(149): Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest->handle(Object(Dingo\\Api\\Http\\Request), Object(Closure))",
            "#25 C:\\wamp64\\www\\dingo_tutorial\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize.php(27): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Dingo\\Api\\Http\\Request))",
            "#26 C:\\wamp64\\www\\dingo_tutorial\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(149): Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize->handle(Object(Dingo\\Api\\Http\\Request), Object(Closure))",
            "#27 C:\\wamp64\\www\\dingo_tutorial\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\CheckForMaintenanceMode.php(46): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Dingo\\Api\\Http\\Request))",
            "#28 C:\\wamp64\\www\\dingo_tutorial\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(149): Illuminate\\Foundation\\Http\\Middleware\\CheckForMaintenanceMode->handle(Object(Dingo\\Api\\Http\\Request), Object(Closure))",
            "#29 C:\\wamp64\\www\\dingo_tutorial\\vendor\\barryvdh\\laravel-cors\\src\\HandlePreflight.php(29): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Dingo\\Api\\Http\\Request))",
            "#30 C:\\wamp64\\www\\dingo_tutorial\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(149): Barryvdh\\Cors\\HandlePreflight->handle(Object(Dingo\\Api\\Http\\Request), Object(Closure))",
            "#31 C:\\wamp64\\www\\dingo_tutorial\\vendor\\barryvdh\\laravel-cors\\src\\HandleCors.php(36): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Dingo\\Api\\Http\\Request))",
            "#32 C:\\wamp64\\www\\dingo_tutorial\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(149): Barryvdh\\Cors\\HandleCors->handle(Object(Dingo\\Api\\Http\\Request), Object(Closure))",
            "#33 C:\\wamp64\\www\\dingo_tutorial\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(102): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Dingo\\Api\\Http\\Request))",
            "#34 C:\\wamp64\\www\\dingo_tutorial\\vendor\\dingo\\api\\src\\Http\\Middleware\\Request.php(127): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))",
            "#35 C:\\wamp64\\www\\dingo_tutorial\\vendor\\dingo\\api\\src\\Http\\Middleware\\Request.php(103): Dingo\\Api\\Http\\Middleware\\Request->sendRequestThroughRouter(Object(Dingo\\Api\\Http\\Request))",
            "#36 C:\\wamp64\\www\\dingo_tutorial\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(149): Dingo\\Api\\Http\\Middleware\\Request->handle(Object(Dingo\\Api\\Http\\Request), Object(Closure))",
            "#37 C:\\wamp64\\www\\dingo_tutorial\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php(53): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))",
            "#38 C:\\wamp64\\www\\dingo_tutorial\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(102): Illuminate\\Routing\\Pipeline->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))",
            "#39 C:\\wamp64\\www\\dingo_tutorial\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php(151): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))",
            "#40 C:\\wamp64\\www\\dingo_tutorial\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php(116): Illuminate\\Foundation\\Http\\Kernel->sendRequestThroughRouter(Object(Illuminate\\Http\\Request))",
            "#41 C:\\wamp64\\www\\dingo_tutorial\\vendor\\mpociot\\laravel-apidoc-generator\\src\\Tools\\ResponseStrategies\\ResponseCallStrategy.php(276): Illuminate\\Foundation\\Http\\Kernel->handle(Object(Illuminate\\Http\\Request))",
            "#42 C:\\wamp64\\www\\dingo_tutorial\\vendor\\mpociot\\laravel-apidoc-generator\\src\\Tools\\ResponseStrategies\\ResponseCallStrategy.php(260): Mpociot\\ApiDoc\\Tools\\ResponseStrategies\\ResponseCallStrategy->callLaravelRoute(Object(Illuminate\\Http\\Request))",
            "#43 C:\\wamp64\\www\\dingo_tutorial\\vendor\\mpociot\\laravel-apidoc-generator\\src\\Tools\\ResponseStrategies\\ResponseCallStrategy.php(36): Mpociot\\ApiDoc\\Tools\\ResponseStrategies\\ResponseCallStrategy->makeApiCall(Object(Illuminate\\Http\\Request))",
            "#44 C:\\wamp64\\www\\dingo_tutorial\\vendor\\mpociot\\laravel-apidoc-generator\\src\\Tools\\ResponseResolver.php(49): Mpociot\\ApiDoc\\Tools\\ResponseStrategies\\ResponseCallStrategy->__invoke(Object(Dingo\\Api\\Routing\\Route), Array, Array)",
            "#45 C:\\wamp64\\www\\dingo_tutorial\\vendor\\mpociot\\laravel-apidoc-generator\\src\\Tools\\ResponseResolver.php(68): Mpociot\\ApiDoc\\Tools\\ResponseResolver->resolve(Array, Array)",
            "#46 C:\\wamp64\\www\\dingo_tutorial\\vendor\\mpociot\\laravel-apidoc-generator\\src\\Tools\\Generator.php(57): Mpociot\\ApiDoc\\Tools\\ResponseResolver::getResponse(Object(Dingo\\Api\\Routing\\Route), Array, Array)",
            "#47 C:\\wamp64\\www\\dingo_tutorial\\vendor\\mpociot\\laravel-apidoc-generator\\src\\Commands\\GenerateDocumentation.php(201): Mpociot\\ApiDoc\\Tools\\Generator->processRoute(Object(Dingo\\Api\\Routing\\Route), Array)",
            "#48 C:\\wamp64\\www\\dingo_tutorial\\vendor\\mpociot\\laravel-apidoc-generator\\src\\Commands\\GenerateDocumentation.php(59): Mpociot\\ApiDoc\\Commands\\GenerateDocumentation->processRoutes(Object(Mpociot\\ApiDoc\\Tools\\Generator), Array)",
            "#49 [internal function]: Mpociot\\ApiDoc\\Commands\\GenerateDocumentation->handle()",
            "#50 C:\\wamp64\\www\\dingo_tutorial\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(29): call_user_func_array(Array, Array)",
            "#51 C:\\wamp64\\www\\dingo_tutorial\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(87): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()",
            "#52 C:\\wamp64\\www\\dingo_tutorial\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(31): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))",
            "#53 C:\\wamp64\\www\\dingo_tutorial\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php(549): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)",
            "#54 C:\\wamp64\\www\\dingo_tutorial\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(183): Illuminate\\Container\\Container->call(Array)",
            "#55 C:\\wamp64\\www\\dingo_tutorial\\vendor\\symfony\\console\\Command\\Command.php(255): Illuminate\\Console\\Command->execute(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))",
            "#56 C:\\wamp64\\www\\dingo_tutorial\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(170): Symfony\\Component\\Console\\Command\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))",
            "#57 C:\\wamp64\\www\\dingo_tutorial\\vendor\\symfony\\console\\Application.php(960): Illuminate\\Console\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))",
            "#58 C:\\wamp64\\www\\dingo_tutorial\\vendor\\symfony\\console\\Application.php(255): Symfony\\Component\\Console\\Application->doRunCommand(Object(Mpociot\\ApiDoc\\Commands\\GenerateDocumentation), Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))",
            "#59 C:\\wamp64\\www\\dingo_tutorial\\vendor\\symfony\\console\\Application.php(148): Symfony\\Component\\Console\\Application->doRun(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))",
            "#60 C:\\wamp64\\www\\dingo_tutorial\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Application.php(88): Symfony\\Component\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))",
            "#61 C:\\wamp64\\www\\dingo_tutorial\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Console\\Kernel.php(121): Illuminate\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))",
            "#62 C:\\wamp64\\www\\dingo_tutorial\\artisan(37): Illuminate\\Foundation\\Console\\Kernel->handle(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))",
            "#63 {main}"
        ]
    }
}
```

### HTTP Request
`GET /api/weather/city/{city}/current`


<!-- END_ab8fae5a5a7e9d9fd9719629c9897bc3 -->

<!-- START_91c5f25025f0aa28f35b24adc93c7474 -->
## /api/weather/city/{city}/all
> Example request:

```bash
curl -X GET -G "http://localhost/api/weather/city/{city}/all" 
```

```javascript
const url = new URL("http://localhost/api/weather/city/{city}/all");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (404):

```json
{
    "message": "Unknown city",
    "status_code": 404,
    "debug": {
        "line": 22,
        "file": "C:\\wamp64\\www\\dingo_tutorial\\app\\Http\\Controllers\\QueryController.php",
        "class": "Symfony\\Component\\HttpKernel\\Exception\\NotFoundHttpException",
        "trace": [
            "#0 [internal function]: App\\Http\\Controllers\\QueryController->all(NULL)",
            "#1 C:\\wamp64\\www\\dingo_tutorial\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Controller.php(54): call_user_func_array(Array, Array)",
            "#2 C:\\wamp64\\www\\dingo_tutorial\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\ControllerDispatcher.php(45): Illuminate\\Routing\\Controller->callAction('all', Array)",
            "#3 C:\\wamp64\\www\\dingo_tutorial\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Route.php(212): Illuminate\\Routing\\ControllerDispatcher->dispatch(Object(Illuminate\\Routing\\Route), Object(App\\Http\\Controllers\\QueryController), 'all')",
            "#4 C:\\wamp64\\www\\dingo_tutorial\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Route.php(169): Illuminate\\Routing\\Route->runController()",
            "#5 C:\\wamp64\\www\\dingo_tutorial\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(658): Illuminate\\Routing\\Route->run()",
            "#6 C:\\wamp64\\www\\dingo_tutorial\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php(30): Illuminate\\Routing\\Router->Illuminate\\Routing\\{closure}(Object(Dingo\\Api\\Http\\Request))",
            "#7 C:\\wamp64\\www\\dingo_tutorial\\vendor\\dingo\\api\\src\\Http\\Middleware\\PrepareController.php(45): Illuminate\\Routing\\Pipeline->Illuminate\\Routing\\{closure}(Object(Dingo\\Api\\Http\\Request))",
            "#8 C:\\wamp64\\www\\dingo_tutorial\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(149): Dingo\\Api\\Http\\Middleware\\PrepareController->handle(Object(Dingo\\Api\\Http\\Request), Object(Closure))",
            "#9 C:\\wamp64\\www\\dingo_tutorial\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php(53): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Dingo\\Api\\Http\\Request))",
            "#10 C:\\wamp64\\www\\dingo_tutorial\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(102): Illuminate\\Routing\\Pipeline->Illuminate\\Routing\\{closure}(Object(Dingo\\Api\\Http\\Request))",
            "#11 C:\\wamp64\\www\\dingo_tutorial\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(660): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))",
            "#12 C:\\wamp64\\www\\dingo_tutorial\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(635): Illuminate\\Routing\\Router->runRouteWithinStack(Object(Illuminate\\Routing\\Route), Object(Dingo\\Api\\Http\\Request))",
            "#13 C:\\wamp64\\www\\dingo_tutorial\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(601): Illuminate\\Routing\\Router->runRoute(Object(Dingo\\Api\\Http\\Request), Object(Illuminate\\Routing\\Route))",
            "#14 C:\\wamp64\\www\\dingo_tutorial\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(590): Illuminate\\Routing\\Router->dispatchToRoute(Object(Dingo\\Api\\Http\\Request))",
            "#15 C:\\wamp64\\www\\dingo_tutorial\\vendor\\dingo\\api\\src\\Routing\\Adapter\\Laravel.php(88): Illuminate\\Routing\\Router->dispatch(Object(Dingo\\Api\\Http\\Request))",
            "#16 C:\\wamp64\\www\\dingo_tutorial\\vendor\\dingo\\api\\src\\Routing\\Router.php(514): Dingo\\Api\\Routing\\Adapter\\Laravel->dispatch(Object(Dingo\\Api\\Http\\Request), 'v1')",
            "#17 C:\\wamp64\\www\\dingo_tutorial\\vendor\\dingo\\api\\src\\Http\\Middleware\\Request.php(126): Dingo\\Api\\Routing\\Router->dispatch(Object(Dingo\\Api\\Http\\Request))",
            "#18 C:\\wamp64\\www\\dingo_tutorial\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(114): Dingo\\Api\\Http\\Middleware\\Request->Dingo\\Api\\Http\\Middleware\\{closure}(Object(Dingo\\Api\\Http\\Request))",
            "#19 C:\\wamp64\\www\\dingo_tutorial\\vendor\\fideloper\\proxy\\src\\TrustProxies.php(56): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Dingo\\Api\\Http\\Request))",
            "#20 C:\\wamp64\\www\\dingo_tutorial\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(149): Fideloper\\Proxy\\TrustProxies->handle(Object(Dingo\\Api\\Http\\Request), Object(Closure))",
            "#21 C:\\wamp64\\www\\dingo_tutorial\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php(30): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Dingo\\Api\\Http\\Request))",
            "#22 C:\\wamp64\\www\\dingo_tutorial\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(149): Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest->handle(Object(Dingo\\Api\\Http\\Request), Object(Closure))",
            "#23 C:\\wamp64\\www\\dingo_tutorial\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php(30): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Dingo\\Api\\Http\\Request))",
            "#24 C:\\wamp64\\www\\dingo_tutorial\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(149): Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest->handle(Object(Dingo\\Api\\Http\\Request), Object(Closure))",
            "#25 C:\\wamp64\\www\\dingo_tutorial\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize.php(27): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Dingo\\Api\\Http\\Request))",
            "#26 C:\\wamp64\\www\\dingo_tutorial\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(149): Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize->handle(Object(Dingo\\Api\\Http\\Request), Object(Closure))",
            "#27 C:\\wamp64\\www\\dingo_tutorial\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\CheckForMaintenanceMode.php(46): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Dingo\\Api\\Http\\Request))",
            "#28 C:\\wamp64\\www\\dingo_tutorial\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(149): Illuminate\\Foundation\\Http\\Middleware\\CheckForMaintenanceMode->handle(Object(Dingo\\Api\\Http\\Request), Object(Closure))",
            "#29 C:\\wamp64\\www\\dingo_tutorial\\vendor\\barryvdh\\laravel-cors\\src\\HandlePreflight.php(29): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Dingo\\Api\\Http\\Request))",
            "#30 C:\\wamp64\\www\\dingo_tutorial\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(149): Barryvdh\\Cors\\HandlePreflight->handle(Object(Dingo\\Api\\Http\\Request), Object(Closure))",
            "#31 C:\\wamp64\\www\\dingo_tutorial\\vendor\\barryvdh\\laravel-cors\\src\\HandleCors.php(36): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Dingo\\Api\\Http\\Request))",
            "#32 C:\\wamp64\\www\\dingo_tutorial\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(149): Barryvdh\\Cors\\HandleCors->handle(Object(Dingo\\Api\\Http\\Request), Object(Closure))",
            "#33 C:\\wamp64\\www\\dingo_tutorial\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(102): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Dingo\\Api\\Http\\Request))",
            "#34 C:\\wamp64\\www\\dingo_tutorial\\vendor\\dingo\\api\\src\\Http\\Middleware\\Request.php(127): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))",
            "#35 C:\\wamp64\\www\\dingo_tutorial\\vendor\\dingo\\api\\src\\Http\\Middleware\\Request.php(103): Dingo\\Api\\Http\\Middleware\\Request->sendRequestThroughRouter(Object(Dingo\\Api\\Http\\Request))",
            "#36 C:\\wamp64\\www\\dingo_tutorial\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(149): Dingo\\Api\\Http\\Middleware\\Request->handle(Object(Dingo\\Api\\Http\\Request), Object(Closure))",
            "#37 C:\\wamp64\\www\\dingo_tutorial\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php(53): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))",
            "#38 C:\\wamp64\\www\\dingo_tutorial\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(102): Illuminate\\Routing\\Pipeline->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))",
            "#39 C:\\wamp64\\www\\dingo_tutorial\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php(151): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))",
            "#40 C:\\wamp64\\www\\dingo_tutorial\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php(116): Illuminate\\Foundation\\Http\\Kernel->sendRequestThroughRouter(Object(Illuminate\\Http\\Request))",
            "#41 C:\\wamp64\\www\\dingo_tutorial\\vendor\\mpociot\\laravel-apidoc-generator\\src\\Tools\\ResponseStrategies\\ResponseCallStrategy.php(276): Illuminate\\Foundation\\Http\\Kernel->handle(Object(Illuminate\\Http\\Request))",
            "#42 C:\\wamp64\\www\\dingo_tutorial\\vendor\\mpociot\\laravel-apidoc-generator\\src\\Tools\\ResponseStrategies\\ResponseCallStrategy.php(260): Mpociot\\ApiDoc\\Tools\\ResponseStrategies\\ResponseCallStrategy->callLaravelRoute(Object(Illuminate\\Http\\Request))",
            "#43 C:\\wamp64\\www\\dingo_tutorial\\vendor\\mpociot\\laravel-apidoc-generator\\src\\Tools\\ResponseStrategies\\ResponseCallStrategy.php(36): Mpociot\\ApiDoc\\Tools\\ResponseStrategies\\ResponseCallStrategy->makeApiCall(Object(Illuminate\\Http\\Request))",
            "#44 C:\\wamp64\\www\\dingo_tutorial\\vendor\\mpociot\\laravel-apidoc-generator\\src\\Tools\\ResponseResolver.php(49): Mpociot\\ApiDoc\\Tools\\ResponseStrategies\\ResponseCallStrategy->__invoke(Object(Dingo\\Api\\Routing\\Route), Array, Array)",
            "#45 C:\\wamp64\\www\\dingo_tutorial\\vendor\\mpociot\\laravel-apidoc-generator\\src\\Tools\\ResponseResolver.php(68): Mpociot\\ApiDoc\\Tools\\ResponseResolver->resolve(Array, Array)",
            "#46 C:\\wamp64\\www\\dingo_tutorial\\vendor\\mpociot\\laravel-apidoc-generator\\src\\Tools\\Generator.php(57): Mpociot\\ApiDoc\\Tools\\ResponseResolver::getResponse(Object(Dingo\\Api\\Routing\\Route), Array, Array)",
            "#47 C:\\wamp64\\www\\dingo_tutorial\\vendor\\mpociot\\laravel-apidoc-generator\\src\\Commands\\GenerateDocumentation.php(201): Mpociot\\ApiDoc\\Tools\\Generator->processRoute(Object(Dingo\\Api\\Routing\\Route), Array)",
            "#48 C:\\wamp64\\www\\dingo_tutorial\\vendor\\mpociot\\laravel-apidoc-generator\\src\\Commands\\GenerateDocumentation.php(59): Mpociot\\ApiDoc\\Commands\\GenerateDocumentation->processRoutes(Object(Mpociot\\ApiDoc\\Tools\\Generator), Array)",
            "#49 [internal function]: Mpociot\\ApiDoc\\Commands\\GenerateDocumentation->handle()",
            "#50 C:\\wamp64\\www\\dingo_tutorial\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(29): call_user_func_array(Array, Array)",
            "#51 C:\\wamp64\\www\\dingo_tutorial\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(87): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()",
            "#52 C:\\wamp64\\www\\dingo_tutorial\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(31): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))",
            "#53 C:\\wamp64\\www\\dingo_tutorial\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php(549): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)",
            "#54 C:\\wamp64\\www\\dingo_tutorial\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(183): Illuminate\\Container\\Container->call(Array)",
            "#55 C:\\wamp64\\www\\dingo_tutorial\\vendor\\symfony\\console\\Command\\Command.php(255): Illuminate\\Console\\Command->execute(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))",
            "#56 C:\\wamp64\\www\\dingo_tutorial\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(170): Symfony\\Component\\Console\\Command\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))",
            "#57 C:\\wamp64\\www\\dingo_tutorial\\vendor\\symfony\\console\\Application.php(960): Illuminate\\Console\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))",
            "#58 C:\\wamp64\\www\\dingo_tutorial\\vendor\\symfony\\console\\Application.php(255): Symfony\\Component\\Console\\Application->doRunCommand(Object(Mpociot\\ApiDoc\\Commands\\GenerateDocumentation), Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))",
            "#59 C:\\wamp64\\www\\dingo_tutorial\\vendor\\symfony\\console\\Application.php(148): Symfony\\Component\\Console\\Application->doRun(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))",
            "#60 C:\\wamp64\\www\\dingo_tutorial\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Application.php(88): Symfony\\Component\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))",
            "#61 C:\\wamp64\\www\\dingo_tutorial\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Console\\Kernel.php(121): Illuminate\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))",
            "#62 C:\\wamp64\\www\\dingo_tutorial\\artisan(37): Illuminate\\Foundation\\Console\\Kernel->handle(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))",
            "#63 {main}"
        ]
    }
}
```

### HTTP Request
`GET /api/weather/city/{city}/all`


<!-- END_91c5f25025f0aa28f35b24adc93c7474 -->

<!-- START_511eeadfce956cbeea74ce3763392dcd -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET -G "http://localhost/api/users" 
```

```javascript
const url = new URL("http://localhost/api/users");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "data": [
        {
            "id": 1,
            "name": "Hollis Zemlak",
            "email": "princess84@example.com",
            "roles": {
                "data": []
            }
        },
        {
            "id": 2,
            "name": "Dr. Dashawn Hagenes Jr.",
            "email": "jadyn71@example.com",
            "roles": {
                "data": []
            }
        },
        {
            "id": 3,
            "name": "Wendell Rempel",
            "email": "alexane74@example.net",
            "roles": {
                "data": []
            }
        },
        {
            "id": 4,
            "name": "Alfonzo Barrows",
            "email": "bergstrom.laurence@example.com",
            "roles": {
                "data": []
            }
        },
        {
            "id": 5,
            "name": "Flavie Rempel",
            "email": "baron94@example.org",
            "roles": {
                "data": []
            }
        },
        {
            "id": 6,
            "name": "Michelle Greenfelder",
            "email": "rsauer@example.net",
            "roles": {
                "data": []
            }
        },
        {
            "id": 7,
            "name": "Ned Paucek",
            "email": "umcglynn@example.com",
            "roles": {
                "data": []
            }
        },
        {
            "id": 8,
            "name": "Ms. Celia Harris",
            "email": "junius.muller@example.org",
            "roles": {
                "data": []
            }
        },
        {
            "id": 9,
            "name": "Luther Wisoky",
            "email": "cruickshank.manuel@example.net",
            "roles": {
                "data": []
            }
        },
        {
            "id": 10,
            "name": "Mr. Guy Hoeger",
            "email": "zadams@example.net",
            "roles": {
                "data": []
            }
        }
    ],
    "meta": {
        "pagination": {
            "total": 54,
            "count": 10,
            "per_page": 10,
            "current_page": 1,
            "total_pages": 6,
            "links": {
                "next": "http:\/\/localhost\/api\/users?page=2"
            },
            "from": 1
        }
    }
}
```

### HTTP Request
`GET /api/users`


<!-- END_511eeadfce956cbeea74ce3763392dcd -->

<!-- START_105ec9a65e7bc0a1aeccf3057b069abb -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST "http://localhost/api/users" 
```

```javascript
const url = new URL("http://localhost/api/users");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


### HTTP Request
`POST /api/users`


<!-- END_105ec9a65e7bc0a1aeccf3057b069abb -->

<!-- START_185d8dd11617f7199ad63b2137aa37fb -->
## Display the specified resource.

> Example request:

```bash
curl -X GET -G "http://localhost/api/users/{user}" 
```

```javascript
const url = new URL("http://localhost/api/users/{user}");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "data": {
        "id": 1,
        "name": "Hollis Zemlak",
        "email": "princess84@example.com",
        "roles": {
            "data": []
        }
    }
}
```

### HTTP Request
`GET /api/users/{user}`


<!-- END_185d8dd11617f7199ad63b2137aa37fb -->

<!-- START_f274972870e4b957c00965c5d2c7e7bc -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT "http://localhost/api/users/{user}" 
```

```javascript
const url = new URL("http://localhost/api/users/{user}");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


### HTTP Request
`PUT /api/users/{user}`

`PATCH /api/users/{user}`


<!-- END_f274972870e4b957c00965c5d2c7e7bc -->

<!-- START_ccafd5a881df2ccf542ad8b0709f6fb6 -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE "http://localhost/api/users/{user}" 
```

```javascript
const url = new URL("http://localhost/api/users/{user}");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


### HTTP Request
`DELETE /api/users/{user}`


<!-- END_ccafd5a881df2ccf542ad8b0709f6fb6 -->

<!-- START_7ba029714012cd9c08cc50ae4dee9d7a -->
## /api/auth/login
> Example request:

```bash
curl -X POST "http://localhost/api/auth/login" 
```

```javascript
const url = new URL("http://localhost/api/auth/login");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


### HTTP Request
`POST /api/auth/login`


<!-- END_7ba029714012cd9c08cc50ae4dee9d7a -->

<!-- START_c5ab156ea210fb095d54ab41f7b95275 -->
## /api/auth/refresh
> Example request:

```bash
curl -X PATCH "http://localhost/api/auth/refresh" 
```

```javascript
const url = new URL("http://localhost/api/auth/refresh");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "PATCH",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


### HTTP Request
`PATCH /api/auth/refresh`


<!-- END_c5ab156ea210fb095d54ab41f7b95275 -->

<!-- START_2dd587e2c4901bceb60e22e36836289f -->
## /api/auth/invalidate
> Example request:

```bash
curl -X DELETE "http://localhost/api/auth/invalidate" 
```

```javascript
const url = new URL("http://localhost/api/auth/invalidate");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


### HTTP Request
`DELETE /api/auth/invalidate`


<!-- END_2dd587e2c4901bceb60e22e36836289f -->

<!-- START_e94e24496b4ec2effc15bcf93e8e068e -->
## /api/auth/register
> Example request:

```bash
curl -X POST "http://localhost/api/auth/register" 
```

```javascript
const url = new URL("http://localhost/api/auth/register");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


### HTTP Request
`POST /api/auth/register`


<!-- END_e94e24496b4ec2effc15bcf93e8e068e -->

<!-- START_c687e1b0525abc7141677bd20ed6c30a -->
## /api/auth/user
> Example request:

```bash
curl -X GET -G "http://localhost/api/auth/user" 
```

```javascript
const url = new URL("http://localhost/api/auth/user");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (401):

```json
{
    "message": "Failed to authenticate because of bad credentials or an invalid authorization header.",
    "status_code": 401,
    "debug": {
        "line": 113,
        "file": "C:\\wamp64\\www\\dingo_tutorial\\vendor\\dingo\\api\\src\\Auth\\Auth.php",
        "class": "Symfony\\Component\\HttpKernel\\Exception\\UnauthorizedHttpException",
        "trace": [
            "#0 C:\\wamp64\\www\\dingo_tutorial\\vendor\\dingo\\api\\src\\Auth\\Auth.php(96): Dingo\\Api\\Auth\\Auth->throwUnauthorizedException(Array)",
            "#1 C:\\wamp64\\www\\dingo_tutorial\\vendor\\dingo\\api\\src\\Http\\Middleware\\Auth.php(52): Dingo\\Api\\Auth\\Auth->authenticate(Array)",
            "#2 C:\\wamp64\\www\\dingo_tutorial\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(149): Dingo\\Api\\Http\\Middleware\\Auth->handle(Object(Dingo\\Api\\Http\\Request), Object(Closure))",
            "#3 C:\\wamp64\\www\\dingo_tutorial\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php(53): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Dingo\\Api\\Http\\Request))",
            "#4 C:\\wamp64\\www\\dingo_tutorial\\vendor\\dingo\\api\\src\\Http\\Middleware\\PrepareController.php(45): Illuminate\\Routing\\Pipeline->Illuminate\\Routing\\{closure}(Object(Dingo\\Api\\Http\\Request))",
            "#5 C:\\wamp64\\www\\dingo_tutorial\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(149): Dingo\\Api\\Http\\Middleware\\PrepareController->handle(Object(Dingo\\Api\\Http\\Request), Object(Closure))",
            "#6 C:\\wamp64\\www\\dingo_tutorial\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php(53): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Dingo\\Api\\Http\\Request))",
            "#7 C:\\wamp64\\www\\dingo_tutorial\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(102): Illuminate\\Routing\\Pipeline->Illuminate\\Routing\\{closure}(Object(Dingo\\Api\\Http\\Request))",
            "#8 C:\\wamp64\\www\\dingo_tutorial\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(660): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))",
            "#9 C:\\wamp64\\www\\dingo_tutorial\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(635): Illuminate\\Routing\\Router->runRouteWithinStack(Object(Illuminate\\Routing\\Route), Object(Dingo\\Api\\Http\\Request))",
            "#10 C:\\wamp64\\www\\dingo_tutorial\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(601): Illuminate\\Routing\\Router->runRoute(Object(Dingo\\Api\\Http\\Request), Object(Illuminate\\Routing\\Route))",
            "#11 C:\\wamp64\\www\\dingo_tutorial\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(590): Illuminate\\Routing\\Router->dispatchToRoute(Object(Dingo\\Api\\Http\\Request))",
            "#12 C:\\wamp64\\www\\dingo_tutorial\\vendor\\dingo\\api\\src\\Routing\\Adapter\\Laravel.php(88): Illuminate\\Routing\\Router->dispatch(Object(Dingo\\Api\\Http\\Request))",
            "#13 C:\\wamp64\\www\\dingo_tutorial\\vendor\\dingo\\api\\src\\Routing\\Router.php(514): Dingo\\Api\\Routing\\Adapter\\Laravel->dispatch(Object(Dingo\\Api\\Http\\Request), 'v1')",
            "#14 C:\\wamp64\\www\\dingo_tutorial\\vendor\\dingo\\api\\src\\Http\\Middleware\\Request.php(126): Dingo\\Api\\Routing\\Router->dispatch(Object(Dingo\\Api\\Http\\Request))",
            "#15 C:\\wamp64\\www\\dingo_tutorial\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(114): Dingo\\Api\\Http\\Middleware\\Request->Dingo\\Api\\Http\\Middleware\\{closure}(Object(Dingo\\Api\\Http\\Request))",
            "#16 C:\\wamp64\\www\\dingo_tutorial\\vendor\\fideloper\\proxy\\src\\TrustProxies.php(56): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Dingo\\Api\\Http\\Request))",
            "#17 C:\\wamp64\\www\\dingo_tutorial\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(149): Fideloper\\Proxy\\TrustProxies->handle(Object(Dingo\\Api\\Http\\Request), Object(Closure))",
            "#18 C:\\wamp64\\www\\dingo_tutorial\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php(30): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Dingo\\Api\\Http\\Request))",
            "#19 C:\\wamp64\\www\\dingo_tutorial\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(149): Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest->handle(Object(Dingo\\Api\\Http\\Request), Object(Closure))",
            "#20 C:\\wamp64\\www\\dingo_tutorial\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php(30): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Dingo\\Api\\Http\\Request))",
            "#21 C:\\wamp64\\www\\dingo_tutorial\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(149): Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest->handle(Object(Dingo\\Api\\Http\\Request), Object(Closure))",
            "#22 C:\\wamp64\\www\\dingo_tutorial\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize.php(27): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Dingo\\Api\\Http\\Request))",
            "#23 C:\\wamp64\\www\\dingo_tutorial\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(149): Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize->handle(Object(Dingo\\Api\\Http\\Request), Object(Closure))",
            "#24 C:\\wamp64\\www\\dingo_tutorial\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\CheckForMaintenanceMode.php(46): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Dingo\\Api\\Http\\Request))",
            "#25 C:\\wamp64\\www\\dingo_tutorial\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(149): Illuminate\\Foundation\\Http\\Middleware\\CheckForMaintenanceMode->handle(Object(Dingo\\Api\\Http\\Request), Object(Closure))",
            "#26 C:\\wamp64\\www\\dingo_tutorial\\vendor\\barryvdh\\laravel-cors\\src\\HandlePreflight.php(29): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Dingo\\Api\\Http\\Request))",
            "#27 C:\\wamp64\\www\\dingo_tutorial\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(149): Barryvdh\\Cors\\HandlePreflight->handle(Object(Dingo\\Api\\Http\\Request), Object(Closure))",
            "#28 C:\\wamp64\\www\\dingo_tutorial\\vendor\\barryvdh\\laravel-cors\\src\\HandleCors.php(36): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Dingo\\Api\\Http\\Request))",
            "#29 C:\\wamp64\\www\\dingo_tutorial\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(149): Barryvdh\\Cors\\HandleCors->handle(Object(Dingo\\Api\\Http\\Request), Object(Closure))",
            "#30 C:\\wamp64\\www\\dingo_tutorial\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(102): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Dingo\\Api\\Http\\Request))",
            "#31 C:\\wamp64\\www\\dingo_tutorial\\vendor\\dingo\\api\\src\\Http\\Middleware\\Request.php(127): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))",
            "#32 C:\\wamp64\\www\\dingo_tutorial\\vendor\\dingo\\api\\src\\Http\\Middleware\\Request.php(103): Dingo\\Api\\Http\\Middleware\\Request->sendRequestThroughRouter(Object(Dingo\\Api\\Http\\Request))",
            "#33 C:\\wamp64\\www\\dingo_tutorial\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(149): Dingo\\Api\\Http\\Middleware\\Request->handle(Object(Dingo\\Api\\Http\\Request), Object(Closure))",
            "#34 C:\\wamp64\\www\\dingo_tutorial\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php(53): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))",
            "#35 C:\\wamp64\\www\\dingo_tutorial\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(102): Illuminate\\Routing\\Pipeline->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))",
            "#36 C:\\wamp64\\www\\dingo_tutorial\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php(151): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))",
            "#37 C:\\wamp64\\www\\dingo_tutorial\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php(116): Illuminate\\Foundation\\Http\\Kernel->sendRequestThroughRouter(Object(Illuminate\\Http\\Request))",
            "#38 C:\\wamp64\\www\\dingo_tutorial\\vendor\\mpociot\\laravel-apidoc-generator\\src\\Tools\\ResponseStrategies\\ResponseCallStrategy.php(276): Illuminate\\Foundation\\Http\\Kernel->handle(Object(Illuminate\\Http\\Request))",
            "#39 C:\\wamp64\\www\\dingo_tutorial\\vendor\\mpociot\\laravel-apidoc-generator\\src\\Tools\\ResponseStrategies\\ResponseCallStrategy.php(260): Mpociot\\ApiDoc\\Tools\\ResponseStrategies\\ResponseCallStrategy->callLaravelRoute(Object(Illuminate\\Http\\Request))",
            "#40 C:\\wamp64\\www\\dingo_tutorial\\vendor\\mpociot\\laravel-apidoc-generator\\src\\Tools\\ResponseStrategies\\ResponseCallStrategy.php(36): Mpociot\\ApiDoc\\Tools\\ResponseStrategies\\ResponseCallStrategy->makeApiCall(Object(Illuminate\\Http\\Request))",
            "#41 C:\\wamp64\\www\\dingo_tutorial\\vendor\\mpociot\\laravel-apidoc-generator\\src\\Tools\\ResponseResolver.php(49): Mpociot\\ApiDoc\\Tools\\ResponseStrategies\\ResponseCallStrategy->__invoke(Object(Dingo\\Api\\Routing\\Route), Array, Array)",
            "#42 C:\\wamp64\\www\\dingo_tutorial\\vendor\\mpociot\\laravel-apidoc-generator\\src\\Tools\\ResponseResolver.php(68): Mpociot\\ApiDoc\\Tools\\ResponseResolver->resolve(Array, Array)",
            "#43 C:\\wamp64\\www\\dingo_tutorial\\vendor\\mpociot\\laravel-apidoc-generator\\src\\Tools\\Generator.php(57): Mpociot\\ApiDoc\\Tools\\ResponseResolver::getResponse(Object(Dingo\\Api\\Routing\\Route), Array, Array)",
            "#44 C:\\wamp64\\www\\dingo_tutorial\\vendor\\mpociot\\laravel-apidoc-generator\\src\\Commands\\GenerateDocumentation.php(201): Mpociot\\ApiDoc\\Tools\\Generator->processRoute(Object(Dingo\\Api\\Routing\\Route), Array)",
            "#45 C:\\wamp64\\www\\dingo_tutorial\\vendor\\mpociot\\laravel-apidoc-generator\\src\\Commands\\GenerateDocumentation.php(59): Mpociot\\ApiDoc\\Commands\\GenerateDocumentation->processRoutes(Object(Mpociot\\ApiDoc\\Tools\\Generator), Array)",
            "#46 [internal function]: Mpociot\\ApiDoc\\Commands\\GenerateDocumentation->handle()",
            "#47 C:\\wamp64\\www\\dingo_tutorial\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(29): call_user_func_array(Array, Array)",
            "#48 C:\\wamp64\\www\\dingo_tutorial\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(87): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()",
            "#49 C:\\wamp64\\www\\dingo_tutorial\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(31): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))",
            "#50 C:\\wamp64\\www\\dingo_tutorial\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php(549): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)",
            "#51 C:\\wamp64\\www\\dingo_tutorial\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(183): Illuminate\\Container\\Container->call(Array)",
            "#52 C:\\wamp64\\www\\dingo_tutorial\\vendor\\symfony\\console\\Command\\Command.php(255): Illuminate\\Console\\Command->execute(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))",
            "#53 C:\\wamp64\\www\\dingo_tutorial\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(170): Symfony\\Component\\Console\\Command\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))",
            "#54 C:\\wamp64\\www\\dingo_tutorial\\vendor\\symfony\\console\\Application.php(960): Illuminate\\Console\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))",
            "#55 C:\\wamp64\\www\\dingo_tutorial\\vendor\\symfony\\console\\Application.php(255): Symfony\\Component\\Console\\Application->doRunCommand(Object(Mpociot\\ApiDoc\\Commands\\GenerateDocumentation), Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))",
            "#56 C:\\wamp64\\www\\dingo_tutorial\\vendor\\symfony\\console\\Application.php(148): Symfony\\Component\\Console\\Application->doRun(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))",
            "#57 C:\\wamp64\\www\\dingo_tutorial\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Application.php(88): Symfony\\Component\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))",
            "#58 C:\\wamp64\\www\\dingo_tutorial\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Console\\Kernel.php(121): Illuminate\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))",
            "#59 C:\\wamp64\\www\\dingo_tutorial\\artisan(37): Illuminate\\Foundation\\Console\\Kernel->handle(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))",
            "#60 {main}"
        ]
    }
}
```

### HTTP Request
`GET /api/auth/user`


<!-- END_c687e1b0525abc7141677bd20ed6c30a -->


