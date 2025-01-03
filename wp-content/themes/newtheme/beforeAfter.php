<div class="container-fluid">
  <div class="row justify-content-center">
    <div class="col-md-9 h-50">
    <div id="comparison" class="comparison-container">
      <figure class="comparison-figure" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/before.webp');">
        <div id="divisor" class="divisor" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/after.webp');"></div>
      </figure>
      <input type="range" min="0" max="100" value="50" id="slider" class="slider-input" oninput="moveDivisor()">
    </div>
  </div>
</div>
    </div>
<script>
  var divisor = document.getElementById("divisor"),
      slider = document.getElementById("slider");
  function moveDivisor() { 
    divisor.style.width = slider.value + "%";
  }
</script>
