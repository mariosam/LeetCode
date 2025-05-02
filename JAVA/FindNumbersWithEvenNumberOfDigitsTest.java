/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class FindNumbersWithEvenNumberOfDigitsTest {

    @Test
	public void testFindNumbersWithEvenNumberOfDigits() throws Exception {
        //Test 1
        long want = 2;
        long got = FindNumbersWithEvenNumberOfDigits.findNumbers( new int[]{12,345,2,6,7896} );
        assertEquals(want, got);
        //Test 2
        want = 1;
        got = FindNumbersWithEvenNumberOfDigits.findNumbers( new int[]{555,901,482,1771} );
        assertEquals(want, got);
	}

}
