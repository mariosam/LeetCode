/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class CountNegativeNumbersInSortedMatrixTest {

    @Test
	public void testCountNegativeNumbersInSortedMatrix() throws Exception {
        //Test 1
        int want = 8;
        int got =  CountNegativeNumbersInSortedMatrix.countNegatives( new int[][]{{4,3,2,-1},{3,2,1,-1},{1,1,-1,-2},{-1,-1,-2,-3}} );
        assertEquals(want, got);
        //Test 2
        want = 0;
        got =  CountNegativeNumbersInSortedMatrix.countNegatives( new int[][]{{3,2},{1,0}} );
        assertEquals(want, got);
	}

}
