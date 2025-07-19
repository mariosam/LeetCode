<?php
/**
 * @version PHP 8.2.20
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit RemoveSubFoldersFromTheFilesystemTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("RemoveSubFoldersFromTheFilesystem.php");

class RemoveSubFoldersFromTheFilesystemTest extends TestCase {

    public function testRemoveSubFoldersFromTheFilesystem() {
        $obj = new RemoveSubFoldersFromTheFilesystem();
        //Test 1
        $want = ["/a","/c/d","/c/f"];
        $got = $obj->removeSubfolders( ["/a","/a/b","/c/d","/c/d/e","/c/f"] );
        echo "\nTest 1: retornou " . implode($got) . " == esperado: " . implode($want);
        $this->assertEquals($want, $got);
        //Test 2
        $want = ["/a"];
        $got = $obj->removeSubfolders( ["/a","/a/b/c","/a/b/d"] );
        echo "\nTest 2: retornou " . implode($got) . " == esperado: " . implode($want);
        $this->assertEquals($want, $got);
        //Test 3
        $want = ["/a/b/c","/a/b/ca","/a/b/d"];
        $got = $obj->removeSubfolders( ["/a/b/c","/a/b/ca","/a/b/d"] );
        echo "\nTest 3: retornou " . implode($got) . " == esperado: " . implode($want);
        $this->assertEquals($want, $got);
    }
}
