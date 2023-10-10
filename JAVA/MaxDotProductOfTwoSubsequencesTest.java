/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class MaxDotProductOfTwoSubsequencesTest {

    @Test
	public void testMaxDotProductOfTwoSubsequences() throws Exception {
        //Test 1
        int want = 18;
        int got = MaxDotProductOfTwoSubsequences.maxDotProduct( new int[]{2,1,-2,5}, new int[]{3,0,-6} );
        assertEquals(want, got);
        //Test 2
        want = 21;
        got = MaxDotProductOfTwoSubsequences.maxDotProduct( new int[]{3,-2}, new int[]{2,-6,7} );
        assertEquals(want, got);
        //Test 3
        want = -1;
        got = MaxDotProductOfTwoSubsequences.maxDotProduct( new int[]{-1,-1}, new int[]{1,1} );
        assertEquals(want, got);
	}

}
