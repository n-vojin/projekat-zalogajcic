<?php

$data = $_POST;

if(empty($data['name']) ||
empty($data['last-name']) ||
empty($data['email']) ||
empty($data['psw']) || 
empty($data['psw-repeat']))
{
    die('Please fill all required fields!');
}

if($data['psw'] !== $data['psw-repeat'])
{
    die('Password mismatch!');
}