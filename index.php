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
      'Author' => 'Philips K. Dick',
      'releaseYear' => 1968,
      'purchaseUrl' => 'http://example.com'
    ],
    [
      'name' => 'Project Hail Mary',
      'Author' => 'Andy Weir',
      'releaseYear' => 2021,
      'purchaseUrl' => 'http://example.com'
    ],
    [
      'name' => 'The Martian',
      'Author' => 'Andy Weir',
      'releaseYear' => 2011,
      'purchaseUrl' => 'http://example.com'
    ],
  ];

  function filterByAuthor()
  {
    return 'gibberish';
  }
  ?>
  <h1>Recommended Books</h1>
  <ul>
    <?php foreach ($books as $book) : ?>
      <?php if ($book['Author'] === 'Andy Weir') : ?>
        <li>
          <a href="<?= $book['purchaseUrl'] ?>">
            <?= $book['name'] ?> (<?= $book['releaseYear'] ?>)
          </a>
        </li>
      <?php endif; ?>
    <?php endforeach; ?>
  </ul>

  <p>
    <?= filterByAuthor() ?>
  </p>

</body>

</html>