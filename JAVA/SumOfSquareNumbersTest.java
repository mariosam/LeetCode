/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class SumOfSquareNumbersTest {

    @Test
	public void testSumOfSquareNumbers() throws Exception {
        //Test 1
        boolean want = true;
        boolean got = SumOfSquareNumbers.judgeSquareSum( 5 );
        assertEquals(want, got);
        //Test 2
        want = false;
        got = SumOfSquareNumbers.judgeSquareSum( 3 );
        assertEquals(want, got);
	}

}
