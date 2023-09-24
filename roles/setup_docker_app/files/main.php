<?php
$server = stream_socket_server("tcp://0.0.0.0:8000", $errno, $errorMessage);

if ($server === false) {
    die("can't start server: $errorMessage");
}   

echo "Server started on port 8000\n";

while (true) {
    $client = stream_socket_accept($server);

    if ($client) {
        $response = "HTTP/1.1 200 OK\r\n";
        $response .= "Content-Type: text/plain\r\n";
        $response .= "Content-Length: 20\r\n\r\n";
        $response .= "Hello, it's PHP!";

        fwrite($client, $response);
        fclose($client);
    }
} 
?>