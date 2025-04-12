/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class PartitionEqualSubsetSumTest {

    @Test
	public void testPartitionEqualSubsetSum() throws Exception {
        //Test 1
        boolean want = true;
        boolean got = PartitionEqualSubsetSum.canPartition( new int[]{1,5,11,5} );
        assertEquals(want, got);
        //Test 2
        want = false;
        got = PartitionEqualSubsetSum.canPartition( new int[]{1,2,3,5} );
        assertEquals(want, got);
	}

}
