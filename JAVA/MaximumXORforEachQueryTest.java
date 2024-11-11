/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertArrayEquals;
import org.junit.Test;

public class MaximumXORforEachQueryTest {

    @Test
	public void testMaximumXORforEachQuery() throws Exception {
        //Test 1
        int[] want = new int[] {0,3,2,3};
        int[] got = MaximumXORforEachQuery.getMaximumXor( new int[]{0,1,1,3}, 2 );
        assertArrayEquals(want, got);
        //Test 2
        want = new int[] {5,2,6,5};
        got = MaximumXORforEachQuery.getMaximumXor( new int[]{2,3,4,7}, 3 );
        assertArrayEquals(want, got);
        //Test 3
        want = new int[] {4,3,6,4,6,7};
        got = MaximumXORforEachQuery.getMaximumXor( new int[]{0,1,2,2,5,7}, 3 );
        assertArrayEquals(want, got);
	}

}
