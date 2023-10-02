/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class PeakIndexInMountainArrayTest {

    @Test
	public void testPeakIndexInMountainArray() throws Exception {
        //Test 1
        int want = 1;
        int got = PeakIndexInMountainArray.peakIndexInMountainArray( new int[]{0,1,0} );
        assertEquals(want, got);
        //Test 2
        want = 1;
        got = PeakIndexInMountainArray.peakIndexInMountainArray( new int[]{0,2,1,0} );
        assertEquals(want, got);
        //Test 3
        want = 1;
        got = PeakIndexInMountainArray.peakIndexInMountainArray( new int[]{0,10,5,2} );
        assertEquals(want, got);
	}

}
