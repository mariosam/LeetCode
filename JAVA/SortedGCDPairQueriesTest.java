/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertArrayEquals;
import org.junit.Test;

public class SortedGCDPairQueriesTest {

    @Test
	public void testSortedGCDPairQueries() throws Exception {
        //Test 1
        int[] want = {1,2,2};
        int[] got = SortedGCDPairQueries.gcdValues( new int[]{2,3,4}, new long[]{0,2,2} );
        assertArrayEquals(want, got);
        //Test 2
        want = new int[]{4,2,1,1};
        got = SortedGCDPairQueries.gcdValues( new int[]{4,4,2,1}, new long[]{5,3,1,0} );
        assertArrayEquals(want, got);
        //Test 3
        want = new int[]{2,2};
        got = SortedGCDPairQueries.gcdValues( new int[]{2,2}, new long[]{0,0} );
        assertArrayEquals(want, got);
	}

}
