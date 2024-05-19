/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertArrayEquals;
import org.junit.Test;

public class RelativeRanksTest {

    @Test
	public void testSetMismatch() throws Exception {
        //Test 1
        String[] want = {"Gold Medal","Silver Medal","Bronze Medal","4","5"};
        String[] got = RelativeRanks.findRelativeRanks( new int[]{5,4,3,2,1} );
        assertArrayEquals(want, got);
        //Test 2
        want = new String[]{"Gold Medal","5","Bronze Medal","Silver Medal","4"};
        got = RelativeRanks.findRelativeRanks( new int[]{10,3,8,9,4} );
        assertArrayEquals(want, got);
	}

}
