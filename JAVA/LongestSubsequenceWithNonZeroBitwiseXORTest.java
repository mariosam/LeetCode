/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class LongestSubsequenceWithNonZeroBitwiseXORTest {

    @Test
	public void testLongestSubsequenceWithNonZeroBitwiseXOR() throws Exception {
        //Test 1
        int want = 2;
        int got = LongestSubsequenceWithNonZeroBitwiseXOR.longestSubsequence( new int[]{1,2,3} );
        assertEquals(want, got);
        //Test 2
        want = 3;
        got = LongestSubsequenceWithNonZeroBitwiseXOR.longestSubsequence( new int[]{2,3,4} );
        assertEquals(want, got);
	}

}
