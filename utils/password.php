<?php

function password_encrypt(string $plain_text) : string
{
    $password = user()["password"];
    $passphrase = substr(hash('sha256', $password), 0, 64);
    $IV = substr(hash('sha256', $password), 0, 32);
    return openssl_encrypt($plain_text, 'aes-256-cbc', hex2bin($passphrase), 0, hex2bin($IV));
}

function password_decrypt(string $encrypted) : string
{
    $password = user()["password"];
    $passphrase = substr(hash('sha256', $password), 0, 64);
    $IV = substr(hash('sha256', $password), 0, 32);
    return openssl_decrypt($encrypted, 'aes-256-cbc', hex2bin($passphrase), 0, hex2bin($IV));
}