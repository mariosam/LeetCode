/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class RomanToIntegerTest {

    @Test
	public void testRomanToInteger() throws Exception {
        //Test 1
        int want = 3;
        int got = RomanToInteger.romanToInt( "III" );
        assertEquals(want, got);
        //Test 2
        want = 58;
        got = RomanToInteger.romanToInt( "LVIII" );
        assertEquals(want, got);
        //Test 3
        want = 1994;
        got = RomanToInteger.romanToInt( "MCMXCIV" );
        assertEquals(want, got);
	}

}
