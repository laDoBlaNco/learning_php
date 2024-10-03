
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Episode 10: Separate Logic From Template</title>
</head>
<body>
<h1>BOOK RECOMMENDATION:</h1>

<ul>
  <?php foreach($filtered_items as $item):?>

      <li>
        <a href="<?=$item['purchase_url']?>">
          <?=$item['name']?> (<?=$item['release_year']?>) - By <?=$item['author']?>
        </a>
      </li>

  <?php endforeach ?>

</ul>

  <!-- HOMEWORK: 
      NONE FOR THIS EPISODE
  -->
  
</body>
</html>



