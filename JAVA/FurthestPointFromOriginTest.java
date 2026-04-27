/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class FurthestPointFromOriginTest {

    @Test
	public void testFurthestPointFromOrigin() throws Exception {
        //Test 1
        int want = 3;
        int got = FurthestPointFromOrigin.furthestDistanceFromOrigin( "L_RL__R" );
        assertEquals(want, got);
        //Test 2
        want = 5;
        got = FurthestPointFromOrigin.furthestDistanceFromOrigin( "_R__LL_" );
        assertEquals(want, got);
        //Test 3
        want = 7;
        got = FurthestPointFromOrigin.furthestDistanceFromOrigin( "_______" );
        assertEquals(want, got);
	}

}
