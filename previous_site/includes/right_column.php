<div class="rightcolumn" id="right_column">
  <div class="rightcard">
    <?php
      echo "<h2 class=\"center\">\n";
      echo "<a class=\"nostyle\" href=\"/about\" data-link>\n";
      echo $aboutArr[1] . "\n";
      echo "</a>\n";
      echo "</h2>\n";
      echo "<img class=\"headshot\" src=\"$siteImagesUrl$aboutArr[6]\" alt=\"$aboutArr[7]\"/>\n";
      echo "<p class=\"centersmaller\">\n";
      echo "<a class=\"nostyle\" href=\"/about\" data-link>\n";
      echo substr($aboutArr[8],0,344) . "...\n";
      echo "</a>\n";
      echo "</p>\n";
    ?>
  </div>
  <div class="rightcard">
    <h2 class="center">Connect</h2>
    <div class="row center">
        <a href="https://github.com/"><img class="socialicons center" src="images/github.svg" alt="GitHub logo"></a>
        <a href="https://www.youtube.com/"><img class="socialicons center" src="images/youtube.svg" alt="YouTube logo"></a>
        <a href="https://www.linkedin.com/"><img class="socialicons center" src="images/linkedin.svg" alt="LinkedIn logo"></a>
    </div>
    <p class="centersmaller">Feel free to connect on any of these social-media platforms. I am happy to network and answer any questions you might have.</p>
  </div>
</div>
