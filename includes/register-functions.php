
<?php 
session_start();//для подклбчения массива временных переменных
//ВЫВОД МАССИВА который покажет какие элементы записали в лэйбл
// print_r($_POST);
//ВЫВОД ФОТО кот записали в лэйбл
 //print_r($_FILES);


//подключили файл который отвечает за подключение к БД
require_once 'connectDB.php'; 

//создаем переменные из лейблов
//имя лейбла = пост создаем имя ключа для массива
$fullName=$_POST['fullName'];
$login=$_POST['login'];
$email=$_POST['email'];
$pass=$_POST['pass'];
$confirmPass=$_POST['confirmPass'];

if($pass===$confirmPass){
    //continue;
}
else{
    $_SESSION['message'] = 'different passwords'; //создаем переменную с ключом message массива временных переменных
    header('Location:../register.php');//указываем путь к файлу регистрации, чтоб сообщение пользователю не перееадресовывалось на другую страницу сайта
}




