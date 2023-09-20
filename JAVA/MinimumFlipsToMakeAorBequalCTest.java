/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class MinimumFlipsToMakeAorBequalCTest {

    @Test
	public void testMinimumFlipsToMakeAorBequalC() throws Exception {
        //Test 1
        int want = 3;
        int got = MinimumFlipsToMakeAorBequalC.minFlips( 2, 6, 5 );
        assertEquals(want, got);
        //Test 2
        want = 1;
        got = MinimumFlipsToMakeAorBequalC.minFlips( 4, 2, 7 );
        assertEquals(want, got);
        //Test 3
        want = 0;
        got = MinimumFlipsToMakeAorBequalC.minFlips( 1, 2, 3 );
        assertEquals(want, got);
	}

}
