<?php

function get_file_by_username(string $username) : ?array
{
    $content = file_get_contents(STORAGE_LOCATION . $username . ".txt");

    if (!$content) {
        return null;
    }

    // AES decryption
    $content = openssl_decrypt($content, 'aes-256-cbc', STORAGE_KEY, 0, substr(STORAGE_KEY, 0, 16));

    // string -> []
    return explode(";", $content);
}

function write_file_by_username(string $username, array $data) : void
{
    $content = implode(";", $data);

    // AES encryption
    $content = openssl_encrypt($content, 'aes-256-cbc', STORAGE_KEY, 0, substr(STORAGE_KEY, 0, 16));

    file_put_contents(STORAGE_LOCATION . $username . ".txt", $content);
}