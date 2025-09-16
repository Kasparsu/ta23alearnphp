<?php 
    $name = 'Kaspar';
?>
      
      <div class="p-4 p-md-5 mb-4 rounded text-body-emphasis bg-body-secondary">
          <div class="col-lg-6 px-0">
              <h1 class="display-4 fst-italic">
                  Hello <?=$name?>
              </h1>
              <p class="lead my-3">
                <ul>
                    <?php for($i=0;$i<10;$i++): ?>
                        <li><?=$i?></li>
                    <?php endfor; ?>
                </ul>
              </p>
              <p class="lead mb-0">
                  <a href="#" class="text-body-emphasis fw-bold">Continue reading...</a>
              </p>
          </div>
      </div>