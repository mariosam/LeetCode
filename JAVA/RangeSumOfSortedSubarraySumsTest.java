/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class RangeSumOfSortedSubarraySumsTest {

    @Test
	public void testRangeSumOfSortedSubarraySums() throws Exception {
        //Test 1
        int want = 13;
        int got = RangeSumOfSortedSubarraySums.rangeSum( new int[]{1,2,3,4}, 4, 1, 5 );
        assertEquals(want, got);
        //Test 2
        want = 6;
        got = RangeSumOfSortedSubarraySums.rangeSum( new int[]{1,2,3,4}, 4, 3, 4 );
        assertEquals(want, got);
        //Test 3
        want = 50;
        got = RangeSumOfSortedSubarraySums.rangeSum( new int[]{1,2,3,4}, 4, 1, 10 );
        assertEquals(want, got);
	}

}
