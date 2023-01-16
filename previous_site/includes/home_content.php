<div class="row starthidden" id="home_content">
  <div class="leftcolumn">
    <?php
      foreach ($postsSubArr as $row)
      {
        if($row[5] > 0 && $row[5] < 10 )
        {
          echo "<div class=\"card cat cat-$row[5]\" id=\"$row[2]\">\n";
          echo "<h2 class=\"cardtitle\">$row[1]</h2>\n";
          echo "<h5 class=\"postDate\">$row[3]</h5>\n";
          if ($row[6] !="") {
            echo "<div class=\"center\">";
            echo "<img class=\"cardimg\" src=\"$siteImagesUrl$row[6]\" alt=\"$row[7]\">\n";
            echo "</div>";
          }
          echo "<span class=\"preview_text\" id=\"$row[2]-preview\">\n";
          echo "<p>";
          echo substr($row[8], 0, 900) . '...';
          echo "</p>\n";
          echo "</span>\n";

          echo "<span class=\"full_text starthidden\" id=\"$row[2]-body\">\n";
          echo "<p>";
          echo $row[8];
          echo "</p>\n";
          echo "</span>\n";
          echo "<div class=\"center readMoreDiv\" id=\"$row[2]-button\">\n";
          echo "<a class=\"readMoreButton\" href=\"/$row[2]\" data-link>Read More <span class=\"sherbert\">>></span></a>\n";
          echo "</div>\n";
          echo "</div>\n";
        }
      }
    ?>
  </div>
  <?php include('includes/right_column.php') ?>
</div>
