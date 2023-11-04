/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertArrayEquals;
import org.junit.Test;

public class FindTheOriginalArrayOfPrefixXorTest {

    @Test
	public void testFindTheOriginalArrayOfPrefixXor() throws Exception {
        //Test 1
        int[] want = new int[]{5,7,2,3,2};
        int[] got = FindTheOriginalArrayOfPrefixXor.findArray( new int[]{5,2,0,3,1} );
        assertArrayEquals(want, got);
        //Test 2
        want = new int[]{13};
        got = FindTheOriginalArrayOfPrefixXor.findArray( new int[]{13} );
        assertArrayEquals(want, got);
	}

}
