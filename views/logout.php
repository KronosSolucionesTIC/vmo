<?php
session_start(); //Trae la sesion
session_destroy(); //Elimina la sesion
header('location: ../views/login/index.php?logout=true');
