<?php

class Book
{
    private int $isbn;
    private string $title;
    private string $author;
    private int $available;

    //constructor
    public function __construct(int $isbn, string $title, string $author, int $available)
    {
        $this->isbn = $isbn;
        $this->title = $title;
        $this->author = $author;
        $this->available = $available;
    }

    //The getter methods
    public function getIsbn(): int
    {
        return $this->isbn;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getAuthor(): string
    {
        return $this->author;
    }

    public function getAvailable(): int
    {
        return $this->available;
    }

    //The setter methods
    public function setIsbn(string $isbn)
    {
        $this->isbn = $isbn;
    }

    public function setTitle(string $title)
    {
        $this->title = $title;
    }

    public function setAuthor(string $author)
    {
        $this->author = $author;
    }

    public function setAvailable(int $available)
    {
        $this->available = $available;
    }

    //getCopy() function
    public function getCopy(): bool
    {
        if ($this->available > 0) {
            $this->available = $this->available - 1;
            return true;
        } else {
            return false;
        }
    }

    //addCopy() function
    public function addCopy($num): int
    {
        $this->available = $this->available + $num;
        return $this->available;
    }

    //Implement the method : __toString
    public function __toString()
    {
        $details =
            "</br>ISBN: " . $this->isbn .
            "</br>Title: " . $this->title .
            "</br>Author: " . $this->author .
            "</br>Available: " . $this ->available;

        return $details;
    }

    // Implement the method: __call()
    public function __call($method, $value)
    {
        return "This method doesn't exits.";
    }

    // Implement the method: __get()
    public function __get($var_name)
    {
        if (property_exists(__CLASS__, $var_name)) {
            return $this->{$var_name};
        }
        return "\This property doesn't exist.";
    }

    // Implement the method: __set()
    public function __set($var_name, $value)
    {
        if (property_exists(__CLASS__, $var_name)) {
            $this->{$var_name} = $value;
        }
        return "\nThis property doesn't exist.";
    }
}
