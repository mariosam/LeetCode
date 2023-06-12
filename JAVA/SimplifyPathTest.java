/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class SimplifyPathTest {

    @Test
	public void testSimplifyPath() throws Exception {
        //Test 1
        String want = "/home";
        String got = SimplifyPath.simplifyPath( "/home/" );
        assertEquals(want, got);
        //Test 2
        want = "/";
        got = SimplifyPath.simplifyPath( "/../" );
        assertEquals(want, got);
        //Test 3
        want = "/home/foo";
        got = SimplifyPath.simplifyPath( "/home//foo/" );
        assertEquals(want, got);
	}

}
