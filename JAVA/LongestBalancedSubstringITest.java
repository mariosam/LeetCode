/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class LongestBalancedSubstringITest {

    @Test
	public void testLongestArithmeticSubsequence() throws Exception {
        //Test 1
        int want = 4;
        int got = LongestBalancedSubstringI.longestBalanced( "abbac" );
        assertEquals(want, got);
        //Test 2
        want = 4;
        got = LongestBalancedSubstringI.longestBalanced( "zzabccy" );
        assertEquals(want, got);
        //Test 3
        want = 2;
        got = LongestBalancedSubstringI.longestBalanced( "aba" );
        assertEquals(want, got);
	}

}
