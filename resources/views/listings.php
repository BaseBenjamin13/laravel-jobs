<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Listings</title>
</head>

<body>
  <div>
    <h1><?php echo $heading ?></h1>
  </div>
  <div>
    <?php foreach ($listings as $listing): ?>
      <div style="display: flex; flex-direction:column; align-items:center; border: 2px solid black; padding: 8px; border-radius: 20px; margin-bottom: 15px;">
        <h2><?php echo $listing['title']; ?></h2>
        <h3>Job type: <?php echo $listing['job-type']; ?></h3>
        <p><span style="font-weight: bold;">Description:</span><br>
        <?php echo $listing['description']; ?></p>
      </div>
    <?php endforeach ?>
  </div>

</body>

</html>