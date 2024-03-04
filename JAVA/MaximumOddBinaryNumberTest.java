/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class MaximumOddBinaryNumberTest {

    @Test
	public void testMaximumOddBinaryNumber() throws Exception {
        //Test 1
        String want = "001";
        String got = MaximumOddBinaryNumber.maximumOddBinaryNumber( "010" );
        assertEquals(want, got);
        //Test 2
        want = "1001";
        got = MaximumOddBinaryNumber.maximumOddBinaryNumber( "0101" );
        assertEquals(want, got);
	}

}
