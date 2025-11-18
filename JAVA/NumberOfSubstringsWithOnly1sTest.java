/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class NumberOfSubstringsWithOnly1sTest {

    @Test
	public void testNumberOfSubstringsWithOnly1s() throws Exception {
        //Test 1
        int want = 9;
        int got = NumberOfSubstringsWithOnly1s.numSub( "0110111" );
        assertEquals(want, got);
        //Test 2
        want = 2;
        got = NumberOfSubstringsWithOnly1s.numSub( "101" );
        assertEquals(want, got);
        //Test 3
        want = 21;
        got = NumberOfSubstringsWithOnly1s.numSub( "111111" );
        assertEquals(want, got);
	}

}
