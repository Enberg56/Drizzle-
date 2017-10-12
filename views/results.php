<?php include 'partials/header.php'; ?>
<pre>
  <?php 
  var_dump($changetheme);
  //var_dump($tempif);
  //print_r($forecast);
  
  ?>
</pre>
<main class="container py-5 text-center">
  <h1>
    Drizzle
  </h1>
  <div class="card p-4 my-5 mx-auto" style="max-width: 320px;">
    <p class="lead text-bold m-0"><?php echo $place; ?></p>
    <h2 class="display-1 mb-0">
      <?php echo round($forecast['currently']['temperature']); ?>&deg;
    </h2>
    <p class="lead">
      <?php echo $forecast['currently']['summary'];?>
    </p>
    <p class="lead">
      Wind Speed: <?php echo round($forecast['currently']['windSpeed']); ?> MPH
    </p>
  </div>

  <div class="text-left py-5 mx-auto" style="max-width: 320px;">
    <?php include 'partials/form.php'; ?>
  </div>
  <!-- ------------------------------------------------------ -->
  <div class="carousel" data-flickity='{ "groupCells": true }'>
    <?php foreach($forecast['daily']['data'] as $day): ?>
      <div class="carousel-cell">
        <div class="card text-center p-4 my-5 mx-auto">
          <p class="lead m-0">
            <?php echo gmdate("l", $day['time']); ?>
          </p>
          <h2 class="m-0">
            <?php echo round($day['temperatureHigh']); ?>&deg;
          </h2>
          <p class="text text-left">
            <?php echo $day['summary']; ?>
          </p>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</main>
<?php include 'partials/footer.php'; ?>