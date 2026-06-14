/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class LeftAndRightSumDifferencesTest {

    @Test
	public void testLeftRightDifference() throws Exception {
        //Test 1
        int[] want = {15,1,11,22};
        int[] got = LeftAndRightSumDifferences.leftRightDifference( new int[]{10,4,8,3} );
        assertEquals(java.util.Arrays.toString(want), java.util.Arrays.toString(got));
        //Test 2
        want = new int[] {0};
        got = LeftAndRightSumDifferences.leftRightDifference( new int[]{1} );
        assertEquals(java.util.Arrays.toString(want), java.util.Arrays.toString(got));
	}

}
