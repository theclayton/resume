<!DOCTYPE html>
<html>
<head>
<title>The Archive: All Projects, Clayton Ward</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" type="text/css" href="../style/font.css">
<link rel="stylesheet" type="text/css" href="../style/archive-menu.css">
<link rel="stylesheet" type="text/css" href="../style/archive.css">

<!-- This site uses JQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
   window.jQuery || document.write('<script src="../js/jquery/jquery-3.4.1.min.js"><\/script>');
</script>

</head> <!-- emd head -->


<body>

  <?php
//include 'archive-menu.php';
  ?>


<div id="sideBar">

  <a href="">Go back to resume</a>
  <hr>
  <h2>My Project Archive</h2>

  <ul id="archiveMenu">
  <li>All Projects
    <ul class="aNestedTop">

      <li id="cate-1"><span class="caret">iOS Development</span>
        <ul class="aNested">
          <li id="cate-1-proj-1"><a href="">App 1</a></li>
          <li id="cate-1-proj-2"><a href="">App 2</a></li>
          <li id="cate-1-proj-3"><a href="">App 3</a></li>
          <li id="cate-1-proj-4"><a href="">App 4</a></li>
          <li id="cate-1-proj-5"><a href="">App 5</a></li>
          <li id="cate-1-proj-6"><a href="">App 6</a></li>
          <li id="cate-1-proj-7"><a href="">App 7</a></li>
          <li id="cate-1-proj-8"><a href="">App 8</a></li>
          <li id="cate-1-proj-9"><a href="">App 9</a></li>
          <li id="cate-1-proj-10"><a href="">App 10</a></li>
          <li id="cate-1-proj-11"><a href="">App 11</a></li>
        </ul>
      </li>

    <li><span class="caret">Android Development</span>
      <ul class="aNested">
        <li id="cate-2-proj-1"><a href="">App 1</a></li>
        <li id="cate-2-proj-2"><a href="">App 2</a></li>
      </ul>
    </li>

      <li><span class="caret">Web Development</span>
        <ul class="aNested">
          <li id="cate-3-proj-1"><a href="">App 1</a></li>
          <li id="cate-3-proj-2"><a href="">App 2</a></li>
        </ul>
      </li>

    </ul>
  </li>
  </ul>

</div>



<style> /* Current Project page */
#cate-1 .caret::before {
  -ms-transform: rotate(90deg); /* IE 9 */
  -webkit-transform: rotate(90deg); /* Safari */'
  transform: rotate(90deg);
}
#cate-1 .aNested {
  display: block;
}
#cate-1-proj-1 a {
  color: #dddddd;
}
</style>


  <div id="footerSection">
  </div> <!-- end footerSection div -->


  <!-- javascript -->
  <script src="../js/archive-menu.js"></script>

  <!-- end javascript -->

</body>
</html>
