/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class MinimumASCIIDeleteSumForTwoStringsTest {

    @Test
	public void testMinimumASCIIDeleteSumForTwoStrings() throws Exception {
        //Test 1
        int want = 231;
        int got =  MinimumASCIIDeleteSumForTwoStrings.minimumDeleteSum( "sea", "eat" );
        assertEquals(want, got);
        //Test 2
        want = 403;
        got =  MinimumASCIIDeleteSumForTwoStrings.minimumDeleteSum( "delete", "leet" );
        assertEquals(want, got);
	}

}
