<!DOCTYPE html>
<html lang="en">
<html>
  <head>
    <meta charset="UTF-8">
    <title>EzeTime Status</title>
    <link rel ='shortcut icon' type='image/png' href="inventory.png">
  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
      <style>
  table.GeneratedTable 
  {
    width: 35.6cm;
    background-color: #ffffff;
    border-collapse: collapse;
    border-width: 2px;
    border-color: #000000;
    border-style: dashed;
    color: #000000;
    padding: 10px;

  }

  table.GeneratedTable td, table.GeneratedTable th {
    border-width: 2.5px;
    border-color: #000000;
    border-style: solid;
    padding: 6px;

  }

  table.GeneratedTable thead {
    background-color: #0d7af2;
    font-size: 22px;
  }
  </style>


  </head>
  <body onload= "obj.fetch();"  >
       
		   
       <div class="modal fade" tabindex="-1" role="dialog">
      </div>
      <div>
        <div class="">
<h1>Employee Attendance Status</h1>
          <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title" id="myModalLabel">Add the Employee</h4>
                </div>
                <div class="modal-body">
                  <div class="form-group">
                   <textarea type="text" id="fullname" class="form-control" name="fullname" placeholder="Full Name"></textarea>
                   </div>
                   <div class="form-group">
                   <textarea type="text" id="inout" class="form-control" name="inout" placeholder="In or Out"></textarea>
                   </div>
                      <div class="form-group">
                   <textarea type="text" id="timestamp" class="form-control" name="timestamp" placeholder="Time"></textarea>
                   </div> 
                 </div>
             
              </div>
            </div>
          </div>
        </div>
      </div>
      </div>
  	   <div>
          <table class="GeneratedTable" id="IDTABLE">
            <thead id="this">
              <th align="center" valign="middle">Full Name</th>
              <th align="center" valign="middle">In or Out</th>
              <th align="center" valign="middle">Timestamp</th>
            </thead>
            <tbody id="taskList">
              
            </tbody>

          </table>
          </div>
  	   </div>
     <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
     <script src="ajax.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
     
     
  </body>
</html>


