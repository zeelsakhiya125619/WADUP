<?php
// red_background_demo.php
// Standalone demo: select a heading, paragraph, and button with jQuery
// and set their background color to red.
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>jQuery - Set Background Color to Red</title>
<style>
  body{ font-family:Arial, sans-serif; margin:20px; }
  .demo{ padding:6px; margin-bottom:8px; }
  button{ padding:8px 14px; margin-right:10px; }
</style>
</head>
<body>

<h2>jQuery Selector Demo</h2>
<p>Select a heading, a paragraph, and a button, then set their background color to red.</p>

<h3 class="demo">This is a heading</h3>
<p class="demo">This is a paragraph.</p>
<button class="demo" id="myButton">This is a button</button>

<br><br>
<button id="redBtn">Set Background to Red</button>
<button id="resetBtn">Reset</button>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
$(function () {
  $("#redBtn").click(function () {
    $(".demo").css("background-color", "red");
  });

  $("#resetBtn").click(function () {
    $(".demo").css("background-color", "");
  });
});
</script>

</body>
</html>