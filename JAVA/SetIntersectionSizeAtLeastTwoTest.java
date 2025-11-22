/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class SetIntersectionSizeAtLeastTwoTest {

    @Test
	public void testSetIntersectionSizeAtLeastTwo() throws Exception {
        //Test 1
        int want = 5;
        int got = SetIntersectionSizeAtLeastTwo.intersectionSizeTwo( new int[][]{{1,3},{3,7},{8,9}});
        assertEquals(want, got);
        //Test 2
        want = 3;
        got = SetIntersectionSizeAtLeastTwo.intersectionSizeTwo( new int[][]{{1,3},{1,4},{2,5},{3,5}});
        assertEquals(want, got);
        //Test 3
        want = 5;
        got = SetIntersectionSizeAtLeastTwo.intersectionSizeTwo( new int[][]{{1,2},{2,3},{2,4},{4,5}} );
        assertEquals(want, got);
	}

}
