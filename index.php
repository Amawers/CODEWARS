<?php
function findNeedle($haystack)
{
    return "found the needle at position " . array_search("needle", $haystack);
}
findNeedle(["hay", "junk", "hay", "hay", "moreJunk", "needle", "randomJunk"]);
