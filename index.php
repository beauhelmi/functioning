<!DOCTYPE html>
<html lang='en'>

<head>
  <meta charset='UTF-8'>
  <meta name='viewport' content='width=device-width, initial-scale=1.0'>
  <title>Document</title>
</head>

<body>

  <?php
  $books = [
    [
      'name' => 'Do Androids Dream of Electric Sheep',
      'author' => 'Philips K. Dick',
      'releaseYear' => 1968,
      'purchaseUrl' => 'http://example.com'
    ],
    [
      'name' => 'Project Hail Mary',
      'author' => 'Andy Weir',
      'releaseYear' => 2021,
      'purchaseUrl' => 'http://example.com'
    ],
    [
      'name' => 'The Martian',
      'author' => 'Andy Weir',
      'releaseYear' => 2011,
      'purchaseUrl' => 'http://example.com'
    ],
  ];

  function filterByAuthor($books) {

    $filteredBooks = [];

    foreach ($books as $book) {
      if ($book['author'] === 'Andy Weir') {
        $filteredBooks[] = $book;
      }
    }
    return $filteredBooks;
  }
  ?>
  <h1>Recommended Books</h1>
  <ul>
    <?php foreach (filterByAuthor($books) as $book) : ?>
 
        <li>
          <a href="<?= $book['purchaseUrl'] ?>">
            <?= $book['name'] ?> (<?= $book['releaseYear'] ?>)
          </a>
        </li>
     
    <?php endforeach; ?>
  </ul>

</body>

</html>