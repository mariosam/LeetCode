/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class SeparateSquaresITest {

    @Test
	public void testSeparateSquaresI() throws Exception {
        //Test 1
        double want = 1.00000;
        double got = SeparateSquaresI.separateSquares( new int[][]{{0,0,1},{2,2,1}} );
        assertEquals(want, got, 0.00001);
        //Test 2
        want = 1.16667;
        got = SeparateSquaresI.separateSquares( new int[][]{{0,0,2},{1,1,1}} );
        assertEquals(want, got, 0.00001);
	}

}
