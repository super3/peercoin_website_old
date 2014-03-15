    <?php include ('header.php'); ?>
  <!-- Page Title -->
  <h1 style="margin-top:5px;">Understand Peercoin</h1>

  <!-- Nav tabs -->
  <ul class="nav nav-tabs">

    <li class="active">

      <a href="#tools" data-toggle="tab">
        <h2>About Peercoin</h2>
      </a>
</li>
 <li> 
     <a href="#mine" data-toggle="tab">
        <h2>About Mining</h2>
      </a>
    </li>
    <li>
      <a href="#mint" data-toggle="tab">
        <h2>About Minting</h2>
      </a>
    </li>
    <li>
      <a href="#spend" data-toggle="tab">
        <h2>About Spending</h2>
      </a>
</li>
  </ul>
  <!-- Tab panes -->
  <div class="tab-content">
    <div class="tab-pane active fade in" id="tools">
      <!-- About Peercoin Items -->
       <?php include ('page_content/understand/tab_about_peercoin.php')?><!-- end About Peercoin Items -->
     <a target="_blank" href="page/about_peercoin">View tab as stand alone page</a>
 </div><!-- end About Peercoin tab-->
    <div class="tab-pane fade" id="mine">
      <!-- About Mining Items -->
       <?php include ('page_content/understand/tab_about_mining.php')?><!-- end About Mining Items -->
      <a target="_blank" href="page/about_mining">View tab as stand alone page</a>
</div><!-- end about mining tab-->
    <div class="tab-pane fade" id="mint">
      <!-- About Minting Items -->
       <?php include ('page_content/understand/tab_about_minting.php')?><!-- end About Minting Items -->
      <a target="_blank" href="page/about_minting">View tab as stand alone page</a></div><!-- end about minting tab-->
    <div class="tab-pane fade" id="spend">
      <!-- About Spending Items -->
       <?php include ('page_content/understand/tab_about_spending.php')?><!-- end About Spending Items -->
      <a target="_blank" href="page/about_spending">View tab as stand alone page</a></div><!-- end about spending tab-->
    <!-- ends tabs-->
</div>
<!-- end container-->


<?php include ('footer.php'); ?>
