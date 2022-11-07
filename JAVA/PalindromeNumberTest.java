/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class PalindromeNumberTest {

    @Test
	public void testPalindromeNumber() throws Exception {
        //Test 1
        boolean want = true;
        boolean got = PalindromeNumber.isPalindrome( 121 );
        assertEquals(want, got);
        //Test 2
        want = false;
        got = PalindromeNumber.isPalindrome( -121 );
        assertEquals(want, got);
        //Test 3
        want = false;
        got = PalindromeNumber.isPalindrome( 10 );
        assertEquals(want, got);
	}

}
