/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class RemoveDuplicatesFromSortedArrayTest {

    @Test
	public void testRemoveDuplicatesFromSortedArray() throws Exception {
        //Test 1
        int want = 2;
        int got = RemoveDuplicatesFromSortedArray.removeDuplicates( new int[]{1,1,2} );
        assertEquals(want, got);
        //Test 2
        want = 5;
        got = RemoveDuplicatesFromSortedArray.removeDuplicates( new int[]{0,0,1,1,1,2,2,3,3,4} );
        assertEquals(want, got);
	}

}
