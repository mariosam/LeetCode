/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertArrayEquals;
import org.junit.Test;

public class SortAnArrayTest {

    @Test
	public void testSortAnArray() throws Exception {
        //Test 1
        int[] want = {1,2,3,5};
        int[] got = SortAnArray.sortArray( new int[]{5,2,3,1} );
        assertArrayEquals(want, got);
        //Test 2
        want = new int[]{0,0,1,1,2,5};
        got = SortAnArray.sortArray( new int[]{5,1,1,2,0,0} );
        assertArrayEquals(want, got);
	}

}
