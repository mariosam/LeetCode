/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class LargestNumberTest {

    @Test
	public void testLargestNumber() throws Exception {
        //Test 1
        String want = "210";
        String got = LargestNumber.largestNumber( new int[]{10,2} );
        assertEquals(want, got);
        //Test 2
        want = "9534330";
        got = LargestNumber.largestNumber( new int[]{3,30,34,5,9} );
        assertEquals(want, got);
	}

}
