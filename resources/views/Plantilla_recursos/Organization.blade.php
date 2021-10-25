<!DOCTYPE html>
<html lang="en">
<head>
  
  <meta charset="utf-8">
  <meta name="description" content="Miminium Admin Template v.1">
  <meta name="author" content="Isna Nur Azis">
  <meta name="keyword" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Miminium</title>
  <!-- start: Css -->
  <link rel="stylesheet" type="text/css" href="asset/css/bootstrap.min.css">
  <!-- plugins -->
  <link rel="stylesheet" type="text/css" href="asset/css/plugins/font-awesome.min.css"/>
  <link rel="stylesheet" type="text/css" href="asset/css/plugins/handsontable.full.min.css"/>
  <link rel="stylesheet" type="text/css" href="asset/css/plugins/animate.min.css"/>
  <link href="asset/css/style.css" rel="stylesheet">
  <!-- end: Css -->
  <link rel="shortcut icon" href="asset/img/logomi.png">
</head>
<body id="mimin" class="dashboard">
      <div class="container-fluid mimin-wrapper">
          <!-- start: Content -->
            <div id="content">
               
              <div class="col-md-12 top-20 padding-0">
                <div class="col-md-12">
                  <div class="panel">
                    
                    <div class="panel-body">
                      <div class="responsive-table">
                        <div id="basic_example"></div>
                      </div>
                  </div>
                </div>
              </div>  
              </div>
            </div>
          <!-- end: content -->
      </div>
<!-- start: Javascript -->
<script src="asset/js/jquery.min.js"></script>
<script src="asset/js/jquery.ui.min.js"></script>
<script src="asset/js/bootstrap.min.js"></script>
<!-- plugins -->
<script src="asset/js/plugins/moment.min.js"></script>
<script src="asset/js/plugins/handsontable.full.min.js"></script>
<script src="asset/js/plugins/jquery.nicescroll.js"></script>
<!-- custom -->
<script src="asset/js/main.js"></script>
<script type="text/javascript">
  $(document).ready(function () {
  var container = document.getElementById('basic_example');
  var data = function () {
   return Handsontable.helper.createSpreadsheetData(100, 12);
  };
  var hot = new Handsontable(container, {
    data: data(),
    height: 396,
    colHeaders: true,
    rowHeaders: true,
    stretchH: 'all',
    columnSorting: true,
    contextMenu: true
  });
});
</script>
<!-- end: Javascript -->
</body>
</html>