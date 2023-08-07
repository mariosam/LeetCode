/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class NonOverlappingIntervalsTest {

    @Test
	public void testNonOverlappingIntervals() throws Exception {
        //Test 1
        long want = 1;
        long got = NonOverlappingIntervals.eraseOverlapIntervals( new int[][]{{1,2},{2,3},{3,4},{1,3}} );
        assertEquals(want, got);
        //Test 2
        want = 2;
        got = NonOverlappingIntervals.eraseOverlapIntervals( new int[][]{{1,2},{1,2},{1,2}} );
        assertEquals(want, got);
        //Test 3
        want = 0;
        got = NonOverlappingIntervals.eraseOverlapIntervals( new int[][]{{1,2},{2,3}} );
        assertEquals(want, got);
	}

}
