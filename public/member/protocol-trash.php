<!DOCTYPE html>
<html>

<head>
  <title>IACUC Protocol List</title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="datatables/css/datatables.bootstrap4.min.css">
  <link rel="stylesheet" href="css/styles.css" />
  <link rel="stylesheet" href="css/docs.css" />
  <link rel="stylesheet" href="css/scrollbar-custom.css" />
</head>

<body>

  <div class="main" id="protocol_xxx">
    <aside class="sidebar">
      <?php include 'sidebar.php';?>
    </aside>
    <div class="workspace">
      <div class="box-head">
        <header>
            <ul class="nav nav-tabs" id="nav-group" role="tablist">
              <li><span class="head-tab font-weight-bold">Protocol</span></li>
              <li><a id="tab_pend" href="#group_pend" aria-controls="group_pend" class="head-tab nav-item nav-link active" data-toggle="tab" role="tab" aria-selected="true">Pending</a></li>
              <li><a id="tab_acti" href="#group_acti" aria-controls="group_acti" class="head-tab nav-item nav-link" data-toggle="tab" role="tab" aria-selected="false">Active</a></li>
              <li><a id="tab_term" href="#group_term" aria-controls="group_term" class="head-tab nav-item nav-link" data-toggle="tab" role="tab" aria-selected="false">Terminate</a></li>
            </ul>
            
            <div>
              <button class="btn-c material-icons">search</button>
              <button class="btn-c material-icons">notifications</button>
              <button class="btn-c material-icons">person</button>
            </div>
        </header>
      </div>

      <div class="box-pane tab-content" id="nav-groupContent">
        <div id="group_pend" aria-labelledby="tab_pend" role="tabpanel" class="h-100 tab-pane fade show active">
          <?php include 'protocol-pending.php';?>
        </div>
        <div id="group_acti" aria-labelledby="tab_acti" role="tabpanel" class="h-100 tab-pane fade">
          <?php include 'protocol-active.php';?>
        </div>
        <div id="group_term" aria-labelledby="tab_term" role="tabpanel" class="h-100 tab-pane fade">
          <?php include 'protocol-terminate.php';?>
        </div>
      </div>

    </div>
  </div>

  <!-- Site JS -->
  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/script.js"></script>

  <script src="datatables/datatables.min.js"></script>
  <script src="datatables/js/dataTables.bootstrap4.min.js"></script>
  <!-- Site JS -->
  
</body>

</html>