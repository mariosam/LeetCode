/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class MinimumNumberOfSwapsToMakeTheStringBalancedTest {

    @Test
	public void testMinimumNumberOfSwapsToMakeTheStringBalanced() throws Exception {
        //Test 1
        int want = 1;
        int got =  MinimumNumberOfSwapsToMakeTheStringBalanced.minSwaps( "][][" );
        assertEquals(want, got);
        //Test 2
        want = 2;
        got =  MinimumNumberOfSwapsToMakeTheStringBalanced.minSwaps( "]]][[[" );
        assertEquals(want, got);
        //Test 3
        want = 0;
        got =  MinimumNumberOfSwapsToMakeTheStringBalanced.minSwaps( "[]" );
        assertEquals(want, got);
	}

}
