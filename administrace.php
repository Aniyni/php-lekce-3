<?php
session_start();

if (isset($_SESSION ['loggedIn'])) {
    echo 'PŘIHLÁŠEN';
    }

else {
    echo 'NEPŘIHLÁŠN';
}