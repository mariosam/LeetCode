/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class FindTheLengthOfTheLongestCommonPrefixTest {

    @Test
	public void testFindTheLengthOfTheLongestCommonPrefix() throws Exception {
        //Test 1
        int want = 3;
        int got = FindTheLengthOfTheLongestCommonPrefix.longestCommonPrefix( new int[]{1,10,100}, new int[]{1000} );
        assertEquals(want, got);
        //Test 2
        want = 0;
        got = FindTheLengthOfTheLongestCommonPrefix.longestCommonPrefix( new int[]{1,2,3}, new int[]{4,4,4} );
        assertEquals(want, got);
	}

}
