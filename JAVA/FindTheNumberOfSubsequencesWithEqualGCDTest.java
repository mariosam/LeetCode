/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class FindTheNumberOfSubsequencesWithEqualGCDTest {

    @Test
	public void testFindTheNumberOfSubsequencesWithEqualGCD() throws Exception {
        //Test 1
        int want = 10;
        int got = FindTheNumberOfSubsequencesWithEqualGCD.maximumLength( new int[]{1,2,3,4} );
        assertEquals(want, got);
        //Test 2
        want = 2;
        got = FindTheNumberOfSubsequencesWithEqualGCD.maximumLength( new int[]{10,20,30} );
        assertEquals(want, got);
        //Test 3
        want = 50;
        got = FindTheNumberOfSubsequencesWithEqualGCD.maximumLength( new int[]{1,1,1,1} );
        assertEquals(want, got);
	}

}
