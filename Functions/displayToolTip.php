<?php

function displayToolTip(Tooltipable $tooltipable ): void
{
    echo'<div>
            <h3>'.$tooltipable->getTitle().'</h3>
            <p>'.$tooltipable->getDescription().'</p>
         </div>';
}