<!DOCTYPE html>
<html lang="en">
<html>
  <head>
    <meta charset="UTF-8">
    <title>EzeTime Admin</title>
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
<h1>Engagis Employee Database</h1>
          <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title" id="myModalLabel">Add the Employee</h4>
                </div>
                <div class="modal-body">
                  <div class="form-group">
                   <textarea type="text" id="barcode" class="form-control" name="barcode" placeholder="Barcode"></textarea>
                   </div>
                   <div class="form-group">
                   <textarea type="text" id="empfullname" class="form-control" name="empfullname" placeholder="Employee Full Name"></textarea>
                   </div>
                      <div class="form-group">
                   <textarea type="text" id="displayname" class="form-control" name="displayname" placeholder="Display Name"></textarea>
                   </div>
                   <div class="form-group">
                   <textarea type="text" id="email" class="form-control" name="email" placeholder="Email"></textarea>
                   </div>
                  <div class="form-group">
                   <textarea type="text" id="groups" class="form-control" name="groups" placeholder="Groups"></textarea>
                   </div>
                    <div class="form-group">
                   <input type="text" id="office" class="form-control" name="category" placeholder="Office">
                 </div>  
                 </div>
                <div class="modal-footer">
                  <button class="btn btn-primary" name="addtask" onclick="obj.changeContent();"  >Add the Employee</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
        <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
          <div class="modal-dialog" role="document">

            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Edit Employee Details</h4>
              </div>
              <div class="modal-body" id="edithere">
              </div>
                <div class="modal-footer">
                  <button class="btn btn-primary" name="addtask" onclick="obj.update();"  >Save Changes</button>
                </div>
            </div>
          </div>
        </div>
      </div>
  	   <div>
          <table class="GeneratedTable" id="IDTABLE">
            <thead id="this">
              <th align="center" valign="middle">Barcode</th>
              <th align="center" valign="middle">Employee Full Name</th>
              <th align="center" valign="middle">Display Name</th>
              <th align="center" valign="middle">Email</th>
              <th align="center" valign="middle">Groups</th>
              <th align="center" valign="middle">Office</th>
              <th align="center" valign="middle">Actions</th>
              <th hidden></th>
              <th hidden></th>
              <th hidden></th>
            </thead>
            <tbody id="taskList">
              
            </tbody>

          </table>
          </div>
          <button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target="#myModal">
          Add Employee
        </button>
  	   </div>
     <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
     <script src="ajax.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
     
     
  </body>
</html>


