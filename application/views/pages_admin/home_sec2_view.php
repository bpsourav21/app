<div>
<h1>Home Section 2</h1>
<form action="<?php echo site_url('admin/home_sec2_update'); ?>" method="post">
              <div class="form-group" >
                    <label>Home Section Title </label>
                    <input type="text" style="width: 45%;" class="form-control" name="Home_sec_title" id="" aria-describedby="websiteTitle" value="<?php echo $hcon['Home_sec_title']; ?>" placeholder="Home Section Title">
              </div>
            
              <!-- <div class="form-group" >
                    <label>Home Content Image 1</label>
                    <input type="text" style="width: 45%;" class="form-control" name="home_con_img1" id="" aria-describedby="websiteTitle" value="<?php echo $hcon['home_con_img1']; ?>" placeholder="Home Content Image 1">
              </div> -->

              <div class="form-group" >
                    <label>Home Content Image 1</label>
                    <input type="file" style="width: 45%;" class="form-controls" name="userfile" >
                   <!--  <input  type="submit" style="width: 45%;" class="form-controls" name="submit" value="Upload Image" > -->
              </div>
 <div class="form-group" >
                    <label>Home Content Title 1</label>
                    <input type="text" style="width: 45%;" class="form-control" name="home_con_title1" id="" aria-describedby="websiteTitle" value="<?php echo $hcon['home_con_title1']; ?>" placeholder="Home Content Title 1">
              </div>
                <div class="form-group" >
                    <label>Home Content Discription 1</label>
                    <input type="text" style="width: 45%;" class="form-control" name="home_con_dsc1" id="" aria-describedby="websiteTitle" value="<?php echo $hcon['home_con_dsc1']; ?>" placeholder="Home Content Discription 1">
              </div>
               <div class="form-group" >
                    <label>Home Content Image 2</label>
                    <input type="text" style="width: 45%;" class="form-control" name="home_con_img2" id="" aria-describedby="websiteTitle" value="<?php echo $hcon['home_con_img2']; ?>" placeholder="Home Content Image 2">
              </div>

   <div class="form-group" >
                    <label>Home Content Title 2</label>
                    <input type="text" style="width: 45%;" class="form-control" name="home_con_title2" id="" aria-describedby="websiteTitle" value="<?php echo $hcon['home_con_title2']; ?>" placeholder="Home Content Title 2">
              </div>
              <div class="form-group" >
                    <label>Home Content Discription 2</label>
                    <input type="text" style="width: 45%;" class="form-control" name="home_con_dsc2" id="" aria-describedby="websiteTitle" value="<?php echo $hcon['home_con_dsc2']; ?>" placeholder="Home Content Discription 2">
              </div>
               <div class="form-group" >
                    <label>Home Content Image 3</label>
                    <input type="text" style="width: 45%;" class="form-control" name="home_con_img3" id="" aria-describedby="websiteTitle" value="<?php echo $hcon['home_con_img3']; ?>" placeholder="Home Content Image 3">
              </div>

  <div class="form-group" >
                    <label>Home Content Title 3</label>
                    <input type="text" style="width: 45%;" class="form-control" name="home_con_title3" id="" aria-describedby="websiteTitle" value="<?php echo $hcon['home_con_title3']; ?>" placeholder="Home Content Title 3">
              </div>
              <div class="form-group" >
                    <label>Home Content Discription 3</label>
                    <input type="text" style="width: 45%;" class="form-control" name="home_con_dsc3" id="" aria-describedby="websiteTitle" value="<?php echo $hcon['home_con_dsc3']; ?>" placeholder="Home Content Discription 3">
              </div>
               <div class="form-group" >
                    <label>Home Content Image 4</label>
                    <input type="text" style="width: 45%;" class="form-control" name="home_con_img4" id="" aria-describedby="websiteTitle" value="<?php echo $hcon['home_con_img4']; ?>" placeholder="Home Content Image 4">
              </div>

  <div class="form-group" >
                    <label>Home Content Title 4</label>
                    <input type="text" style="width: 45%;" class="form-control" name="home_con_title4" id="" aria-describedby="websiteTitle" value="<?php echo $hcon['home_con_title4']; ?>" placeholder="Home Content Title 4">
              </div>
              <div class="form-group" >
                    <label>Home Content Discription 4</label>
                    <input type="text" style="width: 45%;" class="form-control" name="home_con_dsc4" id="" aria-describedby="websiteTitle" value="<?php echo $hcon['home_con_dsc4']; ?>" placeholder="Home Content Discription 4">
              </div>

               <button type="submit"  class="btn btn-info">Submit</button>
               
        </form>
        <form action="<?php echo site_url('admin/image_update'); ?>" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="userfile1" id="userfile">
  <!-- 
    <input type="submit" value="Upload Image" name="submit"> -->
    Select image to upload:
    <input type="file" name="userfile2" id="userfile">
  
    <input type="submit" value="Upload Image" name="submit">
</form>
        </div>