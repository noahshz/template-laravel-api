<?php
use Illuminate\Support\Facades\Response;
function json_response(int $code, bool $success, string $message, $data = []) {
    $response = json_encode(
        [
            'success' => $success,
            'message' => $message,
            'data' => $data
        ]
    );
    return Response::make($response, $code, [])->header('Content-Type', 'application/json');
}
?>