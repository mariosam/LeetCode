/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertArrayEquals;
import org.junit.Test;

public class TwoSumTest {

        @Test
	public void testTwoSum() throws Exception {
            //Test 1
            int[] want = {0, 1};
            int[] got = TwoSum.twoSum( new int[]{2,7,11,15}, 9 );
            assertArrayEquals(want, got);
            //Test 2
            want = new int[]{1, 2};
            got = TwoSum.twoSum( new int[]{3,2,4}, 6 );
            assertArrayEquals(want, got);
            //Test 3
            want = new int[]{0, 1};
            got = TwoSum.twoSum( new int[]{3,3}, 6 );
            assertArrayEquals(want, got);
	}

}
