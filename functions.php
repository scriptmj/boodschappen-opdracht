<?php

function getTotalItemCost($groceryItem){
    return $groceryItem->number * $groceryItem->price;
}

function getTotalCost($allGroceries){
    $totalCost = 0;
    foreach($allGroceries as $item){
        $totalCost += getTotalItemCost($item);
    }
    return $totalCost;
}

// function getAllGroceries($pdo){
//     $statement = $pdo->prepare("SELECT name, number, price FROM groceries");
//     $statement->execute();

//     return $statement->fetchAll(PDO::FETCH_CLASS, 'Grocery');
// }

function dd($var){
    var_dump($var);
    exit;
}