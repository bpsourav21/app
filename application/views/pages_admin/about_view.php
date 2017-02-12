<div>
<h1>About Section</h1>
<form action="<?php echo site_url('admin/about_update'); ?>" method="post">
              <div class="form-group" >
                    <label>About Title </label>
                    <input type="text" style="width: 45%;" class="form-control" name="about_sec_title" id="" aria-describedby="websiteTitle" value="<?php echo $hcon['about_sec_title']; ?>" placeholder="about Section Title">
              </div>
            
              <!-- <div class="form-group" >
                    <label>About Section Image 1</label>
                    <input type="text" style="width: 45%;" class="form-control" name="about_con_img1" id="" aria-describedby="websiteTitle" value="<?php echo $hcon['about_con_img1']; ?>" placeholder="About Section Image 1">
              </div> -->

            <!--   <div class="form-group" >
                    <label>About Section Image 1</label>
                    <input type="file" style="width: 45%;" class="form-controls" name="userfile" >
                    <input  type="submit" style="width: 45%;" class="form-controls" name="submit" value="Upload Image" >
              </div> -->
 <div class="form-group" >
                    <label>About Section Title 1</label>
                    <input type="text" style="width: 45%;" class="form-control" name="about_con_title1" id="" aria-describedby="websiteTitle" value="<?php echo $hcon['about_con_title1']; ?>" placeholder="About Section Title 1">
              </div>
                <div class="form-group" >
                    <label>About Section Discription 1</label>
                    <input type="text" style="width: 45%;" class="form-control" name="about_con_dsc1" id="" aria-describedby="websiteTitle" value="<?php echo $hcon['about_con_dsc1']; ?>" placeholder="About Section Discription 1">
              </div>
               <div class="form-group" >
                    <label>About Section Image 2</label>
                    <input type="text" style="width: 45%;" class="form-control" name="about_con_img2" id="" aria-describedby="websiteTitle" value="<?php echo $hcon['about_con_img2']; ?>" placeholder="About Section Image 2">
              </div>

   <div class="form-group" >
                    <label>About Section Title 2</label>
                    <input type="text" style="width: 45%;" class="form-control" name="about_con_title2" id="" aria-describedby="websiteTitle" value="<?php echo $hcon['about_con_title2']; ?>" placeholder="About Section Title 2">
              </div>
              <div class="form-group" >
                    <label>About Section Discription 2</label>
                    <input type="text" style="width: 45%;" class="form-control" name="about_con_dsc2" id="" aria-describedby="websiteTitle" value="<?php echo $hcon['about_con_dsc2']; ?>" placeholder="About Section Discription 2">
              </div>
               <div class="form-group" >
                    <label>About Section Image 3</label>
                    <input type="text" style="width: 45%;" class="form-control" name="about_con_img3" id="" aria-describedby="websiteTitle" value="<?php echo $hcon['about_con_img3']; ?>" placeholder="About Section Image 3">
              </div>

  <div class="form-group" >
                    <label>About Section Title 3</label>
                    <input type="text" style="width: 45%;" class="form-control" name="about_con_title3" id="" aria-describedby="websiteTitle" value="<?php echo $hcon['about_con_title3']; ?>" placeholder="About Section Title 3">
              </div>
              <div class="form-group" >
                    <label>About Section Discription 3</label>
                    <input type="text" style="width: 45%;" class="form-control" name="about_con_dsc3" id="" aria-describedby="websiteTitle" value="<?php echo $hcon['about_con_dsc3']; ?>" placeholder="About Section Discription 3">
              </div>
               <div class="form-group" >
                    <label>About Section Image 4</label>
                    <input type="text" style="width: 45%;" class="form-control" name="about_con_img4" id="" aria-describedby="websiteTitle" value="<?php echo $hcon['about_con_img4']; ?>" placeholder="About Section Image 4">
              </div>

  <div class="form-group" >
                    <label>About Section Title 4</label>
                    <input type="text" style="width: 45%;" class="form-control" name="about_con_title4" id="" aria-describedby="websiteTitle" value="<?php echo $hcon['about_con_title4']; ?>" placeholder="About Section Title 4">
              </div>
              <div class="form-group" >
                    <label>About Section Discription 4</label>
                    <input type="text" style="width: 45%;" class="form-control" name="about_con_dsc4" id="" aria-describedby="websiteTitle" value="<?php echo $hcon['about_con_dsc4']; ?>" placeholder="About Section Discription 4">
              </div>

               <button type="submit"  class="btn btn-info">Submit</button>
               
        </form>
     <h1>Aboout Section Image </h1>
        <form action="<?php echo site_url('admin/about_image_update'); ?>" method="post" enctype="multipart/form-data">
    <div class="form-group" >
            <label>About Section Image 1</label>
            <input type="file" style="width: 45%;" class="form-controls" name="userfile1" >
      </div>
       <div class="form-group" >
            <label>About Section Image 2</label>
            <input type="file" style="width: 45%;" class="form-controls" name="userfile2" >
      </div>
       <div class="form-group" >
            <label>About Section Image 3</label>
            <input type="file" style="width: 45%;" class="form-controls" name="userfile3" >
      </div>
       <div class="form-group" >
            <label>About Section Image 4</label>
            <input type="file" style="width: 45%;" class="form-controls" name="userfile4" >
      </div>
       <div class="form-group" >
  
            <input  type="submit" style="width: 20%;" class="form-controls" name="submit" value="Upload Image" >
      </div>
</form>
        </div>