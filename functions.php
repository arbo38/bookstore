<?php

function printableTitle(array $book): string {
    $result = '<i>' . $book['title'] . '</i> - ' . $book['author'];
    if (!$book['available']) {
        $result .= ' <b>Not available</b>';
    }
    return $result;
}

function loginMessage() {
    if (isset($_COOKIE['username'])) {
        return "You are " . $_COOKIE['username'];
    } else {
        return "You are not authenticated.";
    }
}

function bookingBook(array &$books, string $title): bool {
    foreach ($books as $key => $book) {
        if ($book['title'] == $title) {
            if ($book['available']) {
                $books[$key]['available'] = false;
                return true;
            } else {
                return false;
            }
        }
    }
    return false;
}

function getBooks(): array {
    $booksJson = file_get_contents(__DIR__ . '/books.json');
    return json_decode($booksJson, true);
}

function updateBooks(array $books) {
    $booksJson = json_encode($books);
    file_put_contents(__DIR__ . '/books.json', $booksJson);
}