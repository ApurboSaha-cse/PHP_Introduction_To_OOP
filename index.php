<?php
require_once __DIR__ . '/Book.php';
require_once __DIR__ . '/Customer.php';
$book1 = new Book(9780061120084, "To Kill A Mockingbird", "Harper Lee", 10);
$book2 = new Book(9780547249643, "1984", "George Orwell", 4);
$book3 = new Book(9785267006323, "One Hundred Years Of Solitude", "Gabriel Garcia Marquez", 2);
$customer1 = new Customer(76136, "Apurbo", "Saha", "apurbosaha.cse@gmail.com");
$customer2 = new Customer(76198, 'Mary', 'Curry', 'someone@mail.com');


echo $book1 ->__toString(),"</br>";
echo $book2 ->__toString(),"</br>";
echo $book3 ->__toString(),"</br>";

echo $book1 ->title,"<br>";

echo $customer1 ->__toString(),"</br>";
echo $customer2 ->__toString(),"</br>";

if($book1->addCopy(2)) {
    echo "</br>Added Successfully</br>";
} else {
    echo "Add Operation Unsuccessful</br>";
}
?>


