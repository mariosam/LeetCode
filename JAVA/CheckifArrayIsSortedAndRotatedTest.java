/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class CheckifArrayIsSortedAndRotatedTest {

    @Test
	public void testCheckifArrayIsSortedAndRotated() throws Exception {
        //Test 1
        boolean want = true;
        boolean got = CheckifArrayIsSortedAndRotated.check( new int[]{3,4,5,1,2} );
        assertEquals(want, got);
        //Test 2
        want = false;
        got = CheckifArrayIsSortedAndRotated.check( new int[]{2,1,3,4} );
        assertEquals(want, got);
        //Test 3
        want = true;
        got = CheckifArrayIsSortedAndRotated.check( new int[]{1,2,3} );
        assertEquals(want, got);
	}

}
