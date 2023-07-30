/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertArrayEquals;
import org.junit.Test;

public class KRadiusSubarrayAveragesTest {

    @Test
	public void testKRadiusSubarrayAverages() throws Exception {
        //Test 1
        int[] want = {-1,-1,-1,5,4,4,-1,-1,-1};
        int[] got = KRadiusSubarrayAverages.getAverages( new int[]{7,4,3,9,1,8,5,2,6}, 3 );
        assertArrayEquals(want, got);
        //Test 2
        want = new int[]{100000};
        got = KRadiusSubarrayAverages.getAverages( new int[]{100000}, 0 );
        assertArrayEquals(want, got);
        //Test 3
        want = new int[]{-1};
        got = KRadiusSubarrayAverages.getAverages( new int[]{8}, 100000 );
        assertArrayEquals(want, got);
	}

}
