/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;

import java.util.ArrayList;
import java.util.List;

import org.junit.Test;

public class MinimumHeightTreesTest {

    @Test
	public void testMinimumNumberOfArrowsToBurstBalloons() throws Exception {
        //Test 1
        List<Integer> want = new ArrayList<>();
        want.add(1);
        List<Integer> got =  MinimumHeightTrees.findMinHeightTrees( 4, new int[][]{{1,0},{1,2},{1,3}} );
        assertEquals(want, got);
        //Test 2
        want = new ArrayList<>();
        want.add(3);
        want.add(4);
        got =  MinimumHeightTrees.findMinHeightTrees( 6, new int[][]{{3,0},{3,1},{3,2},{3,4},{5,4}} );
        assertEquals(want, got);
	}

}
