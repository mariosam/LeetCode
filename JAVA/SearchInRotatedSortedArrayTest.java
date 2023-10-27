/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class SearchInRotatedSortedArrayTest {

    @Test
	public void testSearchInRotatedSortedArray() throws Exception {
        //Test 1
        int want = 4;
        int got = SearchInRotatedSortedArray.search( new int[]{4,5,6,7,0,1,2}, 0 );
        assertEquals(want, got);
        //Test 2
        want = -1;
        got = SearchInRotatedSortedArray.search( new int[]{4,5,6,7,0,1,2}, 3 );
        assertEquals(want, got);
        //Test 3
        want = -1;
        got = SearchInRotatedSortedArray.search( new int[]{1}, 0 );
        assertEquals(want, got);
	}

}
