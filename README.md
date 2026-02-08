# PHP vs GO vs Nodejs - Benchmark

Inspirado pelo Vídeo do [youtube: @aschmelyun](https://www.youtube.com/shorts/oVKvfMYsVDw)

## Instalação

```bash
$ npm i
$ composer install
```

## PHP Server

```bash
 $ php -S 0.0.0.0:8080 ./index.php
 $ wrk -t12 -c12 -d10s http://127.0.0.1:8080
```

## Node

```bash
$ node node.js
$ wrk -t12 -c12 -d10s http://127.0.0.1:8082
```

# GO

```bash
$ go run gogo.go
$ wrk -t12 -c12 -d10s http://127.0.0.1:8083
```

# PHP Swoole

```bash
$ php php_swoole.php
$ wrk -t12 -c12 -d10s http://127.0.0.1:8081
```
