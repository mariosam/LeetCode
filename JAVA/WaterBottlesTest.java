/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class WaterBottlesTest {

    @Test
	public void testWaterBottles() throws Exception {
        //Test 1
        int want = 13;
        int got = WaterBottles.numWaterBottles( 9, 3 );
        assertEquals(want, got);
        //Test 2
        want = 19;
        got = WaterBottles.numWaterBottles( 15, 4 );
        assertEquals(want, got);
	}

}
