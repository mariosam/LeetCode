/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;

import org.junit.Test;

public class SpecialBinaryStringTest {

    @Test
	public void testSpecialBinaryString() throws Exception {
        //Test 1
        String want = "11100100";
        String got = SpecialBinaryString.makeLargestSpecial("11011000");
        assertEquals(want, got);
        //Test 2
        want = "10";
        got = SpecialBinaryString.makeLargestSpecial("10");
        assertEquals(want, got);
	}

}
