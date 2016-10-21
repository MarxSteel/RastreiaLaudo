<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8" />
  <title>Henry Equipamentos e Sistemas - Plataforma de Rastreios</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
  <link rel="stylesheet" href="libs/assets/animate.css/animate.css" type="text/css" />
  <link rel="stylesheet" href="libs/assets/font-awesome/css/font-awesome.css" type="text/css" />
  <link rel="stylesheet" href="libs/jquery/waves/dist/waves.css" type="text/css" />
  <link rel="stylesheet" href="styles/material-design-icons.css" type="text/css" />
  <link rel="stylesheet" href="libs/jquery/bootstrap/dist/css/bootstrap.css" type="text/css" />
  <link rel="stylesheet" href="styles/font.css" type="text/css" />
  <link rel="stylesheet" href="styles/app.css" type="text/css" />
</head>
<body>
<div class="app">
 <aside id="aside" class="app-aside modal fade " role="menu">
  <div class="left">
   <div class="box bg-white">
    <div class="navbar md-whiteframe-z1 no-radius blue">
     <a class="navbar-brand">
      <span class="hidden-folded m-l inline">Henry</span>
     </a>
    </div>
    <div class="box-row">
     <div class="box-cell scrollable hover">
            <div class="box-inner">
              <div class="p hidden-folded blue-50" style="background-image:url(images/bg.png); background-size:cover">
                <div class="rounded w-64 bg-white inline pos-rlt">
                  <img src="images/a0.jpg" class="img-responsive rounded">
                </div>
                <a class="block m-t-sm" ui-toggle-class="hide, show" target="#nav, #account">
                  <span class="block font-bold">John Smith</span>
                  <span class="pull-right auto">
                    <i class="fa inline fa-caret-down"></i>
                    <i class="fa none fa-caret-up"></i>
                  </span>
                  john.smith@gmail.com
                </a>
              </div>
              <div id="nav">
                <nav ui-nav>
                  <ul class="nav">
                    <li class="nav-header m-v-sm hidden-folded">
                      UI Kits
                    </li>
                    <li>
                      <a md-ink-ripple>
                        <span class="pull-right text-muted">
                          <i class="fa fa-caret-down"></i>
                        </span>
                        <i class="pull-right up"><b class="badge no-bg">2</b></i>
                        <i class="icon mdi-action-settings-input-svideo i-20"></i>
                        <span class="font-normal">Dashboard</span>
                      </a>
                      <ul class="nav nav-sub">
                        <li>
                          <a md-ink-ripple href="index.html">Dashboard</a>
                        </li>
                        <li>
                          <a md-ink-ripple href="dashboard.analysis.html">Analysis</a>
                        </li>
                        <li>
                          <a md-ink-ripple href="dashboard.wall.html">Wall</a>
                        </li>
                      </ul>
                    </li>
                    <li>
                      <a md-ink-ripple>
                        <span class="pull-right text-muted">
                          <i class="fa fa-caret-down"></i>
                        </span>
                        <i class="icon mdi-action-subject i-20"></i>
                        <span class="font-normal">Components</span>
                      </a>
                      <ul class="nav nav-sub">
                        <li>
                          <a md-ink-ripple href="ui.component.arrow.html">Arrow</a>
                        </li>
                        <li>
                          <a md-ink-ripple href="ui.component.badge-label.html">Badge &amp; Label</a>
                        </li>
                        <li>
                          <a md-ink-ripple href="ui.component.button.html">Button</a>
                        </li>
                        <li>
                          <a md-ink-ripple href="ui.component.color.html">Color</a>
                        </li>
                        <li>
                          <a md-ink-ripple href="ui.component.grid.html">Grid</a>
                        </li>
                        <li>
                          <a md-ink-ripple href="ui.component.icon.html">Icon</a>
                        </li>
                        <li>
                          <a md-ink-ripple href="ui.component.list.html">List Group</a>
                        </li>
                        <li>
                          <a md-ink-ripple href="ui.component.nav.html">Nav</a>
                        </li>
                        <li>
                          <a md-ink-ripple href="ui.component.progressbar.html">Progressbar</a>
                        </li>
                        <li>
                          <a md-ink-ripple href="ui.component.streamline.html">Streamline</a>
                        </li>
                        <li>
                          <a md-ink-ripple href="ui.component.timeline.html">Timeline</a>
                        </li>
                      </ul>
                    </li>
                    <li>
                      <a md-ink-ripple>
                        <span class="pull-right text-muted">
                          <i class="fa fa-caret-down"></i>
                        </span>
                        <i class="pull-right up"><b class="badge bg-success">14</b></i>
                        <i class="icon mdi-image-flash-on i-20"></i>
                        <span class="font-normal">Material</span>
                      </a>
                      <ul class="nav nav-sub">
                        <li>
                          <a md-ink-ripple href="ui.material.button.html">Button</a>
                        </li>
                        <li>
                          <a md-ink-ripple href="ui.material.icon.html">Icon</a>
                        </li>
                        <li>
                          <a md-ink-ripple href="ui.material.color.html">Color</a>
                        </li>
                        <li>
                          <a md-ink-ripple href="ui.material.card.html">Card</a>
                        </li>
                        <li>
                          <a md-ink-ripple href="ui.material.form.html">Form</a>
                        </li>
                        <li>
                          <a md-ink-ripple href="ui.material.list.html">List</a>
                        </li>
                      </ul>
                    </li>
                    <li>
                      <a md-ink-ripple>
                        <span class="pull-right text-muted">
                          <i class="fa fa-caret-down"></i>
                        </span>
                        <i class="icon mdi-toggle-radio-button-on i-20"></i>
                        <span class="font-normal">Form</span>
                      </a>
                      <ul class="nav nav-sub">
                        <li>
                          <a md-ink-ripple href="ui.form.layout.html">Form Layout</a>
                        </li>
                        <li>
                          <a md-ink-ripple href="ui.form.element.html">Form Element</a>
                        </li>
                      </ul>
                    </li>
                    <li>
                      <a md-ink-ripple>
                        <span class="pull-right text-muted">
                          <i class="fa fa-caret-down"></i>
                        </span>
                        <i class="icon mdi-editor-format-list-bulleted i-20"></i>
                        <span class="font-normal">Table</span>
                      </a>
                      <ul class="nav nav-sub">
                        <li>
                          <a md-ink-ripple href="ui.table.static.html">Static table</a>
                        </li>
                        <li>
                          <a md-ink-ripple href="ui.table.datatable.html">Datatable</a>
                        </li>
                        <li>
                          <a md-ink-ripple href="ui.table.footable.html">Footable</a>
                        </li>
                      </ul>
                    </li>
                    <li>
                      <a md-ink-ripple href="ui.chart.html">
                        <i class="pull-right up"><b class="label bg-info">NEW</b></i> 
                        <i class="icon mdi-device-multitrack-audio i-20"></i>
                        <span class="font-normal">Charts</span>
                      </a>
                    </li>
                    <li>
                      <a md-ink-ripple>
                        <span class="pull-right text-muted">
                          <i class="fa fa-caret-down"></i>
                        </span>
                        <i class="icon mdi-maps-navigation i-20"></i>
                        <span class="font-normal">Maps</span>
                      </a>
                      <ul class="nav nav-sub">
                        <li>
                          <a md-ink-ripple href="ui.map.vector.html">Vector Map</a>
                        </li>
                      </ul>
                    </li>
                    <li>
                      <a md-ink-ripple>
                        <span class="pull-right text-muted">
                          <i class="fa fa-caret-down"></i>
                        </span>
                        <i class="icon mdi-editor-insert-drive-file i-20"></i>
                        <span class="font-normal">Pages</span>
                      </a>
                      <ul class="nav nav-sub">
                        <li>
                          <a md-ink-ripple href="page.profile.html">
                            <span>Profile</span>
                          </a>
                        </li>
                        <li>
                          <a md-ink-ripple href="page.settings.html">
                            <span>Settings</span>
                          </a>
                        </li>
                        <li>
                          <a md-ink-ripple href="page.blank.html">
                            <span>Blank</span>
                          </a>
                        </li>
                        <li>
                          <a md-ink-ripple href="signin.html">
                            <span>Sign In</span>
                          </a>
                        </li>
                        <li>
                          <a md-ink-ripple href="signup.html">
                            <span>Sign Up</span>
                          </a>
                        </li>
                        <li>
                          <a md-ink-ripple href="forgot-password.html">
                            <span>Forgot Password</span>
                          </a>
                        </li>
                        <li>
                          <a md-ink-ripple href="lockme.html">
                            <span>Lockme Screen</span>
                          </a>
                        </li>
                        <li>
                          <a md-ink-ripple href="404.html">
                            <span>Error 404</span>
                          </a>
                        </li>
                        <li>
                          <a md-ink-ripple href="505.html">
                            <span>Error 505</span>
                          </a>
                        </li>
                      </ul>
                    </li>
                    <li>
                      <a md-ink-ripple href>
                        <span class="pull-right text-muted">
                          <i class="fa fa-caret-down"></i>
                        </span>
                        <i class="icon mdi-content-sort i-20"></i>
                        <span>Menu</span>
                      </a>
                      <ul class="nav nav-sub">
                        <li><a md-ink-ripple href>Menu levels 1</a></li>
                        <li>
                          <a md-ink-ripple href>
                            <span class="pull-right text-muted">
                              <i class="fa fa-caret-down"></i>
                            </span>
                            <span class="font-normal">Menu levels 2</span>
                          </a>
                          <ul class="nav nav-sub">
                            <li>
                              <a md-ink-ripple href>Menu levels 2.1</a>
                            </li>
                            <li>
                              <a md-ink-ripple href>Menu levels 2.2</a>
                            </li>
                          </ul>          
                        </li>        
                      </ul>
                    </li>
                    <li class="b-b b m-v-sm"></li>
                    <li>
                      <a md-ink-ripple ui-toggle-class="hide, show" target="#nav, #account">
                        <span>Settings</span>
                      </a>
                    </li>
                    <li>
                      <a md-ink-ripple href="page.document.html">
                        <span>Document</span>
                      </a>
                    </li>
                    <li class="m-b-sm">
                      <a md-ink-ripple href="../angular">
                        <span>Angular Version</span>
                      </a>
                    </li>
                  </ul>
                </nav>
              </div>
              <div id="account" class="hide m-v-xs">
                <nav>
                  <ul class="nav">
                    <li>
                      <a md-ink-ripple href="page.profile.html">
                        <i class="icon mdi-action-perm-contact-cal i-20"></i>
                        <span>My Profile</span>
                      </a>
                    </li>
                    <li>
                      <a md-ink-ripple href="page.settings.html">
                        <i class="icon mdi-action-settings i-20"></i>
                        <span>Settings</span>
                      </a>
                    </li>
                    <li>
                      <a md-ink-ripple href="lockme.html">
                        <i class="icon mdi-action-exit-to-app i-20"></i>
                        <span>Logout</span>
                      </a>
                    </li>
                    <li class="m-v-sm b-b b"></li>
                    <li>
                      <div class="nav-item" ui-toggle-class="folded" target="#aside">
                        <label class="md-check">
                          <input type="checkbox">
                          <i class="purple no-icon"></i>
                          <span class="hidden-folded">Folded aside</span>
                        </label>
                      </div>
                    </li>
                  </ul>
                </nav>
              </div>
            </div>
          </div>
        </div>
        <nav>
          <ul class="nav b-t b">
            <li>
              <a href="http://themeforest.net/item/materil-responsive-admin-dashboard-template/11062969" target="_blank" md-ink-ripple>
                <i class="icon mdi-action-help i-20"></i>
                <span>Help &amp; Feedback</span>
              </a>
            </li>
          </ul>
        </nav>
      </div>
    </div>
  </aside>
  <!-- / aside -->
  


  <!-- content -->
  <div id="content" class="app-content" role="main">
    <div class="box">
          <!-- Content Navbar -->
    <div class="navbar md-whiteframe-z1 no-radius blue">
      <!-- Open side - Naviation on mobile -->
      <a md-ink-ripple  data-toggle="modal" data-target="#aside" class="navbar-item pull-left visible-xs visible-sm"><i class="mdi-navigation-menu i-24"></i></a>
      <!-- / -->
      <!-- Page title - Bind to $state's title -->
      <div class="navbar-item pull-left h4">Charts</div>
      <!-- / -->
      <!-- Common tools -->
      <ul class="nav nav-sm navbar-tool pull-right">
        <li>
          <a md-ink-ripple ui-toggle-class="show" target="#search">
            <i class="mdi-action-search i-24"></i>
          </a>
        </li>
        <li>
          <a md-ink-ripple data-toggle="modal" data-target="#user">
            <i class="mdi-social-person-outline i-24"></i>
          </a>
        </li>
        <li class="dropdown">
          <a md-ink-ripple data-toggle="dropdown">
            <i class="mdi-navigation-more-vert i-24"></i>
          </a>
          <ul class="dropdown-menu dropdown-menu-scale pull-right pull-up text-color">
            <li><a href>Single-column view</a></li>
            <li><a href>Sort by date</a></li>
            <li><a href>Sort by name</a></li>
            <li class="divider"></li>
            <li><a href>Help &amp; feedback</a></li>
          </ul>
        </li>
      </ul>
      <div class="pull-right" ui-view="navbar@"></div>
      <!-- / -->
      <!-- Search form -->
      <div id="search" class="pos-abt w-full h-full blue hide">
        <div class="box">
          <div class="box-col w-56 text-center">
            <!-- hide search form -->
            <a md-ink-ripple class="navbar-item inline"  ui-toggle-class="show" target="#search"><i class="mdi-navigation-arrow-back i-24"></i></a>
          </div>
          <div class="box-col v-m">
            <!-- bind to app.search.content -->
            <input class="form-control input-lg no-bg no-border" placeholder="Search" ng-model="app.search.content">
          </div>
          <div class="box-col w-56 text-center">
            <a md-ink-ripple class="navbar-item inline"><i class="mdi-av-mic i-24"></i></a>
          </div>
        </div>
      </div>
      <!-- / -->
    </div>
    <!-- Content -->

      <div class="box-row">
        <div class="box-cell">
          <div class="box-inner padding">
            

  <div ng-controller="ChartCtrl">
    <div class="row">
      <div class="col-md-4">
        <div class="panel no-border">
          <div class="panel-heading">
            <span class="font-bold">3.343.209</span> <i class="fa fa-caret-up text-success"></i>1.5%
            <small class="block text-muted">Total revenue of this month</small>
          </div>
          <div style="margin: 0 -2px">
            <div ui-jp="plot" ui-options="
              [
                { data: [[1, 9.5], [2, 9.4], [3, 9.5], [4, 9.5], [5, 9.7], [6, 9.6], [7, 9.3], [8, 9.5], [9, 9], [10, 9.9]], points: { show: true, radius: 0}, splines: { show: true, tension: 0.45, lineWidth: 1, fill: 0.2 } },
                { data: [[1, 4.5], [2, 4.2], [3, 4.5], [4, 4.3], [5, 4.5], [6, 4.7], [7, 4.6], [8, 4.8], [9, 4.6], [10, 4.5]], points: { show: true, radius: 0}, splines: { show: true, tension: 0.45, lineWidth: 1, fill: 1 } }
              ], 
              {
                colors: ['#2196f3', '#475069'],
                series: { shadowSize: 3 },
                xaxis: { show: false, font: { color: '#ccc' }, position: 'bottom' },
                yaxis:{ show: false, font: { color: '#ccc' }},
                grid: { hoverable: true, clickable: true, borderWidth: 0, color: '#ccc' },
                tooltip: true,
                tooltipOpts: { content: '%x.0 is %y.4',  defaultTheme: false, shifts: { x: 0, y: -40 } }
              }
            " style="height:206px" >
            </div>
          </div>
          <div class="panel-footer bg-dark no-b-t">
            <div class="box">
              <div class="box-col">
                <span class="text-lg text-lt">$23,000</span>
              </div>
              <div class="box-col text-right">
                <div ui-jp="sparkline" ui-options="[60,40], {type:'pie', height:25, sliceColors:['#4caf50','#fff']}" class="sparkline inline"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="panel no-border">
          <div class="panel-heading">
            <span class="font-bold">Lines and Bars</span>
            <small class="block text-muted">Plenty of options to control</small>
          </div>
          <div class="panel-body">
            <div ui-jp="plot" ui-options="
              [
                { data: [[1, 9.5], [2, 9.4], [3, 9.5], [4, 9.5], [5, 9.7], [6, 9.6], [7, 9.3], [8, 9.5], [9, 9], [10, 9.9]], points: { show: true, radius: 3}, lines: { show: true, lineWidth: 1} },
                { data: [[1, 4.5], [2, 4.2], [3, 4.5], [4, 4.3], [5, 4.5], [6, 4.7], [7, 4.6], [8, 4.8], [9, 4.6], [10, 4.5]], bars: { show: true, barWidth: 0.4, lineWidth: 1, fillColor: { colors: [{ opacity: 0.2 }, { opacity: 0.4}] } } }
              ], 
              {
                colors: ['#3f51b5', '#2196f3'],
                series: { shadowSize: 3 },
                xaxis: { show: true, font: { color: '#ccc' }, position: 'bottom' },
                yaxis:{ show: true, font: { color: '#ccc' }},
                grid: { hoverable: true, clickable: true, borderWidth: 0, color: '#ccc' },
                tooltip: true,
                tooltipOpts: { content: '%x.0 is %y.4',  defaultTheme: false, shifts: { x: 0, y: -40 } }
              }
            " style="height:240px" >
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="panel no-border">
          <div class="panel-heading">
            <span class="font-bold">Lines</span>
            <small class="block text-muted">Simple usage</small>
          </div>
          <div class="panel-body">
            <div ui-jp="plot" ui-options="
              [
                {
                  data: [[1, 7.5], [2, 7.5], [3, 5.7], [4, 8.9], [5, 10], [6, 7], [7, 9], [8, 13], [9, 7], [10, 6]], 
                  points: { show: true, radius: 4, lineWidth: 3, fillColor: 'rgba(18,147,204,0.3)'}, 
                  lines:  { show: true, lineWidth: 0, fill: 0.5, fillColor: 'rgba(18,147,204,0.3)' }, 
                  color:'#fff'
                }
              ],
              {
                series: { shadowSize: 3 },
                xaxis: { show: true, font: { color: '#ccc' }, position: 'bottom' },
                yaxis:{ show: true, font: { color: '#ccc' }},
                grid: { hoverable: true, clickable: true, borderWidth: 0, color: '#ccc' },
                tooltip: true,
                tooltipOpts: { content: '%x.0 is %y.4',  defaultTheme: false, shifts: { x: 0, y: -40 } }
              }
            " style="height:240px" >
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4">
        <div class="panel no-border">
          <div class="panel-heading">
            <span class="font-bold">Bars</span>
            <small class="block text-muted">Attractive looks</small>
          </div>
          <div class="panel-body">
            <div ui-jp="plot" ui-options="
              [
                { data: [[1, 7.5], [2, 7.5], [3, 5.7], [4, 8.9], [5, 10], [6, 7], [7, 9], [8, 13], [9, 7], [10, 6]] },
                { data: [[1, 4.5], [2, 4.2], [3, 4.5], [4, 4.3], [5, 4.5], [6, 4.7], [7, 4.6], [8, 4.8], [9, 4.6], [10, 4.5]] }
              ], 
              {
                bars: { show: true, fill: true,  barWidth: 0.3, lineWidth: 1, fillColor: { colors: [{ opacity: 0.8 }, { opacity: 1}] } },
                colors: ['#2196f3','#4caf50'],
                series: { shadowSize: 3 },
                xaxis: { show: true, font: { color: '#ccc' }, position: 'bottom' },
                yaxis:{ show: true, font: { color: '#ccc' }},
                grid: { hoverable: true, clickable: true, borderWidth: 0, color: '#ccc' },
                tooltip: true,
                tooltipOpts: { content: '%x.0 is %y.4',  defaultTheme: false, shifts: { x: 0, y: -40 } }
              }
            " style="height:240px" >
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="panel no-border">
          <div class="panel-heading">
            <span class="font-bold">Order Bars</span>
            <small class="block text-muted">With orders</small>
          </div>
          <div class="panel-body">
            <div ui-jp="plot" ui-options="
              [
                { data: [[1, 7.5], [2, 7.5], [3, 5.7], [4, 8.9], [5, 10], [6, 7], [7, 9], [8, 13], [9, 7], [10, 6]] },
                { data: [[1, 4.5], [2, 4.2], [3, 4.5], [4, 4.3], [5, 4.5], [6, 4.7], [7, 4.6], [8, 4.8], [9, 4.6], [10, 4.5]] }
              ], 
              {
                bars: { show: true, fill: true,  barWidth: 0.3, lineWidth: 1, order: 1, fillColor: { colors: [{ opacity: 0.5 }, { opacity: 0.9}] } },
                colors: ['#3f51b5','#2196f3'],
                series: { shadowSize: 3 },
                xaxis: { show: true, font: { color: '#ccc' }, position: 'bottom' },
                yaxis:{ show: true, font: { color: '#ccc' }},
                grid: { hoverable: true, clickable: true, borderWidth: 0, color: '#ccc' },
                tooltip: true,
                tooltipOpts: { content: '%x.0 is %y.4',  defaultTheme: false, shifts: { x: 0, y: -40 } }
              }
            " style="height:240px" >
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="panel no-border">
          <div class="panel-heading">
            <span class="font-bold">Pies</span>
            <small class="block text-muted">Interactive features</small>
          </div>
          <div class="panel-body">
            <div ui-jp="plot" ui-options="
              [{label:'Series 1', data: 45}, {label:'Series 2', data: 5}, {label:'Series 3', data: 30}, {label:'Series 4', data: 20}],
              {
                series: { pie: { show: true, innerRadius: 0.6, stroke: { width: 3 }, label: { show: true, threshold: 0.05 } } },
                colors: ['#3f51b5','#2196f3'],
                grid: { hoverable: true, clickable: true, borderWidth: 0, color: '#ccc' },   
                tooltip: true,
                tooltipOpts: { content: '%s: %p.0%' }
              }
            " style="height:240px"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4">
        <div class="panel no-border">
          <div class="panel-heading">
            <span class="font-bold">Sparklines</span>
            <small class="block text-muted">Small inline charts</small>
          </div>
          <div class="panel-body p-v-lg">
            <span ui-jp="sparkline" ui-options="[70,30], {type:'pie', height:18, sliceColors:['#2196f3','#eaeeea']}" class="sparkline inline"></span>

            <span ui-jp="sparkline" ui-options="[5,6,7,9,9,7,6,5,6,5,4,3,2,4,6,7], {type:'line', height:18, width: 'auto', lineWidth:1, valueSpots:{'0:':'#2196f3'}, lineColor:'#2196f3', spotColor:'#2196f3', fillColor:'', highlightLineColor:'#fff', spotRadius:0}"></span>

            <span ui-jp="sparkline" ui-options="[1,1,0,1,-1,-1,1,-1,0,0,1,1], {type:'tristate', height:18, width: 'auto', type: 'tristate', colorMap: {'-1': '#2196f3', '1': '#3f51b5'}}"></span>

            <span ui-jp="sparkline" ui-options="[10,9,11,10,11,10,12,10,9,10,11], {type:'bar', height:18, barWidth:4, barSpacing:2, barColor:'#2196f3'}">loading...</span>

            <span ui-jp="sparkline" ui-options="[[2,8],[4,6],[6,4],[8,2],[10,0],[8,2],[6,4],[4,6],[2,8]], {type:'bar', height:18, barWidth:4, barSpacing:2, stackedBarColor:['#4caf50', '#f1f2f3']}"></span>
          </div>
        </div>
      </div>
      <div class="col-md-8">
        <div class="panel no-border">
          <div class="panel-heading">
            <span class="font-bold">Easypiecharts</span>
          </div>
          <div class="panel-body">
            <div class="inline">
              <div ui-jp="easyPieChart" ui-options="{
                  percent: 75,
                  lineWidth: 3,
                  trackColor: '#f1f2f3',
                  barColor: '#3f51b5',
                  scaleColor: '#f1f2f3',
                  size: 60,
                  lineCap: 'butt'
                }">
                <div>
                  75%
                </div>
              </div>
            </div>
            <div class="inline">
              <div ui-jp="easyPieChart" ui-options="{
                  percent: 45,
                  lineWidth: 2,
                  trackColor: '#fff',
                  barColor: '#2196f3',
                  scaleColor: '#fff',
                  size: 60,
                  lineCap: 'butt',
                  animate: 3000
                }">
                <div>
                  45%
                </div>
              </div>
            </div>
            <div class="inline">
              <div ui-jp="easyPieChart" ui-options="{
                  percent: 50,
                  lineWidth: 1,
                  trackColor: '#f1f2f3',
                  barColor: '#4caf50',
                  scaleColor: '#fff',
                  size: 60,
                  lineCap: 'butt',
                  rotate: 90
                }">
                <div>
                  50%
                </div>
              </div>
            </div>
            <div class="inline">
              <div ui-jp="easyPieChart" ui-options="{
                  percent: 20,
                  lineWidth: 5,
                  trackColor: '#fff',
                  barColor: '#2196f3',
                  scaleColor: '#fff',
                  size: 60,
                  lineCap: 'butt',
                  color: '#f1f2f3'
                }">
                <div>
                  20%
                </div>
              </div>
            </div>
            <div class="inline">
              <div ui-jp="easyPieChart" ui-options="{
                  percent: 30,
                  lineWidth: 5,
                  trackColor: '#f1f2f3',
                  barColor: '#3f51b5',
                  scaleColor: '#fff',
                  size: 60,
                  lineCap: 'butt',
                  color: '#2196f3'
                }">
                <div class="text-white">
                  30%
                </div>
              </div>
            </div>
            <div class="inline">
              <div ui-jp="easyPieChart" ui-options="{
                  percent:40,
                  lineWidth: 5,
                  trackColor: '#f1f2f3',
                  barColor: '#4caf50',
                  scaleColor: '#fff',
                  size: 60,
                  lineCap: 'butt',
                  color: '#3f51b5',
                  animate: 6000
                }">
                <div class="text-white">
                  40%
                </div>
              </div>
            </div>
            <div class="inline">
              <div ui-jp="easyPieChart" ui-options="{
                  percent:80,
                  lineWidth: 5,
                  trackColor: '#fff',
                  barColor: '#f1f2f3',
                  scaleColor: '#fff',
                  size: 60,
                  lineCap: 'butt',
                  color: '#4caf50'
                }">
                <div class="text-white">
                  80%
                </div>
              </div>
            </div>
            <div class="inline">
              <div ui-jp="easyPieChart" ui-options="{
                  percent: 32,
                  lineWidth: 25,
                  trackColor: '#fff',
                  barColor: '#2196f3',
                  scaleColor: '#fff',
                  size: 60,
                  lineCap: 'butt',
                  rotate: 30,
                  animate: 5000
                }">
                <div class="text-black">
                  32%
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>



          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- / content -->

  <div class="modal fade" id="user" data-backdrop="false">
    <div class="right w-xl bg-white md-whiteframe-z2">
        <div class="box">
    <div class="p p-h-md">
      <a data-dismiss="modal" class="pull-right text-muted-lt text-2x m-t-n inline p-sm">&times;</a>
      <strong>Members</strong>
    </div>
    <div class="box-row">
      <div class="box-cell">
        <div class="box-inner">
          <div class="list-group no-radius no-borders">
            <a data-toggle="modal" data-target="#chat" data-dismiss="modal"  class="list-group-item p-h-md">
              <img src="images/a1.jpg" class="pull-left w-40 m-r img-circle">
              <div class="clear">
                <span class="font-bold block">Jonathan Doe</span>
                <span class="clear text-ellipsis text-xs">"Hey, What's up"</span>
              </div>
            </a>
            <a data-toggle="modal" data-target="#chat" data-dismiss="modal"  class="list-group-item p-h-md">
              <img src="images/a2.jpg" class="pull-left w-40 m-r img-circle">
              <div class="clear">
                <span class="font-bold block">James Pill</span>
                <span class="clear text-ellipsis text-xs">"Lorem ipsum dolor sit amet onsectetur adipiscing elit"</span>
              </div>
            </a>
            <div class="p-h-md m-t p-v-xs">Work</div>
            <a data-toggle="modal" data-target="#chat" data-dismiss="modal"  class="list-group-item p-h-md">
                <i class="fa fa-circle text-success text-xs m-r-xs"></i>
                <span>Jonathan Morina</span>
            </a>
            <a data-toggle="modal" data-target="#chat" data-dismiss="modal"  class="list-group-item p-h-md">
                <i class="fa fa-circle text-success text-xs m-r-xs"></i>
                <span>Mason Yarnell</span>
            </a>
            <a data-toggle="modal" data-target="#chat" data-dismiss="modal"  class="list-group-item p-h-md">
                <i class="fa fa-circle text-warning text-xs m-r-xs"></i>
                <span>Mike Mcalidek</span>
            </a>
            <a data-toggle="modal" data-target="#chat" data-dismiss="modal"  class="list-group-item p-h-md">
                <i class="fa fa-circle text-muted-lt text-xs m-r-xs"></i>
                <span>Cris Labiso</span>
            </a>
            <a data-toggle="modal" data-target="#chat" data-dismiss="modal"  class="list-group-item p-h-md">
                <i class="fa fa-circle text-muted-lt text-xs m-r-xs"></i>
                <span>Daniel Sandvid</span>
            </a>
            <a data-toggle="modal" data-target="#chat" data-dismiss="modal"  class="list-group-item p-h-md">
                <i class="fa fa-circle text-muted-lt text-xs m-r-xs"></i>
                <span>Helder Oliveira</span>
            </a>
            <a data-toggle="modal" data-target="#chat" data-dismiss="modal"  class="list-group-item p-h-md">
                <i class="fa fa-circle text-muted-lt text-xs m-r-xs"></i>
                <span>Jeff Broderik</span>
            </a>
            <a data-toggle="modal" data-target="#chat" data-dismiss="modal"  class="list-group-item p-h-md">
                <i class="fa fa-circle text-muted-lt text-xs m-r-xs"></i>
                <span>Daniel Sandvid</span>
            </a>
            <a data-toggle="modal" data-target="#chat" data-dismiss="modal"  class="list-group-item p-h-md">
                <i class="fa fa-circle text-muted-lt text-xs m-r-xs"></i>
                <span>Helder Oliveira</span>
            </a>
            <a data-toggle="modal" data-target="#chat" data-dismiss="modal"  class="list-group-item p-h-md">
                <i class="fa fa-circle text-muted-lt text-xs m-r-xs"></i>
                <span>Jeff Broderik</span>
            </a>
            <div class="p-h-md m-t p-v-xs">Partner</div>            
            <a data-toggle="modal" data-target="#chat" data-dismiss="modal"  class="list-group-item p-h-md">
                <i class="fa fa-circle text-success text-xs m-r-xs"></i>
                <span>Mason Yarnell</span>
            </a>
            <a data-toggle="modal" data-target="#chat" data-dismiss="modal"  class="list-group-item p-h-md">
                <i class="fa fa-circle text-warning text-xs m-r-xs"></i>
                <span>Mike Mcalidek</span>
            </a>
            <a data-toggle="modal" data-target="#chat" data-dismiss="modal"  class="list-group-item p-h-md">
                <i class="fa fa-circle text-muted-lt text-xs m-r-xs"></i>
                <span>Cris Labiso</span>
            </a>
            <a data-toggle="modal" data-target="#chat" data-dismiss="modal"  class="list-group-item p-h-md">
                <i class="fa fa-circle text-muted-lt text-xs m-r-xs"></i>
                <span>Jonathan Morina</span>
            </a>
            <a data-toggle="modal" data-target="#chat" data-dismiss="modal"  class="list-group-item p-h-md">
                <i class="fa fa-circle text-muted-lt text-xs m-r-xs"></i>
                <span>Daniel Sandvid</span>
            </a>
            <a data-toggle="modal" data-target="#chat" data-dismiss="modal"  class="list-group-item p-h-md">
                <i class="fa fa-circle text-muted-lt text-xs m-r-xs"></i>
                <span>Helder Oliveira</span>
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="p-h-md p-v">
      <p>Invite People</p>
      <a href class="text-muted"><i class="fa fa-fw fa-twitter"></i> Twitter</a>
      <a href class="text-muted m-h"><i class="fa fa-fw fa-facebook"></i> Facebook</a>
    </div>
  </div>

    </div>
  </div>

  <div class="modal fade" id="chat" data-backdrop="false">
    <div class="right w-xxl bg-white md-whiteframe-z2">
        <div class="box">
    <div class="p p-h-md">
      <a data-dismiss="modal" class="pull-right text-muted-lt text-2x m-t-n inline p-sm">&times;</a>
      <strong>Chat</strong>
    </div>
    <div class="box-row bg-light lt">
      <div class="box-cell">
        <div class="box-inner">
          <div class="p-md">
            <div class="m-b">
              <a href class="pull-left w-40 m-r-sm"><img src="images/a2.jpg" alt="..." class="w-full img-circle"></a>
              <div class="clear">
                <div class="p p-v-sm bg-warning inline r">
                  Hi John, What's up...
                </div>
                <div class="text-muted-lt text-xs m-t-xs"><i class="fa fa-ok text-success"></i> 2 minutes ago</div>
              </div>
            </div>
            <div class="m-b">
              <a href class="pull-right w-40 m-l-sm"><img src="images/a3.jpg" class="w-full img-circle" alt="..."></a>
              <div class="clear text-right">
                <div class="p p-v-sm bg-info inline text-left r">
                  Lorem ipsum dolor soe rooke..
                </div>
                <div class="text-muted-lt text-xs m-t-xs">1 minutes ago</div>
              </div>
            </div>
            <div class="m-b">
              <a href class="pull-left w-40 m-r-sm"><img src="images/a2.jpg" alt="..." class="w-full img-circle"></a>
              <div class="clear">
                <div class="p p-v-sm bg-warning inline r">
                  Good!
                </div>
                <div class="text-muted-lt text-xs m-t-xs"><i class="fa fa-ok text-success"></i> 5 seconds ago</div>
              </div>
            </div>
            <div class="m-b">
              <a href class="pull-right w-40 m-l-sm"><img src="images/a3.jpg" class="w-full img-circle" alt="..."></a>
              <div class="clear text-right">
                <div class="p p-v-sm bg-info inline text-left r">
                  Dlor soe isep..
                </div>
                <div class="text-muted-lt text-xs m-t-xs">Just now</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="p-h-md p-v">
      <a class="pull-left w-32 m-r"><img src="images/a3.jpg" class="w-full img-circle" alt="..."></a>
      <form>
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Say something">
          <span class="input-group-btn">
            <button class="btn btn-default" type="button">SEND</button>
          </span>
        </div>
      </form>
    </div>
  </div>

    </div>
  </div>


</div>

<script src="libs/jquery/jquery/dist/jquery.js"></script>
<script src="libs/jquery/bootstrap/dist/js/bootstrap.js"></script>
<script src="libs/jquery/waves/dist/waves.js"></script>

<script src="scripts/ui-load.js"></script>
<script src="scripts/ui-jp.config.js"></script>
<script src="scripts/ui-jp.js"></script>
<script src="scripts/ui-nav.js"></script>
<script src="scripts/ui-toggle.js"></script>
<script src="scripts/ui-form.js"></script>
<script src="scripts/ui-waves.js"></script>
<script src="scripts/ui-client.js"></script>

</body>
</html>
