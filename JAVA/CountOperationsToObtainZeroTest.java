/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class CountOperationsToObtainZeroTest {

    @Test
	public void testCountOperationsToObtainZero() throws Exception {
        //Test 1
        int want = 3;
        int got = CountOperationsToObtainZero.countOperations( 2, 3 );
        assertEquals(want, got);
        //Test 2
        want = 1;
        got = CountOperationsToObtainZero.countOperations( 10, 10 );
        assertEquals(want, got);
	}

}
