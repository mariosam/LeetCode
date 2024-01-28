/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class LongestCommonSubsequenceTest {

    @Test
	public void testLongestCommonSubsequence() throws Exception {
        //Test 1
        int want = 3;
        int got = LongestCommonSubsequence.longestCommonSubsequence( "abcde", "ace" );
        assertEquals(want, got);
        //Test 2
        want = 3;
        got = LongestCommonSubsequence.longestCommonSubsequence( "abc", "abc" );
        assertEquals(want, got);
        //Test 3
        want = 0;
        got = LongestCommonSubsequence.longestCommonSubsequence( "abc", "def" );
        assertEquals(want, got);
	}

}
