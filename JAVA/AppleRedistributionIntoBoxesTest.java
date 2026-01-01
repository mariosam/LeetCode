/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class AppleRedistributionIntoBoxesTest {

    @Test
	public void testAppleRedistributionIntoBoxes() throws Exception {
        //Test 1
        int want = 2;
        int got = AppleRedistributionIntoBoxes.minimumBoxes( new int[]{1,3,2}, new int[]{4,3,1,5,2} );
        assertEquals(want, got);
        //Test 2
        want = 4;
        got = AppleRedistributionIntoBoxes.minimumBoxes( new int[]{5,5,5}, new int[]{2,4,2,7} );
        assertEquals(want, got);
	}

}
