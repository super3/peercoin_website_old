    <?php include ('header.php'); ?>
  <!-- Page Title -->
  <h1 style="margin-top:5px;">Support Peercoin</h1>

  <!-- Nav tabs -->
  <ul class="nav nav-tabs">
    <li class="active">
      <a href="#participate" data-toggle="tab">
        <h2>Participate in Peercoin</h2>
      </a>
    </li>
    <li>
      <a href="#volunteer" data-toggle="tab">
        <h2>Volunteer</h2>
      </a>
    </li>

  </ul>
  <!-- Tab panes -->
  <div class="tab-content">
    <div class="tab-pane active fade in" id="mine">
      <!-- participate Items -->
       <?php include ('page_content/support/tab_support_participate.php')?><!-- end participate items-->
      </div><!-- end participate tab-->
    <div class="tab-pane fade" id="mint">
      <!-- volunteer Items -->
       <?php include ('page_content/support/tab_support_volunteer.php')?><!-- end volunteer items-->
      </div><!-- end volunteer tab-->
    <!-- ends tabs-->
</div>
<!-- end container-->


<?php include ('footer.php'); ?>
