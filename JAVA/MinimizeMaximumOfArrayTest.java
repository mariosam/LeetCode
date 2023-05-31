/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class MinimizeMaximumOfArrayTest {

    @Test
	public void testMinimizeMaximumOfArray() throws Exception {
        //Test 1
        int want = 5;
        int got =  MinimizeMaximumOfArray.minimizeArrayValue( new int[]{3,7,1,6} );
        assertEquals(want, got);
        //Test 2
        want = 10;
        got =  MinimizeMaximumOfArray.minimizeArrayValue( new int[]{10,1} );
        assertEquals(want, got);
	}

}
