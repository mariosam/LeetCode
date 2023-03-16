/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class KthMissingPositiveNumberTest {

    @Test
	public void testKthMissingPositiveNumber() throws Exception {
        //Test 1
        int want = 9;
        int got = KthMissingPositiveNumber.findKthPositive( new int[]{2,3,4,7,11}, 5 );
        assertEquals(want, got);
        //Test 2
        want = 6;
        got = KthMissingPositiveNumber.findKthPositive( new int[]{1,2,3,4}, 2 );
        assertEquals(want, got);
	}

}
