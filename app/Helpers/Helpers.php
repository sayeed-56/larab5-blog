<?php
function managePaginationSerial($obj)
{
    $serial=1;
    if($obj->currentPage()>1)
    {
        $serial=$obj->perPage()*($obj->CurrentPage()-1)+1;
    }
    return $serial;
}
