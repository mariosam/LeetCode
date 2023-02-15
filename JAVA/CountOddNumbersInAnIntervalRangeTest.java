/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class CountOddNumbersInAnIntervalRangeTest {

    @Test
	public void testCountOddNumbersInAnIntervalRange() throws Exception {
        //Test 1
        int want = 3;
        int got = CountOddNumbersInAnIntervalRange.countOdds( 3, 7 );
        assertEquals(want, got);
        //Test 2
        want = 1;
        got = CountOddNumbersInAnIntervalRange.countOdds( 8, 10 );
        assertEquals(want, got);
        //Test 3
        want = 86213013;
        got = CountOddNumbersInAnIntervalRange.countOdds( 798273637, 970699661 );
        assertEquals(want, got);
        //Test 4
        want = 5;
        got = CountOddNumbersInAnIntervalRange.countOdds( 0, 10 );
        assertEquals(want, got);
	}

}
