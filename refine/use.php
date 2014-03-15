    <?php include ('header.php'); ?>
  <!-- Page Title -->
  <h1 style="margin-top:5px;">Use Peercoin</h1>

  <!-- Nav tabs -->
  <ul class="nav nav-tabs">
    <li class="active">
      <a href="#mine" data-toggle="tab">
        <h2>Mining Tutorial</h2>
      </a>
    </li>
    <li>
      <a href="#mint" data-toggle="tab">
        <h2>Minting Tutorial</h2>
      </a>
    </li>
    <li>
      <a href="#spend" data-toggle="tab">
        <h2>Spending Tutorial</h2>
      </a>
</li>
<li>
      <a href="#tools" data-toggle="tab">
        <h2>Other Tools Tutorial</h2>
      </a>
</li>
  </ul>
  <!-- Tab panes -->
  <div class="tab-content">
    <div class="tab-pane active fade in" id="mine">
      <!-- Mining tutorial Items -->
       <?php include ('page_content/use/tab_use_mining_tutorial.php')?><!-- end mining tutorial items-->
      </div><!-- end mining tab-->
    <div class="tab-pane fade" id="mint">
      <!-- Minting tutorial Items -->
       <?php include ('page_content/use/tab_use_minting_tutorial.php')?><!-- end minting tutorial items-->
      </div><!-- end minting tab-->
    <div class="tab-pane fade" id="spend">
      <!-- Minting tutorial Items -->
       <?php include ('page_content/use/tab_use_spending_tutorial.php')?><!-- end spending tutorial items-->
      </div><!-- end spending tab-->
    <div class="tab-pane fade" id="tools">
      <!-- Minting tutorial Items -->
       <?php include ('page_content/use/tab_use_tools_tutorial.php')?><!-- end tools tutorial items-->
      </div><!-- end tools tab-->
    <!-- ends tabs-->
</div>
<!-- end container-->


<?php include ('footer.php'); ?>
