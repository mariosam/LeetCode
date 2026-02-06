/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class TrionicArrayIITest {

    @Test
	public void testTrionicArrayII() throws Exception {
        //Test 1
        long want = -4;
        long got = TrionicArrayII.maxSumTrionic( new int[]{0,-2,-1,-3,0,2,-1} );
        assertEquals(want, got);
        //Test 2
        want = 14;
        got = TrionicArrayII.maxSumTrionic( new int[]{1,4,2,7} );
        assertEquals(want, got);
	}

}
