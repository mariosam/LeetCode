/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertArrayEquals;
import org.junit.Test;

public class SquaresOfSortedArrayTest {

    @Test
	public void testSquaresOfSortedArray() throws Exception {
        //Test 1
        int[] want = new int[]{0,1,9,16,100};
        int[] got = SquaresOfSortedArray.sortedSquares( new int[]{-4,-1,0,3,10} );
        assertArrayEquals(want, got);
        //Test 2
        want = new int[]{4,9,9,49,121};
        got = SquaresOfSortedArray.sortedSquares( new int[]{-7,-3,2,3,11} );
        assertArrayEquals(want, got);
	}

}
