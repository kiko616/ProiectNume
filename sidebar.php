


<div class="sidebar">
        <!-- insert your sidebar items here -->
        <h3>Latest News</h3>
              <?php
          
          $sql_news = "select *  from news";
          $result_news = $conn->query($sql_news);
          
           if($result_news->num_rows) {
                while($news = $result_news->fetch_assoc() ) {
                   echo "<h4>".$news['titlu_news']."</h4>";
                   echo "<h5>".$news['tdata']."</h5>";
                      echo '<a href="?news='.$news['id'].'">Read More </a>';
                echo $news['tcontent'];
                }
            }
          
          
          ?>
        
      
        <h3>Useful Links</h3>
        <ul>
          <li><a href="#">link 1</a></li>
          <li><a href="#">link 2</a></li>
          <li><a href="#">link 3</a></li>
          <li><a href="#">link 4</a></li>
        </ul>
        <h3>Search</h3>
        <form method="post" action="#" id="search_form">
          <p>
            <input class="search" type="text" name="search_field" value="Enter keywords....." />
            <input name="search" type="image" style="border: 0; margin: 0 0 -9px 5px;" src="style/search.png" alt="Search" title="Search" />
          </p>
        </form>
      </div>