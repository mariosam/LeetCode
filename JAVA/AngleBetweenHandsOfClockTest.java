    /** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class AngleBetweenHandsOfClockTest {

    @Test
	public void testAppleRedistributionIntoBoxes() throws Exception {
        //Test 1
        double want = 165.0;
        double got = AngleBetweenHandsOfClock.angleClock(12, 30);
        assertEquals(want, got, 0.0001);
        //Test 2
        want = 75.0;
        got = AngleBetweenHandsOfClock.angleClock(3, 30);
        assertEquals(want, got, 0.0001);
        //Test 3
        want = 7.5;
        got = AngleBetweenHandsOfClock.angleClock(3, 15);
        assertEquals(want, got, 0.0001);
	}

}
