/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class MaximumProductOfThreeNumbersTest {

    @Test
	public void testMaximumProduct() throws Exception {
        //Test 1
        int want = 6;
        int got = MaximumProductOfThreeNumbers.maximumProduct(new int[]{1, 2, 3});
        assertEquals(want, got);
        //Test 2
        want = 24;
        got = MaximumProductOfThreeNumbers.maximumProduct(new int[]{1, 2, 3, 4});
        assertEquals(want, got);
        //Test 3
        want = -6;
        got = MaximumProductOfThreeNumbers.maximumProduct(new int[]{-1, -2, -3});
        assertEquals(want, got);
	}

}
