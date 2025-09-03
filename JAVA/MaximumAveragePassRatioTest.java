/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class MaximumAveragePassRatioTest {

    @Test
	public void testMaximumAveragePassRatio() throws Exception {
        //Test 1
        double want = 0.78333;
        double got = MaximumAveragePassRatio.maxAverageRatio( new int[][]{{1,2},{3,5},{2,2}}, 2 );
        assertEquals(want, got, 1e-5);
        //Test 2
        want = 0.53485;
        got = MaximumAveragePassRatio.maxAverageRatio( new int[][]{{2,4},{3,9},{4,5},{2,10}}, 4 );
        assertEquals(want, got, 1e-5);
	}

}
