<html>
<head>
	<title>Hi Dan</title>
</head>
<body bgcolor="#eee">
	<p>
		<?php
		$xml = simplexml_load_string(file_get_contents("../../note.xml"));
		foreach($xml->children() as $child){
			echo "<p>".$child->getName().": ". $child ."</p>\n\n";
		};
		?>
	</p>
</body>
</html>
