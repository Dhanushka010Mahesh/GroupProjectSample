<?php
class Product{

    

    
    
    public function printArr() {
   
        $people = [
            [
                "id" => "aa",
                "Description" => "Bluuu bluuu bluuuuu",
                "Name" => "apple" ,
                "Price" => 500 
    
            ],
            [
                "id" => "bb",
                "Description" => "Bluuu bluuu bluuuuu",
                "Name" => "banana" ,
                "Price" => 500
            ],
            [
                "id" => "cc",
                "Description" => "Bluuu bluuu bluuuuu",
                "Name" => "cocanet" ,
                "Price" => 500
            ]
        ];
   
        foreach($people as $value){
            echo "id: " . $value["id"] ."Description : " . $value["Description"] . "Name: " . $value["Name"] . "Price: " . $value["Price"] . "<br>";
        }
    }
}
?>