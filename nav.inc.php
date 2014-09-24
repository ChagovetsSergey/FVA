<script>

		var menuitem = 0;
		var timeout	= 500;
		var closetimer	= 0;
		
		function mopen(id)
		{	
			mcancelclosetime();
			
			if(menuitem) menuitem.style.visibility = 'hidden';
				
			menuitem = document.getElementById(id);
			menuitem.style.visibility = 'visible';
		
		}
		
		function mclose()
		{
			if(menuitem) menuitem.style.visibility = 'hidden';
		}
		
		function mclosetime()
		{
			closetimer = window.setTimeout(mclose, timeout);	
		}
		
		function mcancelclosetime()
		{
			if(closetimer)
			{
				window.clearTimeout(closetimer);
				closetimer = null;
			}	
		}


	</script>

<nav>
	<ul id="menu" align="center">
		<li>
			<a href="index.php">�������</a>
		</li>
		<li>
			<a href="neftyanik.php" onmouseover="mopen('m0')" onmouseout="mclosetime()">��������</a>
			<div id="m0" onmouseover="mcancelclosetime()" onmouseout="mclosetime()">
				<a href="http://fva.com.ua/neftyanikSquad.php">������</a>
			</div>
		</li>
		<li>
			<a href="http://fva.com.ua/oblast.php" onmouseover="mopen('m1')" onmouseout="mclosetime()">�������</a>
			<div id="m1" onmouseover="mcancelclosetime()" onmouseout="mclosetime()">
				<a href="http://fva.com.ua/oblast.php">���������</a>
				<a href="oblast-kalendar.php">���������</a>
				<a href="kybok-oblasti.php">�����</a>
			</div>
		</li>
		<li>
			<a href="http://fva.com.ua/rayon.php" onmouseover="mopen('m2')" onmouseout="mclosetime()">�����</a>
			<div id="m2" onmouseover="mcancelclosetime()" onmouseout="mclosetime()">
				<a href="http://fva.com.ua/rayon.php">���������</a>
				<a href="rayon-kalendar.php">���������</a>
				<a href="kubok-rayona.php">�����</a>
			</div>
		</li>
		<li>
			<a href="news.php">�������</a>
		</li>
		<li>
			<a href="contacts.php">��������</a>
		</li>
	</ul>
	<div style="clear:both"></div>
</nav>