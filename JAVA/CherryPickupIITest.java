/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class CherryPickupIITest {

    @Test
	public void testClimbingStairs() throws Exception {
        //Test 1
        int want = 24;
        int got = CherryPickupII.cherryPickup( new int[][] {{3,1,1},{2,5,1},{1,5,5},{2,1,1}} );
        assertEquals(want, got);
        //Test 2
        want = 28;
        got = CherryPickupII.cherryPickup( new int[][] {{1,0,0,0,0,0,1},{2,0,0,0,0,3,0},{2,0,9,0,0,0,0},{0,3,0,5,4,0,0},{1,0,2,3,0,0,6}} );
        assertEquals(want, got);
	}

}
