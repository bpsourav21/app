<div class="form-group">
<h1>Show Gallery Edit</h1>
<!-- birth form  start-->
         
         <form enctype="multipart/form-data" action="<?php echo site_url('admin/show_gallery_update').'/'.$galleryinfos['id']; ?>" method="Post">

              <div class="form-group" >
                    <label for="memeber">Gallery Title</label>
                    <input type="text" style="width: 45%;" class="form-control" name="gtitle" id="" aria-describedby="websiteTitle" value="<?php echo $galleryinfos['gtitle'];?>" placeholder="Title">
              </div>

              <div class="form-group" >
                    <label for="memeber">Gallery Content</label>
                    <input type="text" style="width: 45%; height: 40px;" class="form-control" name="gcontent" id="" aria-describedby="websiteTitle" value="<?php echo $galleryinfos['gcontent'];?>" placeholder="Description">
              </div>
             
               <div class="form-group" >
                    <label for="memeber">Gallery Photo</label>
                    <input type="file"  name="userfile">
              </div>
           
              <div class="form-group" >
            <button type="submit"  class="btn btn-primary">Submit</button>
             </div>

              <!--  <button><a class="btn btn-warning" href="<?php// echo site_url();?>">Edit</a></but ton>  -->
        </form> 
      </div>