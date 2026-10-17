/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;

import java.util.Arrays;

import org.junit.Test;

public class ApplyOperationsOnArrayToMaximizeSumOfSquaresTest {

    @Test
	public void testApplyOperationsOnArrayToMaximizeSumOfSquares() throws Exception {
        //Test 1
        int want = 261;
        int got = ApplyOperationsOnArrayToMaximizeSumOfSquares.maxSum( Arrays.asList(2,6,5,8), 2 );
        assertEquals(want, got);
        //Test 2
        want = 90;
        got = ApplyOperationsOnArrayToMaximizeSumOfSquares.maxSum( Arrays.asList(4,5,4,7), 3 );
        assertEquals(want, got);
	}

}
