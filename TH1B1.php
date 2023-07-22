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
            'Title' => $this->title,
            'Author' => $this->author,
            'Publisher' => $this->publisher,
            'Publication Year' => $this->publicationYear,
            'ISBN' => $this->isbn,
            'Chapters' => $this->chapters
        ];
    }
}
?>