/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class CircleAndRectangleOverlappingTest {

    @Test
	public void testCircleAndRectangleOverlapping() throws Exception {
        //Test 1
        boolean want = true;
        boolean got = CircleAndRectangleOverlapping.checkOverlap( 1, 0, 0, 1, -1, 3, 1 );
        assertEquals(want, got);
        //Test 2
        want = false;
        got = CircleAndRectangleOverlapping.checkOverlap( 1, 1, 1, 1, -3, 2, -1 );
        assertEquals(want, got);
        //Test 3
        want = true;
        got = CircleAndRectangleOverlapping.checkOverlap( 1, 0, 0, -1, 0, 0, 1 );
        assertEquals(want, got);
	}

}
