<?php
session_start();
?>
<html>
    <head>

<link rel="stylesheet" href="css/prov.css">
</head>


<div class="left" ondrop="drop(event)" ondragover="allowDrop(event)">
    <div class="side_menu" ondragstart="dragStart(event)" draggable="true" id="dragtarget">
        <ul>
            <div class="side_menu_profile">
                <div class="profile_image"> <img src="img/w.png" >
                    <p><?php echo $_SESSION['name'] ?> </p>
                </div>
            </div>
            <li> <a href="index.html"><i class="fas fa-wallet"></i>home</a> </li>
            <li> <a href="#"><i class="fas fa-truck"></i> about </a> </li>
            <li> <a href="#"><i class="fas fa-cart-plus"></i>programs</a> </li>
            <li> <a href="#"><i class="fas fa-sign-out-alt"></i>Logout</a> </li>
        </ul>
    </div>
</div>
<div class="right" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
<script >
    function dragStart(event) {
    event.dataTransfer.setData("Text", event.target.id)
}

function drop(event) {
    event.preventDefault();
    var data = event.dataTransfer.getData("Text");
    event.target.appendChild(document.getElementById(data));
}

function allowDrop(event) {
    event.preventDefault();
}
</script>

<div>
    <form class="form1">
    
    <table>
     
      <tr>
        <td>
        <label>Date of join</label><br> <br> 
        <input type="date" value="<?php echo $_SESSION['date'] ?>">
    </td>
      
      </tr>
      
      
      <tr>
        <td> <label>Subscription period</label><br><br>
      <input type="text" value="<?php echo $_SESSION['period'] ?>">
      </td>
       
      </tr>
      
      
      <tr>
        <td> <label>Subscription type</label><br><br>
          <input type="text" value="<?php echo $_SESSION['type'] ?>">
           <label for="typesubs"><?php echo $_SESSION['type'] ?></label><br>
    </td>
       
      </tr>
      
      
      <tr>
        <td>  
            
        <label >Personal trainer</label><br><br>
        <select id="trainer" name="trainer">
            <option value="super1">super1</option>
            <option value="super2">super2</option>
        </select>
    </td>
      </tr>
      
      
      <tr>
        <td>  
        <label>Exercise schedule</label><br><br>
        
                    <a href="#" target="_blank">رابط</a> 
    </td>
      </tr>
      
      
      <tr>
        <td> <label>Diet</label><br><br>
            <a href="#" target="_blank">رابط يوتيوب</a> 
        </td>
      </tr>
      <td class="centert">
        <img src="img/edit.png" alt="edit data" width="30" height="30"> <br>
        <a href="#"> edit personal data </a>
    </td>
    <td class="centert">
        <img src="img/email.png" alt="unsubscribe" width="35" height="35"><br>
            <a href="#"> contact us </a> 
        </td>
        <td class="centert" >
            <img src="img/unsub.jpg" alt="unsubscribe" width="30" height="30"><br>
            <a href="#"> unsubscribe </a> 
        </td>

    </table>
     </form>
    </div>
    </body>
    </html>