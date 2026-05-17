/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;

import org.junit.Test;

public class FindMinimumInRotatedSortedArrayTest {

    @Test
	public void testFindMinimumInRotatedSortedArray() throws Exception {
        //Test 1
        int want = 1;
        int got = FindMinimumInRotatedSortedArray.findMin( new int[]{3,4,5,1,2} );
        assertEquals(want, got);
        //Test 2
        want = 0;
        got = FindMinimumInRotatedSortedArray.findMin( new int[]{4,5,6,7,0,1,2} );
        assertEquals(want, got);
        //Test 3
        want = 11;
        got = FindMinimumInRotatedSortedArray.findMin( new int[]{11,13,15,17} );
        assertEquals(want, got);
	}

}
