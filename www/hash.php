<?php

function generateUniqueHash()
{
    return hash('md5', uniqid(rand(), TRUE));
}

function generatePassword($pass, $hash)
{
    return hash('sha1', hash('md5', hash('sha256', $hash . $pass ) ) );
}

function checkPassword($pass, $hashedPassword, $hash)
{
    return hash('sha1', hash('md5', hash('sha256', $hash . $pass ) ) ) == $hashedPassword;
}