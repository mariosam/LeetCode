/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertArrayEquals;

import java.util.ArrayList;
import java.util.List;

import org.junit.Test;

public class RobotCollisionsTest {

    @Test
	public void testRobotCollisions() throws Exception {
        //Test 1
        List<Integer> want = new ArrayList<Integer>();
        want.add(2);
        want.add(17);
        want.add(9);
        want.add(15);
        want.add(10);
        List<Integer> got = RobotCollisions.survivedRobotsHealths( new int[]{5,4,3,2,1}, new int[]{2,17,9,15,10}, "RRRRR" );
        assertArrayEquals(want.toArray(), got.toArray());
        //Test 2
        want = new ArrayList<Integer>();
        want.add(14);
        got = RobotCollisions.survivedRobotsHealths( new int[]{3,5,2,6}, new int[]{10,10,15,12}, "RLRL" );
        assertArrayEquals(want.toArray(), got.toArray());
        //Test 3
        want = new ArrayList<Integer>();
        got = RobotCollisions.survivedRobotsHealths( new int[]{1,2,5,6}, new int[]{10,10,11,11}, "RLRL" );
        assertArrayEquals(want.toArray(), got.toArray());
	}

}
