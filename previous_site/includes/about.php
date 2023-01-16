<div class="row starthidden" id="about">
  <div class="fullcolumn">
    <?php
          echo "<div class=\"card\">\n";
          echo "<h2 class=\"cardtitleabout center\">$aboutArr[1]</h2>\n";
          if ($aboutArr[6] !="") {
            echo "<img class=\"cardimgabout\" src=\"$siteImagesUrl$aboutArr[6]\" alt=\"$aboutArr[7]\">\n";
          }
          echo "<p>";
          echo $aboutArr[8];
          echo "</p>\n";
          echo "</div>\n";
      ?>
  </div>
</div>
