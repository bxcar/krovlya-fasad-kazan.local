<?php
if($_POST)
{
$to_Email = "2536611@mail.ru"; 
$subject = '������ ��������� ������ '.$_POST["polz_name"]; 

if(!isset($_SERVER['HTTP_X_REQUESTED_WITH']) AND strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) != 'xmlhttprequest') {

$otvet_serv = json_encode(
array( 
'text' => '�������� ������ ��� �������� ������'
));

die($otvet_serv);
} 

if(!isset($_POST["polz_name"]) || !isset($_POST["polz_tel"]))
{
$otvet_serv = json_encode(array('type'=>'error', 'text' => '��������� �����'));
die($otvet_serv);
}

$user_Name = filter_var($_POST["polz_name"], FILTER_SANITIZE_STRING);
$user_Phone = filter_var($_POST["polz_tel"], FILTER_SANITIZE_STRING);

if(strlen($user_Name)<3)
{
$otvet_serv = json_encode(array('text' => '���� ��� ������� �������� ��� ������'));
die($otvet_serv);
}
if(!is_numeric($user_Phone))
{
$otvet_serv = json_encode(array('text' => '����� �������� ����� �������� ������ �� ����'));
die($otvet_serv);
}

$message = "���: ".$user_Name.". �������: ".$user_Phone;

if(!mail($to_Email, $subject, $message, "From: krovlyafasadkazan@yandex.ru \r\n"))
{
$otvet_serv = json_encode(array('text' => '�� ���� ��������� �����! ����������, ��������� ���� ��������� PHP �����.'));
die($otvet_serv);
}else{
$otvet_serv = json_encode(array('text' => '�������! '.$user_Name .', ���� ��������� ����������.'));
die($otvet_serv);
}
}
?>