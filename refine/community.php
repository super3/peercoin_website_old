    <?php include ('header.php'); ?>
  <!-- Page Title -->
  <h1 style="margin-top:5px;">Peercoin Community</h1>

  <!-- Nav tabs -->
  <ul class="nav nav-tabs">
    <li class="active">
      <a href="#overview" data-toggle="tab">
        <h2>Community Overview</h2>
      </a>
    </li>
    <li>
      <a href="#forum" data-toggle="tab">
        <h2>Understanding Forums</h2>
      </a>
    </li>
    <li>
      <a href="#socialmedia" data-toggle="tab">
        <h2>Peercoin and Social Media</h2>
      </a>
    </li>


    <!--<li>
      <a href="#sponsor" data-toggle="tab">
        <h2>Sponsor</h2>
      </a>
    </li>-->
  </ul>
  <!-- Tab panes -->
  <div class="tab-content">
    <div class="tab-pane active fade in" id="overview">
      <!-- overview Items -->
       <?php include ('page_content/community/tab_community_overview.php')?><!-- end overview items-->
      <a target="_blank" href="page/overview">View tab as stand alone page</a>
</div><!-- end overview tab-->
     <div class="tab-pane fade" id="forum">
      <!-- fourm Items -->
       <?php include ('page_content/community/tab_community_forum.php')?><!-- end forum items-->
<a target="_blank" href="page/forum">View tab as stand alone page</a>      
</div><!-- end forum tab-->
<div class="tab-pane fade" id="socialmedia">
     <!-- socialmedia Items -->
       <?php include ('page_content/community/tab_community_socialmedia.php')?><!-- end socialmedia items-->
<a target="_blank" href="page/socialmedia">View tab as stand alone page</a>      
</div><!-- end socialmedia tab-->
    <!-- ends tabs-->
</div>
<!-- end container-->


<?php include ('footer.php'); ?>
