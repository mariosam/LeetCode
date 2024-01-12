/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class AssignCookiesTest {

    @Test
	public void testAssignCookies() throws Exception {
        //Test 1
        int want = 1;
        int got = AssignCookies.findContentChildren( new int[]{1,2,3}, new int[]{1,1} );
        assertEquals(want, got);
        //Test 2
        want = 2;
        got = AssignCookies.findContentChildren( new int[]{1,2}, new int[]{1,2,3} );
        assertEquals(want, got);
	}

}
