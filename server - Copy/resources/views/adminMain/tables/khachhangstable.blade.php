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
        <li ><a href="admin/tables/productstable">Product Table</a></li>
        <li><a href="admin/tables/stagestable">Stage Table</a></li>
        <li><a href="admin/tables/fruitstable">Fruit Table</a></li>
        <li class="active"><a href="admin/tables/khachhangstable">User Khach Hang Table</a></li>
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
    <div id="breadcrumb"> <a href="admin/home/dashboard" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="admin/tables/khachhangstable" >Tables</a><a href="admin/tables/khachhangstable" class="current">Khach Hang Table</a> </div>
    <h1>Table Khach Hang</h1>
    </div>
  <div class="container-fluid">
    <hr>
    <div class="row-fluid">
      <div class="span12">
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>ADD KHACH HANG</h5>
        </div>
        <div class="widget-content nopadding">
        
          <form action="admin/tables/khachhangstable" method="POST" class="form-horizontal">
            <input type="hidden" name="_token" value="{{csrf_token()}}"  />
            <div class="control-group">
              <label class="control-label">TEN USER :</label>
              <div class="controls">
                <input type="text" class="span11" name="tenuser" placeholder="vd:ntinhoahoitu" />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">NUMBERPHONE :</label>
              <div class="controls">
                <input type="text" class="span11" name="numberphone"  />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">MAIL :</label>
              <div class="controls">
                <input type="text" class="span11" name="email"  />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">ADD ADMIN :</label>
              <div class="controls">
                <input type="text" class="span11" name="addadmin" placeholder="vd:1" />
              </div>
            </div>
            <div class="form-actions">
              <button type="submit" class="btn btn-success">Save</button>
            </div>
          </form>
        </div>
      </div>
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Data table</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>TÊN USER</th>
                  <th>NUMBERPHONE</th>
                  <th>MAIL</th>
                  <th>ADD ADMIN</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
               @foreach($khachhang as $kh)
                <tr class="gradeA">
                  <td>{{$kh->tenuser}}</td>
                  <td>{{$kh->numberphone}}</td>
                  <td>{{$kh->mail}}</td>
                  <td>{{$kh->addadmin}}</td>
                  <td class="center"><a href="admin/tables/suakhachhangstable/{{$kh->id}}">edit</a></td>
                </tr>
                @endforeach
             
               
               
              </tbody>
            </table>
          </div>
        </div>
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Data table</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>TÊN USER</th>
                  <th>NUMBERPHONE</th>
                  <th>MAIL</th>
                  <th>ADDADMIN</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                @foreach($khachhang as $kh)
                <tr class="gradeA">
                  <td>{{$kh->tenuser}}</td>
                  <td>{{$kh->numberphone}}</td>
                  <td>{{$kh->mail}}</td>
                  <td>{{$kh->addadmin}}</td>
                  <td class="center"><a href="admin/tables/xoakhachhangstable/{{$kh->id}}">delete</a></td>
                </tr>
                @endforeach
             
               
               
              </tbody>
            </table>
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
