<!DOCTYPE html>
<html lang="en">
<html>
  <head>
    <meta charset="UTF-8">
    <title>Announcement Manager</title>
    <link rel ='shortcut icon' type='image/png' href="../assets/img/favicon.ico">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
  </head>
  <body onload= "obj.fetch();"  >
       
		   
		   
       <div class="modal fade" tabindex="-1" role="dialog">
      </div>
        <div class="container">
          <h1>Announcement Manager</h1>
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Add Announcement</h4>
              </div>
              <div class="modal-body">
                 <div class="form-group">
                 <input type="text" id="announcement" class="form-control" name="announcement" placeholder="Announcement*" required>
                 </div>
                 <div class="form-group">
                 <textarea type="text" id="description" class="form-control" name="description" placeholder="Description"></textarea>
                  </div>
                  <div class="form-group">
                 <input type="number" id="fontsize" class="form-control" name="fontsize" placeholder="Fontsize">
                 </div>
              </div>
              <div class="modal-footer">
                <button class="btn btn-primary" name="addtask" onclick="obj.changeContent();"  >Add Announcement</button>
              </div>
            </div>
          </div>
        </div>
        <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
          <div class="modal-dialog" role="document">

            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Edit Announcement</h4>
              </div>
              <div class="modal-body" id="edithere">
                
              </div>
                <div class="modal-footer">
                  <button class="btn btn-primary" name="addtask" onclick="obj.update();"  >Save Changes</button>
                </div>
            </div>
          </div>
        </div>
  	   <div>
          
          <table class="table table-hover table-bordered table-responsive" id="IDTABLE">
            <thead>
              <th>ID</th>
              <th>Announcement</th>
              <th>Description</th>
              <th>Font Size</th>
              <th>Actions</th>
              <th hidden></th>
              <th hidden></th>
              <th hidden></th>
            </thead>
            <tbody id="taskList">
              
            </tbody>

          </table>
          </div>
          <button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target="#myModal">
          Add Announcement
        </button>
  	   </div>
     <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
     <script src="ajax.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
     
     
  </body>
</html>


