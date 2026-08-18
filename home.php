<?php
// index.php
// Main page: navigation menu + content area.
// jQuery AJAX calls ajax_handler.php to load each section's content.
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Navigation Menu with jQuery AJAX (PHP)</title>
<style>
  body{ font-family:Arial, sans-serif; margin:20px; }
  nav a{
    display:inline-block;
    margin-right:10px;
    padding:8px 14px;
    text-decoration:none;
    color:#000;
    background:#eee;
    border:1px solid #ccc;
  }
  nav a.active{ background:#333; color:#fff; }
  #content{
    margin-top:20px;
    padding:15px;
    border:1px solid #ccc;
    min-height:150px;
  }
  .item{
    border-bottom:1px solid #ddd;
    padding:8px 0;
  }
</style>
</head>
<body>

<h2>My Website</h2>

<nav id="menu">
  <a href="#" class="active" data-section="home">Home</a>
  <a href="#" data-section="blog">Blog</a>
  <a href="#" data-section="products">Products</a>
  <a href="#" data-section="contact">Contact</a>
</nav>

<div id="content">Loading...</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
$(function () {

  function showHome(d) {
    $("#content").html("<h3>" + d.title + "</h3><p>" + d.body + "</p>");
  }

  function showBlog(posts) {
    var html = "<h3>Blog</h3>";
    for (var i = 0; i < posts.length; i++) {
      html += "<div class='item'><strong>" + posts[i].title + "</strong><p>" + posts[i].body + "</p></div>";
    }
    $("#content").html(html);
  }

  function showProducts(items) {
    var html = "<h3>Products</h3>";
    for (var i = 0; i < items.length; i++) {
      html += "<div class='item'>" + items[i].name + " - " + items[i].price + "</div>";
    }
    $("#content").html(html);
  }

  function showContact(d) {
    $("#content").html("<h3>Contact</h3><p>Email: " + d.email + "</p><p>Phone: " + d.phone + "</p>");
  }

  var renderers = { home: showHome, blog: showBlog, products: showProducts, contact: showContact };

  function loadSection(section) {
    $("#content").html("Loading...");
    $.ajax({
      url: "ajax_handler.php",   // real PHP endpoint on the server
      type: "GET",
      data: { section: section },
      dataType: "json",
      success: function (result) {
        renderers[section](result);
      },
      error: function () {
        $("#content").html("<p>Error loading content.</p>");
      }
    });
  }

  $("#menu a").on("click", function (e) {
    e.preventDefault();
    $("#menu a").removeClass("active");
    $(this).addClass("active");
    loadSection($(this).data("section"));
  });

  loadSection("home");
});
</script>

</body>
</html>