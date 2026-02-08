# Resultados

## PHP Server

```bash
 $ wrk -t12 -c12 -d10s http://127.0.0.1:8080
Running 10s test @ http://127.0.0.1:8080
  12 threads and 12 connections
  Thread Stats   Avg      Stdev     Max   +/- Stdev
    Latency     2.22ms  266.83us   5.34ms   87.34%
    Req/Sec   427.64     27.01   484.00     66.50%
  51105 requests in 10.01s, 112.88MB read
  Socket errors: connect 0, read 51105, write 0, timeout 0
Requests/sec:   5105.76
Transfer/sec:     11.28MB
```

## Node

```bash
$ wrk -t12 -c12 -d10s http://127.0.0.1:8082
Running 10s test @ http://127.0.0.1:8082
  12 threads and 12 connections
  Thread Stats   Avg      Stdev     Max   +/- Stdev
    Latency     1.96ms    1.17ms  38.76ms   96.86%
    Req/Sec   526.38    121.11     4.16k    93.92%
  62958 requests in 10.10s, 143.98MB read
Requests/sec:   6233.40
Transfer/sec:     14.26MB
```

## GO

```bash
$ wrk -t12 -c12 -d10s http://127.0.0.1:8083
Running 10s test @ http://127.0.0.1:8083
  12 threads and 12 connections
  Thread Stats   Avg      Stdev     Max   +/- Stdev
    Latency   426.66us  204.52us   6.44ms   81.21%
    Req/Sec     2.39k   233.57     4.88k    90.56%
  286693 requests in 10.10s, 625.84MB read
Requests/sec:  28384.74
Transfer/sec:     61.96MB
```

## PHP Swoole

```bash
$ wrk -t12 -c12 -d10s http://127.0.0.1:8081
Running 10s test @ http://127.0.0.1:8081
  12 threads and 12 connections
  Thread Stats   Avg      Stdev     Max   +/- Stdev
    Latency   196.58us   58.09us   2.63ms   89.50%
    Req/Sec     5.07k   268.55     5.79k    73.43%
  611540 requests in 10.10s, 1.31GB read
Requests/sec:  60549.36
Transfer/sec:    132.52MB
```
