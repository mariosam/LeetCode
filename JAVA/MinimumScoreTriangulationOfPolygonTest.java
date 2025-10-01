/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class MinimumScoreTriangulationOfPolygonTest {

    @Test
	public void testMinimumScoreTriangulationOfPolygon() throws Exception {
        //Test 1
        int want = 6;
        int got = MinimumScoreTriangulationOfPolygon.minScoreTriangulation( new int[]{1,2,3} );
        assertEquals(want, got);
        //Test 2
        want = 144;
        got = MinimumScoreTriangulationOfPolygon.minScoreTriangulation( new int[]{3,7,4,5} );
        assertEquals(want, got);
        //Test 3
        want = 13;
        got = MinimumScoreTriangulationOfPolygon.minScoreTriangulation( new int[]{1,3,1,4,1,5} );
        assertEquals(want, got);
	}

}
