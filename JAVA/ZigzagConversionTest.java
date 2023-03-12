/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class ZigzagConversionTest {

    @Test
	public void testZigzagConversion() throws Exception {
        //Test 1
        String want = "PAHNAPLSIIGYIR";
        String got = ZigzagConversion.convert( "PAYPALISHIRING", 3 );
        assertEquals(want, got);
        //Test 2
        want = "PINALSIGYAHRPI";
        got = ZigzagConversion.convert( "PAYPALISHIRING", 4 );
        assertEquals(want, got);
        //Test 3
        want = "A";
        got = ZigzagConversion.convert( "A", 1 );
        assertEquals(want, got);
	}

}
