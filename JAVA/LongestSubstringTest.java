/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class LongestSubstringTest {

    @Test
	public void testLongestSubstring() throws Exception {
        //Test 1
        int want = 3;
        int got = LongestSubstring.lengthOfLongestSubstring( "dvdf" );
        assertEquals(want, got);
        //Test 2
        want = 1;
        got = LongestSubstring.lengthOfLongestSubstring( "bbbbb" );
        assertEquals(want, got);
        //Test 3
        want = 3;
        got = LongestSubstring.lengthOfLongestSubstring( "pwwkew" );
        assertEquals(want, got);
        //Test 4
        want = 3;
        got = LongestSubstring.lengthOfLongestSubstring( "abcabcbb" );
        assertEquals(want, got);
        //Test 5
        want = 2;
        got = LongestSubstring.lengthOfLongestSubstring( "abba" );
        assertEquals(want, got);
        //Test 6
        want = 3;
        got = LongestSubstring.lengthOfLongestSubstring( "abccb" );
        assertEquals(want, got);
        //Test 7
        want = 3;
        got = LongestSubstring.lengthOfLongestSubstring( "abccba" );
        assertEquals(want, got);
        //Test 8
        want = 6;
        got = LongestSubstring.lengthOfLongestSubstring( "professor" );
        assertEquals(want, got);
        //Test 9
        want = 11;
        got = LongestSubstring.lengthOfLongestSubstring( "salmonserbic" );
        assertEquals(want, got);
        //Test 10
        want = 7;
        got = LongestSubstring.lengthOfLongestSubstring( "salmonsalmosalmonella" );
        assertEquals(want, got);
	}

}
