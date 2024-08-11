/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class MagicSquaresInGridTest {

    @Test
	public void testMagicSquaresInGrid() throws Exception {
        //Test 1
        int want = 1;
        int got = MagicSquaresInGrid.numMagicSquaresInside( new int[][]{{4,3,8,4},{9,5,1,9},{2,7,6,2}} );
        assertEquals(want, got);
        //Test 2
        want = 0;
        got = MagicSquaresInGrid.numMagicSquaresInside( new int[][]{{8}} );
        assertEquals(want, got);
	}

}
