<div>

<h1>Footer items</h1>
        <form action="<?php echo site_url('admin/footer_update');?>" method="post">
            
      <div class="form-group" >
          <label for="webSiteTitle">Company Name</label>
          <input type="text" style="width: 45%;" class="form-control" name="foo_name" id="" aria-describedby="websiteTitle" value="<?php echo $hcon['foo_name']; ?>" placeholder="Company Name">
    </div>
    <div class="form-group" >
          <label for="webSiteTitle">Company Address</label>
          <input type="text" style="width: 45%;" class="form-control" name="foo_address" id="" aria-describedby="websiteTitle" value="<?php echo $hcon['foo_address']; ?>" placeholder="Company Address">
    </div>
    <div class="form-group" >
          <label for="webSiteTitle">Mobile No 1</label>
          <input type="text" style="width: 45%;" class="form-control" name="foo_mobile1" id="" aria-describedby="websiteTitle" value="<?php echo $hcon['foo_mobile1']; ?>" placeholder="Mobile No 1">
    </div>
    <div class="form-group" >
          <label for="webSiteTitle">Mobile No 2</label>
          <input type="text" style="width: 45%;" class="form-control" name="foo_mobile2" id="" aria-describedby="websiteTitle" value="<?php echo $hcon['foo_mobile2']; ?>" placeholder="Mobile No 2">
    </div>
    <div class="form-group" >
          <label for="webSiteTitle">Email ID 1</label>
          <input type="text" style="width: 45%;" class="form-control" name="foo_email1" id="" aria-describedby="websiteTitle" value="<?php echo $hcon['foo_email1']; ?>" placeholder="Email ID 1">
    </div>
     <div class="form-group" >
          <label for="webSiteTitle">Email ID 2</label>
          <input type="text" style="width: 45%;" class="form-control" name="foo_email2" id="" aria-describedby="websiteTitle" value="<?php echo $hcon['foo_email2']; ?>" placeholder="Email ID 2">
    </div>
     <div class="form-group" >
          <label for="webSiteTitle">Website</label>
          <input type="text" style="width: 45%;" class="form-control" name="foo_website" id="" aria-describedby="websiteTitle" value="<?php echo $hcon['foo_website']; ?>" placeholder="Website">
    </div>

 <div class="form-group" >
          <label for="webSiteTitle">Others</label>
          <input type="text" style="width: 45%;" class="form-control" name="foo_others" id="" aria-describedby="websiteTitle" value="<?php echo $hcon['foo_others']; ?>" placeholder="Others">
    </div>



            

               <button type="submit"  class="btn btn-info">Submit</button>

        </form>
        </div>