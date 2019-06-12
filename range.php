<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.slidecontainer {
  width: 100%;
}

.slider {
  -webkit-appearance: none;
  width: 100%;
  height: 10px;
  border-radius: 5px;
  background: #d3d3d3;
  outline: none;
  opacity: 0.7;
  -webkit-transition: .2s;
  transition: opacity .2s;
}

.slider:hover {
  opacity: 1;
}

.slider::-webkit-slider-thumb {
  -webkit-appearance: none;
  appearance: none;
  width: 23px;
  height: 24px;
  border: 0;
  background: url('contrasticon.png');
  cursor: pointer;
}

.slider::-moz-range-thumb {
  width: 23px;
  height: 24px;
  border: 0;
  background: url('contrasticon.png');
  cursor: pointer;
}

.slider1 {
  -webkit-appearance: none;
  width: 100%;
  height: 10px;
  border-radius: 5px;
  background: #d3d3d3;
  outline: none;
  opacity: 0.7;
  -webkit-transition: .2s;
  transition: opacity .2s;
}

.slider1:hover {
  opacity: 1;
}

.slider1::-webkit-slider-thumb {
  -webkit-appearance: none;
  appearance: none;
  width: 23px;
  height: 24px;
  border: 0;
  background: url('contrasticon.png');
  cursor: pointer;
}

.slider1::-moz-range-thumb {
  width: 23px;
  height: 24px;
  border: 0;
  background: url('contrasticon.png');
  cursor: pointer;
}
</style>
</head>
<body>

<h1>Range Slider Picture</h1>

<div class="slidecontainer">
  <input type="range" min="0" max="100" value="0" class="slider" id="myRange">
  <input type="range" min="0" max="100" value="100" class="slider1" id="myRange1">
  <p>Value: <span id="demo"></span></p>
  <p>Value: <span id="demo1"></span></p>
</div>

<script>
var slider = document.getElementById("myRange");
var slider1 = document.getElementById("myRange1");
var output = document.getElementById("demo");
var output1 = document.getElementById("demo1");
output.innerHTML = slider.value;
output1.innerHTML = slider1.value;

slider.oninput = function() {
  output.innerHTML = this.value;
}

slider1.oninput = function() {
  output1.innerHTML = this.value;
}
</script>

</body>
</html>
