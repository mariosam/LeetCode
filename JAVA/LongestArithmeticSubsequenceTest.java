/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class LongestArithmeticSubsequenceTest {

    @Test
	public void testLongestArithmeticSubsequence() throws Exception {
        //Test 1
        int want = 4;
        int got = LongestArithmeticSubsequence.longestArithSeqLength( new int[]{3,6,9,12} );
        assertEquals(want, got);
        //Test 2
        want = 3;
        got = LongestArithmeticSubsequence.longestArithSeqLength( new int[]{9,4,7,2,10} );
        assertEquals(want, got);
        //Test 3
        want = 4;
        got = LongestArithmeticSubsequence.longestArithSeqLength( new int[]{20,1,15,3,10,5,8} );
        assertEquals(want, got);
	}

}
