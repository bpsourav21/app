 <div class="form-group">               
                 

<h1>Show Gallery Edit List</h1>
<div class="table-responsive">
  <div class="table table-bordered">
      <table  class="table table-bordered" style="width: 100%; text-align: center;" >
        <thead>      
           <tr class="bg-primary ">   
              <th>ID</th>       
              <th>Gallery Title</th>
              <th>Gallery Photo</th>
              <th>Gallery Content</th>
              <th>Action</th>       
            </tr>
        </thead>  
         
         
        <tbody>

      

          <?php foreach ($glists as $row){ ?>
          <tr class="text-info">  
              <td><?php echo $row['id'];?></td>             
              <td><?php echo $row['gtitle']; ?></td>
              <td><img src="<?php echo base_url().'assets/content/'.$row['gphoto'];?>" alt="photo.jpg" width="100px"/></td>
              <td><?php echo $row['gcontent'] ;?></td>
              <td><a class="btn btn-warning btn-sm" href="<?php echo site_url('admin/show_gallery_edit').'/'. $row['id'];?>">Edit</a>
              <a class="btn btn-warning btn-sm" href="<?php echo site_url('admin/gallery_delete').'/'. $row['id'];?>">Delete</a></td>
          
          </tr>

          <?php } ?>


        </tbody> 
      </table>

      
        
    </div>  
</div>
              


                <form enctype="multipart/form-data" action="<?php echo site_url('admin/gallery_insert');?>" method="post">
              <div class="form-group" >
                    <label for="memeber">Gallery Title</label>
                    <input type="text" style="width: 23%;" class="form-control" name="gtitle" id="" required aria-describedby="websiteTitle" value="" placeholder="Gallery Title">
              </div>

              <div class="form-group" >
                    <label for="memeber">Gallery Content</label>
                    <!-- <input type="text" style="width: 45%;" class="form-control" name="gcontent" id="" required aria-describedby="websiteTitle" value="" placeholder="Gallery Content"> -->
                    <textarea name="gcontent" placeholder="Gallery Content" required="" cols="30" rows="5"></textarea>
              </div>
              <div class="form-group" >
                    <label for="memeber">Gallery Photo</label>
                    <input type="file"  name="userfile">
              </div>
               <button type="submit"  class="btn btn-primary">Submit</button>
              <!--  <button><a class="btn btn-warning" href="<?php// echo site_url();?>">Edit</a></but ton>  -->
        </form> 






                </div>