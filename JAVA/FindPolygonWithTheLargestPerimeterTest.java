/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class FindPolygonWithTheLargestPerimeterTest {

    @Test
	public void testFindPolygonWithTheLargestPerimeter() throws Exception {
        //Test 1
        long want = 15;
        long got = FindPolygonWithTheLargestPerimeter.largestPerimeter( new int[]{5,5,5} );
        assertEquals(want, got);
        //Test 2
        want = 12;
        got = FindPolygonWithTheLargestPerimeter.largestPerimeter( new int[]{1,12,1,2,5,50,3} );
        assertEquals(want, got);
        //Test 3
        want = -1;
        got = FindPolygonWithTheLargestPerimeter.largestPerimeter( new int[]{5,5,50} );
        assertEquals(want, got);
	}

}
