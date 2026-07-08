/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class RemoveCoveredIntervalsTest {

    @Test
	public void testRemoveCoveredIntervals() throws Exception {
        //Test 1
        int[][] intervals = {{1, 4}, {3, 6}, {2, 8}};
        int want = 2;
        int got = RemoveCoveredIntervals.removeCoveredIntervals(intervals);
        assertEquals(want, got);
        //Test 2
        intervals = new int[][]{{1, 4}, {2, 3}};
        want = 1;
        got = RemoveCoveredIntervals.removeCoveredIntervals(intervals);
        assertEquals(want, got);
	}

}
