/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertArrayEquals;
import org.junit.Test;

public class PartitionArrayAccordingToGivenPivotTest {

    @Test
	public void testPartitionArrayAccordingToGivenPivot() throws Exception {
        //Test 1
        int[] want = new int[]{9,5,3,10,10,12,14};
        int[] got = PartitionArrayAccordingToGivenPivot.pivotArray( new int[]{9,12,5,10,14,3,10}, 10 );
        assertArrayEquals(want, got);
        //Test 2
        want = new int[]{-3,2,4,3};
        got = PartitionArrayAccordingToGivenPivot.pivotArray( new int[]{-3,4,3,2}, 2 );
        assertArrayEquals(want, got);
	}

}
