/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertArrayEquals;
import org.junit.Test;

public class SeparateTheDigitsInAnArrayTest {

    @Test
	public void testSetIntersectionSizeAtLeastTwo() throws Exception {
        //Test 1
        int[] want = {1, 3, 2, 5, 8, 3, 7, 7};
        int[] got = SeparateTheDigitsInAnArray.separateDigits(new int[]{13,25,83,77});
        assertArrayEquals(want, got);
        //Test 2
        want = new int[]{7, 1, 3, 9};
        got = SeparateTheDigitsInAnArray.separateDigits(new int[]{7,1,3,9});
        assertArrayEquals(want, got);
	}

}
