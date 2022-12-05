/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertArrayEquals;
import org.junit.Test;

public class PlusOneTest {

    @Test
	public void testPlusOne() throws Exception {
        //Test 1
        int[] want = {1,2,4};
        int[] got = PlusOne.plusOne( new int[]{1,2,3} );
        assertArrayEquals(want, got);
        //Test 2
        want = new int[]{4,3,2,2};
        got = PlusOne.plusOne( new int[]{4,3,2,1} );
        assertArrayEquals(want, got);
        //Test 3
        want = new int[]{1,0};
        got = PlusOne.plusOne( new int[]{9} );
        assertArrayEquals(want, got);
        //Test 4
        want = new int[]{5,0,0,0};
        got = PlusOne.plusOne( new int[]{4,9,9,9} );
        assertArrayEquals(want, got);
        //Test 5
        want = new int[]{7,2,8,5,0,9,1,2,9,5,3,6,6,7,3,2,8,4,3,7,9,5,7,7,4,7,4,9,4,7,0,1,1,1,7,4,0,0,7};
        got = PlusOne.plusOne( new int[]{7,2,8,5,0,9,1,2,9,5,3,6,6,7,3,2,8,4,3,7,9,5,7,7,4,7,4,9,4,7,0,1,1,1,7,4,0,0,6} );
        assertArrayEquals(want, got);
        //Test 6
        want = new int[]{1,0,0,0};
        got = PlusOne.plusOne( new int[]{9,9,9} );
        assertArrayEquals(want, got);
	}

}
