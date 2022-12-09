/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertArrayEquals;
import org.junit.Test;

public class MergeSortedArrayTest {

    @Test
	public void testMergeSortedArray() throws Exception {
        //Test 1
        int[] want = {1,2,2,3,5,6};
        int[] got = MergeSortedArray.merge( new int[]{1,2,3,0,0,0}, 3, new int[]{2,5,6}, 3 );
        assertArrayEquals(want, got);
        //Test 2
        want = new int[]{1};
        got = MergeSortedArray.merge( new int[]{1}, 1, new int[]{}, 0 );
        assertArrayEquals(want, got);
        //Test 3
        want = new int[]{1};
        got = MergeSortedArray.merge( new int[]{}, 0, new int[]{1}, 1 );
        assertArrayEquals(want, got);
        //Test 4
        want = new int[]{1,2,3,4,5,6};
        got = MergeSortedArray.merge( new int[]{4,0,0,0,0,0}, 1, new int[]{1,2,3,5,6}, 5 );
        assertArrayEquals(want, got);
        //Test 5
        want = new int[]{1,2,3,4,5,6};
        got = MergeSortedArray.merge( new int[]{1,2,4,5,6,0}, 5, new int[]{3}, 1 );
        assertArrayEquals(want, got);
	}

}
