<?php

if (!$TaskID) {
    exit();
}

/*
    Variables: $TaskID, $Info (editable)
    $DeleteTask, $DeleteError (to cancel)
*/

$ret['log'] = [];

$DeleteError = rc_confirmTask($TaskID, $ProjectID, $Info, $ret);
if ($DeleteError) {
    $DeleteTask = true;
}

