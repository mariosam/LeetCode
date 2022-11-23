
/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class SearchInsertPositionTest {

    @Test
	public void testSearchInsertPosition() throws Exception {
        //Test 1
        int want = 2;
        int got = SearchInsertPosition.searchInsert( new int[]{1,3,5,6}, 5 );
        assertEquals(want, got);
        //Test 2
        want = 1;
        got = SearchInsertPosition.searchInsert( new int[]{1,3,5,6}, 2 );
        assertEquals(want, got);
        //Test 3
        want = 4;
        got = SearchInsertPosition.searchInsert( new int[]{1,3,5,6}, 7 );
        assertEquals(want, got);
	}

}
