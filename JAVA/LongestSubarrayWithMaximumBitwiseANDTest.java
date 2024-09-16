/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class LongestSubarrayWithMaximumBitwiseANDTest {

    @Test
	public void testLongestSubarrayWithMaximumBitwiseAND() throws Exception {
        //Test 1
        int want = 2;
        int got = LongestSubarrayWithMaximumBitwiseAND.longestSubarray( new int[]{1,2,3,3,2,2} );
        assertEquals(want, got);
        //Test 2
        want = 1;
        got = LongestSubarrayWithMaximumBitwiseAND.longestSubarray( new int[]{1,2,3,4} );
        assertEquals(want, got);
	}

}
