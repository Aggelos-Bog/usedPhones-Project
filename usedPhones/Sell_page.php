<?php
        session_start();
        require('header1.php');
        require('msg.php');
?>
<main>
    <div class="adBox">
       <div class="form">
        <form method="post" action="con_Sell_page.php"  onsubmit="return validate_adform();">
                 <h2>Add your ad</h2>
                 <div class="ad_input">
                      <input class="brand" type="text" name="brand" size="25" maxlength="25" placeholder="Brand" />
                 </div>
                 
                 <div class="ad_input">
                      <input class="model" type="text" name="model" size="25" maxlength="25" placeholder="Model"/>
                 </div>
                 <p>Release Date</p>
                 <div class="ad_input">
                      <input class="releaseDate" type="date" name="releaseDate" />
                 </div>
                 <div class="ad_select">
                 <select id="nodes" name="nodes">
                      <option value="-1" style="color:red;" selected="selected" >Nodes</option>
                      <option value="4">4</option>
                      <option value="6">6</option>
                      <option value="8">8</option>
                      <option value="12">12</option>
                 </select>
                 <select id="RAM" name="RAM">
                      <option value="-1" style="color:red;" selected="selected" >RAM</option>
                      <option value="2">2</option>
                      <option value="4">4</option>
                      <option value="8">8</option>
                      <option value="16">16</option>
                      <option value="32">32</option>
                  </select>
                  <select id="OS" name="OS">
                      <option value="-1" style="color:red;" selected="selected" >OS</option>
                      <option value="1">IOS</option>
                      <option value="2">Android</option>
                  </select>
                 </div>
                 <div class="ad_input">
                      <input class="storageSize" type="text" name="storageSize" placeholder="Storage Size"/>
                 </div>
                 <div class="ad_input">
                      <input class="colour" type="text" name="colour" placeholder="Colour"/>
                 </div>
                 
                 <div class="ad_input">
                      <input class="price" type="text" name="price" placeholder="Price"/>
                 </div>
                 <p>Ad Release</p>
                 <div class="ad_input">
                      <input class="adRelease" type="date" name="adRelease" placeholder="Ad Release"/>
                 </div>
                 <div class="ad_input description_input">
                      <input class="description" type="text" name="description" placeholder="Description"/>
                 </div>
                 <button type="Submit">Submit</button>
        </form>
       </div>
    </div>
</main>
<?php
        require('footer.php'); 
?>
<script src="validation.js"></script>