<?php
    require './vendor/autoload.php';
    include './Utilisateur.php';
    include './Admin.php';
    $userOne = new Utilisateur('Teyssier', 'Laurent');
    $userTwo = new Utilisateur('Garcia', 'Alexia');
    $userThree = new Utilisateur('Kuntze', 'Laurène');
    $userFour = new Utilisateur('Serda', 'Kevin');
    $admin = new Admin('Iatosti', 'Dimitri');
    // echo '<pre>';
    // var_dump($user1, $admin);
    // echo '</pre>';
    $admin->banUser($userFour);
    $admin->banUser($userOne);
    $admin->banUser($userThree);
    $admin->banUser($userTwo);
    // dd($admin->getBans());
    foreach($admin->getBans() as $key => $value){
        echo "<p>".$value->getNom()." ".$value->getPrenom()."</p>";
    }


    $admin->debanUser($userOne);
    foreach($admin->getBans() as $key => $value){
        echo "<p>".$value->getNom()." ".$value->getPrenom()."</p>";
    }
    // print_r($admin->getBans());
    dd($admin->getBans());
?>


