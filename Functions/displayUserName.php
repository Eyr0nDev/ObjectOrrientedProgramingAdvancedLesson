<?php

function displayUserName(User $user):void
{
    echo 'connecté en tant que : '.$user->getDisplayName();
}
