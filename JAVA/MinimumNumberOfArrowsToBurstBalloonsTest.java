/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class MinimumNumberOfArrowsToBurstBalloonsTest {

    @Test
	public void testMinimumNumberOfArrowsToBurstBalloons() throws Exception {
        //Test 1
        int want = 2;
        int got =  MinimumNumberOfArrowsToBurstBalloons.findMinArrowShots( new int[][]{{10,16},{2,8},{1,6},{7,12}} );
        assertEquals(want, got);
        //Test 2
        want = 4;
        got =  MinimumNumberOfArrowsToBurstBalloons.findMinArrowShots( new int[][]{{1,2},{3,4},{5,6},{7,8}} );
        assertEquals(want, got);
        //Test 3
        want = 2;
        got =  MinimumNumberOfArrowsToBurstBalloons.findMinArrowShots( new int[][]{{1,2},{2,3},{3,4},{4,5}} );
        assertEquals(want, got);
	}

}
