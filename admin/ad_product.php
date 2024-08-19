<?php
	include 'ad_master.php';
?>
<html>
<body>       
	   <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Add Products </h3>
              <nav aria-label="breadcrumb">
              </nav>
            </div>
            
              <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <form class="forms-sample">
                      <div class="form-group">
                        <label>Product Name</label>
                        <input type="text" class="form-control" placeholder="Product Name">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail3">Price</label>
                        <input type="text" class="form-control" placeholder="Price">
                      </div>
                      <div class="form-group">
                        <label>Stock</label>
                        <input type="text" class="form-control" placeholder="Stock">
                      </div>
					  
                      <div class="form-group">
                        <label>Category</label>
                        <select class="form-control">
						<option>Select Category</option>						
						</select>
                      </div>
					  
                      <div class="form-group">
                        <label>Brand</label>
                        <select class="form-control">
						<option>Select Brand</option>
						<option>Lakme</option>
						</select>
                      </div>
					  
					  
                      
                      <div class="form-group">
                        <label>Image Upload</label>
                        <input type="file">
                        </div>
                      </div>
                      <button type="submit" class="btn btn-primary">Submit</button>
                      <br><br><br><br><br><br>
                    </form>
                  </div>
                </div>
              
             
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
  </body>
  
</html>