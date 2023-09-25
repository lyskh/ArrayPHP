<?php

class ClassicBookList {
    protected $book_list = [];

    public function __construct($list){
        $this->book_list = $list;
    }

    public function displayBookList() : array {
        return $this->book_list;
    }

    public function addBookOnTop(string $book_name) : void {
        array_unshift($this->book_list, $book_name);
    }

    public function addBookAtEnd(string $book_name) : void {
        array_push($this->book_list, $book_name);
    }

    public function removeFirstItem() : void {
        if (!empty($this->book_list)) {
            array_shift($this->book_list);
        }
    }

    public function displayFirstThreeItems() : array {
        return array_slice($this->book_list, 0, 3);
    }
}

$classicBooks = new ClassicBookList([
    'Lord of the Rings',
    'Chronicles of Narnia',
    'Wuthering Heights',
    'Don Quixote',
    'The Count of Monte Cristo',
]);

$classicBooks->addBookOnTop('Pride and Prejudice');
$classicBooks->addBookAtEnd('The Raven');
$classicBooks->removeFirstItem();
?>

<!DOCTYPE html>
<html>
<head>
    <title></title>  
</head>
<body>
    <table border = "1">
        <tr>
            <td style="text-align:center"><b>BOOK NAME</b></td>
        </tr>
        <?php foreach($classicBooks->displayFirstThreeItems() as $key => $value) {
            echo  "<tr><td>" . "Book " . ($key + 1) . ": " . $value . "<br/>" . "</td></tr>";
        }
        ?>
    </table>
</body>
</html>
