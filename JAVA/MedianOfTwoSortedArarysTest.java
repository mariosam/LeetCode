/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class MedianOfTwoSortedArraysTest {

    @Test
	public void testMedianOfTwoSortedArrays() throws Exception {
        //Test 1
        double want = 2.00000;
        double got = MedianOfTwoSortedArrays.findMedianSortedArrays( new int[]{1,3}, new int[]{2} );
        assertEquals(want, got, 0);
        //Test 2
        want = 2.50000;
        got = MedianOfTwoSortedArrays.findMedianSortedArrays( new int[]{1,2}, new int[]{3,4} );
        assertEquals(want, got, 0);
	}

}
