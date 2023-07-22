<?php
interface IBook {
    public function getBookInfo();
}
?>
<?php
class Book implements IBook {
    private $title;
    private $author;
    private $publisher;
    private $publicationYear;
    private $isbn;
    private $chapters;

    public function __construct($title, $author, $publisher, $publicationYear, $isbn, $chapters) {
        $this->title = $title;
        $this->author = $author;
        $this->publisher = $publisher;
        $this->publicationYear = $publicationYear;
        $this->isbn = $isbn;
        $this->chapters = $chapters;
    }

    public function getBookInfo() {
        return [
            'title' => $this->title,
            'author' => $this->author,
            'publisher' => $this->publisher,
            'publicationYear' => $this->publicationYear,
            'isbn' => $this->isbn,
            'chapters' => $this->chapters
        ];
    }
}
?>
<?php
class BookList {
    private $books = [];

    public function addBook(Book $book) {
        $this->books[] = $book;
    }

    public function getBooks() {
        return $this->books;
    }

    public function sortBooksByAuthor() {
        usort($this->books, function ($a, $b) {
            return strcmp($a->getBookInfo()['author'], $b->getBookInfo()['author']);
        });
    }

    public function sortBooksByTitle() {
        usort($this->books, function ($a, $b) {
            return strcmp($a->getBookInfo()['title'], $b->getBookInfo()['title']);
        });
    }

    public function sortBooksByPublicationYear() {
        usort($this->books, function ($a, $b) {
            return $a->getBookInfo()['publicationYear'] - $b->getBookInfo()['publicationYear'];
        });
    }
}
?>

<?php

require 'IBook.php';
require 'Book.php';
require 'BookList.php';


$bookList = new BookList();
$bookList->addBook(new Book("Title 1", "Author C", "Publisher A", 2020, "ISBN123", ["Chapter 1", "Chapter 2"]));
$bookList->addBook(new Book("Title 2", "Author B", "Publisher B", 2019, "ISBN456", ["Chapter 1", "Chapter 2", "Chapter 3"]));
$bookList->addBook(new Book("Title 3", "Author A", "Publisher C", 2021, "ISBN789", ["Chapter 1"]));


$bookList->sortBooksByAuthor(); // Sắp xếp theo tên tác giả
?>

<!DOCTYPE html>
<html>
<head>
    <title>Book Management</title>
</head>
<body>
<h1>Book List</h1>
<table border="1">
    <tr>
        <th>Title</th>
        <th>Author</th>
        <th>Publisher</th>
        <th>Publication Year</th>
        <th>ISBN</th>
        <th>Chapters</th>
    </tr>
    <?php foreach ($bookList->getBooks() as $book): ?>
        <?php $bookInfo = $book->getBookInfo(); ?>
        <tr>
            <td><?= $bookInfo['title']; ?></td>
            <td><?= $bookInfo['author']; ?></td>
            <td><?= $bookInfo['publisher']; ?></td>
            <td><?= $bookInfo['publicationYear']; ?></td>
            <td><?= $bookInfo['isbn']; ?></td>
            <td><?= implode(", ", $bookInfo['chapters']); ?></td>
        </tr>
    <?php endforeach; ?>
</table>
</body>
</html>








