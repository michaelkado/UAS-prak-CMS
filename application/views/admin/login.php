   <center>
   <div class="main">   
      <input type="checkbox" id="chk" aria-hidden="true">
            <div class="welcome">
            <form>
               <label for="chk" aria-hidden="true">Welcome</label>
               <h3>silahkan anda melakukan login </h3>
               <h3>dengan user dan password yang benar</h3>
            </form>
         </div>
         <div class="login">
<div id="body">
    <?php
    $attributes = array('autocomplete' => 'off');
    echo form_open_multipart("admin/login/cek_login", $attributes);
    ?>

    <form>
    <?php echo $this->session->flashdata("message");?>
    <label for="chk" aria-hidden="true">Login</label>
        Username: <input type="text" name="cms_user" id="cms_user" required> 
        Password: <input type="password" name="cms_password" id="cms_password" required> 
        <button>Login</button>
    </form>

</div>
</div>
</div>
</center>
