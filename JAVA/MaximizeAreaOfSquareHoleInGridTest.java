/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class MaximizeAreaOfSquareHoleInGridTest {

    @Test
	public void testMaximizeAreaOfSquareHoleInGrid() throws Exception {
        //Test 1
        long want = 4;
        long got = MaximizeAreaOfSquareHoleInGrid.maximizeSquareHoleArea( 2, 1, new int[]{2,3}, new int[]{2} );
        assertEquals(want, got);
        //Test 2
        want = 4;
        got = MaximizeAreaOfSquareHoleInGrid.maximizeSquareHoleArea( 2, 1, new int[]{2,3}, new int[]{2} );
        assertEquals(want, got);
        //Test 3
        want = 4;
        got = MaximizeAreaOfSquareHoleInGrid.maximizeSquareHoleArea( 2, 3, new int[]{2,3}, new int[]{2,4} );
        assertEquals(want, got);
	}

}
