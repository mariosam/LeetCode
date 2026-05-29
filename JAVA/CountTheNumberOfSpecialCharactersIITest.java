/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class CountTheNumberOfSpecialCharactersIITest {

    @Test
	public void testCountTheNumberOfSpecialCharactersII() throws Exception {
        //Test 1
        long want =  3;
        long got = CountTheNumberOfSpecialCharactersII.numberOfSpecialChars("aaAbcBC");
        assertEquals(want, got);
        //Test 2
        want =  0;
        got = CountTheNumberOfSpecialCharactersII.numberOfSpecialChars("abc");
        assertEquals(want, got);
        //Test 3
        want =  0;
        got = CountTheNumberOfSpecialCharactersII.numberOfSpecialChars("AbBCab");
        assertEquals(want, got);
	}

}
