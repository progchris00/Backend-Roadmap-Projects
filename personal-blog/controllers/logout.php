<?php

if ($_SESSION["current_user"]) {
    session_destroy();
    header("Location: /login");
} else {
    header("Location: /login");
}
