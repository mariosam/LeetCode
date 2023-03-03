/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class ClimbingStairsTest {

    @Test
	public void testClimbingStairs() throws Exception {
        //Test 1
        int want = 3;
        int got = ClimbingStairs.climbStairs( 3 );
        assertEquals(want, got);
        //Test 2
        want = 2;
        got = ClimbingStairs.climbStairs( 2 );
        assertEquals(want, got);
        //Test 3
        want = 1;
        got = ClimbingStairs.climbStairs( 1 );
        assertEquals(want, got);
	}

}
