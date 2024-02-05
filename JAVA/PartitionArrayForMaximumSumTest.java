/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class PartitionArrayForMaximumSumTest {

    @Test
	public void testPartitionArrayForMaximumSum() throws Exception {
        //Test 1
        int want = 84;
        int got = PartitionArrayForMaximumSum.maxSumAfterPartitioning( new int[]{1,15,7,9,2,5,10}, 3 );
        assertEquals(want, got);
        //Test 2
        want = 83;
        got = PartitionArrayForMaximumSum.maxSumAfterPartitioning( new int[]{1,4,1,5,7,3,6,1,9,9,3}, 4 );
        assertEquals(want, got);
        //Test 3
        want = 1;
        got = PartitionArrayForMaximumSum.maxSumAfterPartitioning( new int[]{1}, 1 );
        assertEquals(want, got);
	}

}
