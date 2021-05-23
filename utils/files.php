<?php

function get_file_by_username(string $username, bool $formatted = false) : ?array
{
    $content = file_get_contents(STORAGE_LOCATION . $username . ".txt");

    if (!$content) {
        return null;
    }

    // AES decryption
    $content = openssl_decrypt($content, 'aes-256-cbc', STORAGE_KEY, 0, substr(STORAGE_KEY, 0, 16));

    // string -> []
    $arr = explode(";", $content);

    if (!$formatted) {
        return $arr;
    }

    $returnable = [
        "password" => $arr[0],
        "passwords" => [],
    ];

    $amount_of_passwords = (sizeof($arr) - 1) / 3;

    for ($i = 0; $i < $amount_of_passwords; $i++) {
        array_push($returnable["passwords"], [
            "name" => $arr[3 * $i + 1],
            "password" => $arr[3 * $i + 2],
            "description" => $arr[3 * $i + 3]
        ]);
    }

    return $returnable;
}

function write_file_by_username(string $username, array $data) : void
{
    $content = implode(";", $data);

    // AES encryption
    $content = openssl_encrypt($content, 'aes-256-cbc', STORAGE_KEY, 0, substr(STORAGE_KEY, 0, 16));

    file_put_contents(STORAGE_LOCATION . $username . ".txt", $content);
}