/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class FindThePivotIntegerTest {

    @Test
	public void testFindThePivotInteger() throws Exception {
        //Test 1
        int want = 6;
        int got = FindThePivotInteger.pivotInteger( 8 );
        assertEquals(want, got);
        //Test 2
        want = 1;
        got = FindThePivotInteger.pivotInteger( 1 );
        assertEquals(want, got);
        //Test 3
        want = -1;
        got = FindThePivotInteger.pivotInteger( 4 );
        assertEquals(want, got);
	}

}
