<?php
/**
 * @version PHP 8.2.20
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class RemoveSubFoldersFromTheFilesystem {    

    /**
     * @param String[] $folder
     * @return String[]
     */
    function removeSubfolders($folder) {
        sort($folder);
        $res = [$folder[0]];
        $prev = $folder[0];

        for ($i = 1; $i < count($folder); $i++) {
            $s = $folder[$i];
            if (str_starts_with($s, $prev) && substr($s, strlen($prev), 1) === '/') {
                // é subpasta, pula
                continue;
            } else {
                $res[] = $s;
                $prev = $s;
            }
        }

        return $res;
    }

}
