<?php
function shark(int $pD, int $sD, int $yS, int $sS, bool $d): string {
    return ($pD / $yS) < ($sD / $sS) * ($d ? 2 : 1) ? "Alive!" : "Shark Bait!";
}
