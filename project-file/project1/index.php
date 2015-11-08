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
        //echo "<p>".$xml->children()->getName().": ". $xml->from ."</p>\n\n";
		//echo "<p>".$xml->to->getName().": ". $xml->to . "</p>\n\n";
		//echo "<p>".$xml->heading->getName().": ". $xml->heading . "</p>\n\n";
		//echo "<p>".$xml->body->getName().": ". $xml->body . "</p>\n\n";
		?>
    </p>
  </body>
</html>