/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class MinimumOperationsToMakeTheIntegerZeroTest {

    @Test
	public void testMinimumOperationsToMakeTheIntegerZero() throws Exception {
        //Test 1
        int want = 3;
        int got =  MinimumOperationsToMakeTheIntegerZero.makeTheIntegerZero( 3, -2 );
        assertEquals(want, got);
        //Test 2
        want = -1;
        got =  MinimumOperationsToMakeTheIntegerZero.makeTheIntegerZero( 5, 7 );
        assertEquals(want, got);
	}

}
