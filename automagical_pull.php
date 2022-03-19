<?php
// Use in the “Post-Receive URLs” section of your GitHub repo.
if ( $_POST['payload'] ) {
   shell_exec('cd ~public_html/stephenskalicky && git pull');
   shell_exec('mv -v ~/public_html/stephenskalicky/_site/* ~/public_html/stephenskalicky/
');
shell_exec('mc -c ~/public_html/stephenskalicky/r_data/* ~/public_html/stephenskalicky/r_data/');

}
