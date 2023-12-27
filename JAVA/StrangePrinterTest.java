/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class StrangePrinterTest {

    @Test
	public void testStrangePrinter() throws Exception {
        //Test 1
        int want = 2;
        int got = StrangePrinter.strangePrinter( "aaabbb" );
        assertEquals(want, got);
        //Test 2
        want = 2;
        got = StrangePrinter.strangePrinter( "aba" );
        assertEquals(want, got);
	}

}
