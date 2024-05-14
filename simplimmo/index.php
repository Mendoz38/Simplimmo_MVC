<?php

// This index must be unaccessible. This is done via a server configuration (.htaccess)
// Here, we will just redirect the user to the 'public' folder

header('location: public/');
