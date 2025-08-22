/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class CountSquareSubmatricesWithAllOnesTest {

    @Test
	public void testCountSquareSubmatricesWithAllOnes() throws Exception {
        //Test 1
        int want = 15;
        int got = CountSquareSubmatricesWithAllOnes.countSquares( new int[][]{{0,1,1,1},{1,1,1,1},{0,1,1,1}} );
        assertEquals(want, got);
        //Test 2
        want = 7;
        got = CountSquareSubmatricesWithAllOnes.countSquares( new int[][]{{1,0,1},{1,1,0},{1,1,0}} );
        assertEquals(want, got);
	}

}
