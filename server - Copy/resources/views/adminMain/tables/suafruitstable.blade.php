<!DOCTYPE html>
<html lang="en">
<head>
<title>Matrix Admin</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<base href="/">
<link rel="stylesheet" href="admin_asset/css/bootstrap.min.css" />
<link rel="stylesheet" href="admin_asset/css/bootstrap-responsive.min.css" />
<link rel="stylesheet" href="admin_asset/css/uniform.css" />
<link rel="stylesheet" href="admin_asset/css/select2.css" />
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
        <li><a href="login.html"><i class="icon-key"></i> Log Out</a></li>
      </ul>
    </li>
    <li class=""><a title="" href="login.html"><i class="icon icon-share-alt"></i> <span class="text">Logout</span></a></li>
  </ul>
</div>
<!--close-top-Header-menu-->
<!--sidebar-menu-->
<div id="sidebar"><a href="#" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a>
  <ul>
    <li><a href="admin/home/dashboard"><i class="icon icon-home"></i> <span>Dashboard</span></a> </li>
    <li> <a href="admin/chart/chartandgrap"><i class="icon icon-signal"></i> <span>Charts &amp; graphs</span></a> </li>
    <li class="active submenu"><a href="admin/home/dashboard"><i class="icon icon-th"></i> <span>Tables</span></a>
      <ul>
        <li><a href="admin/tables/productclassificationstable">Product Classification Table</a></li>
        <li><a href="admin/tables/productstable">Product Table</a></li>
        <li><a href="admin/tables/stagestable">Stage Table</a></li>
        <li  class="active"><a href="admin/tables/fruitstable">Fruit Table</a></li>
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
<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="admin/home/dashboard" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="admin/tables/fruitstable" >Tables</a><a href="admin/tables/fruitstable" class="current">Fruit Table</a> </div>
    <h1>Table Fruit</h1>
    </div>
  <div class="container-fluid">
    <hr>
    <div class="row-fluid">
      <div class="span12">
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>EDIT FRUIT</h5>
        </div>
        <div class="widget-content nopadding">
      
          <form action="admin/tables/suafruitstable/{{$fruits->idfruit}}" method="POST" class="form-horizontal">
            <input type="hidden" name="_token" value="{{csrf_token()}}"  />
            <div class="control-group">
              <label class="control-label">ID FRUIT :</label>
              <div class="controls">
                <input type="text" class="span11" name="idfruit" value="{{$fruits->idfruit}}" placeholder="vd:trái sầu riêng đặt tên là: IDSAURIENG" />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">TEN FRUIT :</label>
              <div class="controls">
                <input type="text" class="span11" name="tenfruit" value="{{$fruits->tenfruit}}" placeholder="vd:trái sầu riêng đặt tên là : Sản Phẩm Cho Sầu Riêng" />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Name Fruit :</label>
              <div class="controls">
                <input type="text"  class="span11" name="namefruit" value="{{$fruits->namefruit}}"  placeholder="vd:trái sầu riêng đặt tên là : Product For Grapefruit"  />
              </div>
            </div>
            <div class="form-actions">
              <button type="submit" class="btn btn-success" ><a href="admin/tables/fruitstable" style="color:white">Save</a></button>
            </div>
          </form>
        </div>
      </div>
      </div>
    </div>
  </div>
</div>
<!--Footer-part-->
<div class="row-fluid">
  <div id="footer" class="span12"> 2013 &copy; Matrix Admin. Brought to you by <a href="http://themedesigner.in">Themedesigner.in</a> </div>
</div>
<!--end-Footer-part-->
<script src="admin_asset/js/jquery.min.js"></script> 
<script src="admin_asset/js/jquery.ui.custom.js"></script> 
<script src="admin_asset/js/bootstrap.min.js"></script> 
<script src="admin_asset/js/jquery.uniform.js"></script> 
<script src="admin_asset/js/select2.min.js"></script> 
<script src="admin_asset/js/jquery.dataTables.min.js"></script> 
<script src="admin_asset/js/matrix.js"></script> 
<script src="admin_asset/js/matrix.tables.js"></script>
</body>
</html>
