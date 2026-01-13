/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class MaximalRectangleTest {

    @Test
	public void testMaximalRectangle() throws Exception {
        //Test 1
        int want = 6;
        int got = MaximalRectangle.maximalRectangle( new char[][]{{'1','0','1','0','0'},{'1','0','1','1','1'},{'1','1','1','1','1'},{'1','0','0','1','0'}} );
        assertEquals(want, got);
        //Test 2
        want = 0;
        got = MaximalRectangle.maximalRectangle( new char[][]{{'0'}} );
        assertEquals(want, got);
        //Test 3
        want = 1;
        got = MaximalRectangle.maximalRectangle( new char[][]{{'1'}} );
        assertEquals(want, got);
	}

}
