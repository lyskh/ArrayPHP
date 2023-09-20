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
}


$classicBooks = new ClassicBookList ([
    'Lord of the Rings',
    'Chronicles of Narnia',
    'Wuthering Heights',
    'Don Quixote',
    'The Count of Monte Cristo',
]);

$classicBooks->addBookOnTop('Pride and Prejudice');

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
        <?php foreach($classicBooks->displayBookList() as $key => $value): 
        ?>
        <tr>
            <td><?php echo $value; ?> </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>