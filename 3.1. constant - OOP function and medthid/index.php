<?php

class techV{
    const TV_CHNEEL = "Watching the tv";
    function tvmessage(){
        return self :: TV_CHNEEL;
    }
}
$tv = new techV();
echo $tv->tvmessage()

?>
