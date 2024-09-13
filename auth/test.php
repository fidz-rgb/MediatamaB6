<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
  .custom-carousel-image {
    object-fit: cover;
    height: 500px; /* Sesuaikan tinggi yang diinginkan */
  }
</style>
  </head>
  <body>
    
    <!-- Carousel Structure -->
<div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://p4.wallpaperbetter.com/wallpaper/625/417/256/fruits-fruits-and-vegetables-fruit-vegetable-wallpaper-preview.jpg" class="d-block w-100 custom-carousel-image" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://p4.wallpaperbetter.com/wallpaper/625/417/256/fruits-fruits-and-vegetables-fruit-vegetable-wallpaper-preview.jpg" class="d-block w-100 custom-carousel-image" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://p4.wallpaperbetter.com/wallpaper/625/417/256/fruits-fruits-and-vegetables-fruit-vegetable-wallpaper-preview.jpg" class="d-block w-100 custom-carousel-image" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<!-- Custom CSS -->


    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>