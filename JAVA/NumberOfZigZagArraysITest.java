/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class NumberOfZigZagArraysITest {

    @Test
	public void testNumberOfZigZagArraysI() throws Exception {
        //Test 1
        int want = 2;
        int got = NumberOfZigZagArraysI.zigZagArrays(3, 4, 5);
        assertEquals(want, got);
        //Test 2
        want = 10;
        got = NumberOfZigZagArraysI.zigZagArrays(3, 1, 3);
        assertEquals(want, got);
	}

}
