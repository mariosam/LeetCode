/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class ValidPalindromeTest {

    @Test
	public void testValidPalindrome() throws Exception {
        //Test 1
        boolean want = true;
        boolean got = ValidPalindrome.isPalindrome( "A man, a plan, a canal: Panama" );
        assertEquals(want, got);
        //Test 2
        want = false;
        got = ValidPalindrome.isPalindrome( "race a car" );
        assertEquals(want, got);
        //Test 3
        want = true;
        got = ValidPalindrome.isPalindrome( " " );
        assertEquals(want, got);
        //Test 4
        want = true;
        got = ValidPalindrome.isPalindrome( "A man, a plan, a canal -- Panama" );
        assertEquals(want, got);
        //Test 5
        want = false;
        got = ValidPalindrome.isPalindrome( "0P" );
        assertEquals(want, got);
	}

}
