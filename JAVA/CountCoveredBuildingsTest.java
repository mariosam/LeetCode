/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class CountCoveredBuildingsTest {

    @Test
	public void testContinuousSubarrays() throws Exception {
        //Test 1
        long want = 1;
        long got =  CountCoveredBuildings.countCoveredBuildings( 3, new int[][]{{1,2},{2,2},{3,2},{2,1},{2,3}} );
        assertEquals(want, got);
        //Test 2
        want = 0;
        got =  CountCoveredBuildings.countCoveredBuildings( 3, new int[][]{{1,1},{1,2},{2,1},{2,2}} );
        assertEquals(want, got);
        //Test 3
        want = 1;
        got =  CountCoveredBuildings.countCoveredBuildings( 5, new int[][]{{1,3},{3,2},{3,3},{3,5},{5,3}} );
        assertEquals(want, got);
	}

}
