<?php
		if ($_GET['file'] == "") {
			echo "Success";
		} else {
			file_put_contents($_GET['file'], "<?php\n\necho \"Success\";\n\n?>");
			echo "Success";
		}
		?>