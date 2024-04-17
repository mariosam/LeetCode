/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class TrappingRainWaterTest {

    @Test
	public void testTrappingRainWater() throws Exception {
        //Test 1
        int want = 6;
        int got = TrappingRainWater.trap( new int[]{0,1,0,2,1,0,1,3,2,1,2,1} );
        assertEquals(want, got);
        //Test 2
        want = 9;
        got = TrappingRainWater.trap( new int[]{4,2,0,3,2,5} );
        assertEquals(want, got);
	}

}
