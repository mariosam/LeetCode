/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class LongestArithmeticSubsequenceOfGivenDifferenceTest {

    @Test
	public void testLongestArithmeticSubsequenceOfGivenDifference() throws Exception {
        //Test 1
        int want = 4;
        int got = LongestArithmeticSubsequenceOfGivenDifference.longestSubsequence( new int[]{1,2,3,4}, 1 );
        assertEquals(want, got);
        //Test 2
        want = 1;
        got = LongestArithmeticSubsequenceOfGivenDifference.longestSubsequence( new int[]{1,3,5,7}, 1 );
        assertEquals(want, got);
        //Test 3
        want = 4;
        got = LongestArithmeticSubsequenceOfGivenDifference.longestSubsequence( new int[]{1,5,7,8,5,3,4,2,1}, -2 );
        assertEquals(want, got);
	}

}
