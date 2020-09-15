<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p>  <?php $user = auth()->user()->name; ?>
  <?php echo $user;?></p>
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>
    <!-- search form -->
    <form action="#" method="get" class="sidebar-form">
   
    </form>
    <!-- /.search form -->
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu">
     
     
      <li class="treeview">
        <a href="/blog">
          <i class="fa fa-files-o"></i>
          <span>Blog</span>
          <span class="pull-right-container">
            <span class="label label-primary pull-right"></span>
          </span>
        </a>
       
      </li>
      <li>
      <a href="/category">
          <i class="fa fa-th"></i> <span>Categories</span>
          <span class="pull-right-container">
            <small class="label pull-right bg-green"></small>
          </span>
        </a>
      </li>
      <li>
        <a href="/download">
          <i class="fa fa-download"></i> <span>Download</span>
          <span class="pull-right-container">
            <small class="label pull-right bg-green"></small>
          </span>
        </a>
      </li>
      <li>
        <a href="/album">
          <i class="fa fa-image"></i> <span>Album</span>
          <span class="pull-right-container">
            <small class="label pull-right bg-green"></small>
          </span>
        </a>
      </li>
      <li>
        <a href="/gallery">
          <i class="fa fa-th"></i> <span>Gallery</span>
          <span class="pull-right-container">
            <small class="label pull-right bg-green"></small>
          </span>
        </a>
      </li>
      <li>
        <a href="/video">
          <i class="fa fa-th"></i> <span>Videos</span>
          <span class="pull-right-container">
            <small class="label pull-right bg-green"></small>
          </span>
        </a>
      </li>
      <li>
        <a href="/product">
          <i class="fa fa-th"></i> <span>Product</span>
          <span class="pull-right-container">
            <small class="label pull-right bg-green"></small>
          </span>
        </a>
      </li>
      <li>
        <a href="/pcategory">
          <i class="fa fa-th"></i> <span>Product Category</span>
          <span class="pull-right-container">
            <small class="label pull-right bg-green"></small>
          </span>
        </a>
      </li>
    
 
  </section>
  <!-- /.sidebar -->
</aside>
