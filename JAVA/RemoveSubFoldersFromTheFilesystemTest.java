/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;

import java.util.ArrayList;
import java.util.List;

import org.junit.Test;

public class RemoveSubFoldersFromTheFilesystemTest {

    @Test
	public void testRemoveSubFoldersFromTheFilesystem() throws Exception {
        //Test 1
        List<String> want = new ArrayList<>();
        want.add("/a");
        want.add("/c/d");
        want.add("/c/f");
        List<String> got = RemoveSubFoldersFromTheFilesystem.removeSubfolders( new String[] {"/a","/a/b","/c/d","/c/d/e","/c/f"} );
        assertEquals(want, got);
        //Test 2
        want = new ArrayList<>();
        want.add("/a");
        got = RemoveSubFoldersFromTheFilesystem.removeSubfolders( new String[] {"/a","/a/b/c","/a/b/d"} );
        assertEquals(want, got);
        //Test 33
        want = new ArrayList<>();
        want.add("/a/b/c");
        want.add("/a/b/ca");
        want.add("/a/b/d");
        got = RemoveSubFoldersFromTheFilesystem.removeSubfolders( new String[] {"/a/b/c","/a/b/ca","/a/b/d"} );
        assertEquals(want, got);
	}

}
