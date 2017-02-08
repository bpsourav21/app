<div>
<h1>Website Title</h1>
<form action="<?php echo site_url('admin/title_update'); ?>" method="post">
              <div class="form-group" >
                    <label for="webSiteTitle">Title 1</label>
                    <input type="text" style="width: 45%;" class="form-control" name="title1" id="" aria-describedby="websiteTitle" value="<?php echo $hcon['title1']; ?>" placeholder="Website Title 1">
              </div>
              <div class="form-group" >
                    <label for="webSiteTitle">Title 2</label>
                    <input type="text" style="width: 45%;" class="form-control" name="title2" id="" aria-describedby="websiteTitle" value="<?php echo $hcon['title2']; ?>" placeholder="Website Title 2">
              </div>


               <button type="submit"  class="btn btn-info">Submit</button>
               
        </form>

<h1>Menu items</h1>
        <form action="<?php echo site_url('admin/menu_update');?>" method="post">
            
                <div class="form-group" >
                    <label for="webSiteTitle">menu1</label>
                    <input type="text" style="width: 45%;" class="form-control" name="menu1" id="" aria-describedby="websiteTitle" value="<?php echo $hcon['menu1']; ?>" placeholder="Menu">
              </div>
              <div class="form-group" >
                    <label for="webSiteTitle">menu2</label>
                    <input type="text" style="width: 45%;" class="form-control" name="menu2" id="" aria-describedby="websiteTitle" value="<?php echo $hcon['menu2']; ?>" placeholder="Menu">
              </div>
              <div class="form-group" >
                    <label for="webSiteTitle">menu3</label>
                    <input type="text" style="width: 45%;" class="form-control" name="menu3" id="" aria-describedby="websiteTitle" value="<?php echo $hcon['menu3']; ?>" placeholder="Menu">
              </div>
              <div class="form-group" >
                    <label for="webSiteTitle">menu4</label>
                    <input type="text" style="width: 45%;" class="form-control" name="menu4" id="" aria-describedby="websiteTitle" value="<?php echo $hcon['menu4']; ?>" placeholder="Menu">
              </div>
              <div class="form-group" >
                    <label for="webSiteTitle">menu5</label>
                    <input type="text" style="width: 45%;" class="form-control" name="menu5" id="" aria-describedby="websiteTitle" value="<?php echo $hcon['menu5']; ?>" placeholder="Menu">
              </div>
              <div class="form-group" >
                    <label for="webSiteTitle">menu6</label>
                    <input type="text" style="width: 45%;" class="form-control" name="menu6" id="" aria-describedby="websiteTitle" value="<?php echo $hcon['menu6']; ?>" placeholder="Menu">
              </div>
        

               <button type="submit"  class="btn btn-info">Submit</button>

        </form>
        </div>