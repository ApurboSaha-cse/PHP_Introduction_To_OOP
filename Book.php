<?php

class Book {
    private int $isbn;
    private string $title;
    private string $author;
    private int $available;

    public function getIsbn(): int {
        return $this->isbn;
    }
    
    public function getTitle(): string {
        return $this ->title;
    }

    public function getAuthor(): string {
        return $this->author;
    }

    public function getAvailable(): int {
        return $this->available;
    }

    public function setIsbn(string $isbn) {
        $this->isbn = $isbn;
    }

    public function setTitle(string $title) {
        $this->title = $title;
    }

    public function setAuthor(string $author) {
        $this->author = $author;
    }

    public function setAvailable(int $available) {
        $this->available = $available;
    }


    public function getCopy(): bool {
        if ($this->available > 0) {
            $this->available = $this->available - 1;
            return true;
        } else {
            return false;
        }
    }

    public function addCopy($num): int{
        $this ->available = $this ->available + $num;
        return $this ->available;
    }
}
