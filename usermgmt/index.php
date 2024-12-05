<?php include "./header.php";?>
    <div class="form-box">
        <h1>Login user</h1>

    <form action="./login_controller.php" method="POST" name="user_form" >
    <div class="field-group">
        <label for="uname">Username/Email</label>
        <input type="text" id="uname" name="username" value="">
        <span></span>
</div>
<div class="field-group">
        <label for="pwd">Password</label>
        <input type="password" id="pwd" name="password" value="">
        <span></span>
</div>
<button type="submit" name="submit" class="btn">Login </button>

</form>
</div>

<script>
    let uname =jQuery("umane"),
    pwd =jQuery("#pwd"),
    btn =jQuery("btn"),
    btn.on("click", function()
{
    if(uname.val() == '');{
        e.preventDefault();
        uname.next("span").text("password is empty.");
    }
});
    

</script>
<?php include "./footer.php";?>