/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class BinarySearchTest {

    @Test
	public void testBinarySearch() throws Exception {
        //Test 1
        int want = 4;
        int got = BinarySearch.search( new int[]{-1, 0, 3, 5, 9, 12}, 9 );
        assertEquals(want, got);
        //Test 2
        want = -1;
        got = BinarySearch.search( new int[]{-1, 0, 3, 5, 9, 12}, 2 );
        assertEquals(want, got);
        //Test 3
        want = 0;
        got = BinarySearch.search( new int[]{5}, 5 );
        assertEquals(want, got);
	}

}
