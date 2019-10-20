<!DOCTYPE html>
<html lang="en">
<head>
<title>Matrix Admin</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<base href="/">
<link rel="stylesheet" href="admin_asset/css/bootstrap.min.css" />
<link rel="stylesheet" href="admin_asset/css/bootstrap-responsive.min.css" />
<link rel="stylesheet" href="admin_asset/css/fullcalendar.css" />
<link rel="stylesheet" href="admin_asset/css/matrix-style.css" />
<link rel="stylesheet" href="admin_asset/css/matrix-media.css" />
<link href="admin_asset/font-awesome/css/font-awesome.css" rel="stylesheet" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
</head>
<body>

<!--Header-part-->
<div id="header">
  <h1><a href="dashboard.html">Matrix Admin</a></h1>
</div>
<!--close-Header-part--> 


<!--top-Header-menu-->
<div id="user-nav" class="navbar navbar-inverse">
  <ul class="nav">
    <li  class="dropdown" id="profile-messages" ><a title="" href="#" data-toggle="dropdown" data-target="#profile-messages" class="dropdown-toggle"><i class="icon icon-user"></i>  <span class="text">Welcome User</span><b class="caret"></b></a>
      <ul class="dropdown-menu">
        <li class="divider"></li>
        <li class="divider"></li>
        <li><a  href="{{ url('admin/logout') }}"   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                     <i class="icon-key"></i> Log Out</a></li>

                                    <form id="logout-form" action="{{ url('admin/logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
      </ul>
    </li>
    <li><a  href="{{ url('admin/logout') }}"   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                     <i class="icon-key"></i> Log Out</a></li>

                                    <form id="logout-form" action="{{ url('admin/logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
  </ul>
</div>
<!--close-top-Header-menu-->
<!--sidebar-menu-->
<div id="sidebar"><a href="#" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a>
  <ul>
    <li class="active"><a href="admin/home/dashboard"><i class="icon icon-home"></i> <span>Dashboard</span></a> </li>
    <li> <a href="admin/chart/chartandgrap"><i class="icon icon-signal"></i> <span>Charts &amp; graphs</span></a> </li>
    <li class=" submenu"><a href="#"><i class="icon icon-th"></i> <span>Tables</span></a>
      <ul>
        <li><a href="admin/tables/productclassificationstable">Product Classification Table</a></li>
        <li><a href="admin/tables/productstable">Product Table</a></li>
        <li><a href="admin/tables/stagestable">Stage Table</a></li>
        <li><a href="admin/tables/fruitstable">Fruit Table</a></li>
        <li><a href="admin/tables/khachhangstable">User Khach Hang Table</a></li>
        <li><a href="admin/tables/legislationstable">Menu Legislation Table</a></li>
        <li><a href="admin/tables/aboutstable">Menu About Table</a></li>
        <li><a href="admin/tables/skillfilestable">Menu Skill File Table</a></li>
        <li><a href="admin/tables/systemclassificationproductstable">Menu System Classification Product Table</a></li>
        <li><a href="admin/tables/useradminstable">User Admin Table</a></li>
      </ul>
    </li>
    <li><a href="admin/home/dashboard"><i class="icon icon-fullscreen"></i></a></li>
    <li class="submenu"> <a href="admin/home/dashboard"><i class="icon icon-th-list"></i></a>
      <ul>
        <li><a href="admin/home/dashboard"></a></li>
      </ul>
    </li>
    <li><a href="admin/home/dashboard"><i class="icon icon-tint"></i></a></li>
    <li><a href="admin/home/dashboard"><i class="icon icon-pencil"></i> <span></span></a></li>
    <li class="submenu"> <a href="admin/home/dashboard"><i class="icon icon-file"></i> </a>
      <ul>
        <li><a href="admin/home/dashboard"></a></li>
        <li><a href="admin/home/dashboard"></a></li>
        <li><a href="admin/home/dashboard"></a></li>
        <li><a href="admin/home/dashboard"></a></li>
        <li><a href="admin/home/dashboard"></a></li>
      </ul>
    </li>
    <li class="submenu"> <a href="admin/home/dashboard"><i class="icon icon-info-sign"></i> </a>
      <ul>
        <li><a href="admin/home/dashboard">Error 403</a></li>
        <li><a href="admin/home/dashboard">Error 404</a></li>
        <li><a href="admin/home/dashboard">Error 405</a></li>
        <li><a href="admin/home/dashboard">Error 500</a></li>
      </ul>
    </li>
    <li class="content"> <span>Monthly Bandwidth Transfer</span>
      <div class="progress progress-mini progress-danger active progress-striped">
        <div style="width: 77%;" class="bar"></div>
      </div>
      <span class="percent">77%</span>
      <div class="stat">21419.94 / 14000 MB</div>
    </li>
    <li class="content"> <span>Disk Space Usage</span>
      <div class="progress progress-mini active progress-striped">
        <div style="width: 87%;" class="bar"></div>
      </div>
      <span class="percent">87%</span>
      <div class="stat">604.44 / 4000 MB</div>
    </li>
  </ul>
</div>
<!--sidebar-menu-->

<!--main-container-part-->
<div id="content">
<!--breadcrumbs-->
  <div id="content-header">
    <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a></div>
  </div>
<!--End-breadcrumbs-->

<!--Action boxes-->
  <div class="container-fluid">
    <div class="quick-actions_homepage">
      <ul class="quick-actions">
        <li class="bg_lb"> <a href="index.html"> <i class="icon-dashboard"></i> My Dashboard </a> </li>
        <li class="bg_lg span3"> <a href="charts.html"> <i class="icon-signal"></i> Charts</a> </li>
        <li class="bg_ly"> <a href="widgets.html"> <i class="icon-inbox"></i>Widgets </a> </li>
        <li class="bg_lo"> <a href="tables.html"> <i class="icon-th"></i> Tables</a> </li>
        <li class="bg_ls"> <a href="grid.html"> <i class="icon-fullscreen"></i> Full width</a> </li>
        <li class="bg_lo span3"> <a href="form-common.html"> <i class="icon-th-list"></i> Forms</a> </li>
        <li class="bg_ls"> <a href="buttons.html"> <i class="icon-tint"></i> Buttons</a> </li>
        <li class="bg_lb"> <a href="interface.html"> <i class="icon-pencil"></i>Elements</a> </li>
        <li class="bg_lg"> <a href="calendar.html"> <i class="icon-calendar"></i> Calendar</a> </li>
        <li class="bg_lr"> <a href="error404.html"> <i class="icon-info-sign"></i> Error</a> </li>

      </ul>
    </div>
<!--End-Action boxes-->    

<!--Chart-box-->    
    <div class="row-fluid">
      <div class="widget-box">
        <div class="widget-title bg_lg"><span class="icon"><i class="icon-signal"></i></span>
          <h5>Site Analytics</h5>
        </div>
        <div class="widget-content" >
          <div class="row-fluid">
            <div class="span9">
              <div class="chart"></div>
            </div>
            <div class="span3">
              <ul class="site-stats">
                <li class="bg_lh"><i class="icon-user"></i> <strong>2540</strong> <small>Total Users</small></li>
                <li class="bg_lh"><i class="icon-plus"></i> <strong>120</strong> <small>New Users </small></li>
                <li class="bg_lh"><i class="icon-shopping-cart"></i> <strong>656</strong> <small>Total Shop</small></li>
                <li class="bg_lh"><i class="icon-tag"></i> <strong>9540</strong> <small>Total Orders</small></li>
                <li class="bg_lh"><i class="icon-repeat"></i> <strong>10</strong> <small>Pending Orders</small></li>
                <li class="bg_lh"><i class="icon-globe"></i> <strong>8540</strong> <small>Online Orders</small></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
<!--End-Chart-box--> 
    <hr/>
   
  </div>
</div>

<!--end-main-container-part-->

<!--Footer-part-->

<div class="row-fluid">
  <div id="footer" class="span12"> 2013 &copy; Matrix Admin. Brought to you by <a href="http://themedesigner.in">Themedesigner.in</a> </div>
</div>

<!--end-Footer-part-->

<script src="admin_asset/js/excanvas.min.js"></script> 
<script src="admin_asset/js/jquery.min.js"></script> 
<script src="admin_asset/js/jquery.ui.custom.js"></script> 
<script src="admin_asset/js/bootstrap.min.js"></script> 
<script src="admin_asset/js/jquery.flot.min.js"></script> 
<script src="admin_asset/js/jquery.flot.resize.min.js"></script> 
<script src="admin_asset/js/jquery.peity.min.js"></script> 
<script src="admin_asset/js/fullcalendar.min.js"></script> 
<script src="admin_asset/js/matrix.js"></script> 
<script src="admin_asset/js/matrix.dashboard.js"></script> 
<script src="admin_asset/js/jquery.gritter.min.js"></script> 
<script src="admin_asset/js/matrix.interface.js"></script> 
<script src="admin_asset/js/matrix.chat.js"></script> 
<script src="admin_asset/js/jquery.validate.js"></script> 
<script src="admin_asset/js/matrix.form_validation.js"></script> 
<script src="admin_asset/js/jquery.wizard.js"></script> 
<script src="admin_asset/js/jquery.uniform.js"></script> 
<script src="admin_asset/js/select2.min.js"></script> 
<script src="admin_asset/js/matrix.popover.js"></script> 
<script src="admin_asset/js/jquery.dataTables.min.js"></script> 
<script src="admin_asset/js/matrix.tables.js"></script> 

<script type="text/javascript">
  // This function is called from the pop-up menus to transfer to
  // a different page. Ignore if the value returned is a null string:
  function goPage (newURL) {

      // if url is empty, skip the menu dividers and reset the menu selection to default
      if (newURL != "") {
      
          // if url is "-", it is this page -- reset the menu:
          if (newURL == "-" ) {
              resetMenu();            
          } 
          // else, send page to designated URL            
          else {  
            document.location.href = newURL;
          }
      }
  }

// resets the menu selection upon entry to this page:
function resetMenu() {
   document.gomenu.selector.selectedIndex = 2;
}
</script>
</body>
</html>
